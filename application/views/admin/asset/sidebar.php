<!doctype html>
<html lang="id">
	<head>
		<title><?= $title ?? 'Admin Panel' ?></title>
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
							secondary: "#006591",
							"on-secondary": "#ffffff",
							"on-primary-fixed": "#001453",
							"inverse-on-surface": "#eaf1ff",
							"on-secondary-container": "#004666",
							primary: "#00288e",
							"on-secondary-fixed": "#001e2f",
							"primary-container": "#1e40af",
							surface: "#f8f9ff",
							"on-secondary-fixed-variant": "#004c6e",
							"outline-variant": "#c4c5d5",
							"error-container": "#ffdad6",
							"secondary-fixed": "#c9e6ff",
							"secondary-fixed-dim": "#89ceff",
							"on-tertiary-container": "#ffa929",
							"surface-container-low": "#eff4ff",
							"on-background": "#0b1c30",
							"surface-dim": "#cbdbf5",
							"tertiary-container": "#6b4200",
							error: "#ba1a1a",
							"surface-variant": "#d3e4fe",
							"on-tertiary-fixed": "#2a1700",
							"surface-container-high": "#dce9ff",
							"surface-bright": "#f8f9ff",
							"on-primary-fixed-variant": "#173bab",
							"inverse-surface": "#213145",
							"on-surface": "#0b1c30",
							background: "#f8f9ff",
							tertiary: "#4c2e00",
							"surface-container-highest": "#d3e4fe",
							"on-tertiary-fixed-variant": "#653e00",
							"primary-fixed": "#dde1ff",
							"secondary-container": "#39b8fd",
							"tertiary-fixed-dim": "#ffb95f",
							"surface-container": "#e5eeff",
							"primary-fixed-dim": "#b8c4ff",
							"on-error": "#ffffff",
							"surface-tint": "#3755c3",
							"on-primary": "#ffffff",
							"on-error-container": "#93000a",
							"inverse-primary": "#b8c4ff",
							"tertiary-fixed": "#ffddb8",
							"on-tertiary": "#ffffff",
							"surface-container-lowest": "#ffffff",
							outline: "#757684",
							"on-surface-variant": "#444653",
							"on-primary-container": "#a8b8ff",
						},
						borderRadius: {
							DEFAULT: "0.125rem",
							lg: "0.25rem",
							xl: "0.5rem",
							full: "0.75rem",
						},
						spacing: {
							xs: "8px",
							base: "4px",
							xl: "80px",
							lg: "48px",
							"margin-desktop": "auto",
							gutter: "24px",
							md: "24px",
							sm: "16px",
							"margin-mobile": "16px",
							"max-width": "1280px",
						},
						fontFamily: {
							"headline-lg-mobile": ["Montserrat"],
							caption: ["Inter"],
							"headline-lg": ["Montserrat"],
							"body-md": ["Inter"],
							"body-lg": ["Inter"],
							"display-lg": ["Montserrat"],
							"label-md": ["Inter"],
							"headline-md": ["Montserrat"],
						},
						fontSize: {
							"headline-lg-mobile": [
								"24px",
								{ lineHeight: "32px", fontWeight: "700" },
							],
							caption: ["12px", { lineHeight: "16px", fontWeight: "400" }],
							"headline-lg": [
								"32px",
								{ lineHeight: "40px", fontWeight: "700" },
							],
							"body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
							"body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
							"display-lg": [
								"48px",
								{
									lineHeight: "56px",
									letterSpacing: "-0.02em",
									fontWeight: "700",
								},
							],
							"label-md": [
								"14px",
								{
									lineHeight: "20px",
									letterSpacing: "0.01em",
									fontWeight: "600",
								},
							],
							"headline-md": [
								"24px",
								{ lineHeight: "32px", fontWeight: "600" },
							],
						},
					},
				},
			};
		</script>
		<style>
			.material-symbols-outlined {
				font-variation-settings:
					"FILL" 0,
					"wght" 400,
					"GRAD" 0,
					"opsz" 24;
			}
			body {
				background-color: #f8fafc;
			}
			.message-row:hover {
				background-color: #f1f5f9;
			}
		</style>
	</head>
	<body class="font-body-md text-on-surface">
		<!-- SideNavBar -->
		<aside
			class="h-screen w-64 fixed left-0 top-0 bg-primary dark:bg-inverse-surface shadow-md flex flex-col p-sm"
		>
			<div class="flex items-center gap-3 px-4 py-6 mb-8">
				<div
					class="w-10 h-10 rounded-xl bg-on-primary flex items-center justify-center text-primary shadow-sm"
				>
					<span class="material-symbols-outlined">school</span>
				</div>
				<div class="">
					<h1 class="text-headline-md font-bold text-on-primary leading-tight">
						SMPN 2
					</h1>
					<p class="text-label-md text-on-primary/70">Sidoharjo</p>
				</div>
			</div>
			<nav class="space-y-2 flex-grow">
				<a
					class="flex items-center gap-3 px-4 py-3 text-on-primary/80 hover:bg-white/10 rounded-xl transition-all active:scale-95 group"
					href="<?php echo base_url('admin'); ?>"
					><span class="material-symbols-outlined">dashboard</span
					><span class="font-medium">Dashboard</span></a
				><a
					class="flex items-center gap-3 px-4 py-3 text-on-primary/80 hover:bg-white/10 rounded-xl transition-all active:scale-95 group"
					href="<?php echo base_url('admin/berita'); ?>"
					><span class="material-symbols-outlined">newspaper</span
					><span class="font-medium">Berita</span></a
				><a
					class="flex items-center gap-3 px-4 py-3 text-on-primary/80 hover:bg-white/10 rounded-xl transition-all active:scale-95 group"
					href="<?php echo base_url('admin/profil'); ?>"
					><span class="material-symbols-outlined">school</span
					><span class="font-medium">Profil Sekolah</span></a
				><a
					class="flex items-center gap-3 px-4 py-3 text-on-primary/80 hover:bg-white/10 rounded-xl transition-all active:scale-95 group"
					href="<?php echo base_url('admin/pesan'); ?>"
					><span class="material-symbols-outlined">mail</span
					><span class="font-bold">Pesan Masuk</span></a
				>
			</nav>
			<div class="mt-auto p-4 border-t border-on-primary/10">
				<div class="flex items-center gap-3">
					<img
						alt="Admin Avatar"
						class="w-10 h-10 rounded-full border-2 border-on-primary/20"
						src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyHpdSPaZ1y6zdhpFFtOaGzhd14A0zpCThyN38kOXQNcmB8r1Hyg__gc5lypcy2-U3zH6Q5VCrfvpkn20UL3a4E6YLvnT7yt1UW0vJAkWwoFvDHdHYNMBgcD35CiMSaHQiZEr_nVQy9NVC3u27eCVFJ7r5LCWDMA3VfM3Vdh9uNkJS7y7OH_1ew0BV94lsstUsY2QpCpsYs2cyP068WxQ8U9RD1Qf3HeGyfU50yDeY1PgCdSChbaEMJU1wR3AGMjufFqzS3MzxdQ"
					/>
					<div class="overflow-hidden">
						<p class="text-on-primary font-label-md truncate">Admin Utama</p>
						<p class="text-on-primary/60 text-caption truncate">
							administrator@smpn2.sch.id
						</p>
					</div>
				</div>
			</div>
		</aside>