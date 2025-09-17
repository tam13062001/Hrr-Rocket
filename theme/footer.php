<div class="py-[50px] lg:py-[100px] bg-darkslategray-100 text-white">
  <div class="container mx-auto px-4 lg:px-0">
    <div class="flex lg:space-x-5 mb-[20px] lg:mb-[40px]">
      <div class="w-full lg:w-1/2">
        <div class="flex mb-[35px] justify-center lg:justify-start">
          <img class="" alt="" src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo2.png' ?>" />
        </div>

        <div class="text-center font-exo lg:hidden py-[40px] border-b mb-[28px]">
          <?php
          $menuLocations = get_nav_menu_locations();
          $menuID = $menuLocations['footer-menu'];
          $topNav = wp_get_nav_menu_items($menuID);
          foreach ( $topNav as $navItem ) {?>
            <a class="block text-[16px] leading-[32px]" href="<?php echo $navItem->url; ?>">
              <?php echo $navItem->title; ?>
            </a>
          <?php } ?>
        </div>
      </div>
      <div class="hidden lg:block w-1/2 font-exo">
        <div class="grid grid-cols-2 gap-2">
          <?php
          $menuLocations = get_nav_menu_locations();
          $menuID = $menuLocations['footer-menu'];
          $topNav = wp_get_nav_menu_items($menuID);
          foreach ( $topNav as $navItem ) {?>
            <a class="" href="<?php echo $navItem->url; ?>">
              <?php echo $navItem->title; ?>
            </a>
          <?php } ?>
        </div>
      </div>
    </div>

    <div class="w-full text-center flex flex-col justify-center items-center">
      <div class="w-[626px] flex flex-row items-start justify-center py-0 px-5 box-border max-w-full mb-5">
          <?php
            $instagram_url = get_theme_mod('instagram_url') ?? '#';
            $tiktok_url = get_theme_mod('tiktok_url') ?? '#';
            $youtube_url = get_theme_mod('youtube_url') ?? '#';
            $facebook_url = get_theme_mod('facebook_url') ?? '#';
          ?>
          <div class="space-x-6">
              <a href="<?php echo $instagram_url ?>" target="_blank">
                  <i class="fa-2x fa-brands fa-instagram"></i>
              </a>
              <a href="<?php echo $tiktok_url ?>" target="_blank">
                  <i class="fa-2x fa-brands fa-tiktok"></i>
              </a>
              <a href="<?php echo $facebook_url ?>" target="_blank">
                  <i class="fa-2x fa-brands fa-facebook"></i>
              </a>
              <a href="<?php echo $youtube_url ?>" target="_blank">
                  <i class="fa-2x fa-brands fa-youtube"></i>
              </a>
          </div>
      </div>
      <div class="lg:w-[626px] flex flex-row items-start justify-center py-0 px-5 box-border max-w-full text-sm">
        <div class="w-[388px] lg:w-[444px] flex flex-col items-center max-w-full">
          <div class="self-stretch relative font-light">
              Copyright © 2025
          </div>
          <div>Designed by <span class="underline">Rocket Digital</span> </div>
          <div class="">
              <a href="#">Chính sách bảo mật</a> |
              <a href="#">Điểu khoản & Điều kiện</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>

</html>