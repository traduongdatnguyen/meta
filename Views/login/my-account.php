<main class="main">
    <div class="page-header text-center" style="background-image: url('public/assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">My Account<span><?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=".">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">My Account</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="dashboard">
            <div class="container">
                <div class="row">
                    <aside class="col-md-4 col-lg-3">
                        <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">My Account</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">My Purchase</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-downloads-link" data-toggle="tab" href="#tab-downloads" role="tab" aria-controls="tab-downloads" aria-selected="false">Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-address-link" href="wishlist">Wishlist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-account-link" data-toggle="tab" href="#tab-account" role="tab" aria-controls="tab-account" aria-selected="false">Account Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./?act=taikhoan&xuli=dangxuat">Sign Out</a>
                            </li>
                        </ul>
                    </aside><!-- End .col-lg-3 -->

                    <div class="col-md-6 col-lg-6">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                                <?php if ($_SESSION['login']['HinhAnh'] != NULL) { ?>
                                    <blockquote style="margin-left: -50%;" class="testimonial text-center">
                                        <img src="public/assets/images/testimonials/<?= $_SESSION['login']['HinhAnh'] ?>" alt="user">
                                        <b><?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></b>

                                        <b>
                                            <?php if (isset($_COOKIE['doimk'])) {
                                                echo $_COOKIE['doimk'];
                                            } ?>
                                        </b>

                                    </blockquote><!-- End .testimonial -->
                                <?php } else { ?>
                                    <blockquote style="margin-left: -50%;" class="testimonial text-center">
                                        <img src="public/assets/images/testimonials/user.png" alt="user">
                                        <b><?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?></b>

                                    </blockquote><!-- End .testimonial -->
                                <?php } ?>
                                <form action="./?act=taikhoan&xuli=update" enctype="multipart/form-data" method="POST" id="form1">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <b>First Name *</b>
                                            <p> <?= $_SESSION['login']['Ho'] ?> </p>
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-5">
                                            <b>Last Name *</b>
                                            <p><?= $_SESSION['login']['Ten'] ?></p>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->

                                    <div class="row">
                                        <div class="col-sm-5">
                                            <b>Sex *</b>
                                            <p><?= $_SESSION['login']['GioiTinh'] ?></p>
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-5">
                                            <b>Email address *</b>
                                            <p><?= $_SESSION['login']['Email'] ?></p>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->

                                    <div class="row">
                                        <div class="col-sm-5">

                                            <b>Phone number *</b>
                                            <p><?= $_SESSION['login']['SDT'] ?></p>
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-5">
                                            <b>Town / City *</b>
                                            <p><?= $_SESSION['login']['DiaChi'] ?></p>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <b>State / County *</b>
                                            <p><?= $_SESSION['login']['Quan'] ?></p>
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-5">
                                            <b>Street address *</b>
                                            <p><?= $_SESSION['login']['Phuong'] ?></p>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </form>
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                                <div class="page-content">
                                    <div class="cart">
                                        <div class="container">
                                            <div class="row">
                                                <aside class="col-lg-9">
                                                    <div class="summary summary-cart">
                                                        <h2 class="summary-title">Orders</h2><!-- End .summary-title -->
                                                        <?php if (isset($_COOKIE['msg'])) { ?>
                                                            <div class="alert alert-warning">
                                                                <strong>Notify:</strong> <?= $_COOKIE['msg'] ?>
                                                            </div>
                                                        <?php } ?>
                                                        <table class="table table-summary">

                                                            <tbody>
                                                                <?php if ($my_pruchase != NULL) {
                                                                    if ($mypruchase != NULL) {
                                                                        foreach ($mypruchase as $row) { ?>
                                                                            <tr class="summary-subtotal">
                                                                                <td>Product/Color/Quality :</td>
                                                                                <td><?= $row['Ten'] ?>/<?= $row['Color'] ?>/ <?= $row['SoLuong'] ?></td>
                                                                            </tr><!-- End .summary-subtotal -->
                                                                            <tr class="summary-total">
                                                                                <td>Total:</td>
                                                                                <td>$<?= number_format($row['DonGia'] * $row['SoLuong']) ?></td>
                                                                            </tr><!-- End .summary-total -->
                                                                        <?php  }
                                                                        ?>

                                                                <?php } else {
                                                                        echo "<h2>No product</h2>";
                                                                    }
                                                                } ?>
                                                            </tbody>
                                                        </table><!-- End .table table-summary -->
                                                        <?php if ($my_pruchase != NULL) {
                                                            if ($mypruchase != NULL) { ?>
                                                                <?php
                                                                if ($my_pruchase['TrangThai'] == 0) { ?>
                                                                    <a href="./?act=taikhoan&xuli=huydonhang&idhd=<?= $my_pruchase['MaHD'] ?>" class="btn btn-outline-primary-2">Hủy đơn</a>
                                                                <?php
                                                                } else { ?>
                                                                    <div class="alert alert-warning">
                                                                        <strong>Notify:</strong> Your order has been approved and is shipping to you.
                                                                    </div>
                                                        <?php    }
                                                            }
                                                        } ?>
                                                    </div>
                                                </aside><!-- End .col-lg-3 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .container -->
                                    </div><!-- End .cart -->
                                    <!-- <a href="shop" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a> -->
                                </div><!-- End .page-content -->

                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-downloads" role="tabpanel" aria-labelledby="tab-downloads-link">
                                <b>
                                    <?php if (isset($_COOKIE['doimk'])) {
                                        echo $_COOKIE['doimk'];
                                    } ?>
                                </b>
                                <form action="./?act=taikhoan&xuli=update" id="form" method="POST">
                                    <label>Current password (leave blank to leave unchanged)</label>
                                    <input type="password" name="MatKhau" class="form-control">

                                    <label>New password (leave blank to leave unchanged)</label>
                                    <input type="password" name="MatKhauMoi" class="form-control">

                                    <label>Confirm new password</label>
                                    <input type="password" name="MatKhauXN" class="form-control mb-2">

                                    <button for="form" type="submit" class="btn btn-outline-primary-2">
                                        <span>SAVE CHANGES</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="tab-address" role="tabpanel" aria-labelledby="tab-address-link">
                                <p>The following addresses will be used on the checkout page by default.</p>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card card-dashboard">
                                            <div class="card-body">
                                                <h3 class="card-title">Billing Address</h3><!-- End .card-title -->

                                                <p>User Name<br>
                                                    User Company<br>
                                                    John str<br>
                                                    New York, NY 10001<br>
                                                    1-234-987-6543<br>
                                                    yourmail@mail.com<br>
                                                    <a href="#">Edit <i class="icon-edit"></i></a>
                                                </p>
                                            </div><!-- End .card-body -->
                                        </div><!-- End .card-dashboard -->
                                    </div><!-- End .col-lg-6 -->

                                    <div class="col-lg-6">
                                        <div class="card card-dashboard">
                                            <div class="card-body">
                                                <h3 class="card-title">Shipping Address</h3><!-- End .card-title -->

                                                <p>You have not set up this type of address yet.<br>
                                                    <a href="#">Edit <i class="icon-edit"></i></a>
                                                </p>
                                            </div><!-- End .card-body -->
                                        </div><!-- End .card-dashboard -->
                                    </div><!-- End .col-lg-6 -->
                                </div><!-- End .row -->
                            </div><!-- .End .tab-pane -->

                            <div class="tab-pane fade" id="tab-account" role="tabpanel" aria-labelledby="tab-account-link">
                                <?php if ($_SESSION['login']['HinhAnh'] != NULL) { ?>
                                    <blockquote class="testimonial text-center">
                                        <img src="public/assets/images/testimonials/<?= $_SESSION['login']['HinhAnh'] ?>" alt="user">
                                        <p></p>
                                        <cite>
                                            <?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?>
                                        </cite>
                                    </blockquote><!-- End .testimonial -->
                                    <b>
                                        <?php if (isset($_COOKIE['doimk'])) {
                                            echo $_COOKIE['doimk'];
                                        } ?>
                                    </b>
                                <?php } else { ?>
                                    <blockquote class="testimonial text-center">
                                        <img src="public/assets/images/testimonials/user.png" alt="user">
                                        <p></p>
                                        <cite>
                                            <?= $_SESSION['login']['Ho'] ?> <?= $_SESSION['login']['Ten'] ?>
                                        </cite>
                                    </blockquote><!-- End .testimonial -->
                                    <b>
                                        <?php if (isset($_COOKIE['doimk'])) {
                                            echo $_COOKIE['doimk'];
                                        } ?>
                                    </b>
                                <?php } ?>


                                <form action="./?act=taikhoan&xuli=update" enctype="multipart/form-data" method="POST" id="form1">


                                    <div class="row">

                                        <div class="col-sm-6">
                                            <label>First Name *</label>
                                            <input type="text" name="Ho" class="form-control" required>
                                        </div><!-- End .col-sm-6 -->

                                        <div class="col-sm-6">
                                            <label>Last Name *</label>
                                            <input type="text" name="Ten" class="form-control" required>
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                    <label>Sex *</label>
                                    <select class="form-control" name="GioiTinh" title="Giới tính">
                                        <option <?= ($data['GioiTinh'] == 'Male') ? 'selected' : '' ?> value="Male"> Male</option>
                                        <option <?= ($data['GioiTinh'] == 'Female') ? 'selected' : '' ?> value="Female"> Female</option>
                                        <option <?= ($data['GioiTinh'] == 'Other') ? 'selected' : '' ?> value="Other"> Other</option>
                                    </select>
                                    <label>Email address *</label>
                                    <input type="email" name="Email" class="form-control" required>

                                    <label>Phone number *</label>
                                    <input type="tel" name="SĐT" class="form-control" required>

                                    <label>Town / City *</label>
                                    <input type="text" name="DiaChi" class="form-control" required>


                                    <label>State / County *</label>
                                    <input type="text" name="Quan" class="form-control" required>


                                    <label>Street address *</label>
                                    <input type="text" name="Phuong" class="form-control" required>

                                    <label>Avatar *</label>
                                    <input type="file" name="HinhAnh" class="form-control" require>

                                    <button type="submit" class="btn btn-outline-primary-2">
                                        <span>SAVE CHANGES</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </button>
                                </form>

                            </div><!-- .End .tab-pane -->
                        </div>
                    </div><!-- End .col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .dashboard -->
    </div><!-- End .page-content -->
</main><!-- End .main -->