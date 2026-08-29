<?php
/**
 * WordPress PHP Version Compatibility Check
 *
 * Demonstrates how to check the server PHP version
 * and display an admin warning when the version is too old.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Check the current PHP version.
 */
function devpriy_check_php_version(): void {

    $minimum_php_version = '8.1';
    $current_php_version = PHP_VERSION;

    if ( version_compare( $current_php_version, $minimum_php_version, '<' ) ) {
        add_action(
            'admin_notices',
            static function () use ( $current_php_version, $minimum_php_version ): void {
                ?>
                <div class="notice notice-warning">
                    <p>
                        <?php
                        printf(
                            'Your website is running PHP %1$s. PHP %2$s or newer is recommended for modern WordPress development.',
                            esc_html( $current_php_version ),
                            esc_html( $minimum_php_version )
                        );
                        ?>
                    </p>
                </div>
                <?php
            }
        );
    }
}

devpriy_check_php_version();
