<style>
  .app-menu__item.active7 {
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
      <li class="breadcrumb-item active"><a href="#"><b>Danh sách khuyến mãi</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" href="./?mod=khuyenmai&act=add" title="Thêm"><i class="fas fa-plus"></i>
                Tạo khuyến mãi mới</a>
            </div>
          </div>
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th width="10"><input type="checkbox" id="all"></th>
                <th>Mã khuyến mãi</th>
                <th>Tên khuyễn mãi</th>
                <th>Loại khuyến mãi</th>
                <th>Giá khuyến mãi</th>
                <th>Ngày bắt đầu</th>
                <th>Chức năng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $row) { ?>
                <tr>
                  <td><input type="checkbox" id="all"></td>
                  <td><?= $row['MaKM'] ?></td>
                  <td><?= $row['TenKM'] ?></td>
                  <td><?= $row['LoaiKM'] ?></td>
                  <td><?= $row['GiaTriKM'] ?></td>
                  <td><?= $row['NgayBD'] ?></td>
                  <td>
                    <a href="./?mod=khuyenmai&act=detail&id=<?= $row['MaKM'] ?>" class="btn btn-success">View</a>
                    <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
                      <a href="./?mod=khuyenmai&act=edit&id=<?= $row['MaKM'] ?>" class="btn btn-warning">Update</a>
                      <a href="./?mod=khuyenmai&act=delete&id=<?= $row['MaKM'] ?>" onclick="return confirm('Do you really want to delete?');" type="button" class="btn btn-danger">Delete</a>
                    <?php } ?>
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

<!--
  MODAL
-->
<div class="modal fade" id="ModalUP" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <div class="row">
          <div class="form-group  col-md-12">
            <span class="thong-tin-thanh-toan">
              <h5>Chỉnh sửa thông tin sản phẩm cơ bản</h5>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label class="control-label">Mã sản phẩm </label>
            <input class="form-control" type="number" value="71309005">
          </div>
          <div class="form-group col-md-6">
            <label class="control-label">Tên sản phẩm</label>
            <input class="form-control" type="text" required value="Bàn ăn gỗ Theresa">
          </div>
          <div class="form-group  col-md-6">
            <label class="control-label">Số lượng</label>
            <input class="form-control" type="number" required value="20">
          </div>
          <div class="form-group col-md-6 ">
            <label for="exampleSelect1" class="control-label">Tình trạng sản phẩm</label>
            <select class="form-control" id="exampleSelect1">
              <option>Còn hàng</option>
              <option>Hết hàng</option>
              <option>Đang nhập hàng</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label class="control-label">Giá bán</label>
            <input class="form-control" type="text" value="5.600.000">
          </div>
          <div class="form-group col-md-6">
            <label for="exampleSelect1" class="control-label">Danh mục</label>
            <select class="form-control" id="exampleSelect1">
              <option>Bàn ăn</option>
              <option>Bàn thông minh</option>
              <option>Tủ</option>
              <option>Ghế gỗ</option>
              <option>Ghế sắt</option>
              <option>Giường người lớn</option>
              <option>Giường trẻ em</option>
              <option>Bàn trang điểm</option>
              <option>Giá đỡ</option>
            </select>
          </div>
        </div>
        <BR>
        <a href="#" style="    float: right;
    font-weight: 600;
    color: #ea0000;">Chỉnh sửa sản phẩm nâng cao</a>
        <BR>
        <BR>
        <button class="btn btn-save" type="button">Lưu lại</button>
        <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
        <BR>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>