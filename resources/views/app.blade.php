<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @class(['dark' => ($appearance ?? 'system') == 'dark'])>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

         <title>Invenode - Advanced Risk Management & Business Resilience Platform | Interconnected Risk Solutions</title>
        <meta name="description" content="Transform your risk management with Invenode's interconnected platform. Map dependencies, identify hidden vulnerabilities, and build resilient operations. Free demo available.">
        <meta name="keywords" content="risk management software, business continuity platform, operational resilience, risk assessment tools, dependency mapping, interconnected risk management">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="Invenode - Advanced Risk Management & Business Resilience Platform">
        <meta property="og:description" content="Discover hidden risks through interconnected dependency mapping. Build true operational resilience with Invenode's advanced risk management platform.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://invenode.com">
        <meta property="og:image" content="https://invenode.com/images/og-image.jpg">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Invenode - Advanced Risk Management Platform">
        <meta name="twitter:description" content="Transform risk management with interconnected dependency mapping and advanced resilience planning.">



        {{-- Inline script to detect system dark mode preference and apply it immediately --}}
        <script>
            (function() {
                const appearance = '{{ $appearance ?? "system" }}';

                if (appearance === 'system') {
                    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                    if (prefersDark) {
                        document.documentElement.classList.add('dark');
                    }
                }
            })();
        </script>

        {{-- <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "Invenode",
            "description": "Advanced risk management and business resilience platform with interconnected dependency mapping",
            "url": "https://invenode.com",
            "applicationCategory": "BusinessApplication",
            "operatingSystem": "Web-based",
            "offers": {
                "@type": "Offer",
                "priceCurrency": "GBP",
                "availability": "https://schema.org/InStock"
            },
            "provider": {
                "@type": "Organization",
                "name": "Invenode",
            "url": "https://invenode.com"
            }
        }
        </script> --}}

         <!-- Canonical URL -->
        <link rel="canonical" href="https://invenode.com">

        {{-- Inline style to set the HTML background color based on our theme in app.css --}}
        <style>
            html {
                background-color: oklch(1 0 0);
            }

            html.dark {
                background-color: oklch(0.145 0 0);
            }
        </style>
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @routes
        @vite(['resources/js/app.ts', "resources/js/pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
