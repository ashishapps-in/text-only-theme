<?php
/**
 * Main blog index and fallback template.
 *
 * @package TextrimInspired
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('template-parts/content', 'list');
get_footer();
