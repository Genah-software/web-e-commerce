<?php include('inc/_config.php');?>
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

    <section class="catagory-area">
        <div class="container">
		<br>
            <div class="row">
                <div class="col-lg-12">
			
                    <div class="row">
                        <?php
							$t 	= $_GET[t];
							$qm = mysqli_query($conn,"select * from kpop order by id desc");
							while($rm=mysqli_fetch_array($qm)){
						?>
						<!-- Single Blog Post -->
                        <div class="col-md-4">
                            <div class="single-blog-post style2 mb-50" style="height:310px;">
                                <div class="blog-thumb mb-30">
                                    <img src="img/<?php echo $rm[gambar]?>" class="" alt="">
                                   
                                </div>
                                <div class="blog-content">
                                    <a href="spek.php?q=<?php echo $rm[id]?>" class=" btn-block btn btn-danger"><?php echo $rm[judul]?></a>
                                </div>
                            </div>
                        </div>
						<?php } ?>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- ##### Catagory Area End ##### -->
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