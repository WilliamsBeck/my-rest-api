

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
    const statusDiv = document.getElementById("contact-status");

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        // Ambil data dari form
        const name = form.name.value.trim();
        const email = form.email.value.trim();
        const message = form.message.value.trim();

        if (!name || !email || !message) {
            Swal.fire({
                icon: 'warning',
                title: 'Incomplete Form',
                text: 'Please fill in all fields!',
                confirmButtonColor: '#3085d6',
            });
            return;
        }

        // Simulasi kirim data (aslinya pakai AJAX/Fetch ke backend)
        setTimeout(() => {
            // Reset form
            form.reset();

            // Tampilkan popup sukses
            Swal.fire({
                icon: 'success',
                title: 'Message Sent!',
                text: 'Thank you for contacting Wilbake. We will get back to you shortly.',
                confirmButtonColor: '#3085d6',
            });

            // Kosongkan status div (jika ada)
            statusDiv.innerHTML = '';
        }, 500);
    });
});
