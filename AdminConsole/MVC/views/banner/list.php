<style>
  .app-menu__item.active3 {
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
            <?php if (isset($_SESSION['isLogin_Admin'])) { ?>
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" href="./?mod=banner&act=add" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới banner</a>
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
                <th>Mã banner</th>
                <th>Tên banner</th>
                <th>Hình Ảnh</th>
                <th>Mô Tả</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $row) { ?>
                <tr>
                  <td width="10"><input type="checkbox" name="check1" value="1"></td>
                  <td>#<?= $row['Id'] ?></td>
                  <td><?= $row['TenBN'] ?></td>
                  <td><img src="../public/assets/images/banners/<?= $row['HinhAnh'] ?>" alt="" width="100px;"></td>
                  <td><span class="badge bg-success"><?= $row['MoTaBN'] ?></span></td>
                  <td>
                    <?php if (isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])) { ?>
                      <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="location.href='./?mod=banner&act=delete&id=<?= $row['Id'] ?>';confirm('Do you really want to delete?');"><i class="fas fa-trash-alt"></i></button>
                    <?php } ?>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" onclick="location.href='./?mod=banner&act=edit&id=<?= $row['Id'] ?>'" id="show-emp"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-primary btn-sm edit" type="button" title="Xem" onclick="location.href='./?mod=banner&act=detail&id=<?= $row['Id'] ?>'" id="show-emp"><i class="fas fa-eye"></i></button>
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