<?php
/**
 * Plugin Name: AEspejo external links (demo)
 * Description: Adjusts the Dental and Dentist WDA theme output for the AEspejo demo:
 *              - drops the theme's hardcoded wordpress.org footer link (keeps its text);
 *              - places a "Staff login" button next to the header action button, side by side,
 *                which the theme only renders once. The parent theme's files are not changed.
 */

if (!defined('ABSPATH')) {
    exit;
}

const AESPEJO_LOGIN_URL = 'https://blue-forest-0df195910.7.azurestaticapps.net/login';

add_action('template_redirect', function (): void {
    ob_start(function (string $html): string {
        // Footer credit: keep the text, drop the link.
        $html = preg_replace(
            '#<a target="_blank" title="WordPress Dental and Dentist Theme" href="https://wordpress\.org/themes/dental-and-dentist-wda">(.*?)</a>#s',
            '$1',
            $html
        ) ?? $html;

        // Header: put the booking and login buttons in one row, with a gap, in each header copy.
        $html = preg_replace_callback(
            '#<a href="(https://blue-forest-0df195910\.7\.azurestaticapps\.net/book)"><div class="([^"]*wpdevart-header-action-button[^"]*)">(.*?)</div></a>#s',
            fn(array $m): string => '<div class="aespejo-header-actions" style="display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:12px;">'
                . '<a href="' . $m[1] . '" target="_blank" rel="noopener noreferrer"><div class="' . $m[2] . '">' . $m[3] . '</div></a>'
                . '<a href="' . AESPEJO_LOGIN_URL . '" target="_blank" rel="noopener noreferrer"><div class="' . $m[2] . '">' . esc_html__('Login', 'aespejo-clinic') . '</div></a>'
                . '</div>',
            $html
        ) ?? $html;

        return $html;
    });
});
