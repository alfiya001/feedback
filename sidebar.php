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
                                <h4 class="no-margin" style="text-transform: capitalize;">  
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
                            
                </li>
            <?php }?>
        </ul>
        </div>  
    </div>
</div>