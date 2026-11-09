       <!-- Footer -->
        <footer
            class="bg-on-background dark:bg-surface-container-lowest text-on-primary dark:text-on-surface"
        >
            <div
                class="w-full py-lg px-gutter flex flex-col md:flex-row justify-between items-start gap-md max-w-[1280px] mx-auto"
            >
                <div class="flex-1">
                    <div class="flex items-center gap-xs mb-sm">
                        <span class="material-symbols-outlined text-headline-md">school</span>
                        <h2
                            class="font-headline-md text-headline-md font-bold text-on-primary dark:text-primary"
                        >
                            SMP Negeri 2 Sidoharjo
                        </h2>
                    </div>
                    <p
                        class="font-body-md text-body-md text-outline-variant dark:text-on-surface-variant max-w-sm"
                    >
                        Berdedikasi untuk menciptakan lingkungan belajar yang inspiratif dan
                        berintegritas bagi tunas bangsa.
                    </p>
                </div>
                <div class="flex flex-col gap-xs font-body-md text-body-md">
                    <span
                        class="font-label-md text-on-primary dark:text-primary uppercase tracking-wider mb-base"
                        >Kontak Cepat</span
                    >
                    <p class="text-outline-variant dark:text-on-surface-variant">
                        Alamat: Jl. Raya Sidoharjo No. 123
                    </p>
                    <p class="text-outline-variant dark:text-on-surface-variant">
                        Telp: (0271) 123456
                    </p>
                    <p class="text-outline-variant dark:text-on-surface-variant">
                        Email: info@smpn2sidoharjo.sch.id
                    </p>
                </div>
                <div class="flex flex-col gap-xs font-body-md text-body-md">
                    <span
                        class="font-label-md text-on-primary dark:text-primary uppercase tracking-wider mb-base"
                        >Navigasi</span
                    >
                    <a
                        class="text-outline-variant dark:text-on-surface-variant hover:text-primary-fixed dark:hover:text-primary transition-colors duration-200"
                        href="<?= site_url('profil') ?>"
                        >Profil Sekolah</a
                    >
                    <a
                        class="text-outline-variant dark:text-on-surface-variant hover:text-primary-fixed dark:hover:text-primary transition-colors duration-200"
                        href="<?= site_url('berita') ?> "
                        >Informasi PPDB</a
                    >
                    <a
                        class="text-outline-variant dark:text-on-surface-variant hover:text-primary-fixed dark:hover:text-primary transition-colors duration-200"
                        href="<?= site_url('galeri') ?>"
                        >Galeri Kegiatan</a
                    >
                    <a
                        class="text-outline-variant dark:text-on-surface-variant hover:text-primary-fixed dark:hover:text-primary transition-colors duration-200"
                        href="<?= site_url('kontak') ?>"
                        >Kontak</a
                    >   
                </div>
            </div>
            <div
                class="max-w-[1280px] mx-auto px-gutter py-md border-t border-white/10 dark:border-black/10 flex flex-col md:flex-row justify-between items-center gap-sm"
            >
                <p
                    class="font-body-md text-body-md text-outline-variant dark:text-on-surface-variant opacity-70"
                >
                    © 2024 SMP Negeri 2 Sidoharjo. All rights reserved.
                </p>
                <div class="flex gap-md">
                    <a
                        class="text-on-primary dark:text-on-surface hover:text-primary-fixed transition-colors"
                        href="#"
                        ><span class="material-symbols-outlined">face_nod</span></a
                    >
                    <a
                        class="text-on-primary dark:text-on-surface hover:text-primary-fixed transition-colors"
                        href="#"
                        ><span class="material-symbols-outlined">photo_camera</span></a
                    >
                    <a
                        class="text-on-primary dark:text-on-surface hover:text-primary-fixed transition-colors"
                        href="#"
                        ><span class="material-symbols-outlined">play_circle</span></a
                    >
                </div>
            </div>
        </footer>
        <script>

            // Simple scroll effect for navbar
            window.onscroll = function () {
                const nav = document.querySelector("nav");
                if (window.pageYOffset > 50) {
                    nav.classList.add("shadow-md");
                } else {
                    nav.classList.remove("shadow-md");
                }
            };

            // Micro-interactions for buttons
            document.querySelectorAll("button").forEach((btn) => {
                btn.addEventListener("mousedown", () => {
                    btn.style.transform = "scale(0.98)";
                });
                btn.addEventListener("mouseup", () => {
                    btn.style.transform = "scale(1)";
                });
            });

              // Simple interactive elements
            document.addEventListener("DOMContentLoaded", () => {
                // Hover effect logic if needed
                const cards = document.querySelectorAll(".hover-card");
                cards.forEach((card) => {
                    card.addEventListener("mouseenter", () => {
                        card.classList.add("shadow-lg");
                    });
                    card.addEventListener("mouseleave", () => {
                        card.classList.remove("shadow-lg");
                    });
                });
            });

              // Simple form interaction
            document.getElementById("contactForm").addEventListener("submit", function (e) {
                e.preventDefault();
                const btn = this.querySelector('button[type="submit"]');
                const originalContent = btn.innerHTML;
                console.log("Form submitted");
                const nama = document.getElementById("nama").value;
                const email = document.getElementById("email").value;
                const subjek = document.getElementById("subjek").value;
                const pesan = document.getElementById("pesan").value;
                console.log(`Nama: ${nama}, Email: ${email}, Subjek: ${subjek}, Pesan: ${pesan}`);

                btn.innerHTML = "<span>Mengirim...</span>";
                btn.disabled = true;
                    
                // Artificial delay to simulate submission
                setTimeout(() => {
                    btn.innerHTML =
                        '<span class="material-symbols-outlined">check_circle</span> <span>Berhasil Terkirim</span>';
                    btn.classList.remove("bg-primary");
                    btn.classList.add("bg-green-600");

                    setTimeout(() => {
                        btn.innerHTML = originalContent;
                        btn.classList.add("bg-primary");
                        btn.classList.remove("bg-green-600");
                        btn.disabled = false;
                        document.getElementById("contactForm").reset();
                    }, 3000);
                }, 1500);
            });

            // Background scroll effect
            window.addEventListener("scroll", () => {
                const scrolled = window.pageYOffset;
                const heroImage = document.querySelector("section img");
                if (heroImage) {
                    heroImage.style.transform = `translateY(${scrolled * 0.4}px)`;
                }
            });

             // Simple interactive elements
            document.addEventListener("DOMContentLoaded", () => {
                // Hover effect logic if needed
                const cards = document.querySelectorAll(".hover-card");
                cards.forEach((card) => {
                    card.addEventListener("mouseenter", () => {
                        card.classList.add("shadow-lg");
                    });
                    card.addEventListener("mouseleave", () => {
                        card.classList.remove("shadow-lg");
                    });
                });
            });

            // Simple intersection observer for reveal animations
			const observerOptions = {
				threshold: 0.1,
			};

			const observer = new IntersectionObserver((entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						entry.target.classList.add("opacity-100", "translate-y-0");
						entry.target.classList.remove("opacity-0", "translate-y-8");
					}
				});
			}, observerOptions);

			document.querySelectorAll("section").forEach((section) => {
				section.classList.add("transition-all", "duration-700", "ease-out");
			});

            function schoolLocation() {
                const url = `https://maps.app.goo.gl/ey4RaXGcNp3taf436`;
                window.open(url, "_blank");
            }
        </script>
    </body>
</html>
