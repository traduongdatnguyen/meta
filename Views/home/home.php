<link rel="stylesheet" href="public/assets/css/skins/skin-demo-4.css">
<link rel="stylesheet" href="public/assets/css/demos/demo-4.css">


<main class="main">
    <?php require_once("slider.php"); ?>
    <div class="container">
        <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
            <div class="row">
                <?php

                foreach ($data_categories as $item) { ?>
                    <div class="col-6 col-sm-4 col-lg-1">
                        <a href="type-product-<?= $item['MaDM'] ?>" class="cat-block">
                            <figure>
                                <span>
                                    <img src="public/assets/images/demos/demo-4/cats/<?= $item['HinhAnh'] ?>" alt="Category image">
                                </span>
                            </figure>

                            <h3 class="cat-block-title"><?= $item['TenDM'] ?></h3><!-- End .cat-block-title -->
                        </a>
                    </div><!-- End .col-sm-4 col-lg-2 -->

                <?php
                } ?>
            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->
    <div class="mb-5"></div><!-- End .mb-5 -->

    <!-- Recommendation For You -->
    <div class="container for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Recommendation For You</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <a href="recommendation" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="products">

        <!-- Hiển thị sản phẩm gọi ý sử dụng hàm randum để truy vấn -->
            <div class="row justify-content-center">
                <?php foreach ($data_recommendationforyou as $item) : ?>
                    <div class="col-5 col-md-3 col-lg-2">
                        <div class="product product-2">
                            <figure class="product-media">
                                <?php if ($item['TrangThai'] == 1) { ?>
                                    <span class="product-label label-circle label-new">New</span>
                                <?php  } elseif ($item['TrangThai'] == 3) { ?>
                                    <span class="product-label label-circle label-sale">Sale</span>
                                <?php } else { ?>
                                    <span class="product-label label-circle label-top">Top</span>
                                <?php } ?>

                                <a href="<?= $item['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $item['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=addwishlist&id=<?= $item['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $item['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Recommendation</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="<?= $item['MaSP'] ?>.html"><?= $item['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <?php if ($item['SoLuong'] == 0) { ?>
                                        <span class="old-price">Out of stock now</span>
                                    <?php } else { ?>
                                        <span class="new-price">$ <?= number_format($item['DonGia']) ?></span>
                                    <?php } ?>
                                </div><!-- End .product-price -->

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                <?php endforeach; ?>
            </div><!-- End .row -->
        </div><!-- End .products -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">BEST - SELLING PRODUCTS</h2><!-- End .title -->
            </div><!-- End .heading-left -->
            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab" aria-controls="new-tv-tab" aria-selected="false">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab" role="tab" aria-controls="new-computers-tab" aria-selected="false">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab" role="tab" aria-controls="new-phones-tab" aria-selected="false">Tablets & Cell Phones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab" role="tab" aria-controls="new-watches-tab" aria-selected="false">Smartwatches</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="new-acc-link">View All LAPTOP, HIGHLIGHTS SIGNS <i class="icon-long-arrow-right"></i></a>
                    </li> -->
                </ul>
            </div>
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
<!-- Hiển thị sản phẩm bán chạy nhất : join với 3 table: sản phẩm, chi tiết hóa đơn và hóa đơn dùng DISTINCT để lọc những trường trùng nhau  -->
                    <?php foreach ($best_selling as $items) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $items['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $items['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $items['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="?act=detail&id=<?= $items['MaSP'] ?>"><?= $items['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($items['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                            <div class="product-body">
                                <h3 class="product-title"></h3><!-- End .product-title -->
                                <div class="product-price">

                                </div><!-- End .product-price -->
                                <div class="ratings-container">

                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->


    <div class="mb-3"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">MOST VIEW</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab" aria-controls="new-tv-tab" aria-selected="false">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab" role="tab" aria-controls="new-computers-tab" aria-selected="false">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab" role="tab" aria-controls="new-phones-tab" aria-selected="false">Tablets & Cell Phones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab" role="tab" aria-controls="new-watches-tab" aria-selected="false">Smartwatches</a>
                    </li> -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" id="new-acc-link">View All LAPTOP, HIGHLIGHTS SIGNS <i class="icon-long-arrow-right"></i></a>
                    </li> -->
                </ul>
            </div>
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
<!-- Hiển thị sản phẩm lượt xem nhiều nhất thì: join với bảng liveview để hiển thị sản phẩm và lấy số lượng view -->
                    <?php foreach ($top_rated as $items) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $items['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $items['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $items['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="?act=detail&id=<?= $items['MaSP'] ?>"><?= $items['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($items['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( <?= $items['SoLuongView'] ?> Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                            <div class="product-body">
                                <h3 class="product-title"></h3><!-- End .product-title -->
                                <div class="product-price">

                                </div><!-- End .product-price -->
                                <div class="ratings-container">

                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-4"></div>

    <div class="container">
        <div class="cta cta-border mb-5" style="background-image: url(public/assets/images/demos/demo-4/bg-1.jpg);">
            <img src="public/assets/images/demos/demo-4/camera.png" alt="camera" class="cta-img">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="cta-content">
                        <div class="cta-text text-right text-white">
                            <p>Shop Today’s Deals <br><strong>Awesome Made Easy. HERO7 Black</strong></p>
                        </div><!-- End .cta-text -->
                        <a href="#" class="btn btn-primary btn-round"><span>Shop Now - $429.99</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .cta-content -->
                </div>
            </div><!-- End .row -->
        </div><!-- End .cta -->
    </div><!-- End .container -->
    <div class="mb-3"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">LATEST PHONE</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab" aria-controls="new-tv-tab" aria-selected="false">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab" role="tab" aria-controls="new-computers-tab" aria-selected="false">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab" role="tab" aria-controls="new-phones-tab" aria-selected="false">Tablets & Cell Phones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab" role="tab" aria-controls="new-watches-tab" aria-selected="false">Smartwatches</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" id="new-acc-link">View All Smart Phone <i class="icon-long-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <?php foreach ($data_limit as $items) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $items['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $items['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $items['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="?act=detail&id=<?= $items['MaSP'] ?>"><?= $items['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($items['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                            <div class="product-body">
                                <h3 class="product-title"></h3><!-- End .product-title -->
                                <div class="product-price">

                                </div><!-- End .product-price -->
                                <div class="ratings-container">

                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->


    <div class="mb-3"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">LAPTOP, HIGHLIGHTS SIGNS</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab" aria-controls="new-tv-tab" aria-selected="false">TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab" role="tab" aria-controls="new-computers-tab" aria-selected="false">Laptop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab" role="tab" aria-controls="new-phones-tab" aria-selected="false">Tablets & Cell Phones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab" role="tab" aria-controls="new-watches-tab" aria-selected="false">Smartwatches</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" id="new-acc-link">View All LAPTOP, HIGHLIGHTS SIGNS <i class="icon-long-arrow-right"></i></a>
                    </li>
                </ul>
            </div>
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": true, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <?php foreach ($data_laptap as $items) : ?>
                        <div class="product product-2">
                            <figure class="product-media">
                                <a href="<?= $items['MaSP'] ?>.html">
                                    <img src="public/assets/images/products/<?= $items['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div><!-- End .product-action -->

                                <div class="product-action">
                                    <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="?act=quickView&id=<?= $items['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <h3 class="product-title"><a href="?act=detail&id=<?= $items['MaSP'] ?>"><?= $items['TenSP'] ?></a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    $<?= number_format($items['DonGia']) ?>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                            <div class="product-body">
                                <h3 class="product-title"></h3><!-- End .product-title -->
                                <div class="product-price">

                                </div><!-- End .product-price -->
                                <div class="ratings-container">

                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    <?php endforeach; ?>

                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- End .mb-5 -->

<div class="container new-arrivals">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">HIGHLIGHTS ACCESSORIES</h2><!-- End .title -->
        </div><!-- End .heading-left -->

        <div class="heading-right">
            <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                <!-- <li class="nav-item">
                    <a class="nav-link active" id="new-all-link" data-toggle="tab" href="#new-all-tab" role="tab" aria-controls="new-all-tab" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-tv-link" data-toggle="tab" href="#new-tv-tab" role="tab" aria-controls="new-tv-tab" aria-selected="false">TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-computers-link" data-toggle="tab" href="#new-computers-tab" role="tab" aria-controls="new-computers-tab" aria-selected="false">Laptop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-phones-link" data-toggle="tab" href="#new-phones-tab" role="tab" aria-controls="new-phones-tab" aria-selected="false">Tablets & Cell Phones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="new-watches-link" data-toggle="tab" href="#new-watches-tab" role="tab" aria-controls="new-watches-tab" aria-selected="false">Smartwatches</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" id="new-acc-link">View All HIGHLIGHTS ACCESSORIES <i class="icon-long-arrow-right"></i></a>
                </li>
            </ul>
        </div>
    </div><!-- End .heading -->

    <div class="tab-content tab-content-carousel just-action-icons-sm">
        <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                <?php foreach ($data_accessories as $items) : ?>
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="<?= $items['MaSP'] ?>.html">
                                <img src="public/assets/images/products/<?= $items['HinhAnh1'] ?>" alt="Product image" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->

                            <div class="product-action">
                                <a href="?act=cart&xuli=add&id=<?= $items['MaSP'] ?>" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                <a href="?act=quickView&id=<?= $items['MaSP'] ?>" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <h3 class="product-title"><a href="?act=detail&id=<?= $items['MaSP'] ?>"><?= $items['TenSP'] ?></a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $<?= number_format($items['DonGia']) ?>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                        <div class="product-body">
                            <h3 class="product-title"></h3><!-- End .product-title -->
                            <div class="product-price">

                            </div><!-- End .product-price -->
                            <div class="ratings-container">

                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                <?php endforeach; ?>

            </div><!-- End .owl-carousel -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->
</div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-5 -->

    <div class="container">
        <hr class="mb-0">
    </div><!-- End .container -->

    <div class="icon-boxes-container bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                            <p>Orders $50 or more</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                            <p>Within 30 days</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-info-circle"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                            <p>when you sign up</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                            <p>24/7 amazing services</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->
</main><!-- End .main -->
<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row no-gutters bg-white newsletter-popup-content">
                <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                    <div class="banner-content text-center">
                        <img src="public/assets/images/meta.png" class="logo" alt="logo" width="60" height="15">
                        <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                        <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite
                            products.</p>
                        <h4 class="sent-notification"></h4>
                        <form id="myForm">
                            <div class="input-group input-group-round">
                                <input id="name" type="hidden" value="Meta" placeholder="Nhập tên của bạn">
                                <input type="email" id="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                <input id="subject" type="hidden" value="Promo code" placeholder=" Enter Subject">
                                <?php if ($random_khuyenmai != NULL) { ?>
                                    <?php foreach ($random_khuyenmai as $items) { ?>
                                        <input type="hidden" id="body" rows="5" placeholder="Lời tin nhắn" value=" This code is your promo code and it can only be used once and it will expire within 5 days. Your code is : <?= $items['MaKM'] ?> ">
                                        <br><br>
                                <?php }
                                } ?>
                                <div class="input-group-append">
                                    <button class="btn" type="button" onclick="sendEmail()" value="Send An Email"><span>go</span></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                            <label class="custom-control-label" for="register-policy-2">Do not show this popup
                                again</label>
                        </div><!-- End .custom-checkbox -->
                    </div>
                </div>
                <div class="col-xl-2-5col col-lg-5 ">
                    <img src="public/assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                </div>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                    url: 'sendEmail.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name.val(),
                        email: email.val(),
                        subject: subject.val(),
                        body: body.val()
                    },
                    success: function(response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message sent successfully.");
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
</div>