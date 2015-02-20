<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Administrateur</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!-- BEGIN LOGO -->
               <a class="brand" href="index.html">
                   <img src="img/logo.png" alt="Metro Lab" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-tasks"></i>
                               <span class="badge badge-important">6</span>
                           </a>
                           <ul class="dropdown-menu extended tasks-bar">
                               <li>
                                   <p>You have 6 pending tasks</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                         <div class="desc">Dashboard v1.3</div>
                                         <div class="percent">44%</div>
                                       </div>
                                       <div class="progress progress-striped active no-margin-bot">
                                           <div class="bar" style="width: 44%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Database Update</div>
                                           <div class="percent">65%</div>
                                       </div>
                                       <div class="progress progress-striped progress-success active no-margin-bot">
                                           <div class="bar" style="width: 65%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Iphone Development</div>
                                           <div class="percent">87%</div>
                                       </div>
                                       <div class="progress progress-striped progress-info active no-margin-bot">
                                           <div class="bar" style="width: 87%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Mobile App</div>
                                           <div class="percent">33%</div>
                                       </div>
                                       <div class="progress progress-striped progress-warning active no-margin-bot">
                                           <div class="bar" style="width: 33%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">Dashboard v1.3</div>
                                           <div class="percent">90%</div>
                                       </div>
                                       <div class="progress progress-striped progress-danger active no-margin-bot">
                                           <div class="bar" style="width: 90%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li class="external">
                                   <a href="#">See All Tasks</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>You have 5 new messages</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jonathan Smith</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is an example msg.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jhon Doe</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, Jhon Doe Bhai how are you ?
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jason Stathum</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jondi Rose</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is metrolab
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>You have 7 new notifications</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN SUPPORT -->
                       <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img/avatar1_small.jpg" alt="">
                               <span class="username">Jhon Doe</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                               <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                    Administration
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Data Table</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Editable Table
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Diplomes </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     <div class="btn-group">
                                         <button id="editable-sample_new_1" class="btn green">
                                             Add New <i class="icon-plus"></i>
                                         </button>
                                     </div>
                                     <div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Print</a></li>
                                             <li><a href="#">Save as PDF</a></li>
                                             <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample_1">
                                     <thead>
                                     <tr>
                                         <th>Diplome Name</th>
                                         <th>Edit</th>
                                         <th>Delete</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                      <tr class="">
                                         <td>x</td>
                                         
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>z</td>
                                         
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr> 
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
            
            
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Specialities </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     <div class="btn-group">
                                         <button id="editable-sample_new_2" class="btn green">
                                             Add New <i class="icon-plus"></i>
                                         </button>
                                     </div>
                                     <div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Print</a></li>
                                             <li><a href="#">Save as PDF</a></li>
                                             <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                     </div>
                                     </br></br>
                                      <div class="btn-group pull-right">
                                         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Diplomes <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">informatique</a></li>
                                             <li><a href="#">chimie</a></li>
                                             <li><a href="#">electornique</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample_2">
                                     <thead>
                                     <tr>
                                         <th>Matricule</th>
                                         <th>Speciality Name</th>
                                         <th>Edit</th>
                                         <th>Delete</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr class="">
                                         <td>x</td>
                                         <td>y</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>z</td>
                                         <td>t</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
            
            
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Niveaux </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     <div class="btn-group">
                                         <button id="editable-sample_new_3" class="btn green">
                                             Add New <i class="icon-plus"></i>
                                         </button>
                                     </div>
                                     <div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Print</a></li>
                                             <li><a href="#">Save as PDF</a></li>
                                             <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                     </div>
                                     </br></br>
                                      <div class="btn-group pull-right">
                                         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Diplomes <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Informatique</a></li>
                                             <li><a href="#">Chimie</a></li>
                                             <li><a href="#">electronique</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample_3">
                                     <thead>
                                     <tr>
                                         <th>Matricule</th>
                                         <th>Niveau Name</th>                                         
                                         <th>Edit</th>
                                         <th>Delete</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr class="">
                                         <td>x</td>
                                         <td>y</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>z</td>
                                         <td>t</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
            
            
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Modules </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     <div class="btn-group">
                                         <button id="editable-sample_new_4" class="btn green">
                                             Add New <i class="icon-plus"></i>
                                         </button>
                                     </div>
                                     <div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Print</a></li>
                                             <li><a href="#">Save as PDF</a></li>
                                             <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                     </div>
                                     </br></br>                            
                                     <div class="btn-group pull-right">
                                         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Spécialitées <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">ASIAD</a></li>
                                             <li><a href="#">Embarqué</a></li>
                                             <li><a href="#">Reseaux</a></li>
                                         </ul>
                                     </div>
                                      <div class="btn-group pull-right">
                                         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Niveaux <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">IF4</a></li>
                                             <li><a href="#">LFI2</a></li>
                                             <li><a href="#">IE5</a></li>
                                         </ul>
                                     </div>
                                     <div class="btn-group pull-right">
                                         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Diplomes <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Informatique</a></li>
                                             <li><a href="#">Chimie</a></li>
                                             <li><a href="#">electronique</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample_4">
                                     <thead>
                                     <tr>
                                         <th>Username</th>
                                         <th>Full Name</th>
                                         <th>Edit</th>
                                         <th>Delete</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                    <tr class="">
                                         <td>x</td>
                                         <td>y</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>z</td>
                                         <td>t</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
            
            
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Matières </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     <div class="btn-group">
                                         <button id="editable-sample_new_5" class="btn green">
                                             Add New <i class="icon-plus"></i>
                                         </button>
                                     </div>
                                     <div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Print</a></li>
                                             <li><a href="#">Save as PDF</a></li>
                                             <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                     </div>
                                     </br></br>
                                     <div class="btn-group pull-right">
                                         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Modules<i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">langgues</a></li>
                                             <li><a href="#">maths</a></li>
                                             <li><a href="#">programmation</a></li>
                                         </ul>
                                     </div>
                                      <div class="btn-group pull-right">
                                         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Specialitées<i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">ASIAD</a></li>
                                             <li><a href="#">embarqué</a></li>
                                             <li><a href="#">reseaux</a></li>
                                         </ul>
                                     </div>
                                     <div class="btn-group pull-right">
                                         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Niveaux<i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">IF4</a></li>
                                             <li><a href="#">LFI1</a></li>
                                             <li><a href="#">MC3</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample_5">
                                     <thead>
                                     <tr>
                                         <th>Username</th>
                                         <th>Full Name</th>
                                         <th>Edit</th>
                                         <th>Delete</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr class="">
                                         <td>x</td>
                                         <td>y</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>z</td>
                                         <td>t</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
            
            
            
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget blue">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Epreuves </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     <div class="btn-group">
                                         <button id="editable-sample_new_6" class="btn green">
                                             Add New <i class="icon-plus"></i>
                                         </button>
                                     </div>
                                     <div class="btn-group pull-right">
                                         <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">Print</a></li>
                                             <li><a href="#">Save as PDF</a></li>
                                             <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                     </div>
                                     </br></br>
                                     <div class="btn-group pull-right">
                                      <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Matières <i class="icon-angle-down"></i>
                                         </button>
                                         <ul class="dropdown-menu pull-right">
                                             <li><a href="#">java</a></li>
                                             <li><a href="#">JEE</a></li>
                                             <li><a href="#">algorithmique</a></li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample_6">
                                     <thead>
                                     <tr>
                                         <th>Username</th>
                                         <th>Full Name</th>
                                        
                                         <th>Edit</th>
                                         <th>Delete</th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr class="">
                                         <td>x</td>
                                         <td>y</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     <tr class="">
                                         <td>z</td>
                                         <td>t</td>
                                         <td><a class="edit" href="javascript:;">Edit</a></td>
                                         <td><a class="delete" href="javascript:;">Delete</a></td>
                                     </tr>
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
            
            
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Metro Lab Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="js/editable-table.js"></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
		   var divs = document.getElementsByClassName('widget blue');
		   for (var i = 1, c = divs.length ; i <= c ; i++) {
			   var currentTable = "#editable-sample_"+i ;
			   var currentTableEdit = "#editable-sample_new_"+i;
			   EditableTable.init(currentTable,currentTableEdit);
		}
       });
   </script>
</body>
<!-- END BODY -->
</html>