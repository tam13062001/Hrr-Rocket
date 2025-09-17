<?php
namespace Rocket;

use includes\AdminLoader;
use includes\PortalLoader;

class Rocket {
    public string $name;
    public string $version;
    public Registry $loader;
    public bool $development_mode;

    public function __construct(array $options) {
        $this->version = $options['version'];
        $this->name = $options['name'];;
        $this->development_mode = $options['development_mode'];
        $this->loader = new Registry();
    }

    private function load_dependencies(): void {
        $this->load_admin();
        $this->load_public();
        $this->load_parent_theme();
    }

    private function load_admin() {
        $admin = new AdminLoader();

        $this->loader->add_action('admin_enqueue_scripts', $admin, 'enqueue_styles');
        $this->loader->add_action('admin_enqueue_scripts', $admin, 'enqueue_scripts');
        $this->loader->add_action('after_setup_theme', $admin, 'add_theme_support');
// $theme->loader->add_action('widgets_init', $admin, 'register_widget_areas');

        $this->loader->add_filter('block_categories_all', $admin, 'add_block_category');
        $this->loader->add_action('init', $admin, 'load_blocks');

        $this->loader->add_action('init', $admin, 'add_menus');

        $this->loader->add_action('add_meta_boxes', $admin, 'add_page_meta');
        $this->loader->add_action('save_post', $admin, 'save_post_meta', 1, 2);

        add_action('admin_menu', function () {
            $svg = '<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="black" d="M17.6 8.5h-7.5v3h4.4c-.4 2.1-2.3 3.5-4.4 3.4-2.6-.1-4.6-2.1-4.7-4.7-.1-2.7 2-5 4.7-5.1 1.1 0 2.2.4 3.1 1.2l2.3-2.2C14.1 2.7 12.1 2 10.2 2c-4.4 0-8 3.6-8 8s3.6 8 8 8c4.6 0 7.7-3.2 7.7-7.8-.1-.6-.1-1.1-.3-1.7z" fillrule="evenodd" cliprule="evenodd"></path></svg>';
            add_menu_page(
                'App',
                'App Config',
                'manage_options',
                'app',
                function() {
                    echo '<div class="root"></div>';
                },
                "data:image/svg+xml;base64,".base64_encode($svg),
                2
            );
        });
    }

    private function load_public() {
        $public = new PortalLoader();

        $this->loader->add_action('wp_enqueue_scripts', $public, 'enqueue_styles');
        $this->loader->add_action('wp_enqueue_scripts', $public, 'enqueue_scripts');

        $this->loader->add_action('rest_api_init', $public, 'register_rest_api');
    }

    private function load_parent_theme()
    {
        if (is_child_theme()) {
            function enqueue_parent_styles() {
//      wp_enqueue_style( 'parent-type', get_template_directory_uri() . '/style.css' );
            }
            add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles');
        }
    }

    public function load() {
        $this->load_dependencies();
        $this->loader->run();
    }
}