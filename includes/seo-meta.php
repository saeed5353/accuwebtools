<?php
/**
 * Open Graph and Twitter/X card meta tags.
 *
 * Set before including:
 *   $seoTitle       - page title
 *   $seoDescription - meta description
 *   $seoUrl         - canonical page URL
 *
 * Optional:
 *   $seoImage       - absolute or site-relative image URL (default: /assets/img/og-image.png)
 *   $seoType        - og:type (default: website; use "article" for blog posts)
 *   $seoTwitterSite - e.g. "@AccuWebTools"
 */

if (empty($seoTitle) || empty($seoDescription) || empty($seoUrl)) {
    return;
}

$siteBaseUrl = 'https://accuwebtools.com';
$seoImage = $seoImage ?? $siteBaseUrl . '/assets/img/og-image.png';
$seoType = $seoType ?? 'website';

if (!preg_match('#^https?://#i', $seoImage)) {
    $seoImage = $siteBaseUrl . '/' . ltrim($seoImage, '/');
}

$seoEscape = static function ($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?>
<!-- Open Graph -->
<meta property="og:title" content="<?php echo $seoEscape($seoTitle); ?>">
<meta property="og:description" content="<?php echo $seoEscape($seoDescription); ?>">
<meta property="og:type" content="<?php echo $seoEscape($seoType); ?>">
<meta property="og:url" content="<?php echo $seoEscape($seoUrl); ?>">
<meta property="og:image" content="<?php echo $seoEscape($seoImage); ?>">
<meta property="og:site_name" content="AccuWebTools">

<!-- Twitter / X Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $seoEscape($seoTitle); ?>">
<meta name="twitter:description" content="<?php echo $seoEscape($seoDescription); ?>">
<meta name="twitter:image" content="<?php echo $seoEscape($seoImage); ?>">
<?php if (!empty($seoTwitterSite)) : ?>
<meta name="twitter:site" content="<?php echo $seoEscape($seoTwitterSite); ?>">
<?php endif; ?>
