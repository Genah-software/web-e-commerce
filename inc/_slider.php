
    <div class="video-mag-tabs-area mt-50 wow fadeInUp">  
		<br><br>
<div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                            <div class="latest-videos-slide owl-carousel">

                                <?php $qgmbr = mysqli_query($conn,"select * from file where jenis='1' limit 0,10");?>
                                <?php while($rgmbr = mysqli_fetch_array($qgmbr)){?>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post style2">
                                    <div class="blog-thumb mb-30">
                                        <img src="img/<?php echo $rgmbr[file]?>" alt="">
                                        <!-- Play Button -->
                                       
                                    </div>
                                    
                                </div>
								<?php } ?>

                            </div>
                        </div>
                       
                        
                    </div>
                </div>
    </div>
	