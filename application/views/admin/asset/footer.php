<script>
			function openMessageModal(sender, email, subject, date, content) {
				document.getElementById("modalSender").innerText = sender;
				document.getElementById("modalEmail").innerText = email;
				document.getElementById("modalSubject").innerText = subject;
				document.getElementById("modalDate").innerText = date;
				document.getElementById("modalContent").innerText = content;
				document.getElementById("modalInitial").innerText = sender.charAt(0);

				const modal = document.getElementById("messageModal");
				modal.classList.remove("hidden");
				modal.classList.add("flex");

				// Animation for modal entry
				setTimeout(() => {
					modal.querySelector("div").classList.add("scale-100", "opacity-100");
					modal.querySelector("div").classList.remove("scale-95", "opacity-0");
				}, 10);
			}

			function closeMessageModal() {
				const modal = document.getElementById("messageModal");
				modal.querySelector("div").classList.remove("scale-100", "opacity-100");
				modal.querySelector("div").classList.add("scale-95", "opacity-0");

				setTimeout(() => {
					modal.classList.add("hidden");
					modal.classList.remove("flex");
				}, 200);
			}

			// Close on escape
			window.addEventListener("keydown", (e) => {
				if (e.key === "Escape") closeMessageModal();
			});

			// berita
			// Micro-interactions for table rows
			document.querySelectorAll("tbody tr").forEach((row) => {
				row.addEventListener("click", (e) => {
					if (!e.target.closest("button")) {
						// Logic for opening news details could go here
						console.log("Opening news detail...");
					}
				});
			});

			// Simple Delete Confirmation Simulation
			document
				.querySelectorAll(
					'button:has(.material-symbols-outlined:contains("delete"))',
				)
				.forEach((btn) => {
					btn.addEventListener("click", (e) => {
						e.stopPropagation();
						if (confirm("Apakah Anda yakin ingin menghapus berita ini?")) {
							const row = btn.closest("tr");
							row.style.opacity = "0";
							setTimeout(() => row.remove(), 300);
						}
					});
				});

			// Search highlight (Visual only)
			const searchInput = document.querySelector('input[type="text"]');
			searchInput.addEventListener("input", (e) => {
				const query = e.target.value.toLowerCase();
				document.querySelectorAll("tbody tr").forEach((row) => {
					const text = row.textContent.toLowerCase();
					row.style.display = text.includes(query) ? "" : "none";
				});
			});

			// profil
			document.querySelector("form").addEventListener("submit", function (e) {
				e.preventDefault();
				const btn = e.target.querySelector('button[type="submit"]');
				const originalContent = btn.innerHTML;

				btn.innerHTML =
					'<span class="material-symbols-outlined animate-spin text-sm">sync</span> Menyimpan...';
				btn.disabled = true;

				setTimeout(() => {
					btn.innerHTML =
						'<span class="material-symbols-outlined text-sm">check</span> Tersimpan!';
					btn.classList.replace("bg-primary", "bg-green-600");

					setTimeout(() => {
						btn.innerHTML = originalContent;
						btn.classList.replace("bg-green-600", "bg-primary");
						btn.disabled = false;
					}, 2000);
				}, 1200);
			});

			// Hover effects for side nav
			const navLinks = document.querySelectorAll("aside nav a");
			navLinks.forEach((link) => {
				link.addEventListener("mouseenter", () => {
					if (!link.classList.contains("bg-secondary-container")) {
						link.style.paddingLeft = "1.25rem";
					}
				});
				link.addEventListener("mouseleave", () => {
					if (!link.classList.contains("bg-secondary-container")) {
						link.style.paddingLeft = "1rem";
					}
				});
			});

			// berita form
			// Simple Interaction: Date Picker Default to Today
			window.addEventListener("DOMContentLoaded", () => {
				const dateInput = document.getElementById("tanggal");
				if (dateInput) {
					const today = new Date().toISOString().split("T")[0];
					dateInput.value = today;
				}
			});

			// Toggle effects for buttons
			document.querySelectorAll("button").forEach((btn) => {
				btn.addEventListener("mousedown", () => btn.classList.add("scale-95"));
				btn.addEventListener("mouseup", () => btn.classList.remove("scale-95"));
				btn.addEventListener("mouseleave", () =>
					btn.classList.remove("scale-95"),
				);
			});
		</script>
	</body>
</html>