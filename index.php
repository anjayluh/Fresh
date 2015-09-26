<?php include('header.php'); ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <!-- navbar -->
            <div class="navbar navbar-fixed-top navbar-inverse">
                <div class="navbar-inner">
                    <div class="container">

                        <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>

                        <!-- Be sure to leave the brand out there if you want it shown -->
                        <a class="brand" href="#">Online Order& Delivery System For Fresh Dairy</a>

                        <!-- Everything you want hidden at 940px or less, place within here -->



                        <div class="nav-collapse collapse">
                            <!-- .nav, .navbar-search, .navbar-form, etc -->

                            <ul class="nav">
                                <li class="active"><a href="home.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
                                <li><a href="orderproduct.php"><i class="icon-th icon-large"></i>&nbsp;Products</a></li>
                                <li><a href="contact.php"><i class="icon-group icon-large"></i>&nbsp;Contact us</a></li>
                                <li><a href="login/_signup.php"><i class="icon-truck icon-large"></i>&nbsp;Create account</a></li>
                                <li><a href="login/order.php"><i class="icon-file icon-large"></i>&nbsp;Login</a></li>
                               
                               
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!--- end navbar -->
            <div class="hero-unit-header">
              
            </div>
            <div class="row-fluid">
                <div class="span1"></div>
                <div class="span10">
                    <!-- image slider -->
                    <div class="slider-wrapper theme-default">
                        <div class="hero-unit-table">
                            <div id="slider" class="nivoSlider">
                        
                                <a href="orderproduct.php"> <img src="images/wine.png" data-thumb="images/toystory.jpg" /></a>
                                <img src="images/brotherhood_winery_cellars_1.jpg" data-thumb="images/toystory.jpg" alt="" />
                                <img src="images/wineries.jpg" data-thumb="images/wineries.jpg" alt=""/>
                                <img src="images/koehler_winery_vines_and_fruit_crop.jpg"  alt="" data-transition="slideInLeft" />
                                <img src="images/winery-sunrise646.jpg" data-thumb="images/nemo.jpg" alt="" />
                            </div>
                        </div>
                        <div id="htmlcaption" class="nivo-html-caption">
                            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
                        </div>
                    </div>
                    <!-- end slider -->
                </div>
                <div class="span1"></div>

            </div>
        </div>
    </div>



    <?php include('footer.php'); ?>


</body>
</html>