<div id="sidebar-wrapper">
    <div class="navbar-content">
        <div class="main-navigation left-wrapper transition-left">
            <ul class="sidebar-nav">
                <div class="navigation-toggler hidden-sm hidden-xs">
                    <a href="#main-navbar" class="sb-toggle-left">
                    </a>
                </div>
                <div class="user-profile border-top padding-horizontal-10 block">
                            <div class="inline-block">
                                <img src="assets/images/anonymous.jpg" alt="" width="50" height="50">
                            </div>
                            <div class="inline-block">
                                <h5 class="no-margin">Welcome</h5>
                                <h4 class="no-margin">  
                                    <?php   
                                        if(isset($_SESSION['admin'])){echo 'Admin';
                                         }else{             
                                             if($_SESSION['role'] == 1){
                                                 echo $row['name'];
                                             }else{
                                                echo $row['firstname']." ".$row['lastname'];
                                             }
                                         } ?>
                                </h4>
                                
                                
                            </div>
                        </div>
        <!-- start: MAIN NAVIGATION MENU -->
        <ul class="main-navigation-menu">
            <?php if(isset($_SESSION['admin'])){?>
                <li class="sidebar-brand">
                    <a href="index.php"><i class="fa fa-home"></i> <span class="title"> Dashboard </span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-user"></i> <span class="title">Principle</span><i class="icon-arrow"></i> </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="view_principle.php">
                                            <span class="title"> View Principle </span>
                                        </a>
                                    </li>
                                </ul>
                </li>
                <li>
                <a href="javascript:void(0)"><i class="fa fa-user"></i> <span class="title">HOD</span><i class="icon-arrow"></i> </a>
                                <ul class="sub-menu">       
                                    <li>
                                        <a href="hod_registration.php">
                                            <span class="title"> Create HOD </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="view_hod.php">
                                            <span class="title"> View HOD </span>
                                        </a>
                                    </li>
                                </ul>
                </li>
                <li>
                <a href="javascript:void(0)"><i class="fa fa-user"></i> <span class="title">Staff</span><i class="icon-arrow"></i> </a>
                                <ul class="sub-menu">       
                                    <li>
                                        <a href="stuff_registration.php">
                                            <span class="title"> Create Staff </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="view_stuff.php">
                                            <span class="title"> View Staff </span>
                                        </a>
                                    </li>
                                </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-user"></i> <span class="title">Student</span><i class="icon-arrow"></i> </a>
                                <ul class="sub-menu">       
                                    <li>
                                        <a href="student_registration.php">
                                            <span class="title"> Create Student </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="view_student.php">
                                            <span class="title"> View Student </span>
                                        </a>
                                    </li>
                                </ul>
                </li>
                <?php }else{?>
                <li>
                <li class="active open">
                                <a href="home.php"><i class="fa fa-home"></i> <span class="title"> Dashboard </span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-desktop"></i> <span class="title"> Layouts </span><i class="icon-arrow"></i> </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="javascript:;">
                                            Horizontal Menu <i class="icon-arrow"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="layouts_horizontal_menu.html">
                                                    Horizontal Menu
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts_horizontal_menu_fixed.html">
                                                    Horizontal Menu Fixed
                                                </a>
                                            </li>
                                            <li>
                                                <a href="layouts_horizontal_sidebar_menu.html">
                                                    Horizontal &amp; Sidebar Menu
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="layouts_sidebar_closed.html">
                                            <span class="title"> Sidebar Closed </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts_sidebar_not_fixed.html">
                                            <span class="title"> Sidebar Not Fixed </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts_boxed_layout.html">
                                            <span class="title"> Boxed Layout </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts_footer_fixed.html">
                                            <span class="title"> Footer Fixed </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="layouts_single_page.html">
                                            <span class="title"> Single-Page Interface </span>
                                        </a>
                                    </li>
                                </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-cogs"></i> <span class="title"> UI Lab </span><i class="icon-arrow"></i> </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="ui_elements.html">
                                            <span class="title"> Elements </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_buttons.html">
                                            <span class="title"> Buttons </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_icons.html">
                                            <span class="title"> Icons </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_animations.html">
                                            <span class="title"> CSS3 Animation </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_subview.html">
                                            <span class="title"> Subview </span> <span class="label partition-blue pull-right ">HOT</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_modals.html">
                                            <span class="title"> Extended Modals </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_tabs_accordions.html">
                                            <span class="title"> Tabs &amp; Accordions </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_panels.html">
                                            <span class="title"> Panels </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_notifications.html">
                                            <span class="title"> Notifications </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_sliders.html">
                                            <span class="title"> Sliders </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_treeview.html">
                                            <span class="title"> Treeview </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_nestable.html">
                                            <span class="title"> Nestable List </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ui_typography.html">
                                            <span class="title"> Typography </span>
                                        </a>
                                    </li>
                                </ul>
                </li>
            <?php }?>
        </ul>
        </div>  
    </div>
</div>