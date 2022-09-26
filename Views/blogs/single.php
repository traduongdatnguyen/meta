<?php if ($data_detail != NULL) { ?>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('public/public/assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title"><span> <?= $data_detail['TenBL'] ?></span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $data_detail['TenBL'] ?></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <?= $data_detail['MoTa'] ?>

                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3">
                        <div class="sidebar">
                            <div class="widget widget-search">
                                <h3 class="widget-title">Search</h3><!-- End .widget-title -->

                                <form action="#">
                                    <label for="ws" class="sr-only">Search in blog</label>
                                    <input type="search" class="form-control" name="ws" id="ws" placeholder="Search in blog" required>
                                    <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
                                </form>
                            </div><!-- End .widget -->

                            <div class="widget widget-cats">
                                <h3 class="widget-title">Categories</h3><!-- End .widget-title -->

                                <ul>
                                    <li><a href="#">Smart Phone<span>3</span></a></li>
                                    <li><a href="#">LapTop<span>3</span></a></li>

                                </ul>
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">Popular Posts</h3><!-- End .widget-title -->

                                <ul class="posts-list">
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="public/assets/images/blog/sidebar/post-1.jpg" alt="post">
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 22, 2021</span>
                                            <h4><a href="#">Aliquam tincidunt mauris eurisus.</a></h4>
                                        </div>
                                    <li>
                                        <figure>
                                            <a href="#">
                                                <img src="public/assets/images/blog/sidebar/post-4.jpg" alt="post">
                                            </a>
                                        </figure>

                                        <div>
                                            <span>Nov 25, 2018</span>
                                            <h4><a href="#">Donec quis dui at dolor tempor interdum.</a></h4>
                                        </div>
                                    </li>
                                </ul><!-- End .posts-list -->
                            </div><!-- End .widget -->

                            <div class="widget widget-banner-sidebar">
                                <div class="banner-sidebar-title">ad box 280 x 280</div><!-- End .ad-title -->

                                <div class="banner-sidebar banner-overlay">
                                    <a href="#">
                                        <img src="public/assets/images/blog/sidebar/banner.jpg" alt="banner">
                                    </a>
                                </div><!-- End .banner-ad -->
                            </div><!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">Browse Tags</h3><!-- End .widget-title -->

                                <div class="tagcloud">
                                    <a href="#">Smart Phone</a>
                                    <a href="#">Laptop</a>
                                    <a href="#">Audio</a>
                                    <a href="#">Tv</a>
                                </div><!-- End .tagcloud -->
                            </div><!-- End .widget -->

                            <div class="widget widget-text">
                                <h3 class="widget-title">About Blog</h3><!-- End .widget-title -->

                                <div class="widget-text-content">
                                    <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, pulvinar nunc sapien ornare nisl.</p>
                                </div><!-- End .widget-text-content -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
<?php } ?>