<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: application/xml; charset=utf-8');
$base = SITE_DOMAIN;
$lastmod = date('c');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo htmlspecialchars($base . '/'); ?></loc>
        <lastmod><?php echo htmlspecialchars($lastmod); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1.0</priority>
    </url>
</urlset>
