<?php
/**
 * Plugin Name: AEspejo page design (demo)
 * Description: Styles and scroll animations for the demo clinic pages. Only applies to pages that use
 *              the "aespejo-page" wrapper. The parent theme's files are not changed.
 */

if (!defined('ABSPATH')) {
    exit;
}

function aespejo_design_is_demo_page(): bool
{
    return is_page(['about-us', 'services', 'our-team', 'patient-reviews', 'faq', 'contact']);
}

add_action('wp_head', function (): void {
    if (!aespejo_design_is_demo_page()) {
        return;
    }
    ?>
    <style id="aespejo-design">
    .aespejo-page { color:#12252c; line-height:1.7; }
    .aespejo-page * { box-sizing:border-box; }
    .aespejo-page h2 { color:#12252c; }
    .aespejo-hero { position:relative; display:grid; grid-template-columns:1fr 1fr; gap:0; min-height:420px; overflow:hidden; border-radius:18px; margin:0 0 56px; background:#dcefeb; }
    .aespejo-hero__img { overflow:hidden; }
    .aespejo-hero__img img { width:100%; height:100%; object-fit:cover; display:block; transform:scale(1.06); animation:aespejo-zoom 14s ease-out forwards; }
    .aespejo-hero__text { padding:56px 48px; display:flex; flex-direction:column; justify-content:center; }
    .aespejo-eyebrow { color:#0d7774; font-size:12px; font-weight:700; letter-spacing:.16em; text-transform:uppercase; margin:0 0 12px; }
    .aespejo-hero h2 { font-size:clamp(30px,3.6vw,46px); line-height:1.1; margin:0 0 18px; }
    .aespejo-hero p { color:#617279; margin:0 0 24px; max-width:520px; }
    .aespejo-btn { display:inline-block; align-self:flex-start; background:#0d7774; color:#fff !important; padding:13px 26px; border-radius:999px; text-decoration:none; font-weight:600; transition:transform .25s, background .25s, box-shadow .25s; }
    .aespejo-page a.aespejo-btn { text-decoration:none !important; }
    .aespejo-btn:hover { background:#075351; transform:translateY(-2px); box-shadow:0 10px 24px rgba(7,83,81,.25); }
    .aespejo-section { margin:0 0 56px; }
    .aespejo-section > h2 { text-align:center; font-size:clamp(26px,3vw,36px); margin:0 0 10px; }
    .aespejo-section > .aespejo-lead { text-align:center; color:#617279; max-width:640px; margin:0 auto 34px; }
    .aespejo-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:22px; }
    .aespejo-card { background:#fff; border:1px solid #dce5e1; border-radius:16px; overflow:hidden; transition:transform .3s, box-shadow .3s; display:flex; flex-direction:column; }
    .aespejo-card:hover { transform:translateY(-6px); box-shadow:0 18px 36px rgba(18,37,44,.10); }
    .aespejo-card__img { height:170px; overflow:hidden; background:#f5f4ef; }
    .aespejo-card__img img { width:100%; height:100%; object-fit:cover; display:block; transition:transform .5s; }
    .aespejo-card:hover .aespejo-card__img img { transform:scale(1.08); }
    .aespejo-card__body { padding:20px 22px 24px; }
    .aespejo-card h3 { font-size:18px; margin:0 0 8px; color:#0d7774; }
    .aespejo-card p { margin:0; color:#617279; font-size:15px; }
    .aespejo-badge { width:44px; height:44px; border-radius:12px; background:#dcefeb; color:#0d7774; display:grid; place-items:center; font-weight:700; margin-bottom:14px; }
    .aespejo-avatar { width:92px; height:92px; border-radius:50%; background:linear-gradient(135deg,#0d7774,#69baa9); color:#fff; display:grid; place-items:center; font-size:30px; font-weight:700; margin:0 auto 14px; }
    .aespejo-stars { color:#e0a526; letter-spacing:3px; font-size:18px; margin-bottom:10px; }
    .aespejo-quote { font-size:17px; font-style:italic; color:#12252c; }
    .aespejo-who { font-size:14px; color:#617279; margin-top:14px; }
    .aespejo-center { text-align:center; }
    .aespejo-note { display:inline-block; background:#f5f4ef; color:#617279; font-size:13px; padding:6px 12px; border-radius:999px; margin-bottom:18px; }
    .aespejo-faq details { background:#fff; border:1px solid #dce5e1; border-radius:14px; padding:18px 22px; margin:0 0 14px; transition:box-shadow .25s; }
    .aespejo-faq details[open] { box-shadow:0 10px 26px rgba(18,37,44,.08); }
    .aespejo-faq summary { cursor:pointer; font-weight:700; color:#12252c; list-style:none; display:flex; justify-content:space-between; align-items:center; }
    .aespejo-faq summary::after { content:'+'; color:#0d7774; font-size:22px; line-height:1; transition:transform .25s; }
    .aespejo-faq details[open] summary::after { transform:rotate(45deg); }
    .aespejo-faq details p { color:#617279; margin:12px 0 0; }
    .aespejo-info { display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:22px; }
    .aespejo-info > div { background:#f5f4ef; border-radius:16px; padding:26px; }
    .aespejo-info h3 { margin:0 0 10px; color:#0d7774; font-size:18px; }
    .aespejo-info ul { margin:0; padding-left:18px; color:#617279; }
    .aespejo-reveal { opacity:0; transform:translateY(26px); transition:opacity .8s ease, transform .8s ease; transition-delay:var(--d,0s); }
    .aespejo-reveal.is-visible { opacity:1; transform:none; }
    @keyframes aespejo-zoom { from { transform:scale(1.12); } to { transform:scale(1); } }
    @media (max-width:781px) { .aespejo-hero { grid-template-columns:1fr; } .aespejo-hero__img { height:240px; } .aespejo-hero__text { padding:32px 24px; } }
    @media (prefers-reduced-motion:reduce) { .aespejo-reveal { opacity:1; transform:none; transition:none; } .aespejo-hero__img img { animation:none; transform:none; } .aespejo-card, .aespejo-btn { transition:none; } }
    </style>
    <?php
}, 20);

add_action('wp_footer', function (): void {
    if (!aespejo_design_is_demo_page()) {
        return;
    }
    ?>
    <script id="aespejo-design-js">
    (function () {
        var items = document.querySelectorAll('.aespejo-page .aespejo-reveal');
        if (!('IntersectionObserver' in window)) {
            items.forEach(function (el) { el.classList.add('is-visible'); });
            return;
        }
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        items.forEach(function (el) { io.observe(el); });
    })();
    </script>
    <?php
}, 20);
