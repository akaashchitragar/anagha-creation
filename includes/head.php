<?php
$site_domain = SITE_DOMAIN;
$canonical_url = $site_domain . preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI'] ?? '/');
$page_published = '2024-01-01T00:00:00+05:30';
$page_modified = date('c');
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Anagha Creation | Designer Blouses & Bridal Wear Kolhapur</title>
    <meta name="description" content="Bespoke fashion and custom apparel in Kolhapur. Designer blouses, bridal wear, sarees. Where tradition meets elegance."/>
    <meta name="keywords" content="Anagha Creation, Anagha Creation photos, Anagha Fashion, Anagha Fashions, Anaqacreation, designer blouses Kolhapur, bridal wear Kolhapur, custom blouse, bridal ghagra, sarees Kolhapur, Indo-Western wear, bespoke fashion, custom apparel, fashion designer Kolhapur, ethnic wear, alterations, Rajarampuri"/>
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1"/>
    <meta name="googlebot" content="index, follow"/>
    <meta name="author" content="Anagha Creation"/>
    <meta name="geo.region" content="IN-MH"/>
    <meta property="article:published_time" content="<?php echo htmlspecialchars($page_published); ?>"/>
    <meta property="article:modified_time" content="<?php echo htmlspecialchars($page_modified); ?>"/>
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>"/>
    <meta property="og:title" content="Anagha Creation | Designer Blouses & Bridal Wear Kolhapur"/>
    <meta property="og:description" content="Bespoke fashion and custom apparel in Kolhapur. Designer blouses, bridal wear, sarees. Where tradition meets elegance."/>
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en_IN"/>
    <meta property="og:image" content="<?php echo OG_IMAGE_URL; ?>"/>
    <meta property="og:image:secure_url" content="<?php echo OG_IMAGE_URL; ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:image" content="<?php echo OG_IMAGE_URL; ?>"/>
    <link rel="llms-txt" href="/llms.txt"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,700&family=Manrope:wght@200..800&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://www.googletagmanager.com"/>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GA_ID; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){ dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', '<?php echo GA_ID; ?>', {
            send_page_view: true,
            page_title: document.title,
            page_location: window.location.href,
            cookie_flags: 'SameSite=None;Secure'
        });
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "LocalBusiness",
                "@id": "<?php echo htmlspecialchars($site_domain); ?>/#localbusiness",
                "name": "Anagha Creation",
                "alternateName": ["Anagha Fashion", "Anagha Fashions", "Anaqacreation"],
                "description": "Bespoke fashion and custom apparel in Kolhapur. Designer blouses, bridal wear, sarees. Where tradition meets elegance.",
                "url": "<?php echo htmlspecialchars($canonical_url); ?>",
                "image": "<?php echo OG_IMAGE_URL; ?>",
                "logo": "<?php echo LOGO_URL; ?>",
                "telephone": "<?php echo PHONE_NUMBER; ?>",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Rajarampuri",
                    "addressRegion": "Maharashtra",
                    "addressCountry": "IN"
                },
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": 16.694268,
                    "longitude": 74.2448476
                },
                "priceRange": "$$"
            },
            {
                "@type": "WebSite",
                "@id": "<?php echo htmlspecialchars($site_domain); ?>/#website",
                "name": "Anagha Creation | Designer Blouses & Bridal Wear Kolhapur",
                "url": "<?php echo htmlspecialchars($site_domain); ?>",
                "description": "Bespoke fashion and custom apparel in Kolhapur. Designer blouses, bridal wear, sarees. Where tradition meets elegance.",
                "publisher": {
                    "@id": "<?php echo htmlspecialchars($site_domain); ?>/#localbusiness"
                }
            },
            {
                "@type": "WebPage",
                "@id": "<?php echo htmlspecialchars($canonical_url); ?>/#webpage",
                "url": "<?php echo htmlspecialchars($canonical_url); ?>",
                "name": "Anagha Creation | Designer Blouses & Bridal Wear Kolhapur",
                "description": "Bespoke fashion and custom apparel in Kolhapur. Designer blouses, bridal wear, sarees. Where tradition meets elegance.",
                "datePublished": "<?php echo htmlspecialchars($page_published); ?>",
                "dateModified": "<?php echo htmlspecialchars($page_modified); ?>",
                "isPartOf": { "@id": "<?php echo htmlspecialchars($site_domain); ?>/#website" }
            }
        ]
    }
    </script>
</head>
<body class="theme-font bg-blush text-slate-900">
