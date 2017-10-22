<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Turbo Snail 活动相册</title>
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">  
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="Font-Awesome-4.7/css/font-awesome.min.css">                
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/hero-slider-style.css">                              
    <!-- Hero slider style (https://codyhouse.co/gem/hero-slider/) -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                 
    <!-- Magnific popup style (http://dimsemenov.com/plugins/magnific-popup/) -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- jQuery (https://jquery.com/download/) -->
    <script>
            var tm_gray_site = false;
            if(tm_gray_site) {
                $('html').addClass('gray');
            }
            else {
                $('html').removeClass('gray');   
            }
    </script>
</head>
    <body>
        <!-- Content -->
        <div class="cd-hero">
            <!-- Navigation -->        
            <div class="cd-slider-nav">
                <nav class="navbar">
                    <div class="tm-navbar-bg">
                        <a class="navbar-brand text-uppercase" href="#"><i class="fa fa-picture-o tm-brand-icon"></i>Turbo Snail</a>
						<a class="nav-link" href="index.html"><span style="color:#38B6E6;font-weight: bold">返回</span></a>
                        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        <div class="collapse navbar-toggleable-md text-xs-center text-uppercase tm-navbar" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active selected">
                                    <a class="nav-link" href="#0" data-no="1">团队活动 <span class="sr-only">(current)</span></a>
                                </li>                                
                            </ul>
                        </div>                        
                    </div>
                </nav>
            </div> 
            <ul class="cd-hero-slider">
        <!-- Page 1 Gallery One -->
              <li class="selected">                    
                    <div class="cd-full-width">
                        <div class="container-fluid js-tm-page-content" data-page-no="1" data-page-type="gallery">
                            <div class="tm-img-gallery-container">
                                <div class="tm-img-gallery gallery-one">
                                <!-- Gallery One pop up connected with JS code below -->
                                <?php
                                       	include('db/dbconnection/DBManager.class.php');
	                                	$db=new DBManager();
                                        $sql_data = "SELECT type_id,photo_title,photo_path FROM type_c WHERE type_id REGEXP '2' ORDER BY photo_id DESC";
                                        $res_contest = $db->getResult($sql_data);
                                        while($row = mysqli_fetch_array($res_contest)){
                                        	$filePath = "img2/".$row['photo_path'];	//拼接图片路径	数据库只存文件名
                                            if(file_exists($filePath)){
    											echo '<div class=grid-item><figure class=effect-sadie><img src="'.$filePath.'" class="img-fluid tm-img" />
    												<figcaption><p class=tm-figure-description>"'.$row['photo_title'].'"</p>
    													<a href="'.$filePath.'">View more</a></figcaption></figure></div>';
                                        	}
                                        }
                                ?>                                                                 
                                    </div>                                 
                                </div>
                            </div>                                                    
                        </div>                    
                    </li>
            </ul> <!-- .cd-hero-slider -->
            <footer class="tm-footer">
                <div class="tm-social-icons-container text-xs-center">
                    <a href="index.html" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">主页</span><i class="fa fa-linkedin"></i></a>
                	<a href="quote/plan.html" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">成员</span><i class="fa fa-linkedin"></i></a>
                    <a href="game.html" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">比赛</span><i class="fa fa-behance"></i></a>
                    <a href="#" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">聚餐</span><i class="fa fa-facebook"></i></a>
                    <a href="life.html" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">生活</span><i class="fa fa-google-plus"></i></a>
                    <a href="regmee.html" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">例会</span><i class="fa fa-linkedin"></i></a>
                    <a href="certifi.html" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">证书</span><i class="fa fa-linkedin"></i></a>
                    <a href="guidance.html" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">指导</span><i class="fa fa-twitter"></i></a>
                    <a href="give.html" class="tm-social-link"><span style="color:#77C5E3;font-weight:bold">工作</span><i class="fa fa-linkedin"></i></a>
              </div>
               <p class="tm-copyright-text"> <span style="color:#666"></span> &copy;2017 Turbo Snail.All rights reserved.</p> 
            </footer>
        </div> <!-- .cd-hero -->
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <!-- load JS files -->
        <script src="js/tether.min.js"></script> <!-- Tether (http://tether.io/)  --> 
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/hero-slider-main.js"></script>          <!-- Hero slider (https://codyhouse.co/gem/hero-slider/) -->
        <script src="js/jquery.magnific-popup.min.js"></script> <!-- Magnific popup (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script>
            function adjustHeightOfPage(pageNo) {
                var pageContentHeight = 0;
                var pageType = $('div[data-page-no="' + pageNo + '"]').data("page-type");

                if( pageType != undefined && pageType == "gallery") {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .tm-img-gallery-container").height();
                }
                else {
                    pageContentHeight = $(".cd-hero-slider li:nth-of-type(" + pageNo + ") .js-tm-page-content").height() + 20;
                }
                // Get the page height
                var totalPageHeight = $('.cd-slider-nav').height()
                                        + pageContentHeight
                                        + $('.tm-footer').outerHeight();

                // Adjust layout based on page height and window height
                if(totalPageHeight > $(window).height()) 
                {
                    $('.cd-hero-slider').addClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", totalPageHeight + "px");
                }
                else 
                {
                    $('.cd-hero-slider').removeClass('small-screen');
                    $('.cd-hero-slider li:nth-of-type(' + pageNo + ')').css("min-height", "100%");
                }
            }
            /*
                Everything is loaded including images.
            */
            $(window).load(function(){
                adjustHeightOfPage(1); // Adjust page height
                /* Gallery One pop up
                -----------------------------------------*/
                $('.gallery-one').magnificPopup({
                    delegate: 'a', // child items selector, by clicking on it popup will open
                    type: 'image',
                    gallery:{enabled:true}                
                });
				/* Gallery Two pop up
                -----------------------------------------*/
				$('.gallery-two').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });
                /* Gallery Three pop up
                -----------------------------------------*/
                $('.gallery-three').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{enabled:true}                
                });
                /* Collapse menu after click 
                -----------------------------------------*/
                $('#tmNavbar a').click(function(){
                    $('#tmNavbar').collapse('hide');

                    adjustHeightOfPage($(this).data("no")); // Adjust page height       
                });
                /* Browser resized 
                -----------------------------------------*/
                $( window ).resize(function() {
                    var currentPageNo = $(".cd-hero-slider li.selected .js-tm-page-content").data("page-no");
                    
                    // wait 3 seconds
                    setTimeout(function() {
                        adjustHeightOfPage( currentPageNo );
                    }, 1000);
                    
                });
                // Remove preloader (https://ihatetomatoes.net/create-custom-preloading-screen/)
                $('body').addClass('loaded');
                // Write current year in copyright text.
                $(".tm-copyright-year").text(new Date().getFullYear());
            });
        </script>            
</body>
</html>