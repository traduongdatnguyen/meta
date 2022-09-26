<style>
  .app-menu__item.active2 {
    background: #c6defd;
    text-decoration: none;
    color: rgb(22 22 72);
    box-shadow: none;
    border: 1px solid rgb(22 22 72);
  }

  .circle {
    border-radius: 50%;
  }
</style>
<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Danh sách sản phẩm</li>
      <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Tạo mới sản phẩm</h3>
        <div class="row element-button">
          <div class="col-sm-2">
            <a class="btn btn-add btn-sm" href="./?mod=danhmuc&act=add" title="Thêm"><i class="fas fa-plus"></i>
              Thêm danh mục
            </a>
          </div>
          <div class="col-sm-2">
            <a class="btn btn-add btn-sm" href="./?mod=loaisanpham&act=add" title="Thêm"><i class="fas fa-plus"></i>
              Thêm loại sản phẩm
            </a>
          </div>
        </div>
        <?php if (isset($_COOKIE['msg'])) { ?>
          <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
          </div>
        <?php } ?>
        <div class="tile-body">
          <form action="?mod=sanpham&act=store" method="POST" enctype="multipart/form-data" class="row">
            <div class="form-group col-md-3">
              <label for="exampleSelect1" class="control-label">Danh mục</label>
              <select class="form-control" name="MaDM" id="exampleSelect1">
                <option>-- Chọn danh mục --</option>
                <?php foreach ($data_dm as $row) { ?>
                  <option value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-md-3 ">
              <label for="exampleSelect1" class="control-label">Loại sản phẩm</label>
              <select class="form-control" name="MaLSP" id="exampleSelect1">
                <option>-- Chọn loại sản phẩm --</option>
                <?php foreach ($data_lsp as $row) { ?>
                  <option value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Giá bán</label>
              <input class="form-control" name="DonGia" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Số lượng</label>
              <input class="form-control" name="SoLuong" type="number">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Tên sản phẩm</label>
              <input class="form-control" name="TenSP" type="text">
            </div>

            <div class="form-group col-md-3">
              <label class="control-label">Ảnh sản phẩm 1</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="HinhAnh1" />
              </div>
              <div id="boxchoice">
                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 1</a>
                <p style="clear:both"></p>
              </div>

            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Ảnh sản phẩm 2</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="HinhAnh2" />
              </div>
              <div id="boxchoice">
                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 2</a>
                <p style="clear:both"></p>
              </div>

            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Ảnh sản phẩm 3</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="HinhAnh3" />
              </div>
              <div id="boxchoice">
                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 3</a>
                <p style="clear:both"></p>
              </div>

            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Ảnh sản phẩm 4</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="HinhAnh4" />
              </div>
              <div id="boxchoice">
                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 4</a>
                <p style="clear:both"></p>
              </div>

            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Ảnh sản phẩm 5</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="HinhAnh5" />
              </div>
              <div id="boxchoice">
                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 5</a>
                <p style="clear:both"></p>
              </div>

            </div>
            <div class="form-group col-md-9">
              <label class="control-label">Màn hình</label>
              <input class="form-control" name="ManHinh" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Hệ điều hành</label>
              <input class="form-control" name="HDH" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Cammera trước</label>
              <input class="form-control" name="CamTruoc" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Camera sau</label>
              <input class="form-control" name="CamSau" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">CPU</label>
              <input class="form-control" name="CPU" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Ram</label>
              <input class="form-control" name="Ram" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Rom</label>
              <input class="form-control" name="Rom" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Pin</label>
              <input class="form-control" name="Pin" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">SDCard</label>
              <input class="form-control" name="SDCard" type="text">
            </div>

            <input class="form-control" name="LoaiMau1" type="hidden">
            <input class="form-control" name="LoaiMau2" type="hidden">
            <input class="form-control" name="LoaiMau3" type="hidden">
            <input class="form-control" name="LoaiMau4" type="hidden">
            <input class="form-control" name="LoaiMau5" type="hidden">
            <!-- THông tin số -->
            <div class="form-group col-md-12">
              <label class="control-label">Thông số kỹ thuật</label>
              <textarea class="form-control" name="SoDanhGia" id="thongsokythuat"></textarea>
              <script>
                CKEDITOR.replace('thongsokythuat');
              </script>
            </div>


            <div class="form-group col-md-12">
              <label class="control-label">Thông tin sản phẩm</label>
              <textarea class="form-control" name="MoTa" id="summernote"></textarea>
              <script>
                CKEDITOR.replace('summernote');
              </script>
            </div>

            <div class="form-group col-md-12">
              <label class="control-label">Link video review</label>
              <input class="form-control" name="review" type="text"></input>
            </div>
            <div class="form-group col-md-6">
              <label for="exampleSelect1" class="control-label">Tình trạng</label>
              <select class="form-control" name="TrangThai" id="exampleSelect1">
                <option>-- Chọn tình trạng --</option>
                <option value="0">Sắp ra mắt</option>
                <option value="1">New</option>
                <option value="2">New Hot</option>
                <option value="3">Sale</option>
                <option value="4">Hot Deal</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="exampleSelect1" class="control-label">Loại giảm giá</label>
              <select class="form-control" name="MaKM" id="exampleSelect1">
                <option>-- Chọn tình trạng --</option>
                <?php foreach ($data_km as $row) { ?>
                  <option value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-md-3">
              <button class="btn btn-save" type="submit">Lưu lại</button>
              <a class="btn btn-cancel" href="?mod=sanpham">Hủy bỏ</a>
            </div>
          </form>
        </div>
      </div>
    </div>
</main>