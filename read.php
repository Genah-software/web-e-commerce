<?php 
	include('inc/_config.php');
	$id = $_GET[q];
	$qa = mysqli_query($conn,"select * from artikel where id='$id'");
	$ra = mysqli_fetch_array($qa);
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

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Post Details Content Area -->
                <div class="col-12 col-lg-8">
                    <div class="post-details-content mb-100">
                        <div class="single-blog-post style2 mb-50">
                            <div class="blog-thumb mb-30">
                                <img src="img/<?php echo $ra[gambar]?>" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-tag">Artikel</a>
                                <h4><?php echo $ra[judul]?></h4>
                                <div class="post-meta mb-30">
                                    <a href="#"><img src="img/core-img/author2.png" alt=""> <?php echo whois($ra[oleh])?></a>
                                    <a href="#"><img src="img/core-img/calendar2.png" alt=""> <?php echo tgl($ra[waktu])?></a>
                                </div>
                                <p><?php echo $ra[konten]?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Comment Area Start -->
					<?php /*
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
					
					*/?>
				</div>

                <!-- Sidebar Widget -->
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
    <!-- ##### Post Details Area End ##### -->
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