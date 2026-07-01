
		<!-- Main Content -->
		<main class="ml-64 pt-24 px-md pb-xl min-h-screen">
			<!-- Header Actions -->
			<?php if ($this->session->flashdata('success')): ?>
				<div class="mb-4 rounded-lg border border-green-200 bg-green-50 p-3 text-sm text-green-700">
					<?= $this->session->flashdata('success') ?>
				</div>
			<?php endif; ?>
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
						><?= isset($total_berita) ? $total_berita : 0 ?></span
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
						><?= isset($berita_published) ? $berita_published : 0 ?></span
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
						><?= isset($berita_draft) ? $berita_draft : 0 ?></span
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
						><?= isset($last_week_berita) ? count($last_week_berita) : 0 ?></span
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
							id="categoryFilter"
							class="bg-surface-container-low border border-outline-variant rounded-lg px-3 py-2 text-sm focus:border-primary outline-none cursor-pointer"
						>
							<option value="all">Semua Kategori</option>
							<option value="Akademik">Akademik</option>
							<option value="Ekstrakurikuler">Ekstrakurikuler</option>
							<option value="Pengumuman">Pengumuman</option>
						</select>
						<select
							id="sortFilter"
							class="bg-surface-container-low border border-outline-variant rounded-lg px-3 py-2 text-sm focus:border-primary outline-none cursor-pointer"
						>
							<option value="newest">Urutkan: Terbaru</option>
							<option value="oldest">Urutkan: Terlama</option>
							<option value="title">Urutkan: Judul (A-Z)</option>
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
						<tbody class="divide-y divide-outline-variant" id="beritaTableBody">
						<!-- Data will be loaded via AJAX -->
						</tbody>
					</table>
				</div>






				
				<!-- Pagination -->
<div
class="p-md bg-surface-container-low flex justify-between items-center"
>
<button
class="px-4 py-2 text-sm font-semibold text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1 disabled:opacity-50"
id="prevBtn"
disabled
>
<span class="material-symbols-outlined">chevron_left</span>
Sebelumnya
</button>
<div class="flex gap-2" id="paginationNumbers">
<!-- Generated by JavaScript -->
</div>
<button
class="px-4 py-2 text-sm font-semibold text-on-surface-variant hover:text-primary transition-colors flex items-center gap-1"
id="nextBtn"
>
Berikutnya
<span class="material-symbols-outlined">chevron_right</span>
</button>
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
			let currentPage = 1;
			let totalPages = 1;
			let deleteBeritaId = null;

			function getFilterValues() {
				const kategori = document.getElementById('categoryFilter').value;
				const sort = document.getElementById('sortFilter').value;
				return { kategori, sort };
			}

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
						// Show success message
						alert('Berita berhasil dihapus');
						// Reload current page
						loadBerita(currentPage);
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

			function loadBerita(page = 1) {
				const { kategori, sort } = getFilterValues();
				const params = new URLSearchParams({
					page: page,
					kategori: kategori,
					sort: sort
				});

				fetch(`${adminUrl}/get_berita_ajax?${params}`)
					.then(response => response.json())
					.then(data => {
						if (data.status === 'success') {
							const tbody = document.getElementById('beritaTableBody');
							tbody.innerHTML = '';
							currentPage = data.current_page;
							totalPages = data.total_pages;

							if (data.data.length === 0) {
								tbody.innerHTML = '<tr><td colspan="5" class="px-md py-8 text-center text-on-surface-variant">Tidak ada data berita</td></tr>';
							} else {
								data.data.forEach(berita => {
									const statusClass = berita.status === 'published' ? 'text-green-600' : 'text-gray-500';
									const statusDot = berita.status === 'published' ? 'bg-green-500' : 'bg-gray-500';
									const row = `
										<tr class="hover:bg-surface-container-low transition-colors group">
											<td class="px-md py-4">
												<div class="flex items-center gap-3">
													<div class="w-12 h-12 rounded bg-surface-container-highest flex-shrink-0 overflow-hidden border border-outline-variant">
														<img class="w-full h-full object-cover" src="${baseUrl}assets/img/berita/${berita.gambar}" />
													</div>
													<div class="max-w-xs xl:max-w-md">
														<div class="font-semibold text-on-surface group-hover:text-primary transition-colors truncate">${berita.judul}</div>
														<div class="text-caption text-on-surface-variant line-clamp-1">${berita.isiberita.substring(0, 50)}...</div>
													</div>
												</div>
											</td>
											<td class="px-md py-4">
												<span class="bg-secondary-fixed text-on-secondary-fixed px-3 py-1 rounded-full text-xs font-semibold">${berita.kategori}</span>
											</td>
											<td class="px-md py-4 text-on-surface-variant">${berita.tanggal}</td>
											<td class="px-md py-4">
												<div class="flex items-center gap-1.5 ${statusClass} font-semibold text-sm">
													<span class="w-2 h-2 rounded-full ${statusDot}"></span>
													${berita.status}
												</div>
											</td>
											<td class="px-md py-4 text-right">
												<div class="flex justify-end gap-2">
													<button class="p-2 hover:bg-primary-container hover:text-on-primary-container rounded-lg transition-all text-on-surface-variant" onclick="window.location.href='${adminUrl}/berita_form?id=${berita.idberita}'">
														<span class="material-symbols-outlined text-[20px]">edit</span>
													</button>
													<button class="p-2 hover:bg-error-container hover:text-on-error-container rounded-lg transition-all text-on-surface-variant" onclick="openDeleteModal(${berita.idberita}, '${berita.judul}')">
														<span class="material-symbols-outlined text-[20px]">delete</span>
													</button>
												</div>
											</td>
										</tr>
									`;
									tbody.innerHTML += row;
								});
							}

							updatePaginationButtons();
							updatePageNumbers();
						}
					})
					.catch(error => console.error('Error loading berita:', error));
			}

			function updatePaginationButtons() {
				const prevBtn = document.getElementById('prevBtn');
				const nextBtn = document.getElementById('nextBtn');

				prevBtn.disabled = currentPage === 1;
				nextBtn.disabled = currentPage === totalPages;

				prevBtn.onclick = () => {
					if (currentPage > 1) loadBerita(currentPage - 1);
				};

				nextBtn.onclick = () => {
					if (currentPage < totalPages) loadBerita(currentPage + 1);
				};
			}

			function updatePageNumbers() {
				const container = document.getElementById('paginationNumbers');
				container.innerHTML = '';

				let startPage = Math.max(1, currentPage - 1);
				let endPage = Math.min(totalPages, startPage + 2);

				if (endPage - startPage < 2) {
					startPage = Math.max(1, endPage - 2);
				}

				if (startPage > 1) {
					addPageButton(1);
					if (startPage > 2) {
						container.innerHTML += '<span class="flex items-center text-on-surface-variant">...</span>';
					}
				}

				for (let i = startPage; i <= endPage; i++) {
					addPageButton(i);
				}

				if (endPage < totalPages) {
					if (endPage < totalPages - 1) {
						container.innerHTML += '<span class="flex items-center text-on-surface-variant">...</span>';
					}
					addPageButton(totalPages);
				}

				function addPageButton(page) {
					const button = document.createElement('button');
					button.textContent = page;
					button.className = `w-8 h-8 rounded text-xs font-bold transition-colors ${
						page === currentPage
							? 'bg-primary text-on-primary'
							: 'hover:bg-surface-container-highest text-on-surface-variant'
					}`;
					button.onclick = () => loadBerita(page);
					container.appendChild(button);
				}
			}

			// Initialize on page load
			document.addEventListener('DOMContentLoaded', () => {
				loadBerita(1);

				// Add event listeners for filter changes
				document.getElementById('categoryFilter').addEventListener('change', () => {
					currentPage = 1;
					loadBerita(1);
				});

				document.getElementById('sortFilter').addEventListener('change', () => {
					currentPage = 1;
					loadBerita(1);
				});
			});
		</script>
