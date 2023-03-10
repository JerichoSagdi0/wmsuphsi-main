<input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>PHSI</h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(../images/student-profile/user-icon.png)"></div>
                <h4><?php echo $_SESSION['fullname']; ?></h4>
                <small><?php echo $_SESSION['role']; ?></small>
            </div>

            <div class="side-menu">
                <ul>

                    <!--------------------------- START DASHBOARD -------------------------------->
                    <li> 
                       <a href="dashboard.php" class="<?php echo $dashboard; ?>" title="Dashboard">
                            <span class="uil uil-estate"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <!--------------------------- END DASHBOARD ---------------------------------->



                    <?php
                    if($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'event_admin'){ 
                    ?>
                    <!-------------------------- START EVENT MANAGEMENT -------------------------->
                    <li>
                       <a href="events_management.php" class="<?php echo $events_management; ?>" title="Event Management">
                            <span class="uil uil-podium"></span>
                            <small>Event Management</small>
                        </a>
                    </li>
                    <!------------------------- END EVENT MANAGEMENT ----------------------------->
                    <?php
                    }
                    ?>


                    <?php
                    if($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'content_admin'){ 
                    ?>
                    <!------------------------- START NEWS MANAGEMENT ---------------------------->
                    <li>
                       <a href="news_page.php" class="<?php echo $news_page; ?>" title="News Page">
                            <span class="uil uil-clipboard-notes"></span>
                            <small>News Page</small>
                        </a>
                    </li>
                    <!------------------------- END NEWS MANAGEMENT ---------------------------->
                        
                    <!------------------------- START CAROUSEL MANAGEMENT ------------------------>
                    <li>
                       <a href="home_carousel.php" class="<?php echo $home_carousel; ?>" title="Carousel">
                            <span class="uil uil-clipboard-notes"></span>
                            <small>Carousel</small>
                        </a>
                    </li>
                    <!--------------------------- END CAROUSEL MANAGEMENT ---------------------------->
                    <?php
                    }
                    ?>




                    <?php
                    if($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'user_admin'){ 
                    ?>
                    <!------------------------- END USERS MANAGEMENT ---------------------------->
                    <li>
                       <a href="user_management.php" class="<?php echo $user_management; ?>" title="User Management">
                            <span class="uil uil-users-alt"></span>
                            <small>User Management</small>
                        </a>
                    </li>
                    <!------------------------- END USERS MANAGEMENT ---------------------------->
                    <?php
                    }
                    ?>

                      
                    
                    <?php
                    if($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'feedback_admin'){ 
                    ?>
                    <!------------------------- START FEEDBACK MANAGEMENT ---------------------------->
                    <li>
                       <a href="feedback_management.php" class="<?php echo $feedback_management; ?>" title="Feedbacks Management">
                            <span class="uil uil-feedback"></span>
                            <small>Feedback Management</small>
                        </a>
                    </li>
                    <!------------------------- END FEEDBACK MANAGEMENT ---------------------------->
                    <?php
                    }
                    ?>
                    

                    <?php
                    if($_SESSION['role'] == 'super_admin' || $_SESSION['role'] == 'content_admin'){ 
                    ?>         
                    <!------------------------ START MISSION & VISON MANAGEMENT -------------------->
                    <li>
                       <a href="misvis_page.php" class="<?php echo $misvis_page; ?>" title="Mission & Vision">
                            <span class="uil uil-clipboard-notes"></span>
                            <small>Mission & Vision Page</small>
                        </a>
                    </li>
                    <!------------------------ END MISSION & VISON MANAGEMENT ---------------------->
                    
                    <!------------------------ START END HISTORY PAGE -------------------->
                    <li>
                       <a href="history_page.php" class="<?php echo $history_page; ?>" title="History Page">
                            <span class="uil uil-clipboard-notes"></span>
                            <small>History Page</small>
                        </a>
                    </li>
                    <!------------------------ END HISTORY PAGE ---------------------->


                    <!------------------------ START END ADMINISTRATION PAGE -------------------->
                    <li>
                       <a href="administration_page.php" class="<?php echo $administration_page; ?>" title="Administration Page">
                            <span class="uil uil-clipboard-notes"></span>
                            <small>Administration Page</small>
                        </a>
                    </li>
                    <!------------------------ END ADMINISTRATION PAGE ---------------------->
                    <?php
                    }
                    ?>

                    <!------------------------ START SETTING ---------------------->
                    <li>
                       <a href="settings.php" class="<?php echo $settings; ?>"  title="Settings">
                            <span class="uil uil-setting"></span>
                            <small>Settings</small>
                        </a>
                    </li>
                    <!------------------------ END SETTING ---------------------->

                </ul>
            </div>
        </div>
    </div>