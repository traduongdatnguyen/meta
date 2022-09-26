<!DOCTYPE html>
<html lang="en">


<!-- molla/coming-soon.html  22 Nov 2019 10:04:05 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Meta - Coming-Soon</title>
    <meta name="keywords" content="Meta - Coming-Soon">
    <meta name="description" content="Meta - Coming-Soon">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/images/logo-footer.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/assets/images/logo-footer.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/logo-footer.png">
    <link rel="manifest" href="public/assets/images/logo-footer.png">
    <link rel="mask-icon" href="public/assets/images/logo-footer.png" color="#666666">
    <link rel="shortcut icon" href="public/assets/images/logo-footer.png">
    <meta name="apple-mobile-web-app-title" content="Meta">
    <meta name="application-name" content="Meta - Coming-Soon">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="public/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>

<body>
    <div class="soon">
        <div class="container">

            <div class="row">

                <div class="col-md-9 col-lg-8">

                    <div class="soon-content text-center">

                        <div class="soon-content-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=".">Home</a></li>
                                <li class="breadcrumb-item"><a href="store">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Electronics</li>
                            </ol>

                            <img src="public/assets/images/logo-footer.png" alt="Logo" width="5%" height="20px" class="soon-logo mx-auto">
                            <h1 class="soon-title">Coming Soon</h1><!-- End .soon-title -->
                            <div class="coming-countdown countdown-separator"></div><!-- End .coming-countdown -->
                            <hr class="mt-2 mb-3 mt-md-3">
                            <p>We are currently working on an awesome new site. Stay tuned for more information.
                                Subscribe to our newsletter to stay updated on our progress.</p>
                            <form action="#">
                                <div class="input-group mb-5">
                                    <input type="email" class="form-control bg-transparent" placeholder="Enter your Email Address" required>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary-2" type="submit">
                                            <span>SUBSCRIBE</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="social-icons justify-content-center mb-0">
                                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .soon-content-wrapper -->
                    </div><!-- End .soon-content -->
                </div><!-- End .col-md-9 col-lg-8 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
        <?php if ($ComingSoon_data != NULL) {
            foreach ($ComingSoon_data as $item) { ?>
                <div class="soon-bg bg-image" style="background-image: url(public/assets/images/products/<?= $item['HinhAnh1'] ?>)"></div>
        <?php }
        } ?>

        <!-- End .soon-bg bg-image -->
    </div><!-- End .soon -->
    <!-- Plugins JS File -->
    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/jquery.plugin.min.js"></script>
    <script src="public/assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="public/assets/js/main.js"></script>
    <script>
        $(function() {
            "use strict";
            if ($.fn.countdown) {
                $('.coming-countdown').countdown({
                    until: new Date(2021, 11, 16), // 7th month = August / Months 0 - 11 (January  - December)
                    format: 'DHMS',
                    padZeroes: true
                });

                // Pause
                // $('.coming-countdown').countdown('pause');
            }
        });
    </script>
</body>


<!-- molla/coming-soon.html  22 Nov 2019 10:04:05 GMT -->

</html>