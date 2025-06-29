function getDataByWindowUrlKey() {
    let windowUrl = $(location).attr("href");
    let windowUrlKey = windowUrl.replace(/\/\s*$/, "").split("/").pop();
    let url = baseUrl + "/api/book/" + windowUrlKey;

    axios
        .get(url, {}, apiHeaders)
        .then(function (response) {
            let product = response.data.data;
            console.log('[DATA] response..', product);
            let template = '';

            // FIXED IMAGE PATH HANDLING
            let coverPath = product.cover;
            if (!coverPath.startsWith('/')) {
                coverPath = '/' + coverPath;
            }

            $('.product-img-main-href').attr('href', coverPath);
            $('.product-img-main-src').attr('src', coverPath);

            $('#product-name').html(product.title);
            $('#product-price').html("IDR " + parseFloat(product.price).toLocaleString());
            $('#product-description').html(product.description);
            $('#product-author').html(product.author);
            $('#product-publisher').html(product.publisher);

            // Random review stars
            let stars = randomIntFromInterval(1, 5);
            template = '';
            for (let index = 0; index < 5; index++) {
                template += '<i class="' + (index < stars ? 'yellow' : '') + ' icon_star"></i>';
            }
            $('#product-review-stars').html(template);
            $('#product-review-body-count').html(randomIntFromInterval(1, 1000) + ' customer review');

            // Stock status
            let statusStock = randomIntFromInterval(0, 1);
            $('#product-status-stock').addClass(statusStock ? 'in-stock' : 'out-of-stock');
            $('#product-status-stock').html(statusStock ? '<p>Available: <span>In stock</span></p>' : "<p>Available: <span>Out of stock</span></p>");
            if (!statusStock) {
                $('.product-add-to-cart').hide();
                $('.product-add-to-cart-is-disabled').show();
            }

            // Tags
            let collectionOfTag = [
                'Pastry', 'Cake', 'Sweet', 'Savory', 'Cheese',
                'Strawberry', 'Cupcake', 'Bread', 'Choco cake',
                'Classic', 'Cheesy','French cake',
                'Love Cake', 'Cream', 'Birthday cake', 'Dessert'
            ];
            let selectedTags = collectionOfTag.sort(() => .5 - Math.random()).slice(0, 4);
            template = '';
            for (let index = 0; index < selectedTags.length; index++) {
                template += '<a href="#">' + selectedTags[index] + '</a>' + (index !== selectedTags.length - 1 ? ', ' : '');
            }
            $('#product-tags').html(template);
        })
        .catch(function (error) {
            console.log('[ERROR] response..', error.code);
            if (error.code === "ERR_BAD_REQUEST") {
                Swal.fire({
                    position: "top-end",
                    icon: "warning",
                    title: "Yaah...",
                    html: "Produk yang Anda cari tidak ditemukan",
                    showConfirmButton: false,
                    timer: 5000,
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    width: 600,
                    title: "Error",
                    html: error.message,
                    confirmButtonText: 'Ya',
                });
            }
        });
}

$(function () {
    getDataByWindowUrlKey();
});

$(document).on('click', '.wishlist-btn .heart-icon', function (e) {
    e.preventDefault();
    const el = $(this);
    el.toggleClass('active');
    el.text(el.hasClass('active') ? '❤️' : '♡');
});