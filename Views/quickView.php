<?php if ($data != NULL) { ?>
	<div class="container quickView-container">
		<div class="quickView-content">
			<div class="row">
				<div class="col-lg-7 col-md-6">

					<div class="row">
						<div class="product-left">
							<a href="#one" class="carousel-dot active">
								<img src="public/assets/images/products/<?= $data['HinhAnh1'] ?>">
							</a>
							<a href="#two" class="carousel-dot">
								<img src="public/assets/images/products/<?= $data['HinhAnh2'] ?>">
							</a>
							<a href="#three" class="carousel-dot">
								<img src="public/assets/images/products/<?= $data['HinhAnh3'] ?>">
							</a>
							<a href="#four" class="carousel-dot">
								<img src="public/assets/images/products/<?= $data['HinhAnh4'] ?>">
							</a>
							<a href="#five" class="carousel-dot">
								<img src="public/assets/images/products/<?= $data['HinhAnh5'] ?>">
							</a>
						</div>
						<div class="product-right">
							<div class="owl-carousel owl-theme owl-nav-inside owl-light mb-0" data-toggle="owl" data-owl-options='{
	                        "dots": false,
	                        "nav": false, 
	                        "URLhashListener": true,
	                        "responsive": {
	                            "900": {
	                                "nav": true,
	                                "dots": true
	                            }
	                        }
	                    }'>
								<div class="intro-slide" data-hash="one">
									<img src="public/assets/images/products/<?= $data['HinhAnh1'] ?>" alt="Image Desc">
									<a href="#" class="btn-fullscreen">
										<i class="icon-arrows"></i>
									</a>
								</div><!-- End .intro-slide -->

								<div class="intro-slide" data-hash="two">
									<img src="public/assets/images/products/<?= $data['HinhAnh2'] ?>" alt="Image Desc">
									<a href="#" class="btn-fullscreen">
										<i class="icon-arrows"></i>
									</a>
								</div><!-- End .intro-slide -->

								<div class="intro-slide" data-hash="three">
									<img src="public/assets/images/products/<?= $data['HinhAnh3'] ?>" alt="Image Desc">
									<a href="#" class="btn-fullscreen">
										<i class="icon-arrows"></i>
									</a>
								</div><!-- End .intro-slide -->

								<div class="intro-slide" data-hash="four">
									<img src="public/assets/images/products/<?= $data['HinhAnh4'] ?>" alt="Image Desc">
									<a href="#" class="btn-fullscreen">
										<i class="icon-arrows"></i>
									</a>
								</div><!-- End .intro-slide -->
								<div class="intro-slide" data-hash="five">
									<img src="public/assets/images/products/<?= $data['HinhAnh5'] ?>" alt="Image Desc">
									<a href="#" class="btn-fullscreen">
										<i class="icon-arrows"></i>
									</a>
								</div><!-- End .intro-slide -->
							</div>
						</div>
					</div>
				</div>
				<form action="./?act=cart&xuli=add&id=<?= $data['MaSP'] ?>" method="POST" class="col-lg-5 col-md-6">
					<h2 class="product-title"><?= $data['TenSP'] ?></h2>
					<h3 class="product-price">$<?= number_format($data['DonGia']) ?></h3>

					<div class="ratings-container">
						<div class="ratings">
							<div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
						</div><!-- End .ratings -->
						<span class="ratings-text">( 2 Reviews )</span>
					</div><!-- End .rating-container -->
					<p class="product-txt"><?= $data['ManHinh'] ?></p>
					<p class="product-txt"><?= $data['CamTruoc'] ?></p>
					<p class="product-txt"><?= $data['CamSau'] ?></p>
					<p class="product-txt"><?= $data['Ram'] ?></p>

					<?php if ($data['LoaiMau1'] != "") { ?> <div class="details-filter-row details-row-size">
							<label for="typecolor">Color:</label>
							<div class="select-custom">
								<select name="typecolor" id="size" class="form-control">
									<option value="<?= $data['LoaiMau1'] ?>" selected="selected"><?= $data['LoaiMau1'] ?></option>
									<option value="<?= $data['LoaiMau2'] ?>"><?= $data['LoaiMau2'] ?></option>
									<option value="<?= $data['LoaiMau3'] ?>"><?= $data['LoaiMau3'] ?></option>
									<option value="<?= $data['LoaiMau4'] ?>"><?= $data['LoaiMau4'] ?></option>
									<option value="<?= $data['LoaiMau5'] ?>"><?= $data['LoaiMau5'] ?></option>
								</select>
							</div><!-- End .select-custom -->
						</div>
					<?php } else { ?>
					<?php	} ?>


					<div class="details-filter-row details-row-size">
						<label for="qty">Qty:</label>
						<div class="product-details-quantity">
							<input type="number" id="qty" class="form-control" name="quality" value="1" min="1" max="10" step="1" data-decimals="0" required>
						</div><!-- End .product-details-quantity -->
					</div>

					<div class="product-details-action">
						<div class="details-action-wrapper">
							<a class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
							<a href="?act=cart&xuli=add&id=<?= $data['MaSP'] ?>" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
						</div><!-- End .details-action-wrapper -->
						<button type="submit"class="btn-product btn-cart"><span>add to cart</span></button>
					</div>

					<div class="product-details-footer">
						<div class="social-icons social-icons-sm">
							<span class="social-label">Share:</span>
							<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
							<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
							<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
							<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php } ?>