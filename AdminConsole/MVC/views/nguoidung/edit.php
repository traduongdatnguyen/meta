<script>
  function readURL(input, thumbimage) {
    if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
      var reader = new FileReader();
      reader.onload = function(e) {
        $("#thumbimage").attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    } else { // Sử dụng cho IE
      $("#thumbimage").attr('src', input.value);

    }
    $("#thumbimage").show();
    $('.filename').text($("#uploadfile").val());
    $('.Choicefile').css('background', '#14142B');
    $('.Choicefile').css('cursor', 'default');
    $(".removeimg").show();
    $(".Choicefile").unbind('click');

  }
  $(document).ready(function() {
    $(".Choicefile").bind('click', function() {
      $("#uploadfile").click();

    });
    $(".removeimg").click(function() {
      $("#thumbimage").attr('src', '').hide();
      $("#myfileupload").html('<input type="file" id="uploadfile" name="HinhAnh"  onchange="readURL(this);" />');
      $(".removeimg").hide();
      $(".Choicefile").bind('click', function() {
        $("#uploadfile").click();
      });
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'pointer');
      $(".filename").text("");
    });
  })
</script>

<style>
  .app-menu__item.active1 {
    background: #c6defd;
    text-decoration: none;
    color: rgb(22 22 72);
    box-shadow: none;
    border: 1px solid rgb(22 22 72);
  }

  .Choicefile {
    display: block;
    background: #14142B;
    border: 1px solid #fff;
    color: #fff;
    width: 150px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    padding: 5px 0px;
    border-radius: 5px;
    font-weight: 500;
    align-items: center;
    justify-content: center;
  }

  .Choicefile:hover {
    text-decoration: none;
    color: white;
  }

  #uploadfile,
  .removeimg {
    display: none;
  }

  #thumbbox {
    position: relative;
    width: 100%;
    margin-bottom: 20px;
  }

  .removeimg {
    height: 25px;
    position: absolute;
    background-repeat: no-repeat;
    top: 5px;
    left: 5px;
    background-size: 25px;
    width: 25px;
    /* border: 3px solid red; */
    border-radius: 50%;

  }

  .removeimg::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    content: '';
    border: 1px solid red;
    background: red;
    text-align: center;
    display: block;
    margin-top: 11px;
    transform: rotate(45deg);
  }

  .removeimg::after {
    /* color: #FFF; */
    /* background-color: #DC403B; */
    content: '';
    background: red;
    border: 1px solid red;
    text-align: center;
    display: block;
    transform: rotate(-45deg);
    margin-top: -2px;
  }
</style>
<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Danh sách tài khỏan</li>
      <li class="breadcrumb-item"><a>Chỉnh sửa tài khoản</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Chỉnh sửa tài khoản</h3>
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i class="fas fa-folder-plus"></i>Thêm tài khoản mới</b></a>
            </div>
          </div>
          <form action="./?mod=nguoidung&act=update" method="POST" role="form" enctype="multipart/form-data" class="row">
            <input class="form-control" name="MaND" type="hidden" value="<?= $data['MaND'] ?>">
            <div class="form-group col-md-4">
              <label class="control-label">Tên tài khoản</label>
              <input class="form-control" name="TaiKhoan" value="<?= $data['TaiKhoan'] ?>" type="text" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Họ</label>
              <input class="form-control" name="Ho" type="text" value="<?= $data['Ho'] ?>" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Tên</label>
              <input class="form-control" name="Ten" value="<?= $data['Ten'] ?>" type="text" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Địa chỉ email</label>
              <input class="form-control" name="Email" value="<?= $data['Email'] ?>" type="email" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Tỉnh/Thành Phố</label>
              <input class="form-control" type="text" name="DiaChi" value="<?= $data['DiaChi'] ?>" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Quận/Huyện</label>
              <input class="form-control" type="text" name="Quan" value="<?= $data['Quan'] ?>" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Địa chỉ thường trú</label>
              <input class="form-control" type="text" name="Phuong" value="<?= $data['Phuong'] ?>" required>
            </div>
            <div class="form-group  col-md-4">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" name="SDT" value="<?= $data['SDT'] ?>" type="tel" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Giới tính</label>
              <select class="form-control" name="GioiTinh" id="exampleSelect2" required>
                <option>-- Chọn giới tính --</option>
                <option <?= ($data['GioiTinh'] == 'Nam') ? 'selected' : '' ?>>Nam</option>
                <option <?= ($data['GioiTinh'] == 'Nữ') ? 'selected' : '' ?>>Nữ</option>
              </select>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Mật khẩu</label>
              <input class="form-control" name="MatKhau" value="<?= $data['MatKhau'] ?>" type="password">
            </div>

            <div class="form-group col-md-4">
              <label class="control-label">Ảnh 3x4 nhân viên</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="HinhAnh" onchange="readURL(this);" />
              </div>
              <div id="thumbbox">
                <img height="250" width="250" alt="Thumb image" id="thumbimage" style="display: none" />
                <a class="removeimg" href="javascript:"></a>
              </div>
              <div id="boxchoice">
                <a href="javascript:" class="Choicefile"><i class='bx bx-upload'></i></a>
                <p style="clear:both"></p>
              </div>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Ảnh 3x4 nhân viên</label>
              <img width="100%" src="../public/assets/images/testimonials/<?= $data['HinhAnh'] ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="exampleSelect1" class="control-label">Chức vụ</label>
              <select class="form-control" name="MaQuyen" id="exampleSelect1">
                <option>-- Chọn chức vụ --</option>
                <option <?= ($data['MaQuyen'] == '1') ? 'selected' : '' ?> value="1">Khách hàng</option>
                <option <?= ($data['MaQuyen'] == '2') ? 'selected' : '' ?> value="2">Quản trị viên</option>
                <option <?= ($data['MaQuyen'] == '3') ? 'selected' : '' ?> value="3">Nhân viên</option>
                <option <?= ($data['MaQuyen'] == '4') ? 'selected' : '' ?> value="4">Nhân viên giao hàng</option>
                <option <?= ($data['MaQuyen'] == '5') ? 'selected' : '' ?> value="5">Biên tập viên</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="exampleSelect1" class="control-label">Trạng thái</label>
              <select class="form-control" name="TrangThai" id="exampleSelect1">
                <option>-- Chọn chức vụ --</option>
                <option <?= ($data['TrangThai'] == '1') ? 'selected' : '' ?> value="1">Hiện</option>
                <option <?= ($data['TrangThai'] == '2') ? 'selected' : '' ?> value="2">Tạm khóa</option>

              </select>
            </div>
            <div class="form-group col-md-6">
              <button class="btn btn-save btn_b" type="submit">Lưu lại</button>
              <a class="btn btn-cancel btn_b" href="./?mod=nguoidung">Hủy bỏ</a>
            </div>
          </form>
        </div>

      </div>

</main>