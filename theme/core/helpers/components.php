<?php
function get_data_id() {
    return uniqid('data_');
}

function render_rocket_block(string $class_name, array $attributes) {
    $id = get_data_id();
    ?>
    <script id="<?php echo $id; ?>" type="application/json">
      <?php echo json_encode($attributes); ?>
    </script>
    <div class="<?php echo 'wp-block-rocket-'.$class_name; ?>" data-id="<?php echo $id; ?>"></div>
<?php }