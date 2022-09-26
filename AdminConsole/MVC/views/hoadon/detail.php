<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Danh sách đơn hàng</li>
      <li class="breadcrumb-item"><a href="#">Kiểm tra đơn hàng</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Kiểm tra đơn hàng</h3>
        <?php if (isset($data) and $data != null) {
          if ((isset($_SESSION['isLogin_Admin'])) || (isset($_SESSION['isLogin_Nhanvien']))) { ?>
            <div class="col-sm-2">
              <a href="./?mod=hoadon&act=xetduyet&id=<?= $data['0']['MaHD'] ?>" class="btn btn-success">Browse bills</a>
            </div>
          <?php } ?>

          <?php if (isset($_SESSION['isLogin_Admin'])) { ?>
            <div class="col-sm-2">
              <a href="./?mod=hoadon&act=delete&id=<?= $data['0']['MaHD'] ?>" onclick="return confirm('Do you really want to delete?');" type="button" class="btn btn-danger">Xóa</a>
            </div>

        <?php }
        } ?>
        <?php if (isset($_SESSION['isLogin_TransportStaff'])) { ?>
          <?php if ($data_vanchuyendonhang['Status'] == 0) { ?>
            <div class="col-sm-2">
              <a class="btn btn-primary btn-sm trash" href="./?mod=hoadon&act=xacnhanvanchuyen&id=<?= $data['0']['MaHD'] ?>"><i class="far fa-check-circle"></i> Xác nhận giao hàng</a>
            </div>

        <?php }
        } ?>
        <?php if ($data_vanchuyendonhang['Status'] == 1) { ?>
          <strong class="btn btn-primary btn-sm eye"><i class="far fa-check-circle"></i> Đang giao</strong>
          <?php if (isset($_SESSION['isLogin_TransportStaff'])) { ?>
            <a class="btn btn-primary btn-sm trash" href="./?mod=hoadon&act=hoanthanhvanchuyen&id=<?= $data['0']['MaHD'] ?>"><i class="far fa-check-circle"></i> Xác nhận giao hàng xong!</a>
          <?php }
        } elseif ($data_vanchuyendonhang['Status'] == 2) { ?>
          <strong class="btn-primary btn-sm trash"><i class="far fa-check-circle"></i> Đã giao hàng xong</strong>
        <?php }
        if ((isset($_SESSION['isLogin_Admin'])) || (isset($_SESSION['isLogin_Nhanvien']))) { ?>
          <a class="btn btn-primary btn-sm eye" href="./?mod=hoadon&act=nhanviengh&id=<?= $data['0']['MaHD'] ?>"><i class="far fa-check-circle"></i>Thông tin nhân viên giao hàng</a>
        <?php } ?>
        <div class="tile-body">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th width="10"><input type="checkbox" id="all"></th>
                <th>Tên sản phẩm/Color</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng đơn hàng</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $row) { ?>
                <tr>
                  <td><input type="checkbox" id="all"></td>
                  <td><?= $row['Ten'] ?>/<?= $row['Color'] ?></td>
                  <td>$ <?= number_format($row['DonGia']) ?></td>
                  <td><?= $row['SoLuong'] ?></td>
                  <td>$ <?= number_format($row['DonGia'] * $row['SoLuong']) ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</main>