<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Meta - Smart phone, Laptop, Genuine watches and accessories</title>
    <meta name="keywords" content="meta">
    <meta name="description" content="meta">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="20x20" href="public/assets/images/logo-footer.png">
    <link rel="icon" type="image/png" sizes="10x10" href="public/assets/images/logo-footer.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/images/logo-footer.png">
    <link rel="manifest" href="public/assets/images/logo-footer.png">
    <link rel="mask-icon" href="public/assets/images/logo-footer.png" color="#666666">
    <link rel="shortcut icon" href="public/assets/images/logo-footer.png">
    <meta name="apple-mobile-web-app-title" content="meta">
    <meta name="application-name" content="meta">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="public/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="public/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="public/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="public/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="public/assets/css/style.css">
    <!-- Main CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="public/assets/css/plugins/nouislider/nouislider.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="public/assets/css/scrollbar.css">
</head>

<body id="body">
    <div class="page-wrapper">
        <?php require_once("header_footer/header.php"); ?>



        <?php require_once("dieuhuong.php"); ?>



        <?php require_once("header_footer/footer.php"); ?>
    </div><!-- End .page-wrapper -->

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <?php require_once("header_footer/mobile.php"); ?>
    <?php require_once("header_footer/loading.php"); ?>
    <!-- Plugins JS File -->
    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/jquery.hoverIntent.min.js"></script>
    <script src="public/assets/js/jquery.waypoints.min.js"></script>
    <script src="public/assets/js/superfish.min.js"></script>
    <script src="public/assets/js/owl.carousel.min.js"></script>
    <script src="public/assets/js/bootstrap-input-spinner.js"></script>
    <script src="public/assets/js/jquery.plugin.min.js"></script>
    <script src="public/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="public/assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="public/assets/js/main.js"></script>
    <script src="public/assets/js/jquery.elevateZoom.min.js"></script>

    <!-- Ajax phần select tỉnh thành -->
    <script src='https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js'></script>
    <script>
        //<![CDATA[
        if (address_2 = localStorage.getItem('address_2_saved')) {
            $('select[name="Quan"] option').each(function() {
                if ($(this).text() == address_2) {
                    $(this).attr('selected', '')
                }
            })
            $('input.billing_address_2').attr('value', address_2)
        }
        if (district = localStorage.getItem('district')) {
            $('select[name="Quan"]').html(district)
            $('select[name="Quan"]').on('change', function() {
                var target = $(this).children('option:selected')
                target.attr('selected', '')
                $('select[name="Quan"] option').not(target).removeAttr('selected')
                address_2 = target.text()
                $('input.billing_address_2').attr('value', address_2)
                district = $('select[name="Quan"]').html()
                localStorage.setItem('district', district)
                localStorage.setItem('address_2_saved', address_2)
            })
        }
        $('select[name="DiaChi"]').each(function() {
            var $this = $(this),
                stc = ''
            c.forEach(function(i, e) {
                e += +1
                stc += '<option value="'+ i +'">' + i + '</option>'
                $this.html('<option value="" >Tỉnh / Thành phố</option>' + stc)
                if (address_1 = localStorage.getItem('address_1_saved')) {
                    $('select[name="DiaChi"] option').each(function() {
                        if ($(this).text() == address_1) {
                            $(this).attr('selected', '')
                        }
                    })
                    $('input.billing_address_1').attr('value', address_1)
                }
                $this.on('change', function(i) {
                    i = $this.children('option:selected').index() - 1
                    var str = '',
                        r = $this.val()
                    if (r != '') {
                        arr[i].forEach(function(el) {
                            str += '<option value="' + el + '">' + el + '</option>'
                            $('select[name="Quan"]').html('<option value="">Quận / Huyện</option>' + str)
                        })
                        var address_1 = $this.children('option:selected').text()
                        var district = $('select[name="Quan"]').html()
                        localStorage.setItem('address_1_saved', address_1)
                        localStorage.setItem('district', district)
                        $('select[name="Quan"]').on('change', function() {
                            var target = $(this).children('option:selected')
                            target.attr('selected', '')
                            $('select[name="Quan"] option').not(target).removeAttr('selected')
                            var address_2 = target.text()
                            $('input.billing_address_2').attr('value', address_2)
                            district = $('select[name="Quan"]').html()
                            localStorage.setItem('district', district)
                            localStorage.setItem('address_2_saved', address_2)
                        })
                    } else {
                        $('select[name="Quan"]').html('<option value="">Quận / Huyện</option>')
                        district = $('select[name="Quan"]').html()
                        localStorage.setItem('district', district)
                        localStorage.removeItem('address_1_saved', address_1)
                    }
                })
            })
        })
        //]]>
    </script>

    <!-- Ajax phân trang -->
    <!-- <script language="JavaScript">
        $( <strong><em > document </em></strong > ).ready(function() {
            $('#body').on('click', 'pagination li a', function(e) {
                e.preventDefault(); // Không load lại trang khi click phân trang.
                let url = $(this).attrs('href');
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(response) {
                        $('.products').html(response);
                        // Thay đổi URL trên website
                        <strong > < em > window </em></strong > ;
                        history.pushState({
                            path: url
                        }, '', url);
                    }
                });
            });
        });
    </script> -->
</body>

</html>