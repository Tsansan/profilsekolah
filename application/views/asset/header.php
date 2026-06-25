<!doctype html>
<html class="light" lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>SMP Negeri 2 Sidoharjo - Unggul dalam Prestasi, Berkarakter dalam Budaya</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Montserrat:wght@100..900&amp;display=swap"
            rel="stylesheet"
        />
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "on-primary": "#ffffff",
                            "surface-tint": "#3755c3",
                            "on-secondary": "#ffffff",
                            tertiary: "#4c2e00",
                            "tertiary-container": "#6b4200",
                            "secondary-fixed": "#c9e6ff",
                            "on-secondary-fixed": "#001e2f",
                            "surface-bright": "#f8f9ff",
                            "on-primary-fixed": "#001453",
                            "primary-fixed": "#dde1ff",
                            "outline-variant": "#c4c5d5",
                            "tertiary-fixed-dim": "#ffb95f",
                            "surface-container-high": "#dce9ff",
                            primary: "#00288e",
                            secondary: "#006591",
                            "tertiary-fixed": "#ffddb8",
                            "on-secondary-fixed-variant": "#004c6e",
                            error: "#ba1a1a",
                            "inverse-on-surface": "#eaf1ff",
                            "surface-dim": "#cbdbf5",
                            "on-tertiary-container": "#ffa929",
                            "on-tertiary-fixed-variant": "#653e00",
                            "on-primary-container": "#a8b8ff",
                            "surface-container-lowest": "#ffffff",
                            "on-tertiary": "#ffffff",
                            "on-background": "#0b1c30",
                            "on-surface-variant": "#444653",
                            "inverse-surface": "#213145",
                            outline: "#757684",
                            surface: "#f8f9ff",
                            "secondary-fixed-dim": "#89ceff",
                            "inverse-primary": "#b8c4ff",
                            "on-tertiary-fixed": "#2a1700",
                            "surface-variant": "#d3e4fe",
                            "on-secondary-container": "#004666",
                            "on-error-container": "#93000a",
                            background: "#f8f9ff",
                            "secondary-container": "#39b8fd",
                            "on-error": "#ffffff",
                            "on-surface": "#0b1c30",
                            "primary-container": "#1e40af",
                            "surface-container-low": "#eff4ff",
                            "primary-fixed-dim": "#b8c4ff",
                            "surface-container": "#e5eeff",
                            "error-container": "#ffdad6",
                            "surface-container-highest": "#d3e4fe",
                            "on-primary-fixed-variant": "#173bab",
                        },
                        borderRadius: {
                            DEFAULT: "0.125rem",
                            lg: "0.25rem",
                            xl: "0.5rem",
                            full: "0.75rem",
                        },
                        spacing: {
                            gutter: "24px",
                            lg: "48px",
                            "margin-mobile": "16px",
                            "margin-desktop": "auto",
                            xs: "8px",
                            base: "4px",
                            "max-width": "1280px",
                            xl: "80px",
                            md: "24px",
                            sm: "16px",
                        },
                        fontFamily: {
                            "display-lg": ["Montserrat"],
                            "headline-lg": ["Montserrat"],
                            caption: ["Inter"],
                            "body-md": ["Inter"],
                            "headline-md": ["Montserrat"],
                            "body-lg": ["Inter"],
                            "headline-lg-mobile": ["Montserrat"],
                            "label-md": ["Inter"],
                        },
                        fontSize: {
                            "display-lg": [
                                "48px",
                                { lineHeight: "56px", letterSpacing: "-0.02em", fontWeight: "700" },
                            ],
                            "headline-lg": ["32px", { lineHeight: "40px", fontWeight: "700" }],
                            caption: ["12px", { lineHeight: "16px", fontWeight: "400" }],
                            "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
                            "headline-md": ["24px", { lineHeight: "32px", fontWeight: "600" }],
                            "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
                            "headline-lg-mobile": [
                                "24px",
                                { lineHeight: "32px", fontWeight: "700" },
                            ],
                            "label-md": [
                                "14px",
                                { lineHeight: "20px", letterSpacing: "0.01em", fontWeight: "600" },
                            ],
                        },
                    },
                },
            };
        </script>
     
        <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>" />
    </head>
    <body class="bg-background text-on-surface selection:bg-primary selection:text-on-primary">
        <!-- Top Navigation Bar -->
        <?php $activeSegment = $this->uri->segment(1) ?: ''; ?>
        <nav
            class="bg-surface-container-lowest dark:bg-inverse-surface border-b border-outline-variant dark:border-outline sticky top-0 z-50"
        >
            <div class="flex justify-between items-center max-w-[1280px] mx-auto px-gutter h-20">
                <div class="flex items-center gap-xs">
                    <span
                        class="material-symbols-outlined text-primary text-headline-md"
                        style="font-variation-settings: &quot;FILL&quot; 1"
                        >school</span
                    >
                    <h1
                        class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed"
                    >
                        SMP Negeri 2 Sidoharjo
                    </h1>
                </div>
                <div class="hidden md:flex items-center gap-md">
                    <a
                        class="font-label-md text-label-md transition-colors cursor-pointer duration-200 <?= $activeSegment === '' ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed' ?>"
                        href="<?= site_url() ?>"
                        >Home</a
                    >
                    <a
                        class="font-label-md text-label-md transition-colors cursor-pointer duration-200 <?= $activeSegment === 'profil' ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed' ?>"
                        href="<?= site_url('profil') ?>"
                        >Profil</a
                    >
                    <a
                        class="font-label-md text-label-md transition-colors cursor-pointer duration-200 <?= $activeSegment === 'berita' ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed' ?>"
                        href="<?= site_url('berita') ?>"
                        >Berita</a
                    >
                    <a
                        class="font-label-md text-label-md transition-colors cursor-pointer duration-200 <?= $activeSegment === 'kontak' ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant dark:text-on-surface-variant hover:text-primary dark:hover:text-primary-fixed' ?>"
                        href="<?= site_url('kontak') ?>"
                        >Kontak</a
                    >
                </div>
                <button id="mobile-menu-toggle" type="button" class="md:hidden text-primary" aria-label="Buka menu mobile">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </nav>
        <div id="mobile-menu" class="md:hidden hidden bg-surface-container-lowest border-b border-outline-variant">
            <div class="px-gutter py-sm flex flex-col gap-3">
                <a
                    class="font-label-md text-label-md transition-colors duration-200 <?= $activeSegment === '' ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' ?>"
                    href="<?= site_url() ?>"
                    >Home</a
                >
                <a
                    class="font-label-md text-label-md transition-colors duration-200 <?= $activeSegment === 'profil' ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' ?>"
                    href="<?= site_url('profil') ?>"
                    >Profil</a
                >
                <a
                    class="font-label-md text-label-md transition-colors duration-200 <?= $activeSegment === 'berita' ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' ?>"
                    href="<?= site_url('berita') ?>"
                    >Berita</a
                >
                <a
                    class="font-label-md text-label-md transition-colors duration-200 <?= $activeSegment === 'kontak' ? 'text-primary border-b-2 border-primary pb-1' : 'text-on-surface-variant hover:text-primary' ?>"
                    href="<?= site_url('kontak') ?>"
                    >Kontak</a
                >
            </div>
        </div>
        <script>
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenuToggle?.addEventListener('click', () => {
                mobileMenu?.classList.toggle('hidden');
            });
        </script>