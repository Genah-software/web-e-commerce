
<?php
	$qmtr3	=	mysqli_query($conn,"select * from file where jenis='2'"); 
	while($rmtr3	=	mysqli_fetch_array($qmtr3)){
?>		
		<div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url('img/<?php echo $rmtr3[gambar]?>');">
                 <!-- Play Button -->
                <a href="<?php echo $rmtr3['file'];?>" class="video-play-btn"><i class="fa fa-play"></i></a>
               <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag"><?php echo type_file($rmtr3[type]); ?></a>
                            <a href="#" class="post-title"><?php echo $rmtr3['judul'];?></a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/calender.png" alt=""> <?php echo tgl($rmtr3['waktu']);?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<?php } ?>

    </div>