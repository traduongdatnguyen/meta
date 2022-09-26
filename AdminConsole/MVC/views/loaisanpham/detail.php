<style>
    .app-menu__item.active6 {
        background: #c6defd;
        text-decoration: none;
        color: rgb(22 22 72);
        box-shadow: none;
        border: 1px solid rgb(22 22 72);
    }
</style>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách loại sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="?mod=loaisanpham&act=add" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm mới loại sản phẩm</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="?mod=danhmuc&act=add" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm mới danh mục</a>
                        </div>
                    </div>
                    <?php if (isset($_COOKIE['msg'])) { ?>
                        <div class="alert alert-success">
                            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
                        </div>
                    <?php } ?>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th scope="col">Catalog Code</th>
                                <th scope="col">Category Name</th>
                                <th style="text-align: center;" width="500" scope="col">Image</th>
                                <th scope="col">Function</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <td><?= $data['MaLSP'] ?></td>
                                <td><?= $data['TenLSP'] ?></td>
                                <td>
                                    <img src="../public/assets/images/demos/demo-4/cats/<?= $data['HinhAnh'] ?>" height="60px">
                                </td>
                                <td>
                                    <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
                                        <a href="./?mod=loaisanpham&act=edit&id=<?= $data['MaLSP'] ?>" class="btn btn-warning">Update</a>
                                        <a href="./?mod=loaisanpham&act=delete&id=<?= $data['MaLSP'] ?>" onclick="return confirm('Do you really want to delete?');" type="button" class="btn btn-danger">Delete</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>