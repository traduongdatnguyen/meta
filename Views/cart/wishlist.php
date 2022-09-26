<main class="main">
    <div class="page-header text-center" style="background-image: url('public/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Wishlist<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <?php if (isset($_SESSION['login'])) { ?>
                <table class="table table-wishlist table-mobile">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Stock Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($data as $item) : ?>
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="public/assets/images/products/<?= $item['HinhAnh'] ?>" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="<?= $item['MaSP'] ?>.html"><?= $item['TenSP'] ?></a>
                                        </h3><!-- End .product-title -->
                                    </div><!-- End .product -->
                                </td>
                                <td class="price-col">$<?= number_format($item['DonGia']) ?></td>
                                <?php if ($data_product['SoLuong'] == 0) { ?>
                                    <td class="stock-col"><span class="in-stock">Out of stock</span></td>
                                <?php } else { ?>
                                    <td class="stock-col"><span class="in-stock">In stock</span></td>
                                <?php } ?>
                                <td class="action-col">
                                    <div class="dropdown">
                                        <button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-list-alt"></i>Select Options
                                        </button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">First option</a>
                                            <a class="dropdown-item" href="#">Another option</a>
                                            <a class="dropdown-item" href="#">The best option</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="remove-col"><a href="./?act=deletewishlist&id=<?= $item['MaSP'] ?>" class="btn-remove"><i class="icon-close"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table><!-- End .table table-wishlist -->
            <?php  } else { ?>
                <center>
                    <h3>You need to log in</h3>
                </center>
            <?php } ?>
            <div class="wishlist-share">
                <div class="social-icons social-icons-sm mb-2">
                    <label class="social-label">Share on:</label>
                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                    <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                </div><!-- End .soial-icons -->
            </div><!-- End .wishlist-share -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->