<?php include('inc/_config.php');?>
<?php 
	$id=$_GET[q];
	$qmtr = mysqli_query($conn,"select * from kpop where id='$id'");
	$rmtr = mysqli_fetch_array($qmtr);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php  include('inc/_head.php');?>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include('inc/_header.php');?>

    <!-- ##### Hero Area Start ##### -->
    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <div class="single-blog-post style2 mb-50">
                            <div class="blog-thumb mb-30">
                                <img src="img/<?php echo $rmtr[gambar] ?>" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Produtcs <?php echo $t=$rmtr[type] ?></a>
                                <h4><?php echo $rmtr[judul] ?></h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> </a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> <?php echo tgl($rmtr[waktu]) ?></a>
                                </div>
								<h5>Info Produk  <?php echo $rmtr[judul]?></h5>
                                <p><?php echo $rmtr[info]?></p>
								<br>
			<ul class="nav nav-tabs" style="width:100%; background:#E92030;">
              <li class="active"><a style="background:#E92030;" class="btn videomag-btn mt-30" href="#tab_1" data-toggle="tab">Fitur</a></li>
              <li><a class="btn videomag-btn mt-30" style="background:#E92030;" href="#tab_2" data-toggle="tab">Warna</a></li>
              <li><a class="btn videomag-btn mt-30" style="background:#E92030;" href="#tab_3" data-toggle="tab">Spesifikasi</a></li>
              <li><a class="btn videomag-btn mt-30" style="background:#E92030;" href="#tab_4" data-toggle="tab">Harga</a></li>
             
            </ul>
            <div class="tab-content single-widget-area border-style mb-50">
              <div class="tab-pane active" id="tab_1">
			  
				<h5>Fitur  <?php echo $rmtr[judul]?>:</h5>
			  
                <?php echo $rmtr[fitur]?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <h5>Pilihan Warna <?php echo $rmtr[judul]?>:</h5>
                <?php echo $rmtr[warna]?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
				<h5>Spesifikasi mobil <?php echo $rmtr[judul]?>:</h5>
                <p><?php echo $rmtr[spesifikasi]?></p>
											  
              </div>
              <div class="tab-pane" id="tab_4">
			  <?php echo $rmtr[harga]?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

								
                            </div>
                        </div>
                    </div>
					<div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mb-100">
                       
                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area mb-50">
                            <h2 class="widget-title">mobil <?php echo $t; ?></h2>
						<?php						
							$qax = mysqli_query($conn,"select * from kpop where id!='$id' and type='$t' order by id limit 0,5");
							while($rax = mysqli_fetch_array($qax)){
						?>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30">
                                <div class="blog-thumb">
                                    <img src="img/<?php echo $rax[gambar];?>" alt="">
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Artikel</a>
                                    <a href="#" class="post-title"><?php echo $rax[judul];?></a>
                                </div>
                            </div>
						<?php } ?>
                          
                        </div>
						<?php						
							$qaxx = mysqli_query($conn,"select * from file where jenis='2'");
							$raxx = mysqli_fetch_array($qaxx);
						?>
                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area border-style mb-50">
                            <h2 class="widget-title">Video Terbaru</h2>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style3">
                                <div class="blog-thumb mb-30">
                                    <img src="img/<?php echo $raxx[gambar] ?>" alt="">
                                    <!-- Play Button -->
                                    <a href="<?php echo $raxx[file]?>" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag"><?php echo type_file($raxx[type])?></a>
                                    <a href="#" class="post-title"> <?php echo $raxx[judul]?></a>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
					<?php /*
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mb-100">
                        <h3 class="mb-50">Comments (1)</h3>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/40.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author">Jane Smith</a>
                                            <a href="#" class="post-date">July 11, 2018</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                        <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tinci dunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis sus cipit sem a consequat.</p>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="img/bg-img/41.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <div class="d-flex">
                                                    <a href="#" class="post-author">Christian Williams</a>
                                                    <a href="#" class="post-date">April 15, 2018</a>
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                                <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, Nullam vel orci dui. Su spendisse sit amet laoreet neque.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="img/bg-img/40.jpg" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <div class="d-flex">
                                            <a href="#" class="post-author">Cris Williams</a>
                                            <a href="#" class="post-date">July 11, 2018</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet neque. Fusce sagittis suscipit.</p>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="post-a-comment-area mb-100 clearfix">
                        <h3 class="mb-50">Leave a comment</h3>

                        <!-- Reply Form -->
                        <div class="contact-form-area">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name*" required>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email*" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message*" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn videomag-btn mt-30" type="submit">Submit Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mb-100">
                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area border-style mb-50">
                            <h2 class="widget-title">Newsletter</h2>
                            <p>Subscribe to our newsletter and join our thousand subscribers.</p>
                            <form action="#" method="post">
                                <input type="search" class="form-control" name="newsletter-search" placeholder="Your E-mail Address">
                                <button type="submit" class="btn videomag-btn">Subscribe</button>
                            </form>
                        </div>

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area mb-50">
                            <h2 class="widget-title">July Top</h2>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30">
                                <div class="blog-thumb">
                                    <img src="img/bg-img/20.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                    <div class="post-meta">
                                        <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                        <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30">
                                <div class="blog-thumb">
                                    <img src="img/bg-img/21.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                    <div class="post-meta">
                                        <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                        <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30">
                                <div class="blog-thumb">
                                    <img src="img/bg-img/22.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title">The New Collection of Dior</a>
                                    <div class="post-meta">
                                        <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                        <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30">
                                <div class="blog-thumb">
                                    <img src="img/bg-img/23.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title">Fashion Week 2018 -Spring/summer</a>
                                    <div class="post-meta">
                                        <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                        <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30">
                                <div class="blog-thumb">
                                    <img src="img/bg-img/24.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title">2018 Summer shoes Collection</a>
                                    <div class="post-meta">
                                        <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                        <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post style4 d-flex mb-30">
                                <div class="blog-thumb">
                                    <img src="img/bg-img/25.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="#" class="video-play-btn style3"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title">The New Collection of Dior</a>
                                    <div class="post-meta">
                                        <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                        <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area border-style mb-50">
                            <h2 class="widget-title">Most liked</h2>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style3">
                                <div class="blog-thumb mb-30">
                                    <img src="img/bg-img/15.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title">Coffee in Paris</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                        <div class="d-flex">
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area border-style mb-50">
                            <h2 class="widget-title">Featured</h2>
                            <!-- Single Blog Post -->
                            <div class="single-blog-post style3">
                                <div class="blog-thumb mb-30">
                                    <img src="img/bg-img/10.jpg" alt="">
                                    <!-- Play Button -->
                                    <a href="https://www.youtube.com/watch?v=0aNNYEUARAk" class="video-play-btn style2"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="blog-content">
                                    <a href="#" class="post-tag">Featured</a>
                                    <a href="#" class="post-title">Coffee in Paris</a>
                                    <div class="post-meta d-flex justify-content-between">
                                        <a href="#"><img src="img/core-img/calendar2.png" alt=""> July 23, 2018</a>
                                        <div class="d-flex">
                                            <a href="#"><img src="img/core-img/chat2.png" alt=""> 5</a>
                                            <a href="#"><img src="img/core-img/like2.png" alt=""> 12k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <!-- Footer Content -->
                <div class="col-12 col-lg-4">
                    <div class="footer-content">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="img/core-img/logo.png" alt=""></a>
                        <p>Donec cursus eros et risus scelerisque, sit amet ultrices arcu scelerisque. Sed consequat fermentum turpis, vulputate maximus.Donec cursus eros et risus scelerisque, sit amet ultrices arcu scelerisque. Sed consequat fermentum turpis, vulputate maximus</p>
                        <div class="footer-social-info d-flex">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Footer Content -->
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="footer-content d-flex flex-wrap">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <h5 class="widget-title">Usefull Links</h5>
                            <nav>
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Games</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <h5 class="widget-title">About Us</h5>
                            <nav>
                                <ul>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Jobs</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Conditions</a></li>
                                    <li><a href="#">About</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Video Catagory -->
                        <div class="video-catagory">
                            <h5 class="widget-title">Video Categories</h5>
                            <ul>
                                <li><a href="#"><span>Travel</span> <span>20</span></a></li>
                                <li><a href="#"><span>Technology</span> <span>10</span></a></li>
                                <li><a href="#"><span>Fashion</span> <span>71</span></a></li>
                                <li><a href="#"><span>Animals</span> <span>15</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
	<?php */?>

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
	<script>
		document.getElementByTagName("table")[0].setAttribute("class","table-bordered");
	</script>

	</body>

</html>