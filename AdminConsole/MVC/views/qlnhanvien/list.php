<style>
  .app-menu__item.active10 {
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
      <li class="breadcrumb-item active"><a href="#"><b>Danh sách nhân viên</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">

          <div class="row element-button">
            <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
              <div class="col-sm-4">
                <a class="btn btn-add btn-sm" href="./?mod=qlnhanvien&act=add" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo tài khoản mới nhân viên </a>
              </div>
            <?php } ?>
          </div>
          <?php if (isset($_COOKIE['msg'])) { ?>
            <div class="alert alert-warning">
              <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
            </div>
          <?php } ?>
          <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="sampleTable">
            <thead>
              <tr>
                <th>ID tài khoản</th>
                <th width="150">Họ và tên nhân viên</th>
                <th>Tài khoản</th>
                <th width="300">Địa chỉ</th>
                <th>Giới tính</th>
                <th>Số điện thoại</th>
                <th>Chức vụ</th>
                <th width="120">Tính năng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $row) { ?>
                <tr>
                  <td>#<?= $row['MaND'] ?></td>
                  <td><?= $row['Ho'] ?> <?= $row['Ten'] ?></td>
                  <td><?= $row['TaiKhoan'] ?></td>
                  <td><?= $row['Phuong'] ?> <?= $row['Quan'] ?><?= $row['DiaChi'] ?> </td>
                  <td><?= $row['GioiTinh'] ?></td>
                  <td><?= $row['SDT'] ?></td>
                  <td><?php
                       if ($row['MaQuyen'] == 3) {
                        echo 'Nhân viên';
                        } else {
                          echo 'Nhân viên giao hàng';
                      }
                      ?></td>
                  <td class="table-td-center">
                    <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="location.href='./?mod=qlnhanvien&act=delete&id=<?= $row['MaND'] ?>';confirm('Do you really want to delete?');"><i class="fas fa-trash-alt"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" onclick="location.href='./?mod=qlnhanvien&act=edit&id=<?= $row['MaND'] ?>'" type="button" title="Sửa" id="show-emp"><i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-primary btn-sm edit" onclick="location.href='./?mod=qlnhanvien&act=detail&id=<?= $row['MaND'] ?>'" type="button" title="Xem" id="show-emp"><i class="fas fa-eye"></i>
                    </button>
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
