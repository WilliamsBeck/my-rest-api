$(document).ready(function () {
    $('#profile-form').on('submit', function (e) {
        e.preventDefault();

        const name = $('#name').val().trim();
        const phone = $('#phone').val().trim();
        const address = $('#address').val().trim();

        if (!name || !phone || !address) {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please fill out all fields!',
            });
            return;
        }

        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Your profile information has been saved.',
            showConfirmButton: false,
            timer: 2000
        });
    });
});
