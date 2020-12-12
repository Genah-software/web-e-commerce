<?php 
	$qmtrx	=	mysqli_query($conn,"select * from file where jenis='2' order by id desc"); 
	$rmtrx	=	mysqli_fetch_array($qmtrx);
	
	$qmtrxx	=	mysqli_query($conn,"select * from file where jenis='2' order by id desc limit 1,1"); 
	$rmtrxx	=	mysqli_fetch_array($qmtrxx);
?>
<div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item1 wow fadeInUp" data-wow-delay="300ms" style="background-image: url('img/<?php echo $rmtrx['gambar'];?>');">
                <!-- Play Button -->
                <a href="<?php echo $rmtrx['file'];?>" class="video-play-btn"><i class="fa fa-play"></i></a>
                <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag"><?php echo type_file($rmtrx[type]); ?></a>
                            <a href="#" class="post-title"><?php echo $rmtrx['judul'];?></a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/calender.png" alt=""> <?php echo tgl($rmtrx['waktu']);?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
		
		
		<div class="hero-single-section">
            <!-- Single Welcome Post -->
            <div class="single-welcome-post bg-img item2 wow fadeInUp" data-wow-delay="400ms" style="background-image: url('img/<?php echo $rmtrxx[gambar]?>');">
                 <!-- Play Button -->
                <a href="<?php echo $rmtrxx['file'];?>" class="video-play-btn"><i class="fa fa-play"></i></a>
               <!-- Content -->
                <div class="welcome-post-content">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post white">
                        <div class="blog-content">
                            <a href="#" class="post-tag"><?php echo type_file($rmtrxx[type]); ?></a>
                            <a href="#" class="post-title"><?php echo $rmtrxx['judul'];?></a>
                            <div class="post-meta">
                                <a href="#"><img src="img/core-img/calender.png" alt=""> <?php echo tgl($rmtrxx['waktu']);?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-second-section d-flex flex-wrap">
<?php
	$qmtr3	=	mysqli_query($conn,"select * from file where jenis='2' order by id desc limit 2,2"); 
	while($rmtr3	=	mysqli_fetch_array($qmtr3)){
?>
                <!-- Single Welcome Post -->
                <div class="single-welcome-post bg-img item3 wow fadeInUp" data-wow-delay="500ms" style="background-image: url('img/<?php echo $rmtr3[gambar]?>');">
                       <!-- Play Button -->
						<a href="<?php echo $rmtr3['file'];?>" class="video-play-btn"><i class="fa fa-play"></i></a>
					  <!-- Content -->
                    <div class="welcome-post-content">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style2 white">
                            <div class="blog-content">
                                <a href="#" class="post-tag"><?php echo type_file($rmtr3[type])?></a>
                                <a href="#" class="post-title"><?php echo $rmtr3[judul]?></a>
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>

        </div>
    </div>