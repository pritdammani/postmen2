<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Postmen Admin</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
       <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/toastr/toastr.min.css" media="screen" >
        <link rel="stylesheet" href="css/icheck/skins/line/blue.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/red.css" >
        <link rel="stylesheet" href="css/icheck/skins/line/green.css" >
        <link rel="stylesheet" href="css/bootstrap-tour/bootstrap-tour.css" >
            <link rel="stylesheet" href="css/fontawesome-all.css">

       <!--   ========== THEME CSS ========== -->
        <link rel="stylesheet" href="css/main.css" media="screen" >

        <!-- ========== MODERNIZR ========== -->
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
            <nav class="navbar top-navbar bg-white box-shadow">
            	<div class="container-fluid">
                    <div class="row">
                        <div class="navbar-header no-padding">
                			<a class="navbar-brand" href="http://localhost:8000/index">
                			   Postmen
                			</a>
                            <span class="small-nav-handle hidden-sm hidden-xs"><i class="fa fa-outdent"></i></span>
                			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                				<span class="sr-only">Toggle navigation</span>
                				<i class="fa fa-ellipsis-v"></i>
                			</button>
                            <button type="button" class="navbar-toggle mobile-nav-toggle" >
                				<i class="fa fa-bars"></i>
                			</button>
                		</div>
                        <!-- /.navbar-header -->

                		<div class="collapse navbar-collapse" id="navbar-collapse-1">
                			<ul class="nav navbar-nav" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="hidden-sm hidden-xs"><a href="#" class="user-info-handle"><i class="fa fa-user"></i></a></li>
                               <!-- <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="#"><i class="fa fa-search"></i></a></li>
                				<li class="hidden-xs hidden-xs"> --><!-- <a href="#">My Tasks</a> </li>--><!--
                                <li class=""><a href="#" class="color-primary"><i class="fa fa-diamond"></i> Upgrade</a></li>-->
                			</ul> 
                            <!-- /.nav navbar-nav -->
                            
                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                              <!--  <li class="dropdown">
                					<a href="#" class="dropdown-toggle bg-primary tour-one" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus-circle"></i> Add New <span class="caret"></span></a>
                					<ul class="dropdown-menu" >
                						<li><a href="#"><i class="fa fa-plus-square-o"></i> Customer</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Employee</a></li>
                						<li><a href="#"><i class="fa fa-plus-square-o"></i> Estimate</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square-o"></i> Task</a></li>
                						<li><a href="#"><i class="fa fa-plus-square-o"></i> Team Member</a></li>
                						<li role="separator" class="divider"></li>
                						<li><a href="#">Create Order</a></li>
                						<li role="separator" class="divider"></li>
                						<li><a href="#">Generate Report</a></li>
                					</ul>
                				</li> -->
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li class=""><a href="#" class="color-primary"><i class=""></i>                        </a></li>
                                <li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li><li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li><li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li>
                                <li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li><li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li><li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li>
                                <li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li><li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li><li><a href="#" class=""><i class=""></i><span class="badge badge-danger"></span></a></li>
                                <!-- /.dropdown -->
                                <li><a href="#" class=""><i class="fa fa-bell"></i><span class="badge badge-danger">6</span></a></li>
                				<li><a href="#" class=""><i class="fa fa-comments"></i><span class="badge badge-warning">2</span></a></li>
                				<li class="dropdown tour-two">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">John Doe <span class="caret"></span></a>
                					<ul class="dropdown-menu profile-dropdown">
                						<li class="profile-menu bg-gray">
                						    <div class="">
                						        <img src="http://placehold.it/60/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                                <div class="profile-name">
                                                    <h6>John Doe</h6>
                                                    <a href="pages-profile.html">View Profile</a>
                                                </div>
                                                <div class="clearfix"></div>
                						    </div>
                						</li>
                						<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                						<li><a href="#"><i class="fa fa-sliders"></i> Account Details</a></li>
                						<li role="separator" class="divider"></li>
                						<li><a href="#" class="color-danger text-center"><i class="fa fa-sign-out"></i> Logout</a></li>
                					</ul>
                				</li>
                                <!-- /.dropdown -->
                                
                			</ul>
                            <!-- /.nav navbar-nav navbar-right -->
                		</div>
                		<!-- /.navbar-collapse -->
                    </div>
                    <!-- /.row -->
            	</div>
            	<!-- /.container-fluid -->
            </nav>

            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                    <div class="left-sidebar fixed-sidebar bg-black-300 box-shadow tour-three">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                <h6 class="title">Post Men</h6>
                                <small class="info">Social Manager</small>
                            </div>
                            <!-- /.user-info -->

                            <div class="sidebar-nav">
                                <ul class="side-nav color-gray">
                                    <li class="nav-header">
                                        <span class="">Main Category</span>
                                    </li>
                                    <li class="">
                                        <a href="http://localhost:8000/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                                       
                                    </li>

                                    <li class="nav-header">
                                        <span class="">Appearance</span>
                                    </li>
                                    <li class=""><a href="http://localhost:8000/draft"><i class="fa fa-info"></i> <span>Drafts</span></a></li>
                                    <li class=""><a href="http://localhost:8000/shedule"><i class="fa fa-cloud"></i> <span>Shedules</span></a></li>
                                    <li class=""><a href="http://localhost:8000/draft"><i class="fa fa-bars"></i> <span>Add Accounts</span></a></li>
                                    <li class=""><a href="http://localhost:8000/shedule"><i class="fa fa-bars"></i> <span>Help & Support</span></a></li>

                                    <li class="nav-header">
                                        <span class="">Pages</span>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-lock"></i> <span>Login</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="pages-login.html"><i class="fa fa-lock"></i> <span>Option 1</span></a></li>
                                            <li><a href="pages-login-2.html"><i class="fa fa-sign-in"></i> <span>Option 2</span></a></li>
                                            <li><a href="pages-login-3.html"><i class="fa fa-sign-out"></i> <span>Option 3</span></a></li>
                                            <li><a href="pages-login-4.html"><i class="fa fa-lock"></i> <span>Option 4</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#"><i class="fa fa-sign-out"></i> <span>Register</span> <i class="fa fa-angle-right arrow"></i></a>
                                        <ul class="child-nav">
                                            <li><a href="pages-register.html"><i class="fa fa-lock"></i> <span>Option 1</span></a></li>
                                            <li><a href="pages-register-2.html"><i class="fa fa-sign-in"></i> <span>Option 2</span></a></li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                                <!-- /.side-nav -->
                                
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-sm-6">
                                    <h2 class="title">Social Inbox</h2>
                                   
                                </div>
                                <!-- /.col-sm-6 -->
                                <div class="col-sm-6 right-side">
                                    <a class="btn bg-black toggle-code-handle tour-four"  role="button"><i class="fa fa-edit"></i>Compose!</a>
                                </div>
                                <!-- /.col-sm-6 text-right -->
                            </div>
                            <!-- /.row -->
                        <!-- <div class="row breadcrumb-div">
                                <div class="col-sm-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Dashboard</li>
            						</ul>
                                </div>-->
                                <!-- /.col-sm-6 -->
                               <!-- <div class="col-sm-6 text-right hidden-xs">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>-->
                                <!-- /.col-sm-6 -->
                          <!--  </div>-->

                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-primary" href="#">
                                            <span class="number counter">1,411</span>
                                            <span class="name">Comments</span>
                                            <span class="bg-icon"><i class="fa fa-facebook-square"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-primary" href="#"&gt;
    &lt;span class="number counter"&gt;1,411&lt;/span&gt;
    &lt;span class="name"&gt;Comments&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-comments"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-danger" href="#">
                                            <span class="number counter">322</span>
                                            <span class="name">GOOGLE PLUS</span>
                                            <span class="bg-icon"><i class="fa fa-google-plus"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-danger" href="#"&gt;
    &lt;span class="number counter"&gt;322&lt;/span&gt;
    &lt;span class="name"&gt;Total Tickets&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-ticket"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-warning" href="#">
                                            <span class="number counter">5,551</span>
                                            <span class="name">TWITTER</span>
                                            <span class="bg-icon"><i class="fa fa-twitter"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                            <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-warning" href="#"&gt;
    &lt;span class="number counter"&gt;5,551&lt;/span&gt;
    &lt;span class="name"&gt;Bank Credits&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-bank"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div>
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <a class="dashboard-stat bg-success" href="#">
                                            <span class="number counter">16,710</span>
                                            <span class="name">LinkedIn</span>
                                            <span class="bg-icon"><i class="fa fa-linkedin-square"></i></span>
                                        </a>
                                        <!-- /.dashboard-stat -->

                                        <div class="src-code">
                                           <!-- <pre class="language-html"><code class="language-html">
&lt;a class="dashboard-stat bg-success" href="#"&gt;
    &lt;span class="number counter"&gt;16,710&lt;/span&gt;
    &lt;span class="name"&gt;Thumbs Up&lt;/span&gt;
    &lt;span class="bg-icon"&gt;&lt;i class="fa fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/span&gt;
&lt;/a&gt;
&lt;!-- /.dashboard-stat --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function(){
        $('.counter').counterUp();
    });
&lt;/script&gt;
                                            </code></pre>
                                        </div> -->
                                        <!-- /.src-code -->
                                    </div>
                                    <!-- /.col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                        <section class="section pt-10">
                            <div class="container-fluid">
                                <div class="row">
                                   <div class="col-md-6">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>This will show the posts that you posted on the given multiple platforms after clicking on the upper tabs. <br><small>It will consist of post likes, no. of comments, shares and many more.. </small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                               <!-- <div id="production-chart" class="op-chart"></div>-->

                                               <!-- <div class="src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;div id="production-chart" class="op-chart"&gt;&lt;/div&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script src="js/production-chart.js"&gt;&lt;/script&gt;
                                                    </code></pre>
                                                </div> -->
                                                <!-- /.src-code -->
                                           </div>
                                        </div>
                                        <!-- /.panel -->
                                  </div>
                                    <!-- /.col-md-6 -->

                                   <div class="col-md-6">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Traffic Stats <small>over years</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <!--<div id="traffic-chart" class="op-chart"></div>

                                                <div class="src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;div id="traffic-chart" class="op-chart"&gt;&lt;/div&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script src="js/traffic-chart.js"&gt;&lt;/script&gt;
                                                    </code></pre>
                                                </div>-->
                                                <!-- /.src-code -->
                                          <!--  </div>
                                        </div> -->
                                        <!-- /.panel -->
                                   </div> 
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                       <!-- <section class="section pt-n">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="panel border-primary no-border border-3-top">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>User Table Details</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">-->

                                                <!-- Nav tabs -->
                                              <!--  <ul class="nav nav-tabs border-bottom border-primary" role="tablist">
                                                    <li role="presentation" class="active"><a class="" href="#home7" aria-controls="home7" role="tab" data-toggle="tab">Approved</a></li>
                                                    <li role="presentation"><a class="" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab">Pending</a></li>
                                                </ul>-->

                                                <!-- Tab panes -->
                                              <!--  <div class="tab-content bg-white p-15">
                                                    <div role="tabpanel" class="tab-pane active" id="home7">
                                                        <table class="table table-clean">
                                                        	<tbody>
                                                        		<tr>
                                                        			<td class="line-height-60"><img src="images/letter/a.png" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><span class="color-success">Approved</span></small></td>
                                                                    <td class="w-10">10.10pm</td>
                                                        		</tr>
                                                        		<tr>
                                                        			<td><img src="images/letter/profile-image-1.jpg" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum <br><span class="color-success">Approved</span></small></td>
                                                                    <td>12.15am</td>
                                                        		</tr>
                                                        	</tbody>
                                                        </table>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="profile7">
                                                        <table class="table table-clean">
                                                        	<tbody>
                                                                <tr>
                                                                    <td><img src="images/letter/profile-image-1.jpg" alt="" class="border-radius-50 img-size-50"></td>
                                                                    <td class="line-height-30"><small><b>Alepy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum<br><span class="color-warning">Pending</span></small></td>
                                                                    <td>09:58am</td>
                                                                </tr>
                                                        		<tr>
                                                        			<td class="line-height-60"><img src="images/letter/c.png" alt="" class="border-radius-50 img-size-50"></td>
                                                        			<td class="line-height-30"><small><b>Celpy Macintyre</b> <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br><span class="color-warning">Pending</span></small></td>
                                                                    <td class="w-10">8:16pm</td>
                                                        		</tr>
                                                        	</tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="src-code">
                                            <pre class="language-html">
                                                <code class="language-html">
&lt;div class="panel-body p-20"&gt;

    &lt;!-- Nav tabs --&gt;
    &lt;ul class="nav nav-tabs border-bottom border-primary" role="tablist"&gt;
        &lt;li role="presentation" class="active"&gt;&lt;a class="" href="#home7" aria-controls="home7" role="tab" data-toggle="tab"&gt;Approved&lt;/a&gt;&lt;/li&gt;
        &lt;li role="presentation"&gt;&lt;a class="" href="#profile7" aria-controls="profile7" role="tab" data-toggle="tab"&gt;Pending&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;!-- Tab panes --&gt;
    &lt;div class="tab-content bg-white p-15"&gt;
        &lt;div role="tabpanel" class="tab-pane active" id="home7"&gt;
            &lt;table class="table table-clean"&gt;
            	&lt;tbody&gt;
            		&lt;tr&gt;
            			&lt;td class="line-height-60"&gt;&lt;img src="images/letter/a.png" alt="" class="border-radius-50 img-size-50"&gt;&lt;/td&gt;
            			&lt;td class="line-height-30"&gt;&lt;b&gt;Alepy Macintyre&lt;/b&gt; &lt;br&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;br&gt;&lt;span class="color-success"&gt;Approved&lt;/span&gt;&lt;/td&gt;
                        &lt;td class="w-10"&gt;10.10pm&lt;/td&gt;
            		&lt;/tr&gt;
                    ...
            	&lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
        &lt;div role="tabpanel" class="tab-pane" id="profile7"&gt;
            &lt;table class="table table-clean"&gt;
            	&lt;tbody&gt;
            		&lt;tr&gt;
            			&lt;td class="line-height-60"&gt;&lt;img src="images/letter/a.png" alt="" class="border-radius-50 img-size-50"&gt;&lt;/td&gt;
            			&lt;td class="line-height-30"&gt;&lt;b&gt;Alepy Macintyre&lt;/b&gt; &lt;br&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry.&lt;br&gt;&lt;span class="color-warning"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                        &lt;td class="w-10"&gt;8:16pm&lt;/td&gt;
            		&lt;/tr&gt;
                    ...
            	&lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                                                </code>
                                            </pre>
                                        </div>-->
                                        <!-- /.src-code -->
                                 <!--   </div>-->

                                    <!-- /.col-md-8 -->

                                 <!--   <div class="col-md-4">
                                        <div class="panel border-primary no-border border-3-top" data-panel-control>
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Tasks <small>with priority indicator</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <p>Following is the list of all the pending tasks. Click on task to mark it done. You can toggle the status by clicking on an item.</p>

                                                <div class="row">
                                                    <div class="tasks-list col-md-12">
                                                        <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-blue">
                                                            <label>This is medium priority task. It is indicated in primary color.</label>
                                                        </div>-->
                                                        <!-- /.task -->

                                                        <!--<div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-red">
                                                            <label>This is top priority task. It is indicated in danger color.</label>
                                                        </div>-->
                                                        <!-- /.task -->

                                                     <!--   <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-green">
                                                            <label>This is low priority task. It is indicated in success color. </label>
                                                        </div>-->
                                                        <!-- /.task -->

                                                       <!-- <div class="task mb-10">
                                                            <input type="checkbox" name="one" class="line-style-blue" checked="">
                                                            <label>This is medium priority task. It is indicated in primary color.</label>
                                                        </div>-->
                                                        <!-- /.task -->

                                                   <!-- </div>-->
                                                    <!-- /.tasks-list -->
                                              <!--  </div>-->

                                               <!-- <div class="src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;div class="tasks-list col-md-8 col-md-offset-2"&gt;
    &lt;div class="task mb-10"&gt;
        &lt;input type="checkbox" name="one" class="line-style-blue"&gt;
        &lt;label&gt;This is medium priority task. It is indicated in primary color.&lt;/label&gt;
    &lt;/div&gt;
    &lt;!-- /.task --&gt;

    &lt;div class="task mb-10"&gt;
        &lt;input type="checkbox" name="one" class="line-style-red"&gt;
        &lt;label&gt;This is top priority task. It is indicated in danger color.&lt;/label&gt;
    &lt;/div&gt;
    &lt;!-- /.task --&gt;

    &lt;div class="task mb-10"&gt;
        &lt;input type="checkbox" name="one" class="line-style-green"&gt;
        &lt;label&gt;This is low priority task. It is indicated in success color. &lt;/label&gt;
    &lt;/div&gt;
    &lt;!-- /.task --&gt;

    &lt;div class="task mb-10"&gt;
        &lt;input type="checkbox" name="one" class="line-style-blue" checked=""&gt;
        &lt;label&gt;This is medium priority task. It is indicated in primary color.&lt;/label&gt;
    &lt;/div&gt;
    &lt;!-- /.task --&gt;

&lt;/div&gt;
&lt;!-- /.tasks-list --&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script src="js/task-list.js"&gt;&lt;/script&gt;
                                                    </code></pre>
                                                </div>-->
                                                <!-- /.src-code -->
                                           <!-- </div>
                                        </div> -->
                                        <!-- /.panel -->
                                   <!-- </div> -->
                                    <!-- /.col-md-4 -->
                               <!-- </div>-->
                                <!-- /.row -->
                           <!-- </div>-->
                            <!-- /.container-fluid -->
                        <!--</section> -->
                        <!-- /.section -->
                   <!-- </div> -->
                    <!-- /.main-page -->

                  <!--  <div class="right-sidebar bg-white fixed-sidebar">
                        <div class="sidebar-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Useful Sidebar <i class="fa fa-times close-icon"></i></h4>
                                        <p>Code for help is added within the main page. Check for code below the example.</p>
                                        <p>You can use this sidebar to help your end-users. You can enter any HTML in this sidebar.</p>
                                        <p>This sidebar can be a 'fixed to top' or you can unpin it to scroll with main page.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div> -->
                                    <!-- /.col-md-12 -->

                                <!--    <div class="text-center mt-20">
                                        <button type="button" class="btn btn-success btn-labeled">Purchase Now<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                    </div>-->
                                    <!-- /.text-center -->
                               <!-- </div> -->
                                <!-- /.row -->
                            <!--</div> -->
                            <!-- /.container-fluid -->
                       <!-- </div>-->
                        <!-- /.sidebar-content -->
                   <!-- </div> -->
                    <!-- /.right-sidebar -->

               <!-- </div> -->
                <!-- /.content-container -->
           <!-- </div> -->
            <!-- /.content-wrapper -->

       <!-- </div> -->
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>
        <script src="js/waypoint/waypoints.min.js"></script>
        <script src="js/counterUp/jquery.counterup.min.js"></script>
        <script src="js/amcharts/amcharts.js"></script>
        <script src="js/amcharts/serial.js"></script>
        <script src="js/amcharts/plugins/export/export.min.js"></script>
        <link rel="stylesheet" href="js/amcharts/plugins/export/export.css" type="text/css" media="all" />
        <script src="js/amcharts/themes/light.js"></script>
        <script src="js/toastr/toastr.min.js"></script>
        <script src="js/icheck/icheck.min.js"></script>
        <script src="js/bootstrap-tour/bootstrap-tour.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script src="js/production-chart.js"></script>
        <script src="js/traffic-chart.js"></script>
        <script src="js/task-list.js"></script>
        <script>
            $(function(){

                // Counter for dashboard stats
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });

                // Welcome notification
                toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "3500",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                toastr["success"]("Here is your admin panel!", "Welcome to Postmen!");

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>