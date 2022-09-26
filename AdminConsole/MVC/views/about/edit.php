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
      $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
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
  .app-menu__item.active9 {
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
      <li class="breadcrumb-item">Danh sách banner</li>
      <li class="breadcrumb-item"><a href="#">Chỉnh sửa banner</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Chỉnh sửa blog</h3>
        <?php if (isset($_COOKIE['msg'])) { ?>
          <div class="alert alert-success">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
          </div>
        <?php } ?>
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a href="./?mod=banner&act=add" class="btn btn-add btn-sm"><i class="fas fa-folder-plus"></i> Thêm banner mới</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm"><i class="fas fa-folder-plus"></i> Thêm danh mục</a>
            </div>
            <div class="col-sm-2">
              <a href="./?mod=loaisanpham" class="btn btn-add btn-sm"><i class="fas fa-folder-plus"></i> Thêm loại sản phẩm</a>
            </div>
          </div>
          <?php if (isset($_COOKIE['msg'])) { ?>
            <div class="alert alert-warning">
              <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
            </div>
          <?php } ?>
          <form action="./?mod=blogs&act=update" method="POST" role="form" enctype="multipart/form-data" class="row">
            <div class="form-group">
              <input class="form-control" value="<?= $data['MaBlogs'] ?>" name="MaBlogs" type="hidden">
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Tên Blog</label>
              <input class="form-control" name="TenBL" value="<?= $data['TenBL'] ?>" type="text">
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Ảnh mới</label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" value="<?= $data['HinhAnh'] ?>" name="HinhAnh" onchange="readURL(this);" />
              </div>
              <div id="thumbbox">
                <img height="450" width="400" alt="Thumb image" id="thumbimage" style="display: none" />
                <a class="removeimg" href="javascript:"></a>
              </div>
              <div id="boxchoice">
                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh</a>
                <p style="clear:both"></p>
              </div>

            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Ảnh cũ</label>
              <div id="myfileupload">
                <img src="../public/assets/images/blog/<?= $data['HinhAnh'] ?>" width="500">
              </div>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Status</label>
              <select name="TomTat" class="form-control" name="TrangThai" id="exampleSelect1" >
              <option <?= ($data['TomTat'] == 'Hot') ? 'selected' : '' ?> value="Hot">Hot</option>
              <option <?= ($data['TomTat'] == '') ? 'selected' : '' ?> value=""></option>
              </select>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Mô tả</label>
              <textarea class="form-control" name="MoTa" id="mota"><?= $data['MoTa'] ?></textarea>
              <script>
                CKEDITOR.replace('mota');
              </script>
            </div>
            <button class="btn btn-save" type="submit">Lưu lại</button>
            <button class="btn btn-cancel" href="table-data-product.html">Hủy bỏ</button>
          </form>
        </div>

      </div>
</main>