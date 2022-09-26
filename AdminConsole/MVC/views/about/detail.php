<style>
    .app-menu__item.active9 {
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
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách banner</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="?mod=banner&act=add" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới banner</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr> 
                                <th>Mã banner</th>
                                <th>Tên banner</th>
                                <th>Ảnh</th>
                                <th>Mô Tả</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#<?= $data['Id'] ?></td>
                                <td><?= $data['TenBN'] ?></td>
                                <td><img src="../public/assets/images/banners/<?=$data['HinhAnh']?>" alt="" width="100px;"></td>
                                <td><span class="badge bg-success"><?= $data['MoTaBN'] ?></span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="location.href='./?mod=banner&act=delete&id=<?= $data['Id'] ?>';confirm('Do you really want to delete?');"><i class="fas fa-trash-alt"></i></button>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" onclick="location.href='./?mod=banner&act=edit&id=<?= $data['Id'] ?>'" id="show-emp"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>