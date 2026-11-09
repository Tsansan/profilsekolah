
		<!-- Main Content Canvas -->
		<main class="pt-24 min-h-screen p-md">
			<div class="max-w-5xl mx-auto space-y-md">
				<!-- Breadcrumbs -->
				<nav
					class="flex text-caption text-on-surface-variant gap-2 items-center"
				>
					<a class="hover:text-primary" href="#">Admin</a>
					<span class="material-symbols-outlined text-[14px]"
						>chevron_right</span
					>
					<span class="text-on-surface font-medium">Profil Sekolah</span>
				</nav>
				<!-- Header Section -->
				<div
					class="bg-white rounded-xl border border-outline-variant p-md shadow-sm overflow-hidden relative"
				>
					<div
						class="absolute top-0 right-0 w-64 h-full opacity-5 pointer-events-none"
					></div>
					<div class="relative z-10">
						<h3 class="font-headline-md text-headline-md text-primary mb-base">
							Informasi Identitas Sekolah
						</h3>
						<p class="text-body-md text-on-surface-variant max-w-2xl">
							Perbarui narasi sejarah, visi, dan misi SMP Negeri 2 Sidoharjo
							untuk ditampilkan pada website publik. Pastikan teks mencerminkan
							standar akademik yang tinggi.
						</p>
					</div>
				</div>
				<!-- Editor Form -->
				 <?php echo form_open('admin/profil_update', ['class' => 'space-y-md', 'method' => 'post', 'id' => 'profilForm']); ?>
		
					<!-- Sejarah Sekolah Section -->
					<div
						class="bg-white rounded-xl border border-outline-variant overflow-hidden shadow-sm"
					>
						<div
							class="bg-surface-container-low px-md py-sm border-b border-outline-variant flex items-center gap-2"
						>
							<span class="material-symbols-outlined text-primary"
								>history_edu</span
							>
							<h4
								class="font-label-md text-label-md text-primary uppercase tracking-wider"
							>
								Sejarah Sekolah
							</h4>
						</div>
						<div class="p-md">
							<div
								class="rich-text-editor rounded-lg p-sm bg-surface-bright flex flex-col"
							>
								<div
									class="flex gap-2 mb-sm pb-sm border-b border-outline-variant text-on-surface-variant"
								>
									<button
										class="p-1 hover:bg-surface-variant rounded transition-colors"
										type="button"
										onclick="applyFormat('bold', 'sejarahEditor', 'sejarah_sekolah')"
									>
										<span class="material-symbols-outlined text-md"
											>format_bold</span
										>
									</button>
									<button
										class="p-1 hover:bg-surface-variant rounded transition-colors"
										type="button"
										onclick="applyFormat('italic', 'sejarahEditor', 'sejarah_sekolah')"
									>
										<span class="material-symbols-outlined text-md"
											>format_italic</span
										>
									</button>
									<button
										class="p-1 hover:bg-surface-variant rounded transition-colors"
										type="button"
										onclick="applyFormat('underline', 'sejarahEditor', 'sejarah_sekolah')"
									>
										<span class="material-symbols-outlined text-md"
											>format_underlined</span
										>
									</button>
									<button
										class="p-1 hover:bg-surface-variant rounded transition-colors"
										type="button"
									>
										<span class="material-symbols-outlined text-md">link</span>
									</button>
								</div>
								<div
									id="sejarahEditor"
									contenteditable="true"
									class="w-full flex-grow bg-transparent border-none focus:outline-none text-body-md leading-relaxed min-h-[160px]"
								>
									SMP Negeri 2 Sidoharjo didirikan pada tahun 1984 dengan komitmen untuk memberikan layanan pendidikan menengah berkualitas di wilayah Sidoharjo. Seiring berjalannya waktu, sekolah ini telah berkembang pesat baik dari segi infrastruktur maupun prestasi akademik...
								</div>
								<textarea
									class="hidden"
									name="sejarah_sekolah"
									id="sejarah_sekolah"
								></textarea>
							</div>
						</div>
					</div>
					<!-- Tagline Sekolah Section -->
					<div
						class="bg-white rounded-xl border border-outline-variant overflow-hidden shadow-sm"
					>
						<div
							class="bg-surface-container-low px-md py-sm border-b border-outline-variant flex items-center gap-2"
						>
							<span class="material-symbols-outlined text-primary"
								>lightbulb</span
							>
							<h4
								class="font-label-md text-label-md text-primary uppercase tracking-wider"
							>
								Tagline Sekolah
							</h4>
						</div>
						<div class="p-md">
							<div
								class="rich-text-editor rounded-lg p-sm bg-surface-bright flex flex-col"
							>
								<div
									class="flex gap-2 mb-sm pb-sm border-b border-outline-variant text-on-surface-variant"
								>
									<button
										class="p-1 hover:bg-surface-variant rounded transition-colors"
										type="button"
											onclick="applyFormat('bold', 'taglineEditor', 'tagline_sekolah')"
									>
										<span class="material-symbols-outlined text-md"
											>format_bold</span
										>
									</button>
									<button
										class="p-1 hover:bg-surface-variant rounded transition-colors"
										type="button"
											onclick="applyFormat('italic', 'taglineEditor', 'tagline_sekolah')"
									>
										<span class="material-symbols-outlined text-md"
											>format_italic</span
										>
									</button>
									<button
										class="p-1 hover:bg-surface-variant rounded transition-colors"
										type="button"
											onclick="applyFormat('underline', 'taglineEditor', 'tagline_sekolah')"
									>
										<span class="material-symbols-outlined text-md"
												>format_underlined</span
										>
									</button>
									<button
										class="p-1 hover:bg-surface-variant rounded transition-colors"
										type="button"
									>
										<span class="material-symbols-outlined text-md">link</span>
									</button>
								</div>
								<div
									id="taglineEditor"
									contenteditable="true"
									class="w-full flex-grow bg-transparent border-none focus:outline-none text-body-md leading-relaxed min-h-[160px]"
								>
									SMP Negeri 2 Sidoharjo didirikan pada tahun 1984 dengan komitmen untuk memberikan layanan pendidikan menengah berkualitas di wilayah Sidoharjo. Seiring berjalannya waktu, sekolah ini telah berkembang pesat baik dari segi infrastruktur maupun prestasi akademik...
								</div>
								<textarea
									class="hidden"
									name="tagline_sekolah"
									id="tagline_sekolah"
								></textarea>
							</div>
						</div>
					</div>
					<!-- Bento Grid for Visi & Misi -->
					<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
						<!-- Visi Section -->
						<div
							class="bg-white rounded-xl border border-outline-variant overflow-hidden shadow-sm"
						>
							<div
								class="bg-surface-container-low px-md py-sm border-b border-outline-variant flex items-center gap-2"
							>
								<span class="material-symbols-outlined text-primary"
									>visibility</span
								>
								<h4
									class="font-label-md text-label-md text-primary uppercase tracking-wider"
								>
									Visi Sekolah
								</h4>
							</div>
							<div class="p-md">
								<textarea
									class="w-full bg-surface-bright border border-outline-variant rounded-lg p-sm focus:border-primary focus:ring-1 focus:ring-primary text-body-md min-h-[120px]"
									placeholder="Masukkan visi sekolah..."
									name="visi_sekolah"
									id="visi_sekolah"
								>
								Terwujudnya sekolah yang Unggul dalam Prestasi, Berkarakter Bangsa, dan Berwawasan Lingkungan berdasarkan Iman dan Taqwa.</textarea
								>
							</div>
						</div>
						<!-- Misi Section -->
						<div
							class="bg-white rounded-xl border border-outline-variant overflow-hidden shadow-sm"
						>
							<div
								class="bg-surface-container-low px-md py-sm border-b border-outline-variant flex items-center gap-2"
							>
								<span class="material-symbols-outlined text-primary">flag</span>
								<h4
									class="font-label-md text-label-md text-primary uppercase tracking-wider"
								>
									Misi Sekolah
								</h4>
							</div>
							<div class="p-md">
								<textarea
									class="w-full bg-surface-bright border border-outline-variant rounded-lg p-sm focus:border-primary focus:ring-1 focus:ring-primary text-body-md min-h-[120px]"
									placeholder="Masukkan misi sekolah..."
									name="misi_sekolah"
									id="misi_sekolah"
								>
								1. Melaksanakan pembelajaran dan bimbingan secara efektif.
								2. Menumbuhkan semangat keunggulan secara intensif kepada seluruh warga sekolah.
								3. Mendorong dan membantu setiap siswa untuk mengenali potensi dirinya.</textarea
								>
							</div>
						</div>
					</div>
					<!-- Alert Information -->
					<div
						class="bg-[#fffbeb] border-l-4 border-[#f59e0b] p-sm rounded shadow-sm flex items-start gap-3"
					>
						<span class="material-symbols-outlined text-[#f59e0b]">info</span>
						<p class="text-label-md text-on-surface-variant">
							Perubahan yang Anda simpan akan langsung dipublikasikan ke halaman
							utama website sekolah. Harap periksa kembali penulisan dan tata
							bahasa sebelum menekan tombol simpan.
						</p>
					</div>
					<!-- Action Button -->
					<div class="flex justify-end gap-3 pt-sm">
						<button
							class="px-6 py-2 border border-primary text-primary font-label-md rounded-lg hover:bg-primary/5 transition-all"
							type="button"
						>
							Batalkan
						</button>
						<button
							class="px-8 py-2 bg-primary text-white font-label-md rounded-lg hover:bg-primary-container shadow-md transition-all active:scale-95 flex items-center gap-2"
							type="submit"
						>
							<span class="material-symbols-outlined text-sm">save</span>
							Simpan Perubahan
						</button>
					</div>
	
				<?php echo form_close(); ?>
			</div>
		</main>
		<!-- Micro-interaction Scripts -->

		<script>
			function previewImage(input) {
				const preview = document.getElementById('previewImage');
				const previewText = document.getElementById('previewText');
				if (!input.files || !input.files[0]) {
					return;
				}

				const file = input.files[0];
				if (!file.type.startsWith('image/')) {
					previewText.textContent = 'File yang dipilih bukan gambar.';
					preview.src = '';
					preview.classList.add('grayscale', 'opacity-50');
					return;
				}

				preview.src = URL.createObjectURL(file);
				preview.classList.remove('grayscale', 'opacity-50');
				previewText.textContent = file.name;
			}

			function getEditor(editorId) {
				return document.getElementById(editorId);
			}

			function applyFormat(command, editorId, hiddenId) {
				const editor = getEditor(editorId);
				if (!editor) {
					return;
				}
				editor.focus();
				document.execCommand(command, false, null);
				syncEditorContent(editorId, hiddenId);
			}

			function syncEditorContent(editorId, hiddenId) {
				const editor = getEditor(editorId);
				const hidden = document.getElementById(hiddenId);
				if (!editor || !hidden) {
					return;
				}
				hidden.value = editor.innerHTML;
			}

			document.addEventListener('DOMContentLoaded', function () {
				const editors = [
					{ editorId: 'sejarahEditor', hiddenId: 'sejarah_sekolah' },
					{ editorId: 'taglineEditor', hiddenId: 'tagline_sekolah' }
				];

				editors.forEach(function (item) {
					const editor = getEditor(item.editorId);
					const hidden = document.getElementById(item.hiddenId);

					if (editor) {
						if (hidden && hidden.value) {
							editor.innerHTML = hidden.value;
						}

						editor.addEventListener('input', function () {
							syncEditorContent(item.editorId, item.hiddenId);
						});
						editor.addEventListener('keyup', function () {
							syncEditorContent(item.editorId, item.hiddenId);
						});
						syncEditorContent(item.editorId, item.hiddenId);
					}
				});
				// Load existing image
				const existingImage = document.getElementById('existingImage').value;
				if (existingImage) {
					const preview = document.getElementById('previewImage');
					const previewText = document.getElementById('previewText');
					preview.src = existingImage;
					preview.classList.remove('grayscale', 'opacity-50');
					previewText.textContent = existingImage.split('/').pop();
				}

				const imageInput = document.getElementById('gambar');
				if (imageInput) {
					imageInput.addEventListener('change', function () {
						previewImage(this);
					});
				}
			});
		</script>
		