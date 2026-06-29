
	
		<!-- Main Content -->
		<main class="pt-16 min-h-screen bg-surface">
			<div class="p-md max-w-max-width mx-auto">
				<!-- Breadcrumbs & Stats -->
				<div
					class="flex flex-col md:flex-row md:items-center justify-between mb-lg gap-4"
				>
					<div>
						<h3 class="font-headline-lg text-headline-lg text-primary">
							Manajemen Kontak
						</h3>
						<p class="text-body-md text-on-surface-variant">
							Kelola pesan yang dikirim melalui formulir kontak website sekolah.
						</p>
					</div>
					<div class="flex gap-3">
						<div
							class="bg-surface-container-high px-4 py-2 rounded-xl flex flex-col"
						>
							<span class="text-caption text-on-surface-variant"
								>Total Pesan</span
							>
							<span class="font-headline-md text-primary">124</span>
						</div>
						<div class="bg-primary px-4 py-2 rounded-xl flex flex-col">
							<span class="text-caption text-on-primary opacity-80"
								>Belum Dibaca</span
							>
							<span class="font-headline-md text-on-primary">8</span>
						</div>
					</div>
				</div>
				<!-- Messages Table Container -->
				<div
					class="bg-surface-container-lowest border border-outline-variant rounded-xl shadow-sm overflow-hidden"
				>
					<div class="overflow-x-auto">
						<table class="w-full text-left border-collapse">
							<thead>
								<tr
									class="bg-surface-container-low border-b border-outline-variant"
								>
									<th
										class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs"
									>
										Pengirim
									</th>
									<th
										class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs"
									>
										Subjek
									</th>
									<th
										class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs"
									>
										Tanggal
									</th>
									<th
										class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs"
									>
										Status
									</th>
									<th
										class="px-6 py-4 font-label-md text-on-surface-variant uppercase tracking-wider text-xs text-right"
									>
										Aksi
									</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-outline-variant">
								<!-- Message Row 1 (Unread) -->
								<tr class="message-row transition-colors cursor-pointer group">
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div
												class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-bold text-xs"
											>
												B
											</div>
											<div>
												<p class="font-label-md text-on-surface">
													Bambang Susanto
												</p>
												<p class="text-caption text-on-surface-variant">
													bambang.s@email.com
												</p>
											</div>
										</div>
									</td>
									<td class="px-6 py-4">
										<p class="font-label-md text-primary truncate max-w-xs">
											Pertanyaan Pendaftaran Siswa Baru 2024
										</p>
										<p
											class="text-caption text-on-surface-variant truncate max-w-xs"
										>
											Mohon info jadwal pendaftaran...
										</p>
									</td>
									<td class="px-6 py-4 text-body-md text-on-surface-variant">
										12 Okt 2023
									</td>
									<td class="px-6 py-4">
										<span
											class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-error-container text-on-error-container"
										>
											Belum Dibaca
										</span>
									</td>
									<td class="px-6 py-4 text-right">
										<div class="flex justify-end gap-2">
											<button
												class="p-2 text-primary hover:bg-primary-container/10 rounded-lg transition-colors"
												onclick="
													openMessageModal(
														'Bambang Susanto',
														'bambang.s@email.com',
														'Pertanyaan Pendaftaran Siswa Baru 2024',
														'12 Okt 2023',
														'Mohon informasi detail mengenai persyaratan pendaftaran siswa baru untuk tahun ajaran 2024/2025. Apakah ada jalur prestasi? Terima kasih.',
													)
												"
												title="Baca"
											>
												<span class="material-symbols-outlined"
													>visibility</span
												>
											</button>
											<button
												class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors"
												title="Hapus"
											>
												<span class="material-symbols-outlined">delete</span>
											</button>
										</div>
									</td>
								</tr>
								<!-- Message Row 2 -->
								<tr class="message-row transition-colors cursor-pointer">
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div
												class="w-8 h-8 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center font-bold text-xs"
											>
												S
											</div>
											<div>
												<p class="font-label-md text-on-surface">Siti Aminah</p>
												<p class="text-caption text-on-surface-variant">
													siti.aminah@gmail.com
												</p>
											</div>
										</div>
									</td>
									<td class="px-6 py-4">
										<p class="font-label-md text-on-surface truncate max-w-xs">
											Konfirmasi Pembayaran Seragam
										</p>
										<p
											class="text-caption text-on-surface-variant truncate max-w-xs"
										>
											Saya sudah mentransfer biaya seragam untuk anak saya...
										</p>
									</td>
									<td class="px-6 py-4 text-body-md text-on-surface-variant">
										11 Okt 2023
									</td>
									<td class="px-6 py-4">
										<span
											class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-surface-container-highest text-on-surface-variant"
										>
											Terbaca
										</span>
									</td>
									<td class="px-6 py-4 text-right">
										<div class="flex justify-end gap-2">
											<button
												class="p-2 text-primary hover:bg-primary-container/10 rounded-lg transition-colors"
											>
												<span class="material-symbols-outlined"
													>visibility</span
												>
											</button>
											<button
												class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors"
											>
												<span class="material-symbols-outlined">delete</span>
											</button>
										</div>
									</td>
								</tr>
								<!-- Message Row 3 -->
								<tr class="message-row transition-colors cursor-pointer">
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div
												class="w-8 h-8 rounded-full bg-primary-fixed text-on-primary-fixed flex items-center justify-center font-bold text-xs"
											>
												R
											</div>
											<div>
												<p class="font-label-md text-on-surface">
													Rudi Hermawan
												</p>
												<p class="text-caption text-on-surface-variant">
													rudi.h@perusahaan.com
												</p>
											</div>
										</div>
									</td>
									<td class="px-6 py-4">
										<p class="font-label-md text-on-surface truncate max-w-xs">
											Penawaran Kerjasama Kantin Sehat
										</p>
										<p
											class="text-caption text-on-surface-variant truncate max-w-xs"
										>
											Kami dari CV Maju Jaya ingin menawarkan pengadaan...
										</p>
									</td>
									<td class="px-6 py-4 text-body-md text-on-surface-variant">
										10 Okt 2023
									</td>
									<td class="px-6 py-4">
										<span
											class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-surface-container-highest text-on-surface-variant"
										>
											Terbaca
										</span>
									</td>
									<td class="px-6 py-4 text-right">
										<div class="flex justify-end gap-2">
											<button
												class="p-2 text-primary hover:bg-primary-container/10 rounded-lg transition-colors"
											>
												<span class="material-symbols-outlined"
													>visibility</span
												>
											</button>
											<button
												class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors"
											>
												<span class="material-symbols-outlined">delete</span>
											</button>
										</div>
									</td>
								</tr>
								<!-- Message Row 4 -->
								<tr class="message-row transition-colors cursor-pointer">
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div
												class="w-8 h-8 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-bold text-xs"
											>
												A
											</div>
											<div>
												<p class="font-label-md text-on-surface">Ani Wijaya</p>
												<p class="text-caption text-on-surface-variant">
													ani.wijaya@outlook.com
												</p>
											</div>
										</div>
									</td>
									<td class="px-6 py-4">
										<p class="font-label-md text-on-surface truncate max-w-xs">
											Lupa Password Akun Siswa
										</p>
										<p
											class="text-caption text-on-surface-variant truncate max-w-xs"
										>
											Bagaimana cara mereset password portal akademik?
										</p>
									</td>
									<td class="px-6 py-4 text-body-md text-on-surface-variant">
										09 Okt 2023
									</td>
									<td class="px-6 py-4">
										<span
											class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-surface-container-highest text-on-surface-variant"
										>
											Terbaca
										</span>
									</td>
									<td class="px-6 py-4 text-right">
										<div class="flex justify-end gap-2">
											<button
												class="p-2 text-primary hover:bg-primary-container/10 rounded-lg transition-colors"
											>
												<span class="material-symbols-outlined"
													>visibility</span
												>
											</button>
											<button
												class="p-2 text-error hover:bg-error-container/20 rounded-lg transition-colors"
											>
												<span class="material-symbols-outlined">delete</span>
											</button>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- Pagination -->
					<div
						class="px-6 py-4 bg-surface-container-low border-t border-outline-variant flex items-center justify-between"
					>
						<p class="text-caption text-on-surface-variant">
							Menampilkan 1-4 dari 124 pesan
						</p>
						<div class="flex gap-2">
							<button
								class="px-3 py-1.5 border border-outline-variant rounded-lg text-label-md hover:bg-white transition-colors disabled:opacity-50"
								disabled=""
							>
								Sebelumnya
							</button>
							<button
								class="px-3 py-1.5 border border-outline-variant rounded-lg text-label-md bg-primary text-on-primary"
							>
								1
							</button>
							<button
								class="px-3 py-1.5 border border-outline-variant rounded-lg text-label-md hover:bg-white transition-colors"
							>
								2
							</button>
							<button
								class="px-3 py-1.5 border border-outline-variant rounded-lg text-label-md hover:bg-white transition-colors"
							>
								3
							</button>
							<button
								class="px-3 py-1.5 border border-outline-variant rounded-lg text-label-md hover:bg-white transition-colors"
							>
								Selanjutnya
							</button>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- Message Modal (Hidden by default) -->
		<div
			class="fixed inset-0 bg-on-background/40 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4"
			id="messageModal"
		>
			<div
				class="bg-surface-container-lowest rounded-2xl shadow-2xl max-w-2xl w-full overflow-hidden border border-outline-variant transform transition-all"
			>
				<div
					class="p-6 border-b border-outline-variant flex justify-between items-start"
				>
					<div>
						<h4
							class="font-headline-md text-headline-md text-primary mb-1"
							id="modalSubject"
						>
							Subject Message
						</h4>
						<div
							class="flex items-center gap-2 text-caption text-on-surface-variant"
						>
							<span id="modalDate" class="">12 Okt 2023</span>
							<span class="">•</span>
							<span id="modalEmail" class="">sender@email.com</span>
						</div>
					</div>
					<button
						class="p-1 hover:bg-surface-variant rounded-full transition-colors"
						onclick="closeMessageModal()"
					>
						<span class="material-symbols-outlined">close</span>
					</button>
				</div>
				<div class="p-6">
					<div class="flex items-center gap-3 mb-6">
						<div
							class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-lg"
						>
							<span id="modalInitial" class="">B</span>
						</div>
						<div>
							<p class="font-label-md text-on-surface" id="modalSender">
								Sender Name
							</p>
							<p class="text-caption text-on-surface-variant">
								via Formulir Kontak Website
							</p>
						</div>
					</div>
					<div
						class="bg-surface-container-low p-4 rounded-xl text-body-md text-on-surface-variant leading-relaxed min-h-[200px]"
						id="modalContent"
					>
						Content of the message goes here...
					</div>
				</div>
				<div
					class="p-6 border-t border-outline-variant bg-surface flex justify-end gap-3"
				>
					<button
						class="px-6 py-2 rounded-xl font-label-md border border-outline-variant text-on-surface hover:bg-surface-variant transition-colors"
						onclick="closeMessageModal()"
					>
						Tutup
					</button>
					<button
						class="px-6 py-2 rounded-xl font-label-md bg-primary text-on-primary hover:bg-primary-container shadow-md transition-all active:scale-95 flex items-center gap-2"
					>
						<span class="material-symbols-outlined text-sm">reply</span>
						Balas Email
					</button>
				</div>
			</div>
		</div>
		
