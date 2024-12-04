 <!-- Header start  -->
 <?php include_once __DIR__ . '/templates/header.php'; ?>
 <!-- Header end  -->

 <body class="dashboard dashboard_1">
   <div class="full_container">
     <div class="inner_container">

       <!-- Sidebar  -->
       <?php include_once __DIR__ . '/templates/sidebar.php'; ?>
       <!-- end sidebar -->

       <!-- right content -->
       <div id="content">
         <!-- topbar -->
         <div class="topbar">
           <nav class="navbar navbar-expand-lg navbar-light">
             <div class="full">
               <button
                 type="button"
                 id="sidebarCollapse"
                 class="sidebar_toggle">
                 <i class="fa fa-bars"></i>
               </button>
               <div class="logo_section">
                 <a href="index.php"><img
                     class="img-responsive"
                     src="images/logo/logo.png"
                     alt="#" /></a>
               </div>
               <div class="right_topbar">
                 <div class="icon_info">
                   <ul>
                     <li>
                       <a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a>
                     </li>
                     <li>
                       <a href="#"><i class="fa fa-question-circle"></i></a>
                     </li>
                     <li>
                       <a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a>
                     </li>
                   </ul>
                   <ul class="user_profile_dd">
                     <li>
                       <a class="dropdown-toggle" data-toggle="dropdown"><img
                           class="img-responsive rounded-circle"
                           src="images/layout_img/user_img.jpg"
                           alt="#" /><span class="name_user">John David</span></a>
                       <div class="dropdown-menu">
                         <a class="dropdown-item" href="profile.html">My Profile</a>
                         <a class="dropdown-item" href="settings.html">Settings</a>
                         <a class="dropdown-item" href="help.html">Help</a>
                         <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
           </nav>
         </div>
         <!-- end topbar -->
         <!-- dashboard inner -->
         <div class="midde_cont">
           <div class="container-fluid">
             <div class="row column_title">
               <div class="col-md-12">
                 <div class="page_title">
                   <h2>Dashboard</h2>
                 </div>
               </div>
             </div>
             <div class="row column1">
               <div class="col-md-6 col-lg-3">
                 <div class="full counter_section margin_bottom_30">
                   <div class="couter_icon">
                     <div>
                       <i class="fa fa-user yellow_color"></i>
                     </div>
                   </div>
                   <div class="counter_no">
                     <div>
                       <p class="total_no">2500</p>
                       <p class="head_couter">Welcome</p>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-md-6 col-lg-3">
                 <div class="full counter_section margin_bottom_30">
                   <div class="couter_icon">
                     <div>
                       <i class="fa fa-clock-o blue1_color"></i>
                     </div>
                   </div>
                   <div class="counter_no">
                     <div>
                       <p class="total_no">123.50</p>
                       <p class="head_couter">Average Time</p>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-md-6 col-lg-3">
                 <div class="full counter_section margin_bottom_30">
                   <div class="couter_icon">
                     <div>
                       <i class="fa fa-cloud-download green_color"></i>
                     </div>
                   </div>
                   <div class="counter_no">
                     <div>
                       <p class="total_no">1,805</p>
                       <p class="head_couter">Collections</p>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-md-6 col-lg-3">
                 <div class="full counter_section margin_bottom_30">
                   <div class="couter_icon">
                     <div>
                       <i class="fa fa-comments-o red_color"></i>
                     </div>
                   </div>
                   <div class="counter_no">
                     <div>
                       <p class="total_no">54</p>
                       <p class="head_couter">Comments</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- footer -->
           <?php include_once __DIR__ . '/templates/footer.php'; ?>