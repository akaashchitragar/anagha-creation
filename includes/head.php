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
    <link href="assets/css/custom.css?v=<?php echo filemtime(__DIR__ . '/../assets/css/custom.css'); ?>" rel="stylesheet"/>
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
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "What services does Anagha Creation offer?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "We specialise in designer blouses, bridal ghagras (lehengas), kurtis and chudidar tops, nau vari (nine-yard sarees), kids ethnic wear, and expert alterations. Every garment is custom-made to your measurements and style preferences."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Where is Anagha Creation located?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Our boutique is located in Rajarampuri, Kolhapur, Maharashtra, India. You can reach us directly on WhatsApp at +91 80108 70124."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How do I place a custom order?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Simply reach out to us via WhatsApp or call us at +91 80108 70124. Share your design idea, fabric preference, and measurements. We'll discuss the details, provide a quote, and begin crafting your outfit once confirmed."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "How long does it take to complete a custom outfit?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Turnaround time depends on the complexity of the design. A designer blouse typically takes 7–10 days, while bridal ghagras and heavily embroidered outfits may take 3–4 weeks. We recommend placing orders well in advance for weddings and festivals."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you provide fabric or should I bring my own?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Both options are available. You can bring your own fabric, or we can source premium fabrics for you based on your design and budget. We work with silks, velvets, georgettes, cottons, and more."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Do you offer alterations for existing garments?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Yes, we offer expert fitting and alterations for blouses, sarees, kurtis, and other outfits. Whether it's resizing, hemming, or modifying the design, we ensure a perfect fit every time."
                        }
                    }
                ]
            }
        ]
    }
    </script>
</head>
<body class="theme-font bg-blush text-slate-900">
