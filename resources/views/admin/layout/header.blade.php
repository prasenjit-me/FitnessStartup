
 <header class="_header" style="background-color: black;">
        <div class="_header-main">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <!-- logo -->
                    <div class="logo"><a class="navbar-brand" href="index.php"><img src="{{  asset('storage/images/logo.png')}}" alt=""></a></div>
                    <!-- nav section -->
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation"> -->
                    <button class="navbar-toggler _menuButton">
                        <div class="navbar-toggler-icon">
                            <div class="bar bar-1"></div>
                            <div class="bar bar-2"></div>
                            <div class="bar bar-3"></div>
                        </div>
                    </button>
                    <!-- Collaspe in mobile -->
                    <div class="collapse navbar-collapse" id="navbarsExample05">
                        <div class="_mob-menu-hdr">
                            Menu
                        </div>
                        <ul class="navbar-nav ml-auto">
                            <li class="current-menu-item"><a href="index.php">Home</a></li>                          
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="course.php">Course</a>
                            </li>
                            <li>
                                <a href="#">Shop</a>
                            </li>
                            <li>
                                <a href="#">Fitness & Nutrition Tracker</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li class="_sp-li">
                                <a href="#">Business Partner</a>
                            </li>   
                            <!-- <li class="menu-item-has-children"><a href="#">Services</a>
                                <span class="clickD"></span>
                                <ul class="sub-menu">
                                    <li><a href="#">submenu-1</a></li>
                                    <li><a href="#">submenu-2</a></li>
                                    <li><a href="#">submenu-3</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                    <div class="_div-right">
                        <div class="_log-sign-div">
                            <a href="log-sign.php">Log in / sign up</a>                           
                        </div>
                        <!-- <div class="_user-div">
                            <span class="_profile-pic"><img src="images/test-img-2.jpg" alt=""></span>
                            <a href="my-profile.php" class="_user-name">My profile</a>
                        </div> -->
                        <div class="_cart-div">
                            <a href="#">Cart <span><img src="images/cart-orange.png" alt=""></span></a>
                        </div>
                        <div class="_serchDiv">
                            <span class="_srchBtn"  data-toggle="modal" data-target="#searchModal"><img src="images/serch-icon-orange.png" alt=""></span>
                        </div>
                    </div>                   
                </nav>
            </div>
        </div>
    </header>
