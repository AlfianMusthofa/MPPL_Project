$(document).ready(function () {
    $('.button').on('click', function () {
        $('.button').removeClass('active');
        $('.button').css('backgroundColor', 'white');
        $(this).addClass('active');
        $(this).css('backgroundColor', 'green');

        let etalase = $(this).html();
        console.log(etalase)
        let content = '';

        fetch('fetchData.php')
            .then(response => response.json())
            .then(data => {
                const products = data.products
                $.each(products, function (index, item) {
                    const id = item.id;
                    const productName = item.productName;
                    const productPrice = item.productPrice;
                    const productImage = item.productImage;
                    const productStar = item.productStar;
                    const productSold = item.productSold;
                    const shopAddress = item.shopAddress;
                    const category = item.category;

                    if (etalase == category) {
                        content += `<a href="productPage.php?id=${id}">
                        <div class="kartu">
                            <img src="assets/${productImage}" alt="">
                            <div class="caption">
                                <div class="product-title">
                                    <p>${productName}</p>
                                </div>
                                <div class="price">
                                    <h4>${productPrice}</h4>
                                </div>
                                <div class="address">
                                    <img src="assets/badge_os.png" alt="">
                                    <p>${shopAddress}</p>
                                </div>
                                <div class="rating">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="sold">
                                        <p>${productStar} | ${productSold} terjual</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>`
                    }

                })
                $('#products .baris').html(content);
            })
    })
})

$(document).ready(function () {
    fetch('fetchData.php')
        .then(response => response.json())
        .then(data => {
            const products = data.products;
            $.each(products, function (i, data) {
                const id = data.id;
                const productName = data.productName;
                const productPrice = data.productPrice;
                const productImage = data.productImage;
                const productStar = data.productStar;
                const productSold = data.productSold;
                const shopAddress = data.shopAddress;
                $('#products .baris').append(`<a href="productPage.php?id=${id}">
                <div class="kartu">
                    <img src="assets/${productImage}" alt="">
                    <div class="caption">
                        <div class="product-title">
                            <p>${productName}</p>
                        </div>
                        <div class="price">
                            <h4>${productPrice}</h4>
                        </div>
                        <div class="address">
                            <img src="assets/badge_os.png" alt="">
                            <p>${shopAddress}</p>
                        </div>
                        <div class="rating">
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <div class="sold">
                                <p>${productStar} | ${productSold} terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>`)
            })
        })
})