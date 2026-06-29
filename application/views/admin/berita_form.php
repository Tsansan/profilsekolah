s		<!-- Main Content Wrapper -->
		<main class="ml-64 min-h-screen">
			<!-- Canvas Area -->
			<div class="mt-16 p-8">
				<!-- Breadcrumbs -->
				<nav
					class="flex items-center gap-2 mb-8 text-on-surface-variant font-label-md text-label-md"
				>
					<a
						class="hover:text-primary transition-colors flex items-center gap-1"
						href="#"
					>
						<span class="material-symbols-outlined text-sm">dashboard</span>
						Dashboard
					</a>
					<span class="material-symbols-outlined text-sm">chevron_right</span>
					<a class="hover:text-primary transition-colors" href="#">Berita</a>
					<span class="material-symbols-outlined text-sm">chevron_right</span>
					<span class="text-primary font-bold">Tambah Berita Baru</span>
				</nav>
				<?php if ($this->session->flashdata('success')): ?>
					<div class="mb-4 rounded-lg border border-green-200 bg-green-50 p-3 text-sm text-green-700">
						<?= $this->session->flashdata('success') ?>
					</div>
				<?php endif; ?>
				<?php if ($this->session->flashdata('error')): ?>
					<div class="mb-4 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700">
						<?= $this->session->flashdata('error') ?>
					</div>
				<?php endif; ?>
				<div class="flex justify-between items-end mb-8">
					<div>
						<h2
							class="font-headline-lg text-headline-lg text-on-background mb-2"
						>
							Tulis Berita Baru
						</h2>
						<p class="text-on-surface-variant max-w-2xl">
							Bagikan informasi terbaru mengenai kegiatan, prestasi, atau
							pengumuman akademik sekolah kepada wali murid dan siswa.
						</p>
					</div>
					<div class="flex gap-3">
						<button
							type="button"
							class="px-6 py-2.5 border-2 border-primary text-primary font-label-md text-label-md rounded-xl hover:bg-primary-fixed transition-all active:scale-95"
						>
							Simpan sebagai Draft
						</button>
						<button
							type="submit"
							form="beritaForm"
							class="px-6 py-2.5 bg-primary text-white font-label-md text-label-md rounded-xl hover:bg-primary-fixed-variant transition-all active:scale-95 flex items-center gap-2 shadow-lg shadow-primary/10"
						>
							<span class="material-symbols-outlined text-sm">send</span>
							Terbitkan Berita
						</button>
					</div>
				</div>

				<?= form_open('admin/simpan_berita', array('id' => 'beritaForm', 'method' => 'post', 'enctype' => 'multipart/form-data')) ?>
				<!-- Bento Grid Layout for Form -->
				<div class="grid grid-cols-12 gap-gutter">
					<!-- Main Form Column -->
					<div class="col-span-12 lg:col-span-8 space-y-gutter">
						<!-- Basic Information Card -->
						<section
							class="bg-surface-container-lowest border border-outline-variant rounded-xl p-8 shadow-sm"
						>
							<h3
								class="font-label-md text-label-md text-primary mb-6 flex items-center gap-2"
							>
								<span class="material-symbols-outlined text-lg">edit_note</span>
								Informasi Utama
							</h3>
							<div class="space-y-6">
								<div>
									<label
										class="block font-label-md text-label-md text-on-surface-variant mb-2"
										for="judul"
										>Judul Berita</label
									>
									<input
										class="w-full bg-white border-outline-variant rounded-xl px-4 py-3 focus:ring-primary focus:border-primary transition-all text-body-md placeholder:text-outline/50"
												id="judul"
												name="judul"
												placeholder="Masukkan judul yang menarik..."
										type="text"
									/>
								</div>
								<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
									<div>
										<label
											class="block font-label-md text-label-md text-on-surface-variant mb-2"
											for="kategori"
											>Kategori</label
										>
										<select
											class="w-full bg-white border-outline-variant rounded-xl px-4 py-3 focus:ring-primary focus:border-primary transition-all text-body-md appearance-none"
											id="kategori"
											name="kategori"
										>
											<option disabled="" selected="" value="">
												Pilih Kategori
											</option>
											<option value="pengumuman">Pengumuman</option>
											<option value="akademik">Akademik</option>
											<option value="prestasi">Prestasi</option>
											<option value="kegiatan">Kegiatan</option>
										</select>
									</div>
									<div>
										<label
											class="block font-label-md text-label-md text-on-surface-variant mb-2"
											for="tanggal"
											>Tanggal Publikasi</label
										>
										<div class="relative">
											<input
												class="w-full bg-white border-outline-variant rounded-xl px-4 py-3 focus:ring-primary focus:border-primary transition-all text-body-md"
												id="tanggal"
												name="tanggal"
												type="date"
											/>
										</div>
									</div>
								</div>
							</div>
						</section>
						<!-- Content Editor Card -->
						<section
							class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm"
						>
							<div
								class="px-8 py-4 bg-surface-container-low border-b border-outline-variant flex justify-between items-center"
							>
								<h3
									class="font-label-md text-label-md text-primary flex items-center gap-2"
								>
									<span class="material-symbols-outlined text-lg">article</span>
									Isi Konten Berita
								</h3>
								<div class="flex items-center gap-1">
									<button
											type="button"
											class="p-1.5 hover:bg-white rounded transition-colors text-on-surface-variant"
											onclick="runCommand('undo')"
										>
											<span class="material-symbols-outlined text-lg">undo</span>
										</button>
										<button
											type="button"
											class="p-1.5 hover:bg-white rounded transition-colors text-on-surface-variant"
											onclick="runCommand('redo')"
									>
										<span class="material-symbols-outlined text-lg">redo</span>
									</button>
								</div>
							</div>
							<!-- Mock Rich Text Toolbar -->
							<div
								class="px-8 py-3 flex flex-wrap items-center gap-2 border-b border-outline-variant bg-surface-container-lowest"
							>
								<div
									class="flex items-center gap-1 pr-3 border-r border-outline-variant"
								>
									<button
										type="button"
										class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-on-surface font-bold"
										onclick="applyFormat('bold')"
									>
										B
									</button>
									<button
										type="button"
										class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-on-surface italic"
										onclick="applyFormat('italic')"
									>
										I
									</button>
									<button
										type="button"
										class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-on-surface underline"
										onclick="applyFormat('underline')"
									>
										U
									</button>
								</div>
								<div
									class="flex items-center gap-1 pr-3 border-r border-outline-variant"
								>
									<button
											type="button"
											class="p-1.5 hover:bg-surface-container-low rounded text-on-surface-variant"
											onclick="runCommand('justifyLeft')"
									>
										<span class="material-symbols-outlined text-lg"
											>format_align_left</span
										>
									</button>
									<button
											type="button"
											class="p-1.5 hover:bg-surface-container-low rounded text-on-surface-variant"
											onclick="runCommand('justifyCenter')"
									>
										<span class="material-symbols-outlined text-lg"
											>format_align_center</span
										>
									</button>
									<button
											type="button"
											class="p-1.5 hover:bg-surface-container-low rounded text-on-surface-variant"
											onclick="runCommand('justifyRight')"
									>
										<span class="material-symbols-outlined text-lg"
											>format_align_right</span
										>
									</button>
								</div>
								<div
									class="flex items-center gap-1 pr-3 border-r border-outline-variant"
								>
									<button
											type="button"
											class="p-1.5 hover:bg-surface-container-low rounded text-on-surface-variant"
											onclick="runCommand('insertUnorderedList')"
										>
											<span class="material-symbols-outlined text-lg"
												>format_list_bulleted</span
											>
										</button>
										<button
											type="button"
											class="p-1.5 hover:bg-surface-container-low rounded text-on-surface-variant"
											onclick="runCommand('insertOrderedList')"
									>
										<span class="material-symbols-outlined text-lg"
											>format_list_numbered</span
										>
									</button>
								</div>
								<button
										type="button"
										class="p-1.5 hover:bg-surface-container-low rounded text-on-surface-variant flex items-center gap-1 px-2"
										onclick="insertLink()"
									>
										<span class="material-symbols-outlined text-lg">link</span>
										<span class="text-xs font-label-md">Tautkan</span>
									</button>
									<button
										type="button"
										class="p-1.5 hover:bg-surface-container-low rounded text-on-surface-variant flex items-center gap-1 px-2"
										onclick="insertImage()"
								>
									<span class="material-symbols-outlined text-lg">image</span>
									<span class="text-xs font-label-md">Sisipkan Gambar</span>
								</button>
							</div>
							<div class="p-8">
								<div
									id="editorContent"
									contenteditable="true"
									class="w-full min-h-[400px] border-none focus:outline-none p-0 text-body-md leading-relaxed text-on-surface"
									data-placeholder="Tuliskan berita lengkap di sini..."
								></div>
								<textarea id="isiBerita" name="isi_berita" class="hidden"></textarea>
							</div>
							<div
								class="px-8 py-3 bg-surface-container-low text-on-surface-variant flex justify-between items-center"
							>
								<span class="text-caption font-caption italic"
									>Terakhir disimpan otomatis pada 14:20 WIB</span
								>
								<span class="text-caption font-caption"
									>0 Kata | 0 Karakter</span
								>
							</div>
						</section>
					</div>
					<!-- Sidebar Form Column -->
					<div class="col-span-12 lg:col-span-4 space-y-gutter">
						<!-- Image Upload Card -->
						<section
							class="bg-surface-container-lowest border border-outline-variant rounded-xl p-8 shadow-sm"
						>
							<h3
								class="font-label-md text-label-md text-primary mb-6 flex items-center gap-2"
							>
								<span class="material-symbols-outlined text-lg">image</span>
								Gambar Unggulan
							</h3>
							<div class="file-upload-dashed border-2 border-dashed border-outline-variant rounded-xl transition-all duration-300 hover:bg-surface-container-low group mb-4">
								<label for="gambar" class="relative block cursor-pointer">
									<div class="py-12 flex flex-col items-center justify-center px-4">
										<div class="w-16 h-16 bg-primary-fixed rounded-full flex items-center justify-center text-primary mb-4 group-hover:scale-110 transition-transform duration-300">
											<span class="material-symbols-outlined" style="font-variation-settings: &quot;opsz&quot; 48">upload_file</span>
										</div>
										<p class="font-label-md text-label-md text-on-surface text-center">Klik untuk unggah gambar</p>
										<p class="font-caption text-caption text-on-surface-variant text-center mt-1">atau tarik dan lepas di sini</p>
										<p class="font-caption text-caption text-outline mt-4 italic">Format: JPG, PNG (Maks 5MB)</p>
										<input id="gambar" name="gambar" type="file" class="absolute inset-0 h-full w-full opacity-0 cursor-pointer" accept="image/png, image/jpeg, image/jpg" onchange="previewImage(this)" />
									</div>
								</label>
							</div>
							<div class="bg-surface-container-low rounded-lg p-4 flex items-center gap-4" id="previewContainer">
								<div class="w-20 h-14 bg-outline-variant rounded overflow-hidden relative">
									<img id="previewImage" class="w-full h-full object-cover grayscale opacity-50" src="" alt="Pratinjau gambar" />
								</div>
								<div class="flex-1">
									<p id="previewText" class="text-xs font-label-md text-on-surface leading-tight">Belum ada pratinjau</p>
									<p class="text-[10px] text-on-surface-variant mt-1">Resolusi disarankan: 1200x630px</p>
								</div>
							</div>
						</section>
						<!-- Publishing Settings Card -->
					</div>
				</div>
				<?= form_close() ?>
			</div>
			<!-- Footer Area -->
			<footer
				class="p-8 mt-12 border-t border-outline-variant text-center lg:text-left"
			>
				<p class="text-caption font-caption text-on-surface-variant">
					© 2024 SMP Negeri 2 Sidoharjo. Sistem Administrasi Akademik Mandiri.
					<span class="mx-2">|</span>
					<a class="hover:text-primary transition-colors" href="#"
						>Pusat Bantuan</a
					>
					<span class="mx-2">|</span>
					<a class="hover:text-primary transition-colors" href="#"
						>Kebijakan Privasi</a
					>
				</p>
			</footer>
		</main>
		<script>
			function getEditor() {
				return document.getElementById('editorContent');
			}

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

			function applyFormat(command) {
				const editor = getEditor();
				if (!editor) {
					return;
				}
				editor.focus();
				document.execCommand(command, false, null);
				syncEditorContent();
			}

			function runCommand(command) {
				const editor = getEditor();
				if (!editor) {
					return;
				}
				editor.focus();
				document.execCommand(command, false, null);
				syncEditorContent();
			}

			function insertLink() {
				const editor = getEditor();
				if (!editor) {
					return;
				}
				const url = prompt('Masukkan URL tautan:', 'https://');
				if (url) {
					editor.focus();
					document.execCommand('createLink', false, url);
					syncEditorContent();
				}
			}

			function insertImage() {
				const editor = getEditor();
				if (!editor) {
					return;
				}
				const url = prompt('Masukkan URL gambar:', 'https://');
				if (url) {
					editor.focus();
					document.execCommand('insertImage', false, url);
					syncEditorContent();
				}
			}

			function syncEditorContent() {
				const editor = getEditor();
				const hidden = document.getElementById('isiBerita');
				if (!editor || !hidden) {
					return;
				}
				hidden.value = editor.innerHTML;
			}

			document.addEventListener('DOMContentLoaded', function () {
				const editor = getEditor();
				if (editor) {
					editor.addEventListener('input', syncEditorContent);
					editor.addEventListener('keyup', syncEditorContent);
					syncEditorContent();
				}

				const imageInput = document.getElementById('gambar');
				if (imageInput) {
					imageInput.addEventListener('change', function () {
						previewImage(this);
					});
				}
			});
		</script>
	