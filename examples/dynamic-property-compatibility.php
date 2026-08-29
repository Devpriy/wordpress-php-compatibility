<?php
/**
 * WordPress PHP 8.2+ Dynamic Property Compatibility Example
 *
 * Demonstrates the recommended approach for declaring
 * properties explicitly instead of relying on dynamic properties.
 */

class Example_WordPress_Component {

    /**
     * Explicitly declared property.
     *
     * @var array
     */
    private array $categories = [];

    /**
     * Set categories.
     *
     * @param array $categories Category data.
     */
    public function set_categories( array $categories ): void {
        $this->categories = $categories;
    }

    /**
     * Get categories.
     *
     * @return array
     */
    public function get_categories(): array {
        return $this->categories;
    }
}

// Example usage.
$component = new Example_WordPress_Component();

$component->set_categories(
    [
        'WordPress',
        'PHP',
        'Development',
    ]
);

print_r( $component->get_categories() );
