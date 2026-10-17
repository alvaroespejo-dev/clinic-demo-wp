<?php
/**
 * Plugin Name: AEspejo palette (demo)
 * Description: Re-colors the Dental and Dentist WDA theme with the AEspejo.Clinic landing palette.
 *              The theme's stylesheet hardcodes its blue, so this loads a copy with the same colors replaced.
 *              The parent theme's files are not changed.
 */

if (!defined('ABSPATH')) {
    exit;
}

const AESPEJO_PALETTE_HANDLE = 'wpdevart_dental_and_dentist_wda_styles';

/** Template hex (lower case) => AEspejo landing hex (from LandingPage.css). */
function aespejo_palette_map(): array
{
    return [
        '#1260f3' => '#0d7774', // primary blue  -> teal
        '#00bcd3' => '#0d7774', // accent cyan   -> teal
        '#00bcd1' => '#075351', // accent hover  -> teal dark
        '#1e1e1e' => '#12252c', // headings      -> ink
        '#5c5a5a' => '#617279', // body text     -> muted
        '#f7f7f7' => '#fbfaf7', // light section -> paper
        '#edf7fb' => '#f5f4ef', // light panel   -> cream
        '#dbe8fb' => '#dcefeb', // hero          -> mint
    ];
}

/**
 * Writes the recolored copy into uploads and returns its URL.
 * Regenerates only when the parent stylesheet is newer than the copy.
 */
function aespejo_palette_build(): ?string
{
    $source = get_template_directory() . '/assets/css/front-end/index.css';
    if (!is_readable($source)) {
        return null;
    }

    $upload = wp_upload_dir();
    $dir = trailingslashit($upload['basedir']) . 'aespejo-palette';
    $file = $dir . '/index.css';

    if (!is_file($file) || filemtime($file) < filemtime($source)) {
        wp_mkdir_p($dir);
        $css = (string) file_get_contents($source);
        $css = strtr($css, aespejo_palette_map());
        // Relative image paths resolve from the original stylesheet folder; keep them pointing there.
        $css = str_replace('url(images/', 'url(' . trailingslashit(get_template_directory_uri()) . 'assets/css/front-end/images/', $css);
        file_put_contents($file, $css);
    }

    return trailingslashit($upload['baseurl']) . 'aespejo-palette/index.css?v=' . filemtime($file);
}

add_action('wp_enqueue_scripts', function (): void {
    $url = aespejo_palette_build();
    if ($url === null) {
        return;
    }
    wp_deregister_style(AESPEJO_PALETTE_HANDLE);
    wp_register_style(AESPEJO_PALETTE_HANDLE, $url, [], null);
    wp_enqueue_style(AESPEJO_PALETTE_HANDLE);
}, 100);
