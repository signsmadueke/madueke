<?php
    require_once "includes/functions/config.php";

    $result = getAdmin($_SESSION['adminId']);
    if ($result) {
        $adminLoggedIn = $result;
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a class="open-navbar-container"><i class="ft-more-vertical"></i></a></span>
            <div class="ml-2 mt-lg-0 display-inline-block"><div id="apps" class="position-relative"><i class="fa fa-user-secret blue-grey darken-4"></i><span class="mx-1 blue-grey darken-4 text-bold-400"><?php if (!empty($adminLoggedIn)) : foreach ($adminLoggedIn as $admin) { echo "Welcome <b>" . strtoupper($admin['name']) . "</b>"; } endif; ?></span></div>
            </div>
          </div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">

                <li class=" mt-1 text-left "><a id="search" href="#"  class="nav-link "><i class=" blue-grey darken-4"></i></a>
                </li>

                  <li class="nav-item mt-1 navbar-search text-left dropdown"><a id="search" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle"><i class="ft-search blue-grey darken-4"></i></a>
                  <div aria-labelledby="search" class="search dropdown-menu dropdown-menu-right">
                    <div class="arrow_box_right">
                      <form role="search" class="navbar-form navbar-right">
                        <div class="position-relative has-icon-right mb-0">
                          <input id="navbar-search" type="text" placeholder="Search" class="form-control"/>
                          <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </li>

                <li class="dropdown nav-item mr-sm-5 mr-lg-0"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle"><span class="avatar avatar-online"><img id="navbar-avatar" src="../assets/images/madueke/icon.png" style="border: 2px solid lightgrey;" alt="logo"/></span>
                    <p class="d-none">User Settings</p></a>
                  <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                    <div class="arrow_box_right">
                        <a href="user-profile" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>My Profile</span></a>
                        <a href="add_admin" class="dropdown-item py-1"><i class="ft-user-plus mr-2"></i><span>Add Admin</span></a>
                      <div class="  "></div><a href="logout" class="dropdown-item"><i class="ft-log-out mr-2"></i><span>Logout</span></a>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </nav>