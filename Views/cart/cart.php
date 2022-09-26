<main class="main">
    <div class="page-header text-center" style="background-image: url('public/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
            <?php if (isset($_COOKIE['msg'])) { ?>
                <div class="alert alert-success">
                    <strong>Notify:</strong> <?= $_COOKIE['msg'] ?>
                </div>
            <?php } ?>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=".">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-cart table-mobile">
                            <thead>
                                <?php if (isset($_COOKIE['deletecart'])) { ?>
                                    <div class="alert alert-success">
                                        <?= $_COOKIE['deletecart'] ?>
                                    </div>
                                <?php } ?>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Color</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_SESSION['products'])) {
                                    foreach ($_SESSION['products'] as $value) {
                                ?>
                                        <tr>
                                            <td class="product-col">
                                                <div class="product">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="public/assets/images/products/<?= $value['HinhAnh1'] ?>" alt="Product image">
                                                        </a>
                                                    </figure>

                                                    <h3 class="product-title">
                                                        <a href="#"><?= $value['TenSP'] ?></a>
                                                    </h3><!-- End .product-title -->
                                                </div><!-- End .product -->
                                            </td>
                                            <td class="price-col">$<?= number_format($value['DonGia']) ?></td>
                                            <td class="price-col"><?= $value['Color'] ?></td>
                                            <td class="quantity-col">
                                                <div class="cart-product-quantity" style="display: flex;">
                                                    <a href="./?act=cart&xuli=delete&id=<?= $value['MaSP'] ?>">-</a>
                                                    &nbsp; &nbsp;<p><?= $value['SoLuong'] ?></p> &nbsp; &nbsp;

                                                    <?php if ($data['SoLuong'] == $value['SoLuong']) { ?>
                                                        <a title="Quantity has reached the level in stock">+</a>
                                                    <?php  } else { ?>
                                                        <a href="./?act=cart&xuli=update&id=<?= $value['MaSP'] ?>">+</a>
                                                    <?php } ?>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
                                            <td class="total-col">
                                                $<?= number_format($value['ThanhTien']) ?></td>
                                            <td class="remove-col"><button onclick="location.href='./?act=cart&xuli=deleteAll&id=<?= $value['MaSP'] ?>'" class="btn-remove"><i class="icon-close"></i></button></td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>

                        </table><!-- End .table table-wishlist -->

                        <div class="cart-bottom">
                            <div class="cart-discount">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" class="form-control" required placeholder="coupon code">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- End .input-group -->
                                </form>
                            </div><!-- End .cart-discount -->

                            <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
                        </div><!-- End .cart-bottom -->
                    </div><!-- End .col-lg-9 -->
                    <?php if (isset($_SESSION['login'])) { ?>
                        <aside class="col-lg-12">
                            <div class="summary summary-cart">
                                <center>
                                    <h1 class="summary-title">Cart Total</h1>
                                </center><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <tbody>
                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>$<?= number_format($count) ?></td>
                                        </tr><!-- End .summary-subtotal -->
                                        <?php if (isset($_SESSION['products'])) {

                                            foreach ($_SESSION['products'] as $value) {
                                        ?>
                                                <tr class="summary-subtotal">
                                                    <td>Product/Color/Quality:</td>
                                                    <td><?= $value['TenSP'] ?>/<?= $value['Color'] ?>/<?= $value['SoLuong'] ?></td>
                                                </tr><!-- End .summary-subtotal -->
                                        <?php
                                            }
                                        } ?>
                                        <tr class="summary-shipping">
                                            <td>Shipping:</td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr class="summary-shipping-row">
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="free-shipping" name="shipping" class="custom-control-input">
                                                    <label class="custom-control-label" for="free-shipping">Free
                                                        Shipping</label>
                                                </div><!-- End .custom-control -->
                                            </td>
                                            <td>$0.00</td>
                                        </tr><!-- End .summary-shipping-row -->
                                        <tr class="summary-shipping-estimate">
                                            <td>Estimate for Your Country<br> <a href="personal">Change address</a>
                                            </td>
                                            <td>&nbsp;</td>
                                        </tr><!-- End .summary-shipping-estimate -->

                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>$<?= number_format($count) ?></td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>

                                </table><!-- End .table table-summary -->

                                <a href="checkout" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO
                                    CHECKOUT</a>
                            </div><!-- End .summary -->

                            <a href="shop" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                                    SHOPPING</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->
                    <?php  } else { ?>
                        <?php if (empty($_SESSION['products'])) { ?>
                        <?php  } else { ?>
                            <div class="page-content">
                                <div class="checkout">
                                    <div class="container">
                                        <form action="./?act=checkout&xuli=save" method="POST">
                                            <div class="row">
                                                <div class="col-lg-9" style="position: relative; left: 15%;">
                                                    <h2 class="checkout-title">CUSTOMER INFORMATION</h2><!-- End .checkout-title -->

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="radio" class="custom-control-input" required name="GioiTinh" id="checkout-create-acc">
                                                        <label class="custom-control-label" for="checkout-create-acc">Male</label>
                                                    </div><!-- End .custom-checkbox -->

                                                    <div class="custom-control custom-checkbox">
                                                        <input type="radio" class="custom-control-input" required name="GioiTinh" id="checkout-diff-address">
                                                        <label class="custom-control-label" for="checkout-diff-address">Female</label>
                                                    </div><!-- End .custom-checkbox -->
                                                    <label>Full Name *</label>
                                                    <input type="text" name="NguoiNhan" class="form-control" placeholder="" required>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>Town / City *</label>
                                                            <select class="form-control" name="DiaChi" required>
                                                                <option value="">Tỉnh / Thành phố</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>State / County *</label>
                                                            <select class="form-control" name="Quan" required>
                                                                <option value="">Quận / Huyện</option>
                                                            </select>
                                                        </div>
                                                        <input class="billing_address_1" name="DiaChi" type="hidden" value="">
                                                        <input class="billing_address_2" name="" type="hidden" value="">
                                                    </div><!-- End .row -->
                                                    <label>Street address *</label>
                                                    <input type="text" name="Phuong" class="form-control" placeholder="" required>


                                                    <label>Phone *</label>
                                                    <input type="tel" name="SDT" class="form-control" placeholder="" required>
                                                    <label>Order notes (optional)</label>
                                                    <textarea name="Note" class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>

                                                    <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                                        <span class="btn-text">Place Order</span>
                                                        <span class="btn-hover-text">Proceed to Checkout</span>
                                                    </button>
                                                </div><!-- End .row -->
                                            </div><!-- End .row -->

                                        </form>
                                    </div><!-- End .container -->
                                </div><!-- End .checkout -->
                            </div><!-- End .page-content -->

                    <?php  }
                    } ?>
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cart -->
    </div><!-- End .page-content -->
</main><!-- End .main -->