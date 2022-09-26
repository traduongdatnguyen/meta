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
            <li class="breadcrumb-item"><a href="#">Chỉnh sửa sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Chỉnh sửa sản phẩm</h3>

                <div class="row element-button">
                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" href="?mod=sanpham&act=add" title="Thêm"><i class="fas fa-plus"></i>
                            Thêm sản phẩm mới
                        </a>
                    </div>
                    <?php if (isset($_SESSION['isLogin_Admin'])) { ?>
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="?mod=sanpham&act=add" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm danh mục
                            </a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="?mod=loaisanpham&act=add" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm loại sản phẩm
                            </a>
                        </div>
                    <?php } ?>
                    <div class="col-sm-2">
                        <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#adddanhmuc"><i class="fas fa-folder-plus"></i> Thêm Màu Sản Phẩm</a>
                    </div>
                </div>


                <div class="tile-body">
                    <form action="?mod=sanpham&act=update" method="POST" enctype="multipart/form-data" class="row">

                        <div class="form-group">
                            <input type="hidden" name="MaSP" value="<?= $data['MaSP'] ?>">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Danh mục</label>
                            <select class="form-control" name="MaDM" id="exampleSelect1">
                                <?php foreach ($data_dm as $row) { ?>
                                    <option <?= ($row['MaDM'] == $data['MaDM']) ? 'selected' : '' ?> value="<?= $row['MaDM'] ?>"><?= $row['TenDM'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Loại sản phẩm</label>
                            <select class="form-control" name="MaLSP" id="exampleSelect1">
                                <?php foreach ($data_lsp as $row) { ?>
                                    <option <?= ($row['MaLSP'] == $data['MaLSP']) ? 'selected' : '' ?> value="<?= $row['MaLSP'] ?>"><?= $row['TenLSP'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Giá bán</label>
                            <input class="form-control" value="<?= $data['DonGia'] ?>" name="DonGia" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Số lượng</label>
                            <input class="form-control" value="<?= $data['SoLuong'] ?>" min="0" name="SoLuong" type="number">
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Tên sản phẩm</label>
                            <input class="form-control" value="<?= $data['TenSP'] ?>" name="TenSP" type="text">
                        </div>

                        <div class="form-group col-md-3">
                            <label class="control-label">Ảnh sản phẩm 1</label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" value="<?= $data['HinhAnh1'] ?>" name="HinhAnh1" />
                            </div>
                            <div id="boxchoice">
                                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 1</a>
                                <p style="clear:both"></p>
                                <img width="200" height="200" src="../public/assets/images/products/<?= $data['HinhAnh1'] ?>" alt="" srcset="">
                            </div>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ảnh sản phẩm 2</label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" value="<?= $data['HinhAnh2'] ?>" name="HinhAnh2" />
                            </div>
                            <div id="boxchoice">
                                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 2</a>
                                <p style="clear:both"></p>
                                <img width="200" height="200" src="../public/assets/images/products/<?= $data['HinhAnh2'] ?>" alt="" srcset="">
                            </div>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ảnh sản phẩm 3</label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" value="<?= $data['HinhAnh3'] ?>" name="HinhAnh3" />
                            </div>
                            <div id="boxchoice">
                                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 3</a>
                                <p style="clear:both"></p>
                                <img width="200" height="200" src="../public/assets/images/products/<?= $data['HinhAnh3'] ?>" alt="" srcset="">
                            </div>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ảnh sản phẩm 4</label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" value="<?= $data['HinhAnh4'] ?>" name="HinhAnh4" />
                            </div>
                            <div id="boxchoice">
                                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 4</a>
                                <p style="clear:both"></p>
                                <img width="200" height="200" src="../public/assets/images/products/<?= $data['HinhAnh4'] ?>" alt="" srcset="">
                            </div>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ảnh sản phẩm 5</label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" value="<?= $data['HinhAnh5'] ?>" name="HinhAnh5" />
                            </div>
                            <div id="boxchoice">
                                <a href="javascript:" class="Choicefile"><i class="fas fa-cloud-upload-alt"></i> Chọn ảnh 5</a>
                                <p style="clear:both"></p>
                                <img width="200" height="200" src="../public/assets/images/products/<?= $data['HinhAnh5'] ?>" alt="" srcset="">
                            </div>

                        </div>
                        <div class="form-group col-md-9">
                            <label class="control-label">Màn hình</label>
                            <input class="form-control" value="<?= $data['ManHinh'] ?>" name="ManHinh" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Hệ điều hành</label>
                            <input class="form-control" value="<?= $data['HDH'] ?>" name="HDH" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Cammera trước</label>
                            <input class="form-control" value="<?= $data['CamTruoc'] ?>" name="CamTruoc" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">Camera sau</label>
                            <input class="form-control" value="<?= $data['CamSau'] ?>" name="CamSau" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label">CPU</label>
                            <input class="form-control" value="<?= $data['CPU'] ?>" name="CPU" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ram</label>
                            <input class="form-control" value="<?= $data['Ram'] ?>" name="Ram" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Rom</label>
                            <input class="form-control" value="<?= $data['Rom'] ?>" name="Rom" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Pin</label>
                            <input class="form-control" value="<?= $data['Pin'] ?>" name="Pin" type="text">
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">SDCard</label>
                            <input class="form-control" value="<?= $data['SDCard'] ?>" name="SDCard" type="text">
                        </div>

                        <!-- Màu -->
                        <input class="form-control" value="<?= $data['LoaiMau1'] ?>" name="LoaiMau1" type="hidden">

                        <input class="form-control" value="<?= $data['LoaiMau2'] ?>" name="LoaiMau2" type="hidden">

                        <input class="form-control" value="<?= $data['LoaiMau3'] ?>" name="LoaiMau3" type="hidden">

                        <input class="form-control" value="<?= $data['LoaiMau4'] ?>" name="LoaiMau4" type="hidden">

                        <input class="form-control" value="<?= $data['LoaiMau5'] ?>" name="LoaiMau5" type="hidden">

                        <!-- Màu -->

                        <!-- THông tin số -->
                        <div class="form-group col-md-12">
                            <label class="control-label">Thông số kỹ thuật</label>
                            <textarea class="form-control" name="SoDanhGia" id="thongsokythuat"><?= $data['SoDanhGia'] ?></textarea>
                            <script>
                                CKEDITOR.replace('thongsokythuat');
                            </script>
                        </div>

                        <div class="form-group col-md-12">
                            <label class="control-label">Thông tin sản phẩm:</label>
                            <textarea class="form-control" name="MoTa" id="summernote"><?= $data['MoTa'] ?></textarea>
                            <script>
                                CKEDITOR.replace('summernote');
                            </script>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Link video review</label>
                            <textarea type="text" class="form-control" name="review"><?= $data['SoSao'] ?></textarea>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Tình trạng hiện tại:</label>
                            <select class="form-control" name="TrangThai" id="exampleSelect1">
                                <option>-- Chọn tình trạng --</option>
                                <option <?= ($data['TrangThai'] == '0') ? 'selected' : '' ?> value="0">Sắp ra mắt</option>
                                <option <?= ($data['TrangThai'] == '1') ? 'selected' : '' ?> value="1">New</option>
                                <option <?= ($data['TrangThai'] == '2') ? 'selected' : '' ?> value="2">New Hot</option>
                                <option <?= ($data['TrangThai'] == '3') ? 'selected' : '' ?> value="3">Sale</option>
                                <option <?= ($data['TrangThai'] == '4') ? 'selected' : '' ?> value="4">Hot Deal</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleSelect1" class="control-label">Loại giảm giá</label>
                            <select class="form-control" name="MaKM" id="exampleSelect1">
                                <?php foreach ($data_km as $row) { ?>
                                    <option <?= ($row['MaKM'] == $data['MaKM']) ? 'selected' : '' ?> value="<?= $row['MaKM'] ?>"><?= $row['TenKM'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3 text-center">
                            <button class="btn btn-save" type="submit">Lưu lại</button>
                            <a class="btn btn-cancel" href="?mod=sanpham">Hủy bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</main>
<style>
    .app-menu__item.active2 {
        background: #c6defd;
        text-decoration: none;
        color: rgb(22 22 72);
        box-shadow: none;
        border: 1px solid rgb(22 22 72);
    }
</style>


<div class="modal fade" id="adddanhmuc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Thêm màu </h5>
                        </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="control-label">Danh mục màu hiện đang có</label>
                        <ul style="padding-left: 10%;">
                            <?php if ($data_Color != NULL) { ?>
                                <?php foreach ($data_Color as $item) : ?>
                                    <li><?= $item['TypeColor'] ?> <a href="./?mod=sanpham&act=deleteColor&id=<?= $item['MaSP'] ?>&name=<?= $item['TypeColor'] ?>" class="btn btn-primary btn-sm delete"><i class="fas fa-trash-alt"></i></a></li>
                            <?php endforeach;
                            } ?>
                        </ul>
                    </div>
                    <form action="?mod=sanpham&act=addTypeColor" method="POST" enctype="multipart/form-data" class="row">
                        <div class="form-group col-md-12">
                            <input class="form-control" name="MaSP" value="<?= $data['MaSP'] ?>" type="hidden" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Loại màu</label>
                            <input class="form-control" name="TypeColor" type="text" required>
                        </div>

                        <div class="form-group col-md-12">
                            <button class="btn btn-save" type="submit">Lưu lại</button>
                            <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>