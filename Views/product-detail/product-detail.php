<?php if ($data != NULL) { ?>

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container d-flex align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href=".">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item"><a href="#"><?= $category_where['TenDM'] ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $data['TenSP'] ?></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery product-gallery-vertical">
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img id="product-zoom" src="public/assets/images/products/<?= $data['HinhAnh1'] ?>" data-zoom-image="public/assets/images/products/<?= $data['HinhAnh1'] ?>" alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery" class="product-image-gallery">
                                        <a class="product-gallery-item active" href="#" data-image="public/assets/images/products/<?= $data['HinhAnh2'] ?>" data-zoom-image="public/assets/images/products/<?= $data['HinhAnh2'] ?>">
                                            <img src="public/assets/images/products/<?= $data['HinhAnh2'] ?>" alt="product side">
                                        </a>

                                        <a class="product-gallery-item" href="#" data-image="public/assets/images/products/<?= $data['HinhAnh3'] ?>" data-zoom-image="public/assets/images/products/<?= $data['HinhAnh3'] ?>">
                                            <img src="public/assets/images/products/<?= $data['HinhAnh3'] ?>" alt="product cross">
                                        </a>

                                        <a class="product-gallery-item" href="#" data-image="public/assets/images/products/<?= $data['HinhAnh4'] ?>" data-zoom-image="public/assets/images/products/<?= $data['HinhAnh4'] ?>">
                                            <img src="public/assets/images/products/<?= $data['HinhAnh4'] ?>" alt="product with model">
                                        </a>

                                        <a class="product-gallery-item" href="#" data-image="public/assets/images/products/<?= $data['HinhAnh5'] ?>" data-zoom-image="public/assets/images/products/<?= $data['HinhAnh5'] ?>">
                                            <img src="public/assets/images/products/<?= $data['HinhAnh5'] ?>" alt="product back">
                                        </a>
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .row -->
                            </div><!-- End .product-gallery -->
                        </div><!-- End .col-md-6 -->

                        <div class="col-md-6">
                            <form action="./?act=cart&xuli=add&id=<?= $data['MaSP'] ?>" method="POST" class="product-details">
                                <h1 class="product-title"><?= $data['TenSP'] ?></h1><!-- End .product-title -->

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <a class="ratings-text" href="#product-review-link" id="review-link">( <?= $dataview['SoLuongView'] ?> Views )</a>
                                </div><!-- End .rating-container -->

                                <div class="product-price">
                                    $<?= number_format($data['DonGia']) ?>
                                </div><!-- End .product-price -->

                                <div class="product-content">
                                    <p><?= $data['HDH'] ?></p>
                                    <p><?= $data['CamTruoc'] ?></p>
                                    <p><?= $data['CamSau'] ?></p>
                                    <p><?= $data['Ram'] ?></p>
                                    <p><?= $data['Pin'] ?></p>
                                </div><!-- End .product-content -->

                                <?php if ($data_color != NULL) { ?>
                                    <div class="details-filter-row details-row-size">
                                        <label for="typecolor">Color:</label>
                                        <div class="select-custom">
                                            <select name="typecolor" id="size" class="form-control">
                                                <?php foreach ($data_color as $value) : ?>
                                                    <option value="<?= $value['TypeColor'] ?>" selected="selected"><?= $value['TypeColor'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div>
                                <?php } ?>
                                <?php if ($data['SoLuong'] > 0) { ?>
                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Qty:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" name="quality" value="1" min="1" max="<?= $data['SoLuong'] ?>" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->
                                        <div class="mb-4"></div>
                                        <?php if (isset($_COOKIE['cart'])) { ?>
                                            <div class="alert alert-success">
                                               <?= $_COOKIE['cart'] ?>
                                            </div>
                                        <?php } ?>
                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <button type="submit" class="btn-product btn-cart"><span>add to cart</span></button>

                                        <div class="details-action-wrapper">
                                            <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                            <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->
                                <?php } else { ?>
                                    <div class="product-details-action">
                                        <div class="details-action-wrapper">
                                            <h3 style="color: #39f; font-size: 20px;"><span>Out of stock now</span></h3>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->
                                <?php } ?>
                                <div class="product-details-footer">
                                    <div class="social-icons social-icons-sm">
                                        <span class="social-label">Share:</span>
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                    </div>
                                </div><!-- End .product-details-footer -->
                            </form><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Highlights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Product information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                            <?= $data['SoSao'] ?>
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <?= $data['SoDanhGia'] ?>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <h3>Product Information</h3>
                                <p><?= $data['MoTa'] ?></p>
                            </div><!-- End .product-desc-content -->

                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                            <div class="reviews">
                                <div id="fb-root"></div>
                                <div class="fb-comments" data-href="https://metathegioididong.000webhostapp.com/<?= $data['MaSP'] ?>.html" data-width="1000" data-numposts="5"></div>
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->

                <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                <?php if ($data_products != NULL) { ?>

                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                        <?php for ($i = 0; $i < count($data_products); $i++) { ?>
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="<?= $data_products[$i]['MaSP'] ?>.html">
                                        <img src="public/assets/images/products/<?= $data_products[$i]['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        <a href="?act=quickView&id=<?= $data_products[$i]['MaSP'] ?>" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#"><?= $category_where['TenDM'] ?></a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html"><?= $data_products[$i]['TenSP'] ?></a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $60.00
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        <?php } ?>
                    </div><!-- End .owl-carousel -->
                <?php
                } ?>
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

<?php } else {
    require_once("Views/error.php");
} ?>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en/sdk.js#xfbml=1&version=v12.0" nonce="pdwVqxDW"></script>