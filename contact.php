<?php include('inc/_config.php');?>
<?php
	$qc	= mysqli_query($conn,"select * from kontak_info");
	$rc = mysqli_fetch_array($qc);
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

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="contact-content mb-100">
                        <!-- Google Maps -->
                        <div class="map-area mb-70">
							
							<?php echo $rc[lokasi]//allowfullscreen?>
                        </div>

                        <!-- Contact Content Area -->
                        <div class="contact-content-area mb-70">
                            <h3 class="mb-50">Contact info</h3>

                            <div class="row">
                                <div class="col-12 col-lg-6">
                                   <p><?php echo $rc[info] ?></p>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex align-items-center">
                                        <div class="icon mr-15">
                                            <img src="img/core-img/placeholder.png" alt="">
                                        </div>
                                        <p><?php echo $rc[alamat]?></p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex align-items-center">
                                        <div class="icon mr-15">
                                            <img src="img/core-img/telephone.png" alt="">
                                        </div>
                                        <p><?php echo $rc[telp]?></p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex align-items-center">
                                        <div class="icon mr-15">
                                            <img src="img/core-img/mail.png" alt="">
                                        </div>
                                        <p><?php echo $rc[email] ?></p>
                                    </div>
                                    
                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-block mt-50">
                                        <a href="http://facebook.com/<?php echo $rc[fb] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="http://instagram.com/<?php echo $rc[ig] ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form Area -->
                        <div class="contact-form-area">
                            <h3 class="mb-50">Get In Touch</h3>

                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="na" class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="em" class="form-control" id="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="ms" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn videomag-btn mt-30" name="git" value="1">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                 <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area mb-100">
                       
                        <!-- Single Sidebar Widget -->
                        <div class="single-widget-area mb-50">
                            <h2 class="widget-title">Artikel Terbaru</h2>
						<?php						
							$qax = mysqli_query($conn,"select * from artikel where id!='$id' order by id limit 0,5");
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
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

   

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
</body>

</html>
<?php
	if($_POST[git]!=''){
		$na = $_POST[na];
		$em = $_POST[em];
		$ms = $_POST[ms];
		
		mysqli_query($conn,"insert into msg set nama='$na', email='$em', pesan='$ms'");
		?>
		<script>
			alert('Terima kasih, pesan telah dikirim.');
		</script>
		<?php
		
	}
?>