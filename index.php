<?php
session_start();

$act = isset($_GET['act']) ? $_GET['act'] : "home";
switch ($act) {
    case 'home':
        require_once("Controllers/HomeController.php");
        $list_homecontroller = new HomeController();
        $list_homecontroller->list();
        break;
    case 'shop':
        require_once('Controllers/ShopController.php');
        $ShopController = new ShopController();
        $ShopController->list();
        break;
    case 'video':
        require_once("Controllers/VideoController.php");
        $list_videocontroller = new VideoControler();
        $list_videocontroller->list();
        break;
    case 'checkout':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('Controllers/CheckoutController.php');
        $controller_obj = new CheckoutController();
        switch ($act) {
            case 'list':
                $controller_obj->list();
                break;
            case 'save':
                $controller_obj->save();
                break;
            default:
                $controller_obj->list();
                break;
        }
        break;
    case 'taikhoan':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "taikhoan";
        require_once('Controllers/LoginController.php');
        $controller_obj = new LoginContronler();
        if ((isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true)) {
            switch ($act) {
                case 'dangxuat':
                    $controller_obj->dangxuat();
                    break;
                case 'account':
                    $controller_obj->account();
                    break;
                case 'update':
                    $controller_obj->update();
                    break;
                case 'huydonhang':
                    $controller_obj->huyhoadon();
                    break;
                default:
                    header('location: ?act=error');
                    break;
            }
            break;
        } else {
            if ((isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) || (isset($_SESSION['isLogin_Nhanvien']) && $_SESSION['isLogin_Nhanvien'] == true) || (isset($_SESSION['isLogin_TransportStaff']) && $_SESSION['isLogin_TransportStaff'] == true) || (isset($_SESSION['isLogin_Editor']) && $_SESSION['isLogin_Editor'])) {
                switch ($act) {
                    case 'dangxuat':
                        $controller_obj->dangxuat();
                        break;
                    case 'account':
                        $controller_obj->account();
                        break;
                    case 'update':
                        $controller_obj->update();
                        break;
                    default:
                        header('location: ?act=error');
                        break;
                }
                break;
            } else {
                switch ($act) {
                    case 'login':
                        $controller_obj->login();
                        break;
                    case 'dangnhap':
                        $controller_obj->login_action();

                        break;
                    case 'dangky':
                        $controller_obj->dangky();
                        break;
                    default:
                        $controller_obj->login();
                        break;
                }
                break;
            }
        }
    case 'quickView':
        require_once("Controllers/QuickviewController.php");
        $quickviewController = new QuickviewController();
        $quickviewController->list();
        break;
    case 'detail':
        require_once("Controllers/DetailController.php");
        $detailControllore = new DetailController();
        $detailControllore->show_detail();
        break;
    case 'cart':
        $act = isset($_GET['xuli']) ? $_GET['xuli'] : "list";
        require_once('Controllers/CartController.php');
        $controller_obj = new CartController();
        switch ($act) {
            case 'list':
                $controller_obj->list_cart();
                break;
            case 'add':
                $controller_obj->add_cart();
                break;
            case 'update':
                $controller_obj->update_cart();
                break;
            case 'delete':
                $controller_obj->delete_cart();
                break;
            case 'deleteAll':
                $controller_obj->deleteall_cart();
                break;
            case 'addwishlist':
                $controller_obj->addwishlist();
            default:
                $controller_obj->list_cart();
                break;
        }
        break;
    case 'about':
        require_once("Views/contact/about.php");
        break;
    case 'wishlist':
        require_once("Controllers/CartController.php");
        $controller_obj = new CartController();
        $controller_obj->list_wishlist();
        break;
    case 'deletewishlist':
        require_once("Controllers/CartController.php");
        $controller_obj = new CartController();
        $controller_obj->delete_wishlist();
        break;
    case 'blogs':
        require_once("Controllers/BlogController.php");
        $list_blogs = new BlogsController();
        $list_blogs->blogs();
        break;
    case 'single':
        require_once("Controllers/BlogController.php");
        $detail_blog = new BlogsController();
        $detail_blog->detail_blog();
        break;
    case 'contact':
        require_once("Views/contact/contact.php");
        break;
    case 'comingsoon':
        require_once("Controllers/ComingSoonController.php");
        $list_coming = new ComingSoonController();
        $list_coming->list();
        break;
    default:
        require_once("Controllers/HomeController.php");
        $list_homecontroller = new HomeController();
        $list_homecontroller->list();
        break;
}
