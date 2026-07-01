		<!-- Main Content Canvas -->
		<main class="ml-64 mt-16 p-md min-h-[calc(100vh-64px)] bg-surface">
			<!-- Animated Header Background -->
			<div
				class="relative w-full h-48 mb-lg rounded-xl overflow-hidden shadow-sm group"
			>
				<div
					class="absolute inset-0 bg-gradient-to-r from-primary/90 to-transparent flex flex-col justify-center px-lg text-white"
				>
					<h3 class="font-headline-lg text-headline-lg mb-xs">
						Selamat Datang, Admin!
					</h3>
					<p class="font-body-lg text-body-lg max-w-lg opacity-90">
						Kelola informasi sekolah dan interaksi komunitas dalam satu
						dashboard terpadu SMP Negeri 2 Sidoharjo.
					</p>
				</div>
			</div>
			<!-- Summary Cards Grid -->
			<div class="grid grid-cols-1 md:grid-cols-3 gap-md mb-lg">
				<!-- News Stats -->
				<div
					class="bg-white p-md rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow group relative overflow-hidden"
				>
					<div class="flex justify-between items-start">
						<div>
							<p class="text-on-surface-variant font-label-md mb-base">
								Total Postingan Berita
							</p>
							<h4 class="text-display-lg font-display-lg text-primary"><?php echo $total_berita; ?></h4>
							<p
								class="text-green-600 font-label-md flex items-center gap-1 mt-base"
							>
								<span class="material-symbols-outlined text-[18px]"
									>trending_up</span
								>
								+12 bulan ini
							</p>
						</div>
						<div class="bg-primary-container/10 p-3 rounded-xl text-primary">
							<span class="material-symbols-outlined text-[32px]"
								>newspaper</span
							>
						</div>
					</div>
				</div>
				<!-- Message Stats -->
				<div
					class="bg-white p-md rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow group relative overflow-hidden"
				>
					<div class="flex justify-between items-start">
						<div>
							<p class="text-on-surface-variant font-label-md mb-base">
								Pesan Masuk
							</p>
							<h4 class="text-display-lg font-display-lg text-secondary">42</h4>
							<p
								class="text-yellow-600 font-label-md flex items-center gap-1 mt-base"
							>
								<span class="material-symbols-outlined text-[18px]"
									>pending_actions</span
								>
								8 belum dibaca
							</p>
						</div>
						<div
							class="bg-secondary-container/10 p-3 rounded-xl text-secondary"
						>
							<span class="material-symbols-outlined text-[32px]">mail</span>
						</div>
					</div>
				</div>
				<!-- Visitor Stats -->
				<div
					class="bg-white p-md rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow group relative overflow-hidden"
				>
					<div class="flex justify-between items-start">
						<div>
							<p class="text-on-surface-variant font-label-md mb-base">
								Pengunjung Aktif
							</p>
							<h4 class="text-display-lg font-display-lg text-primary">856</h4>
							<p
								class="text-green-600 font-label-md flex items-center gap-1 mt-base"
							>
								<span class="material-symbols-outlined text-[18px]"
									>visibility</span
								>
								+15% dari hari kemarin
							</p>
						</div>
						<div class="bg-primary-container/10 p-3 rounded-xl text-primary">
							<span class="material-symbols-outlined text-[32px]">group</span>
						</div>
					</div>
				</div>
			</div>
			<!-- Bento Grid Section -->
			<div class="grid grid-cols-12 gap-md items-start">
				<!-- Recent Activities Table (Bento Col 8) -->
				<section
					class="col-span-12 lg:col-span-8 bg-white border border-outline-variant rounded-xl overflow-hidden shadow-sm"
				>
					<div
						class="p-md flex justify-between items-center border-b border-outline-variant bg-surface-container-low"
					>
						<h5 class="font-headline-md text-headline-md">
							Aktivitas Terkini Berita
						</h5>
						<button
							class="bg-primary text-white px-4 py-2 rounded-full font-label-md hover:bg-primary-container transition-colors flex items-center gap-2" onclick="window.location.href='<?= base_url('admin/berita_form') ?>'"
						>
							<span class="material-symbols-outlined text-[20px]">add</span>
							Berita Baru
						</button>
					</div>
					<div class="overflow-x-auto">
						<table class="w-full text-left">
							<thead>
								<tr
									class="bg-surface text-on-surface-variant font-label-md border-b border-outline-variant"
								>
									<th class="px-md py-4">Judul Berita</th>
									<th class="px-md py-4">Kategori</th>
									<th class="px-md py-4">Tanggal</th>
									<th class="px-md py-4">Status</th>
									<th class="px-md py-4 text-center">Aksi</th>
								</tr>
							</thead>
							<tbody class="text-body-md divide-y divide-outline-variant">
								<?php foreach ($berita as $item): ?>
								<tr
									class="hover:bg-surface-container-low transition-colors group"
								>
									<td class="px-md py-4">
										<div class="flex items-center gap-3">
											<div
												class="w-10 h-10 rounded-lg overflow-hidden shrink-0"
											>
												<img
													alt="News Image"
													class="w-full h-full object-cover"
													data-alt="A clean, professional photograph of a group of secondary school students in formal blue uniforms smiling while working together on a collaborative project in a brightly lit modern classroom. The lighting is soft and natural, emphasizing a positive and focused academic environment. The overall aesthetic is clean and corporate, utilizing a palette of deep blues and bright whites."
													src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhj9VT8kGPbjPHDYCBGnKEe_7klx3_0qMbRyRwE8fu6aMcGDmS8crpaIlh9gtXTXpq6QAoHev1ugyVSbFyLQHaiKwlta5xLOx1b8-fG6Zkcvsu3mH4qlEoIIyOOB3j94dFOHxqFCcTWZTOpepFWQtPXYfgXTSj7LLogxgHtv1v9TcBcjrHpxBxY3KOA0DOS3UiIT3AkNmyXekIbW4urOT-IvP5WpWE-RMkOnpsqjv1uLEyio32cVDgdjk2wef6lKfmAVUdaAbhiQ"
												/>
											</div>
											<span class="font-medium text-on-surface line-clamp-1"
												><?= $item->judul ?></span
											>
										</div>
									</td>
									<td class="px-md py-4">
										<span
											class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-caption"
											><?= $item->kategori ?></span
										>
									</td>
									<td class="px-md py-4 text-on-surface-variant">
										<?= $item->tanggal ?>
									</td>
									<td class="px-md py-4">
										<span
											class="inline-flex items-center gap-1 text-green-600 font-label-md"
										>
											<span class="w-2 h-2 rounded-full bg-green-600"></span>
											<?= ucfirst($item->status) ?>
										</span>
									</td>
									<td class="px-md py-4">
										<div class="flex justify-center gap-2">
											<button
												class="p-2 hover:bg-surface-variant rounded-full text-primary" onclick="window.location.href='<?= base_url('admin/berita_form?id=' . $item->idberita) ?>'"
											>
												<span class="material-symbols-outlined">edit</span>
											</button>
											<button
												class="p-2 hover:bg-surface-variant rounded-full text-error" onclick="openDeleteModal(<?= $item->idberita ?>, '<?= addslashes($item->judul) ?>')"
											>
												<span class="material-symbols-outlined">delete</span>
											</button>
										</div>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="p-md border-t border-outline-variant flex justify-center">
						<button class="text-primary font-label-md hover:underline" onclick="window.location.href='<?= base_url('admin/berita') ?>'">
							Lihat Semua Berita
						</button>
					</div>
				</section>
				<!-- Incoming Messages Summary (Bento Col 4) -->
				<section class="col-span-12 lg:col-span-4 space-y-md">
					<div
						class="bg-white border border-outline-variant rounded-xl overflow-hidden shadow-sm"
					>
						<div
							class="p-md border-b border-outline-variant bg-surface-container-low flex justify-between items-center"
						>
							<h5 class="font-headline-md text-headline-md">Pesan Baru</h5>
							<span
								class="bg-error text-white text-[10px] px-2 py-0.5 rounded-full"
								>8 Baru</span
							>
						</div>
						<div class="divide-y divide-outline-variant">
							<!-- Message Item -->
							<div
								class="p-md hover:bg-surface-container-low transition-all cursor-pointer group"
							>
								<div class="flex gap-3 mb-xs">
									<div
										class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center shrink-0"
									>
										<span class="material-symbols-outlined text-primary"
											>person</span
										>
									</div>
									<div class="flex-1 min-w-0">
										<div class="flex justify-between items-start">
											<h6 class="font-label-md text-on-surface truncate">
												Budi Santoso
											</h6>
											<span class="text-caption text-on-surface-variant"
												>10:45</span
											>
										</div>
										<p class="text-caption text-secondary font-medium">
											Pertanyaan Pendaftaran
										</p>
									</div>
								</div>
								<p
									class="text-body-md text-on-surface-variant line-clamp-2 italic"
								>
									"Mohon info lengkap mengenai persyaratan berkas fisik untuk
									pendaftaran siswa baru jalur prestasi..."
								</p>
							</div>
							<!-- Message Item -->
							<div
								class="p-md hover:bg-surface-container-low transition-all cursor-pointer group"
							>
								<div class="flex gap-3 mb-xs">
									<div
										class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center shrink-0"
									>
										<span class="material-symbols-outlined text-primary"
											>person</span
										>
									</div>
									<div class="flex-1 min-w-0">
										<div class="flex justify-between items-start">
											<h6 class="font-label-md text-on-surface truncate">
												Siti Aminah
											</h6>
											<span class="text-caption text-on-surface-variant"
												>Kemarin</span
											>
										</div>
										<p class="text-caption text-secondary font-medium">
											Kontak Kerjasama
										</p>
									</div>
								</div>
								<p
									class="text-body-md text-on-surface-variant line-clamp-2 italic"
								>
									"Kami dari lembaga bimbel ingin menawarkan kerjasama try-out
									gratis untuk siswa kelas 9..."
								</p>
							</div>
						</div>
						<div class="p-md border-t border-outline-variant">
							<button
								class="w-full py-3 text-primary border border-primary rounded-xl font-label-md hover:bg-primary-container/5 transition-colors"
							>
								Buka Semua Pesan
							</button>
						</div>
					</div>
					<!-- Teacher on Duty Card -->
					<div
						class="bg-primary text-white p-md rounded-xl shadow-lg relative overflow-hidden group"
					>
						<div class="relative z-10">
							<p
								class="text-caption opacity-80 uppercase tracking-wider mb-base"
							>
								Guru Piket Hari Ini
							</p>
							<div class="flex items-center gap-3">
								<img
									alt="Teacher Avatar"
									class="w-12 h-12 rounded-full border-2 border-white/20"
									src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8rr1OBw__C1sJqrvzInw-G4zoNQZ3KcFAIa3DKJGLiWYrISKm2d34Gbel41iU9drT7oCSrgev5UNI8JD8fyk-j7Um_H632bfut-5p6V65AGGQ3EU-sPXwxog9B-ce3xAk43mAtgCWHpFybb7h_FXxJaOrHNMhNq6xX8epTAM0mbB_LRzqNzpk0AO1VSl1fH2Ko1L1PD0h74nFRjDMOQKbEmSkCf39PjBMkEnsenIeBJDWD5T2Drmp-XD6Y2gNQ2zpWhwhO4XMWw"
								/>
								<div>
									<h6 class="font-headline-md text-[18px]">
										Drs. Sugeng Riyadi
									</h6>
									<p class="text-caption opacity-80">Mata Pelajaran: IPA</p>
								</div>
							</div>
						</div>
						<!-- Subtle background decoration -->
						<div
							class="absolute -right-4 -bottom-4 opacity-10 group-hover:scale-110 transition-transform duration-700"
						>
							<span class="material-symbols-outlined text-[120px]">school</span>
						</div>
					</div>
				</section>
			</div>
		</main>

		<!-- Delete Confirmation Modal -->
		<div id="deleteModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
			<div class="bg-white rounded-2xl shadow-xl max-w-sm w-full mx-4 p-lg">
				<div class="flex items-center gap-3 mb-md">
					<div class="w-12 h-12 bg-error-container rounded-full flex items-center justify-center">
						<span class="material-symbols-outlined text-error text-[24px]">warning</span>
					</div>
					<h3 class="font-headline-md text-headline-md text-on-surface">Hapus Berita?</h3>
				</div>
				<p class="text-on-surface-variant mb-lg">
					Apakah Anda yakin ingin menghapus berita "<span id="beritaTitle" class="font-semibold text-error"></span>"? Tindakan ini tidak dapat dibatalkan.
				</p>
				<div class="flex gap-3 justify-end">
					<button class="px-6 py-3 text-on-surface font-label-md border border-outline-variant rounded-xl hover:bg-surface-container-low transition-colors" onclick="closeDeleteModal()">
						Batal
					</button>
					<button class="px-6 py-3 bg-error text-on-error font-label-md rounded-xl hover:bg-error/80 transition-colors" onclick="confirmDelete()">
						Hapus
					</button>
				</div>
			</div>
		</div>

		<script>
			const baseUrl = '<?= base_url() ?>';
			const adminUrl = '<?= base_url("admin") ?>';
			let deleteBeritaId = null;

			function openDeleteModal(id, judul) {
				deleteBeritaId = id;
				document.getElementById('beritaTitle').textContent = judul;
				document.getElementById('deleteModal').classList.remove('hidden');
				document.getElementById('deleteModal').classList.add('flex');
			}

			function closeDeleteModal() {
				document.getElementById('deleteModal').classList.add('hidden');
				document.getElementById('deleteModal').classList.remove('flex');
				deleteBeritaId = null;
			}

			function confirmDelete() {
				if (!deleteBeritaId) return;

				fetch(`${adminUrl}/delete_berita`, {
					method: 'POST',
					headers: {
						'Content-Type': 'application/x-www-form-urlencoded',
					},
					body: 'id=' + deleteBeritaId
				})
				.then(response => response.json())
				.then(data => {
					closeDeleteModal();
					if (data.status === 'success') {
						alert('Berita berhasil dihapus');
						// Reload page to see updated list
						location.reload();
					} else {
						alert('Gagal menghapus berita: ' + (data.message || 'Error'));
					}
				})
				.catch(error => {
					console.error('Error:', error);
					alert('Terjadi kesalahan saat menghapus berita');
					closeDeleteModal();
				});
			}
		</script>
		<!-- <script>
			// Micro-interaction for hover effects on table rows
			document.querySelectorAll("tr").forEach((row) => {
				row.addEventListener("mouseenter", () => {
					row.style.transform = "translateX(4px)";
				});
				row.addEventListener("mouseleave", () => {
					row.style.transform = "translateX(0px)";
				});
			});

			// Simple real-time clock indicator in TopNavBar (optional addition)
			const updateClock = () => {
				const now = new Date();
				const options = {
					weekday: "long",
					year: "numeric",
					month: "long",
					day: "numeric",
				};
				// Normally we'd put this in the UI
			};
			setInterval(updateClock, 1000);
		</script>
	</body>
</html> -->
