<?php include('inc/_config.php');?>
<?php 
	$id=$_GET[q];
	$qmtr = mysqli_query($conn,"select * from mobil where id='$id'");
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
                <div class="col-12 col-lg-12">
                    <div class="post-details-content mb-100">
                        <div class="single-blog-post style2 mb-50">
                            <div class="blog-thumb mb-30">
							</div>
                            <div class="blog-content">
                                <h4>Penginputan Pembelian</h4>
                                <form method="post" enctype="multipart/form-data">
<table class="table">
	<tr>
		<td>Nama Pemohon</td>
		<td>:</td>
		<td><input type="text" name="a1" placeholder="Nama lengkap" required class="form-control"></td>
		<td rowspan="3">
				Jangan lupa pilih jenis Pembayarannya:
			<ul class="nav nav-tabs">
              <li><a class="btn videomag-btn mt-30" href="#tab_1" data-toggle="tab">CASH</a></li>
              <li><a class="btn videomag-btn mt-30" href="#tab_2" data-toggle="tab">CREDIT</a></li>
            </ul>		
		</td>
	</tr>
	<tr>
		<td>TTL Pemohon</td>
		<td>:</td>
		<td><input type="date" name="a2" class="form-control" placeholder="" required></td>
		
	</tr>
	<tr>
		<td>Nama Ibu kandung</td>
		<td>:</td>
		<td><input type="text" required placeholder="Nama lengkap ibu kandung" name="a3" class="form-control"></td>
	</tr>
	<tr>
		<td>Upload KTP</td>
		<td>:</td>
		<td><input type="file" name="a4" placeholder="" required class="form-control"></td>
	</tr>
	<tr>
		<td>Upload KK</td>
		<td>:</td>
		<td><input type="file" name="a5" placeholder="" required class="form-control"></td>
	</tr>
	<tr>
		<td>Upload Slip Gaji <small style="color:red;">* jika ada</small></td>
		<td>:</td>
		<td><input type="file" name="a6" class="form-control"></td>
	</tr>

</table>
			<div class="nav-tabs-custom col-lg-6">
            <div class="tab-content single-widget-area border-style mb-50">
              <div class="tab-pane" id="tab_1">
			  <br>
				Pembayaran dengan CASH
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
<table class="table">
			  <tr>
		<td>Nama Penjamin</td>
		<td>:</td>
		<td><input type="text" name="a7" placeholder="Nama lengkap penjamin"  class="form-control"></td>
		
	</tr>
	<tr>
		<td>TTL Penjamin</td>
		<td>:</td>
		<td><input type="date" name="a8" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama Ibu kandung</td>
		<td>:</td>
		<td><input type="text" name="a9" placeholder="Nama lengkap ibu kandung penjamin" class="form-control"></td>
	</tr>
	<tr>
		<td>Upload KTP</td>
		<td>:</td>
		<td><input type="file" name="a10" class="form-control"></td>
	</tr>
</table>
             </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
	
	
<table class="table col-lg-6">
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><input type="text" name="a11" placeholder="Alamat" required class="form-control"></td>
	</tr>
	<tr>
		<td>RT <input type="text" name="a12" placeholder="RT" required class="form-control"></td>
		<td></td>
		<td>RW<input type="text" name="a13" placeholder="RW" required class="form-control"></td>
	</tr>
	<tr>
		<td>Kelurahan</td>
		<td>:</td>
		<td><input type="text" name="a14" class="form-control" placeholder="Kelurahan" required></td>
	</tr>
	<tr>
		<td>Kecamatan</td>
		<td>:</td>
		<td><input type="text" name="a15" placeholder="Kecamatan" required class="form-control"></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td><input type="text" name="a16" placeholder="No HP yang bisa dihubungi" required class="form-control"></td>
	</tr>
	
	<tr>
		<td>Type Mobil</td>
		<td>:</td>
		<td><input type="text" name="a17" placeholder="Type mobil" class="form-control"></td>
	</tr>
	<tr>
		<td>DP Bayar</td>
		<td>:</td>
		<td><input type="text" name="a18" placeholder="DP Bayar" required class="form-control"></td>
	</tr>
	<tr>
		<td>Tenor</td>
		<td>:</td>
		<td>
		<select name="a19" class="form-control">
			<option value="11 Bulan">11 Bulan</option>
			<option value="17 Bulan">17 Bulan</option>
			<option value="23 Bulan">23 Bulan</option>
			<option value="29 Bulan">29 Bulan</option>
			<option value="35 Bulan">35 Bulan</option>
		</select>
		</td>
		</tr>
	<tr>
		<td colspan="3"><button name="save" value="1" class="btn videomag-btn mt-50">Kirim Formulir</button></td>
		
	</tr>
</table>								
		  
		  								
									
								</form>
								
								</div>
                            </div>
                        </div>
                    </div>
					<!-- xxx -->
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
<?php
	if($_POST[save]=='1'){
		$a1=$_POST[a1];
		$a2=$_POST[a2];
		$a3=$_POST[a3];
		$a7=$_POST[a7];
		$a8=$_POST[a8];
		$a9=$_POST[a9];
		$a11=$_POST[a11];
		$a12=$_POST[a12];
		$a13=$_POST[a13];
		$a14=$_POST[a14];
		$a15=$_POST[a15];
		$a16=$_POST[a16];
		$a17=$_POST[a17];
		$a18=$_POST[a18];
		$a19=$_POST[a19];

			$a4 = $_FILES['a4']['name'];
			$target_dir = "pemohon/";
			$vfoto4	= 'TDM-'.rand('0000',9999).basename($_FILES["a4"]["name"]);
			$target_file4 = $target_dir.$vfoto4;
			move_uploaded_file($_FILES["a4"]["tmp_name"], $target_file4);
			
			

			$a5 = $_FILES['a5']['name'];
			$target_dir = "pemohon/";
			$vfoto5	= 'TDM-'.rand('0000',9999).basename($_FILES["a5"]["name"]);
			$target_file5 = $target_dir.$vfoto5;
			move_uploaded_file($_FILES["a5"]["tmp_name"], $target_file5);
			
			

			$a6 = $_FILES['a6']['name'];
			$target_dir = "pemohon/";
			$vfoto6	= 'TDM-'.rand('0000',9999).basename($_FILES["a6"]["name"]);
			$target_file6 = $target_dir.$vfoto6;
			move_uploaded_file($_FILES["a6"]["tmp_name"], $target_file6);
			

			$a10 = $_FILES['a10']['name'];
			$target_dir = "pemohon/";
			$vfoto10	= 'TDM-'.rand('0000',9999).basename($_FILES["a10"]["name"]);
			$target_file10 = $target_dir.$vfoto10;
			move_uploaded_file($_FILES["a10"]["tmp_name"], $target_file10);

		mysqli_query($conn,"INSERT INTO `db_daihatsu`.`pemesan` (`id`, `nama_pemohon`, `ttl_pemohon`, `ibu_kandung_pemohon`, `ktp_pemohon`, `kk`, `slip_gaji`, `penjamin`, `ttl_penjamin`, `ibu_kandung_penjamin`, `ktp2`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `no_hp`, `type_mobil`, `dp`, `tenor`) 
		VALUES (NULL, '$a1','$a2','$a3','$vfoto4','$vfoto5','$vfoto6','$a7','$a8','$a9','$vfoto10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19');");
		?>
		<script>
			alert('Permohonan berhasil dikirim');
		</script>
		<?php
	}
?>