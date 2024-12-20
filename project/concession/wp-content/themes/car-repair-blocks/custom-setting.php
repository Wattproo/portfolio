<?php 

function car_repair_blocks_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'car-repair-blocks-theme-settings', // Menu slug
        'car_repair_blocks_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'car_repair_blocks_add_admin_menu' );

function car_repair_blocks_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'car-repair-blocks' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'car_repair_blocks_settings_group' );
            do_settings_sections( 'car-repair-blocks-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function car_repair_blocks_register_settings() {
    register_setting( 'car_repair_blocks_settings_group', 'car_repair_blocks_enable_animations' );

    add_settings_section(
        'car_repair_blocks_settings_section',
        __( 'Animation Settings', 'car-repair-blocks' ),
        null,
        'car-repair-blocks-theme-settings'
    );

    add_settings_field(
        'car_repair_blocks_enable_animations',
        __( 'Enable Animations', 'car-repair-blocks' ),
        'car_repair_blocks_enable_animations_callback',
        'car-repair-blocks-theme-settings',
        'car_repair_blocks_settings_section'
    );
}
add_action( 'admin_init', 'car_repair_blocks_register_settings' );

function car_repair_blocks_enable_animations_callback() {
    $checked = get_option( 'car_repair_blocks_enable_animations', true );
    ?>
    <input type="checkbox" name="car_repair_blocks_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

