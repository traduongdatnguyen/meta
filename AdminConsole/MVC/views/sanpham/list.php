<style>
    .app-menu__item.active2 {
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
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">


                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="./?mod=sanpham&act=add" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm sản phẩm mới
                            </a>
                        </div>
                        <?php if (isset($_SESSION['isLogin_Admin'])) { ?>
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" href="./?mod=sanpham&act=add" title="Thêm"><i class="fas fa-plus"></i>
                                    Thêm danh mục
                                </a>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-add btn-sm" href="./?mod=sanpham&act=add" title="Thêm"><i class="fas fa-plus"></i>
                                    Thêm loại sản phẩm
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                    <?php if (isset($_COOKIE['msg'])) { ?>
                        <div class="alert alert-warning">
                            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
                        </div>
                    <?php } ?>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>Mã sản phẩm</th>
                                <th width="200">Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Trạng Thái(HT)</th>
                                <th width="120">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) { ?>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>#<?= $row['MaSP'] ?></td>
                                    <td><?= $row['TenSP'] ?></td>
                                    <td><img src="../public/assets/images/products/<?= $row['HinhAnh1'] ?>" alt="" width="100px;"></td>
                                    <td>
                                        <?= $row['SoLuong'] ?>

                                    <td> <b>
                                            <?php if ($row['SoLuong'] >= 5) {
                                                echo 'Còn hàng';
                                            } elseif ($row['SoLuong'] > 0 && $row['SoLuong'] < 5) {
                                                echo 'Sắp hết';
                                            } elseif ($row['SoLuong'] == 0) {
                                                echo 'Hết hàng';
                                            } ?>
                                        </b>
                                    </td>
                                    <td>$ <?= number_format($row['DonGia']) ?></td>
                                    <td>
                                        <?php if ($row['TrangThai'] == 0) {
                                            echo 'Sắp ra mắt';
                                        } elseif ($row['TrangThai'] == 1) {
                                            echo 'New';
                                        } elseif ($row['TrangThai'] == 2) {
                                            echo 'New Hot';
                                        }elseif($row['TrangThai'] == 3){
                                            echo'Sale';
                                        }else{
                                            echo'Hot Deal';
                                        } ?>
                                    </td>
                                    <td>
                                        <?php if (isset($_SESSION['isLogin_Admin'])) { ?>
                                            <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="location.href='./?mod=sanpham&act=delete&id=<?= $row['MaSP'] ?>';confirm('Do you really want to delete?');"><i class="fas fa-trash-alt"></i></button>
                                        <?php } ?>
                                        <button class="btn btn-primary btn-sm edit" onclick="location.href='./?mod=sanpham&act=edit&id=<?= $row['MaSP'] ?>'" type="button" title="Sửa" id="show-emp"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-primary btn-sm edit" onclick="location.href='../?act=detail&id=<?= $row['MaSP'] ?>'" type="button" title="Xem" id="show-emp"><i class="fas fa-eye"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>