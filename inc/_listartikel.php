<section class="travel-videos-area">
        <div class="container">
            <div class="travel-videos-content">
                
				<?php
					$qartk1=mysqli_query($conn,"select * from artikel order by id desc");
					$rartkl=mysqli_fetch_array($qartk1);
				?>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <!-- Single Welcome Post -->
                        <div class="single-welcome-post style-2 bg-img mb-30 wow fadeInUp" data-wow-delay="300ms" style="background-image: url(img/<?php echo $rartkl[gambar]?>);">
                            <!-- Content -->
                            <div class="welcome-post-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post white">
                                    <div class="blog-content">
                                        <a href="read.php?q=<?php echo $rartkl[id] ?>" class="post-title"><?php echo $rartkl[judul]?></a>
                                        <div class="post-meta">
                                            <a href="#"><img src="img/core-img/author.png" alt=""> <?php echo whois($rartkl[oleh])?></a>
                                            <a href="#"><img src="img/core-img/calender.png" alt=""> <?php echo tgl($rartkl[waktu])?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="row">

                            
				<?php
					$qartk2=mysqli_query($conn,"select * from artikel");
					while($rartk2=mysqli_fetch_array($qartk2)){
				?>
                            <!-- Single Blog Post -->
                            <div class="col-md-6">
                                <div class="single-blog-post style3 mb-30 wow fadeInUp" data-wow-delay="700ms">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/<?php echo $rartk2[gambar];?>" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <a href="read.php?q=<?php echo $rartk2[id] ?>" class="post-title"><?php echo $rartk2[judul];?></a>
                                        <div class="post-meta d-flex justify-content-between">
                                            <a href="#"><img src="img/core-img/calendar2.png" alt=""> <?php echo tgl($rartk2[waktu]);?></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
				<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>