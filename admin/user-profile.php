<?php
    require_once "includes/functions/config.php";
    blockUrlHackers();
?>

<?php require_once "includes/templates/header.php"; ?>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <?php require_once "includes/templates/sidebar.php"; ?>


      <?php require_once "includes/templates/topbar.php"; ?>
    Notice: Undefined variable: _SESSION in C:\xampp\htdocs\madueke\admin\includes\templates\topbar.php on line 4


      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!-- User Profile Starts-->
<!--Basic User Details Starts-->
<section id="user-profile">
    <div class="row">
        <div class="col-12">
            <div class="card profile-with-cover">
                <div class="card-img-top img-fluid bg-cover height-500" style="background: url('../assets/images/madueke/Prayer-M.-Madueke-lg.png') 50%;"></div>
                <div class="media profil-cover-details row">
                    <div class="col-5 mr-auto">
                        <div class="align-self-start halfway-fab pl-3 pt-2">
                            <div class="text-left">
                                <h3 class="card-title white">Prayer M. Madueke</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Basic User Details Ends-->
<section id="user-area">
    <div class="row">
        <div class="col-xl-3 col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title-wrap bar-primary">
                        <div class="card-title">Personal Information</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <div class="align-self-center halfway-fab text-center">
                            <a class="profile-image">
                                <img src="../assets/images/madueke/icon.png" class="rounded-circle img-border gradient-summer width-100" alt="Card image">
                            </a>
                        </div>
                        <div class="text-center">
                            <span class="font-medium-2 text-uppercase">Prayer M. Madueke</span>
                            <p class="grey font-small-2">Gospel Writer</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <ul class="no-list-style pl-0 text-center">
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="icon-present font-small-3"></i> Birthday:</a></span>
                                        <span class="display-block overflow-hidden">June 10th, 1988</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-globe font-small-3"></i> Lives in:</a></span>
                                        <span class="display-block overflow-hidden">Denver, USA</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> Gender:</a></span>
                                        <span class="display-block overflow-hidden">Male</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-mail font-small-3"></i> Email:</a></span>
                                        <a class="display-block overflow-hidden">jose@yourmail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6">
                                <ul class="no-list-style pl-0 text-center">                                    
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-monitor font-small-3"></i> Website:</a></span>
                                        <a class="display-block overflow-hidden">pixinvent.com</a>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-smartphone font-small-3"></i> Phone Number:</a></span>
                                        <span class="display-block overflow-hidden">(012)345-678-99</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-briefcase font-small-3"></i> Occupation:</a></span>
                                        <span class="display-block overflow-hidden">Ninja Developer</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-book font-small-3"></i> Joined:</a></span>
                                        <span class="display-block overflow-hidden">April 1st, 2012</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-12">
            <!--About div starts-->
            <div id="about">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-info">
                                    <div class="card-title">About</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="mb-3">
                                        <span class="text-bold-500 primary">About Me:</span>
                                        <span class="display-block overflow-hidden">Hi, I’m Jose, I’m 29 and I work as a Ninja Developer for the
                                            “PIXINVENT” Creative Studio. In my research, I follow the flow of early medieval slavery from viking 
                                            raids in the west, through the booming ports of the Scandinavian north, and out into the Islamic world.
                                            Reading texts against the grain and seeing artifacts as traces of the past can make their lives once 
                                            again visible to us today. This website documents my efforts to do just that, and I hope it will prove 
                                            a resource and an inspiration for others in similar pursuits.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-warning">
                                    <div class="card-title">Educational Information</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <ul class="no-list-style">
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Broklin Institute</a></span>
                                                    <span class="grey line-height-0 display-block mb-2 font-small-2">2008 - 2009</span>
                                                    <span class="line-height-2 display-block overflow-hidden">Professor: Leonardo Stagg. Six months of best Developing tools course.</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> The Ninja College </a></span>
                                                    <span class="grey line-height-0 display-block mb-2 font-small-2">2012 - 2013</span>
                                                    <span class="line-height-2 display-block overflow-hidden">Professor: Steve Ustreil. Gave me the best educational information for Ninja.</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <ul class="no-list-style">
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Ninja Developer</a></span>
                                                    <span class="grey line-height-0 display-block mb-2 font-small-2">2009-2011</span>
                                                    <span class="line-height-2 display-block overflow-hidden">Ninja Developer for the “PIXINVENT” creative studio. </span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a><i class="ft-home font-small-3"></i> Senior Ninja Developer</a></span>
                                                    <span class="grey line-height-0 display-block mb-2 font-small-2">2014-Now</span>
                                                    <span class="line-height-2 display-block overflow-hidden">Senior Ninja Developer for the “PIXINVENT” creative studio.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--About div ends-->
        </div>
    </div>
</section>
<!--User Profile Starts-->
            </div>
          </div>
        </div>

<?php require_once "includes/templates/footer.php"; ?>