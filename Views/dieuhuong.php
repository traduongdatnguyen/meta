<?php
$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case 'home':
        require_once("home/home.php");
        break;
    case 'shop':
        require_once("shop/shop.php");
        break;
    case 'cart':
        require_once("cart/cart.php");
        break;
    case 'faq':
        require_once("faq.php");
        break;
    case 'shop':
        require_once("shop/shop.php");
        break;
    case 'checkout':
        $act = isset($_GET['act']) ? $_GET['act'] : "list";
        switch ($act) {
            case 'list':
                require_once("order/checkout.php");
                break;

            default:
                require_once("order/checkout.php");
                break;
        }
        break;
    case "taikhoan":
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "login";
        if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
            switch ($act) {
                case 'login':
                    require_once("login/login.php");
                    break;
                case 'account':
                    require_once("login/my-account.php");
                    break;
                default:
                    require_once("login/login.php");
                    break;
            }
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true)) {
                switch ($act) {
                    case 'login':
                        require_once("login/login.php");
                        break;
                    case 'account':
                        require_once("login/my-account.php");
                        break;
                    default:
                        require_once("login/login.php");
                        break;
                }
            } else {
                switch ($act) {
                    case 'login':
                        require_once("login/login.php");
                        break;
                    default:
                        require_once("login/login.php");
                        break;
                }
            }
            break;
        }
        break;
    case 'detail':
        require_once("product-detail/product-detail.php");
        break;
    case 'wishlist':
        require_once("cart/wishlist.php");
        break;
    case 'hienthi':
        require_once("elements-accordions.php");
        break;
    default:
        require_once("error.php");
        break;
}
