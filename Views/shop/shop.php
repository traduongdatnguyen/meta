<link rel="stylesheet" href="public/assets/css/plugins/nouislider/nouislider.css">
<link rel="stylesheet" href="public/assets/css/skins/skin-demo-13.css">
<link rel="stylesheet" href="public/assets/css/demos/demo-13.css">
<link rel="stylesheet" href="public/assets/css/choose.css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=".">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Electronics</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-6-6col">
                    <div class="cat-blocks-container">
                        <div class="row">
                            <?php
                            foreach ($data_categories as $value) { ?>
                                <div class="col-6 col-sm-4 col-lg-1">
                                    <a href="type-product-<?= $value['MaDM'] ?>" class="cat-block">
                                        <figure>
                                            <span>
                                                <img src="public/assets/images/demos/demo-4/cats/<?= $value['HinhAnh'] ?>" alt="Category image">
                                            </span>
                                        </figure>

                                        <h3 class="cat-block-title"><?= $value['TenDM'] ?></h3>
                                        <!-- End .cat-block-title -->
                                    </a>
                                </div><!-- End .col-2 col-md-2 col-lg-2 -->
                            <?php }  ?>

                        </div><!-- End .row -->
                    </div><!-- End .cat-blocks-container -->
                    <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->
                    <div class="owl-carousel owl-simple owl-nav-align " data-toggle="owl" data-owl-options='{
                                    "nav": false,
                                    "dots": true,
                                    "margin": 30,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":1
                                        },
                                        "420": {
                                            "items":2
                                        },
                                        "600": {
                                            "items":3
                                        },
                                        "900": {
                                            "items":4
                                        },
                                        "1024": {
                                            "items":5,
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>
                        <a href="./?act=shop&from=100&to=150" class="brand">
                            Under $150
                        </a>

                        <a href="./?act=shop&from=155&to=250" class="brand">
                            $150 to $250
                        </a>

                        <a href="./?act=shop&from=255&to=450" class="brand">
                            $250 to $450
                        </a>

                        <a href="./?act=shop&from=451&to=600" class="brand">
                            $450 to $600
                        </a>

                        <a href="./?act=shop&from=601&to=800" class="brand">
                            $600 to $800
                        </a>

                        <a href="./?act=shop&from=800&to=10000" class="brand">
                            $800 & Above
                        </a>
                    </div><!-- End .owl-carousel -->
                    <div class="mb-4"></div><!-- End .mb-4 -->
                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                <?= $data_tong ?> Products found
                            </div><!-- End .toolbox-info -->
                        </div><!-- End .toolbox-left -->

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Sort by:</label>
                                <div class="select-custom">
                                    <select class="form-control" onchange="showProduct(this.value)">
                                        <option value="1">Hot Dael</option>
                                        <option value="1">Most Popular</option>
                                        <option value="2">Most Rated</option>
                                        <option value="3">Date</option>
                                    </select>
                                </div>
                            </div><!-- End .toolbox-sort -->
                        </div><!-- End .toolbox-right -->
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">
                        <div class="row">
                            <?php
                            if (isset($data) and $data != NULL) { ?>
                                <?php foreach ($data as  $items) {
                                ?>
                                    <div class="col-3 col-md-2 col-xl-2 sanpham">
                                        <div class="product">
                                            <figure class="product-media">
                                                <?php if ($items['TrangThai'] == 1) { ?>
                                                    <span class="product-label label-new">New</span>
                                                <?php  } elseif ($items['TrangThai'] == 3) { ?>
                                                    <span class="product-label label-sale">Sale</span>
                                                <?php } else { ?>
                                                    <span class="product-label label-top">Hot Dael</span>
                                                <?php } ?>
                                                
                                                <a href="<?= $items['MaSP'] ?>.html">
                                                    <img src="public/assets/images/products/<?= $items['HinhAnh1'] ?>" alt="Product image" class="product-image">
                                                </a>

                                                <!-- <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                            to wishlist</span></a>
                                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                                    <a href="<?= $items['MaSP'] ?>.php" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                </div>End .product-action-vertical -->


                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="<?= $items['MaSP'] ?>.html">Appliances</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="<?= $items['MaSP'] ?>.html"><?= $items['TenSP'] ?></a></h3>
                                                <!-- End .product-title -->
                                                <div class="product-price">
                                                    $<?= number_format($items['DonGia']) ?>
                                                </div><!-- End .product-price -->

                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-md-4 col-xl-3 -->
                                <?php } ?>
                            <?php
                            } else {
                                echo "The product you are looking for is not available at this time";
                            } ?>
                        </div><!-- End .row -->
                    </div><!-- End .products -->

                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <?php if ($data_tong > 9 and isset($test)) { ?>
                                <li class="page-item disabled">
                                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                        <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="lectronics-page-1">1</a>
                                </li>
                                <?php for ($i = 1; $i <= $data_tong / 6; $i++) { ?>
                                    <li class="page-item active"><a class="page-link" href="lectronics-page-<?= $i + 1 ?>"><?= $i + 1 ?></a>
                                    </li>
                                <?php } ?>

                                <li class="page-item">
                                    <a class="page-link page-link-next" href="" aria-label="Next">
                                        Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->

</main><!-- End .main -->

<script>
    function showProduct(str) {
        if (str == "") {
            document.getElementById("body").innerHTML = "";
            return;
        }
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(e) {
            document.getElementById("body").innerHTML = this.responseText;

        }
        xhttp.open("GET", "lectronics-page-" + str);
        xhttp.send();
    }
</script>