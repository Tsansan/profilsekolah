
		<!-- Main Content -->
		<main class="ml-64 pt-24 px-md pb-xl min-h-screen">
			<!-- Header Actions -->
			<div class="flex justify-between items-end mb-lg">
				<div>
					<nav class="flex text-sm text-on-surface-variant mb-2">
						<span class="hover:text-primary cursor-pointer">Dashboard</span>
						<span class="mx-2">/</span>
						<span class="text-primary font-semibold">Berita</span>
					</nav>
					<h3 class="font-headline-lg text-headline-lg text-on-surface">
						Daftar Berita Sekolah
					</h3>
				</div>
				<button
					class="flex items-center gap-2 bg-primary text-on-primary px-6 py-3 rounded-xl font-label-md hover:shadow-lg active:scale-95 transition-all"
				>
					<span class="material-symbols-outlined">add</span>
					Tambah Berita Baru
				</button>
			</div>
			<!-- Bento Grid Stats (Optional Visual Flair) -->
			<div class="grid grid-cols-1 md:grid-cols-4 gap-md mb-lg">
				<div
					class="bento-card p-sm rounded-xl flex flex-col justify-center border-l-4 border-primary"
				>
					<span
						class="text-caption text-on-surface-variant uppercase tracking-wider font-semibold"
						>Total Berita</span
					>
					<span class="font-headline-md text-headline-md text-primary"
						>128</span
					>
				</div>
				<div
					class="bento-card p-sm rounded-xl flex flex-col justify-center border-l-4 border-secondary"
				>
					<span
						class="text-caption text-on-surface-variant uppercase tracking-wider font-semibold"
						>Diterbitkan</span
					>
					<span class="font-headline-md text-headline-md text-secondary"
						>112</span
					>
				</div>
				<div
					class="bento-card p-sm rounded-xl flex flex-col justify-center border-l-4 border-tertiary-container"
				>
					<span
						class="text-caption text-on-surface-variant uppercase tracking-wider font-semibold"
						>Draft</span
					>
					<span
						class="font-headline-md text-headline-md text-tertiary-container"
						>16</span
					>
				</div>
				<div
					class="bento-card p-sm rounded-xl flex flex-col justify-center border-l-4 border-outline"
				>
					<span
						class="text-caption text-on-surface-variant uppercase tracking-wider font-semibold"
						>Minggu Ini</span
					>
					<span class="font-headline-md text-headline-md text-on-surface"
						>5</span
					>
				</div>
			</div>
			<!-- Main Data Table Container -->
			<div class="bento-card rounded-xl overflow-hidden">
				<div
					class="p-md border-b border-outline-variant flex items-center justify-between"
				>
					<div class="flex gap-sm">
						<select
							class="bg-surface-container-low border border-outline-variant rounded-lg px-3 py-2 text-sm focus:border-primary outline-none"
						>
							<option>Semua Kategori</option>
							<option>Akademik</option>
							<option>Ekstrakurikuler</option>
							<option>Pengumuman</option>
						</select>
						<select
							class="bg-surface-container-low border border-outline-variant rounded-lg px-3 py-2 text-sm focus:border-primary outline-none"
						>
							<option>Urutkan: Terbaru</option>
							<option>Urutkan: Terlama</option>
							<option>Urutkan: Judul (A-Z)</option>
						</select>
					</div>
					<div class="text-on-surface-variant text-sm">
						Menampilkan 1 - 10 dari 128 berita
					</div>
				</div>
				<div class="overflow-x-auto">
					<table class="w-full text-left border-collapse">
						<thead
							class="bg-surface-container text-on-surface-variant font-label-md"
						>
							<tr>
								<th class="px-md py-4 font-semibold">Judul Berita</th>
								<th class="px-md py-4 font-semibold">Kategori</th>
								<th class="px-md py-4 font-semibold">Tanggal Rilis</th>
								<th class="px-md py-4 font-semibold">Status</th>
								<th class="px-md py-4 font-semibold text-right">Aksi</th>
							</tr>
						</thead>
						<tbody class="divide-y divide-outline-variant">
							<!-- Row 1 -->
							<tr
								class="hover:bg-surface-container-low transition-colors group"
							>
								<td class="px-md py-4">
									<div class="flex items-center gap-3">
										<div
											class="w-12 h-12 rounded bg-surface-container-highest flex-shrink-0 overflow-hidden border border-outline-variant"
										>
											<img
												class="w-full h-full object-cover"
												data-alt="A detailed cinematic shot of a school graduation ceremony with a focus on a student's graduation cap against a blurred backdrop of cheering peers and blue and white banners. The lighting is warm and celebratory, highlighting the texture of the fabric. The overall mood is inspirational and prestigious, following the institutional blue color palette."
												src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3vZ6qbFBIHx56BJOeNkgT9yBxbvjP3tqlePU38Vyh1zGYnv7DZGrr_M-sINJgxaqqqJ_fjO6YnuEC4-4S5BvbDlpIzK5F6i61xgTq_g7P1Ds1IvLWcUMmT2W7n2r3cXxazBsaeXgCaKqF4tQzD1AQi0XBQEXX7S89_tti7_wAmAYN4Y5nRPrJh-mOwv3lhT4BT3MM456Y-hCclE2J4htV-PFCTKP3COKluxr1igzPMqJ-gX4OnX2AtsAhQOF7TAJyqn0uuaV9-Q"
											/>
										</div>
										<div class="max-w-xs xl:max-w-md">
											<div
												class="font-semibold text-on-surface group-hover:text-primary transition-colors truncate"
											>
												Penerimaan Siswa Baru Tahun Ajaran 2024/2025
											</div>
											<div
												class="text-caption text-on-surface-variant line-clamp-1"
											>
												Prosedur dan jadwal lengkap pendaftaran calon siswa
												baru...
											</div>
										</div>
									</div>
								</td>
								<td class="px-md py-4">
									<span
										class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-xs font-semibold"
										>Pengumuman</span
									>
								</td>
								<td class="px-md py-4 text-on-surface-variant">12 Mei 2024</td>
								<td class="px-md py-4">
									<div
										class="flex items-center gap-1.5 text-green-600 font-semibold text-sm"
									>
										<span class="w-2 h-2 rounded-full bg-green-500"></span>
										Published
									</div>
								</td>
								<td class="px-md py-4 text-right">
									<div class="flex justify-end gap-2">
										<button
											class="p-2 hover:bg-primary-container hover:text-on-primary-container rounded-lg transition-all text-on-surface-variant"
										>
											<span class="material-symbols-outlined text-[20px]"
												>edit</span
											>
										</button>
										<button
											class="p-2 hover:bg-error-container hover:text-on-error-container rounded-lg transition-all text-on-surface-variant"
										>
											<span class="material-symbols-outlined text-[20px]"
												>delete</span
											>
										</button>
									</div>
								</td>
							</tr>
							<!-- Row 2 -->
							<tr
								class="hover:bg-surface-container-low transition-colors group"
							>
								<td class="px-md py-4">
									<div class="flex items-center gap-3">
										<div
											class="w-12 h-12 rounded bg-surface-container-highest flex-shrink-0 overflow-hidden border border-outline-variant"
										>
											<img
												class="w-full h-full object-cover"
												data-alt="A professional studio photo of modern science lab equipment, including a microscope and glass beakers filled with vibrant blue liquid. The background is a clean, white laboratory setting with soft diffuse lighting. The aesthetic is modern, scientific, and educational, emphasizing academic excellence and high-tech school facilities."
												src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHObq9aLvMdKL4WDh72aN0xjwONPCkdZNSUETUBgSA9FurxmtpIg42dXm8CMaUTI_lo0WhZ-eHZzADzqyMgMllP1i6Z3GoNxCC5k_4LlOUiVOTMAau8HzQ_Bs6HGFJg7ae_bprJr-I7URfUWqb_J0HMln6e7WrbKw4VvwR3gTmp3CrZaTNgiCWCRclsAtqV2BpZgxCaP1QWCpkryUvsrDlxkwNrptJARtdJnHe4808y3cq4tdyuli5Rw1VPQNeMy7kL4Z1drHVfQ"
											/>
										</div>
										<div class="max-w-xs xl:max-w-md">
											<div
												class="font-semibold text-on-surface group-hover:text-primary transition-colors truncate"
											>
												Kunjungan Industri ke Balai Penelitian Padi
											</div>
											<div
												class="text-caption text-on-surface-variant line-clamp-1"
											>
												Siswa kelas 8 melakukan observasi langsung di
												lapangan...
											</div>
										</div>
									</div>
								</td>
								<td class="px-md py-4">
									<span
										class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-xs font-semibold"
										>Akademik</span
									>
								</td>
								<td class="px-md py-4 text-on-surface-variant">10 Mei 2024</td>
								<td class="px-md py-4">
									<div
										class="flex items-center gap-1.5 text-amber-600 font-semibold text-sm"
									>
										<span class="w-2 h-2 rounded-full bg-amber-500"></span>
										Draft
									</div>
								</td>
								<td class="px-md py-4 text-right">
									<div class="flex justify-end gap-2">
										<button
											class="p-2 hover:bg-primary-container hover:text-on-primary-container rounded-lg transition-all text-on-surface-variant"
										>
											<span class="material-symbols-outlined text-[20px]"
												>edit</span
											>
										</button>
										<button
											class="p-2 hover:bg-error-container hover:text-on-error-container rounded-lg transition-all text-on-surface-variant"
										>
											<span class="material-symbols-outlined text-[20px]"
												>delete</span
											>
										</button>
									</div>
								</td>
							</tr>
							<!-- Row 3 -->
							<tr
								class="hover:bg-surface-container-low transition-colors group"
							>
								<td class="px-md py-4">
									<div class="flex items-center gap-3">
										<div
											class="w-12 h-12 rounded bg-surface-container-highest flex-shrink-0 overflow-hidden border border-outline-variant"
										>
											<img
												class="w-full h-full object-cover"
												data-alt="A dynamic shot of a student basketball team huddling together on a polished wooden court, illuminated by dramatic overhead gym lighting. The scene is filled with energy and teamwork, capturing the spirit of Indonesian youth sports. The composition is professional and vibrant, emphasizing community and school pride."
												src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9f5sI0v1pcClD6aKZ0MIolGffIk8ciQfkpeknY7D-C0lbL13bQ2dPH2tqOdpmd-IXqwpqwosh_wi4zrQtBHf60l9OBAeRXDhFlS_71XaTQtH3YvHK-RcD9p3tRcKSvUwndTZE6Rl0UXNC7OrIqi2pBCnF5-201Cyf2xdzNjTO8Gmb0s04Ae88bNZQx_Iw5EjwvlxFg10o6HQ-CUUsfBzbh7CTh75n2lw-sZ3o41RHw9nYR--akCZQpBRaKo9CXM-M_2xtA2AFtg"
											/>
										</div>
										<div class="max-w-xs xl:max-w-md">
											<div
												class="font-semibold text-on-surface group-hover:text-primary transition-colors truncate"
											>
												Juara 1 Turnamen Basket Antar SMP Sekabupaten
											</div>
											<div
												class="text-caption text-on-surface-variant line-clamp-1"
											>
												Tim basket sekolah berhasil membawa pulang piala
												bergilir...
											</div>
										</div>
									</div>
								</td>
								<td class="px-md py-4">
									<span
										class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-xs font-semibold"
										>Prestasi</span
									>
								</td>
								<td class="px-md py-4 text-on-surface-variant">08 Mei 2024</td>
								<td class="px-md py-4">
									<div
										class="flex items-center gap-1.5 text-green-600 font-semibold text-sm"
									>
										<span class="w-2 h-2 rounded-full bg-green-500"></span>
										Published
									</div>
								</td>
								<td class="px-md py-4 text-right">
									<div class="flex justify-end gap-2">
										<button
											class="p-2 hover:bg-primary-container hover:text-on-primary-container rounded-lg transition-all text-on-surface-variant"
										>
											<span class="material-symbols-outlined text-[20px]"
												>edit</span
											>
										</button>
										<button
											class="p-2 hover:bg-error-container hover:text-on-error-container rounded-lg transition-all text-on-surface-variant"
										>
											<span class="material-symbols-outlined text-[20px]"
												>delete</span
											>
										</button>
									</div>
								</td>
							</tr>
							<!-- Row 4 -->
							<tr
								class="hover:bg-surface-container-low transition-colors group"
							>
								<td class="px-md py-4">
									<div class="flex items-center gap-3">
										<div
											class="w-12 h-12 rounded bg-surface-container-highest flex-shrink-0 overflow-hidden border border-outline-variant"
										>
											<img
												class="w-full h-full object-cover"
												data-alt="A group of students wearing traditional Indonesian uniforms sitting in a modern, sun-drenched library with high ceilings and bookshelves. The image focuses on a collaborative group study session, with open laptops and notebooks. The mood is studious yet warm, with soft light streaming through large windows, symbolizing a bright academic future."
												src="https://lh3.googleusercontent.com/aida-public/AB6AXuBA2S7F1nrNOGdBDPtEXdp235xUTHp5VNTt6P-3Scf3jEaaiTPWYAlaaPkOU-3XHiPqkdCPd9oZefutJwZwn-HK6vd2c_0ChvKquxAxnf7yYm5DegpgugTgz224nuDN4eZ9QCXniFxpkESTuIX13bSAuEdLgkZywX3lf6wL5TKmywxPrC1LRPfVlVjhkL1GzOApnQ3ef3apJhZHw2f0Uugcr4PdNtkcgiwRW8c8l3wskbX8bUjy---loLH7bjdQ7Xyu8Tz5piMnWQ"
											/>
										</div>
										<div class="max-w-xs xl:max-w-md">
											<div
												class="font-semibold text-on-surface group-hover:text-primary transition-colors truncate"
											>
												Tips Menghadapi Ujian Akhir Semester dengan Tenang
											</div>
											<div
												class="text-caption text-on-surface-variant line-clamp-1"
											>
												Beberapa tips praktis bagi siswa untuk mengelola
												stres...
											</div>
										</div>
									</div>
								</td>
								<td class="px-md py-4">
									<span
										class="bg-surface-variant text-on-surface-variant px-3 py-1 rounded-full text-xs font-semibold"
										>Tips &amp; Trik</span
									>
								</td>
								<td class="px-md py-4 text-on-surface-variant">05 Mei 2024</td>
								<td class="px-md py-4">
									<div
										class="flex items-center gap-1.5 text-green-600 font-semibold text-sm"
									>
										<span class="w-2 h-2 rounded-full bg-green-500"></span>
										Published
									</div>
								</td>
								<td class="px-md py-4 text-right">
									<div class="flex justify-end gap-2">
										<button
											class="p-2 hover:bg-primary-container hover:text-on-primary-container rounded-lg transition-all text-on-surface-variant"
										>
											<span class="material-symbols-outlined text-[20px]"
												>edit</span
											>
										</button>
										<button
											class="p-2 hover:bg-error-container hover:text-on-error-container rounded-lg transition-all text-on-surface-variant"
										>
											<span class="material-symbols-outlined text-[20px]"
												>delete</span
											>
										</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Pagination -->
				<div
					class="p-md bg-surface-container-low flex justify-between items-center"
				>
					<button
						class="px-4 py-2 text-sm font-semibold text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1 disabled:opacity-50"
						disabled=""
					>
						<span class="material-symbols-outlined">chevron_left</span>
						Sebelumnya
					</button>
					<div class="flex gap-2">
						<button
							class="w-8 h-8 rounded bg-primary text-on-primary text-xs font-bold"
						>
							1
						</button>
						<button
							class="w-8 h-8 rounded hover:bg-surface-container-highest text-on-surface-variant text-xs font-bold transition-colors"
						>
							2
						</button>
						<button
							class="w-8 h-8 rounded hover:bg-surface-container-highest text-on-surface-variant text-xs font-bold transition-colors"
						>
							3
						</button>
						<span class="flex items-center text-on-surface-variant">...</span>
						<button
							class="w-8 h-8 rounded hover:bg-surface-container-highest text-on-surface-variant text-xs font-bold transition-colors"
						>
							13
						</button>
					</div>
					<button
						class="px-4 py-2 text-sm font-semibold text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1"
					>
						Berikutnya
						<span class="material-symbols-outlined">chevron_right</span>
					</button>
				</div>
			</div>
		</main>
		