
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
				onclick="window.location.href='<?= base_url('admin/berita_form') ?>'">
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
						Menampilkan 1 - 10 dari <?= isset($total_berita) ? $total_berita : 0 ?> berita
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
							 <?php foreach ($berita_list as $berita): ?>
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
												src="<?= base_url('assets/img/berita/' . $berita->gambar) ?>"
											/>
										</div>
										<div class="max-w-xs xl:max-w-md">
											<div
												class="font-semibold text-on-surface group-hover:text-primary transition-colors truncate"
											>
												<?= $berita->judul ?>
											</div>
											<div
												class="text-caption text-on-surface-variant line-clamp-1"
											>
												<?= $berita->isiberita ?>
											</div>
										</div>
									</div>
								</td>
								<td class="px-md py-4">
									<span
										class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-xs font-semibold"
										><?= $berita->kategori ?></span
									>
								</td>
								<td class="px-md py-4 text-on-surface-variant"><?= $berita->tanggal ?></td>
								<td class="px-md py-4">
									<div
										class="flex items-center gap-1.5 text-green-600 font-semibold text-sm"
									>
										<span class="w-2 h-2 rounded-full bg-green-500"></span>
										<?= $berita->status ?>
									</div>
								</td>
								<td class="px-md py-4 text-right">
									<div class="flex justify-end gap-2">
										<button
											class="p-2 hover:bg-primary-container hover:text-on-primary-container rounded-lg transition-all text-on-surface-variant" onclick="window.location.href='<?= base_url('admin/berita_form?id=' . $berita->id) ?>'">
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
							<?php endforeach; ?>
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
		