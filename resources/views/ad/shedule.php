<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Options Admin - Responsive Web Application Kit</title>

        <!-- ========== COMMON STYLES ========== -->
        <link rel="stylesheet" href="css/bootstrap.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >

        <!-- ========== PAGE STYLES ========== -->
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->

        <!-- ========== THEME CSS ========== -->
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
                			<a class="navbar-brand" href="index.html">
                			    <img src="images/logo-dark.svg" alt="Options - Admin Template" class="logo">
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
                                <li class="hidden-sm hidden-xs"><a href="#" class="full-screen-handle"><i class="fa fa-arrows-alt"></i></a></li>
                                <li class="hidden-sm hidden-xs"><a href="#"><i class="fa fa-search"></i></a></li>
                				<li class="hidden-xs hidden-xs"><!-- <a href="#">My Tasks</a> --></li>
                                <li class=""><a href="#" class="color-primary"><i class="fa fa-diamond"></i> Upgrade</a></li>
                			</ul>
                            <!-- /.nav navbar-nav -->

                			<ul class="nav navbar-nav navbar-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <li class="dropdown">
                					<a href="#" class="dropdown-toggle bg-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus-circle"></i> Add New <span class="caret"></span></a>
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
                				</li>
                                <!-- /.dropdown -->
                                <li><a href="#" class=""><i class="fa fa-bell"></i></a></li>
                				<li><a href="#" class=""><i class="fa fa-comments"></i></a></li>
                				<li class="dropdown">
                					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">John Doe <span class="caret"></span></a>
                					<ul class="dropdown-menu profile-dropdown">
                						<li class="profile-menu bg-gray">
                						    <div class="">
                						        <img src="http://placehold.it/60/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                                <div class="profile-name">
                                                    <h6>John Doe</h6>
                                                    <a href="#">View Profile</a>
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
                                <li><a href="#" class="hidden-xs hidden-sm open-right-sidebar"><i class="fa fa-ellipsis-v"></i></a></li>
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
                    <div class="left-sidebar bg-black-300 box-shadow ">
                        <div class="sidebar-content">
                            <div class="user-info closed">
                                <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
                                <h6 class="title">John Doe</h6>
                                <small class="info">PHP Developer</small>
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

                                    </ul>
                            </div>
                            <!-- /.sidebar-nav -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.left-sidebar -->

                    <div class="main-page">
                        <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Form - Basic Inputs</h2>
                                    <p class="sub-title">One of the most complete bootstrap admin templates!</p>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 right-side">
                                    <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
                                </div>
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li><a href="#">Forms</a></li>
            							<li class="active">Basic Inputs</li>
            						</ul>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 text-right">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.</p>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Vertical Form</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form>
                                                	<div class="form-group">
                                                		<label for="exampleInputEmail1">Email address</label>
                                                		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" autofocus="">
                                                	</div>
                                                	<div class="form-group">
                                                		<label for="exampleInputPassword1">Password</label>
                                                		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                	</div>
                                                	<div class="checkbox">
                                                		<label>
                                                			<input type="checkbox"> Check me out
                                                		</label>
                                                	</div>
                                                	<button type="submit" class="btn btn-primary">Submit</button>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="exampleInputEmail1"&gt;Email address&lt;/label&gt;
        &lt;input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" autofocus=""&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="exampleInputPassword1"&gt;Password&lt;/label&gt;
        &lt;input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="checkbox"&gt;
        &lt;label&gt;
            &lt;input type="checkbox"&gt; Check me out
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Horizontal Form</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="form-horizontal">
                                                	<div class="form-group">
                                                		<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                                		<div class="col-sm-10">
                                                			<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                		</div>
                                                	</div>
                                                	<div class="form-group">
                                                		<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                		<div class="col-sm-10">
                                                			<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                		</div>
                                                	</div>
                                                	<div class="form-group">
                                                		<div class="col-sm-offset-2 col-sm-10">
                                                			<div class="checkbox">
                                                				<label>
                                                					<input type="checkbox"> Remember me
                                                				</label>
                                                			</div>
                                                		</div>
                                                	</div>
                                                	<div class="form-group">
                                                		<div class="col-sm-offset-2 col-sm-10">
                                                			<button type="submit" class="btn btn-primary">Sign in</button>
                                                		</div>
                                                	</div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class="form-horizontal"&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="inputEmail3" class="col-sm-2 control-label"&gt;Email&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="email" class="form-control" id="inputEmail3" placeholder="Email"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="inputPassword3" class="col-sm-2 control-label"&gt;Password&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="password" class="form-control" id="inputPassword3" placeholder="Password"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;div class="col-sm-offset-2 col-sm-10"&gt;
            &lt;div class="checkbox"&gt;
                &lt;label&gt;
                    &lt;input type="checkbox"&gt; Remember me
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;div class="col-sm-offset-2 col-sm-10"&gt;
            &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Basic Input Fields</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="form-horizontal">
                                                	<div class="form-group">
                                                		<label for="default" class="col-sm-2 control-label">Default Input</label>
                                                		<div class="col-sm-10">
                                                			<input type="email" class="form-control" id="default" placeholder="Default Input Text">
                                                		</div>
                                                	</div>
                                                	<div class="form-group">
                                                		<label for="password" class="col-sm-2 control-label">Password</label>
                                                		<div class="col-sm-10">
                                                			<input type="password" class="form-control" id="password" placeholder="Password">
                                                		</div>
                                                	</div>
                                                	<div class="form-group">
                                                		<label for="text" class="col-sm-2 control-label">Without Placeholder</label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control" id="text" >
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="readonly" class="col-sm-2 control-label">Read Only Field</label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control" id="readonly" placeholder="Read Only Field" readonly="">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="disabled" class="col-sm-2 control-label">Disabled Field</label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control" id="disabled" placeholder="Disabled Field" disabled="">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="predefined" class="col-sm-2 control-label">Predefined Value</label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control" id="predefined" placeholder="Predefined Value" value="You can set this value">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="predefined" class="col-sm-2 control-label">Default Select</label>
                                                		<div class="col-sm-10">
                                                            <select class="form-control">
                                                                <option>Default Select</option>
                                                            	<option>1</option>
                                                            	<option>2</option>
                                                            	<option>3</option>
                                                            	<option>4</option>
                                                            	<option>5</option>
                                                            </select>
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="maximum" class="col-sm-2 control-label">Maximum Characters</label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control" id="maximum" placeholder="You can enter maximum 5 characters" maxlength="5">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="autocomplete" class="col-sm-2 control-label">Autocomplete Off</label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control" id="autocomplete" placeholder="Autocomplete Off" autocomplete="off">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label class="col-sm-2 control-label">Static Text</label>
                                                		<div class="col-sm-10">
                                                			<p class="form-control-static" id="static">This is static text in form.</p>
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="textarea" class="col-sm-2 control-label">Textarea</label>
                                                		<div class="col-sm-10">
                                                			<textarea class="form-control" id="textarea" placeholder="Default Textarea" rows="5"></textarea>
                                                		</div>
                                                	</div>
                                                	<div class="form-group">
                                                		<div class="col-sm-offset-2 col-sm-10">
                                                			<button type="submit" class="btn btn-primary">Submit</button>
                                                		</div>
                                                	</div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class="form-horizontal"&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="default" class="col-sm-2 control-label"&gt;Default Input&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="email" class="form-control" id="default" placeholder="Default Input Text"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="password" class="col-sm-2 control-label"&gt;Password&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="password" class="form-control" id="password" placeholder="Password"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="text" class="col-sm-2 control-label"&gt;Without Placeholder&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control" id="text" &gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="readonly" class="col-sm-2 control-label"&gt;Read Only Field&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control" id="readonly" placeholder="Read Only Field" readonly=""&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="disabled" class="col-sm-2 control-label"&gt;Disabled Field&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control" id="disabled" placeholder="Disabled Field" disabled=""&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="predefined" class="col-sm-2 control-label"&gt;Predefined Value&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control" id="predefined" placeholder="Predefined Value" value="You can set this value"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="predefined" class="col-sm-2 control-label"&gt;Default Select&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;select class="form-control"&gt;
                &lt;option&gt;Default Select&lt;/option&gt;
                &lt;option&gt;1&lt;/option&gt;
                &lt;option&gt;2&lt;/option&gt;
                &lt;option&gt;3&lt;/option&gt;
                &lt;option&gt;4&lt;/option&gt;
                &lt;option&gt;5&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="maximum" class="col-sm-2 control-label"&gt;Maximum Characters&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control" id="maximum" placeholder="You can enter maximum 5 characters" maxlength="5"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="autocomplete" class="col-sm-2 control-label"&gt;Autocomplete Off&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control" id="autocomplete" placeholder="Autocomplete Off" autocomplete="off"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label class="col-sm-2 control-label"&gt;Static Text&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;p class="form-control-static" id="static"&gt;This is static text in form.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="textarea" class="col-sm-2 control-label"&gt;Textarea&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;textarea class="form-control" id="textarea" placeholder="Default Textarea" rows="5"&gt;&lt;/textarea&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;div class="col-sm-offset-2 col-sm-10"&gt;
            &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Default Input Types<small>without jQuery plugins</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="form-horizontal">
                                                	<div class="form-group">
                                                		<label for="text1" class="col-sm-2 control-label">Text</label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control" id="text1" placeholder="Input type text">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="email2" class="col-sm-2 control-label">Email</label>
                                                		<div class="col-sm-10">
                                                			<input type="email" class="form-control" id="email2" placeholder="Input type Email">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="pass1" class="col-sm-2 control-label">Password</label>
                                                		<div class="col-sm-10">
                                                			<input type="password" class="form-control" id="pass1" placeholder="Input type password">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="date" class="col-sm-2 control-label">Date</label>
                                                		<div class="col-sm-10">
                                                			<input type="date" class="form-control" id="date">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="datetimelocal" class="col-sm-2 control-label">Datetime</label>
                                                		<div class="col-sm-10">
                                                			<input type="datetime-local" class="form-control" id="datetimelocal">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="color" class="col-sm-2 control-label">Color</label>
                                                		<div class="col-sm-10">
                                                			<input type="color" class="form-control" id="color">
                                                		</div>
                                                	</div>
                                                	<div class="form-group">
                                                		<div class="col-sm-offset-2 col-sm-10">
                                                			<button type="submit" class="btn btn-primary">Submit</button>
                                                		</div>
                                                	</div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class="form-horizontal"&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="text1" class="col-sm-2 control-label"&gt;Text&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control" id="text1" placeholder="Input type text"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="email2" class="col-sm-2 control-label"&gt;Email&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="email" class="form-control" id="email2" placeholder="Input type Email"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="pass1" class="col-sm-2 control-label"&gt;Password&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="password" class="form-control" id="pass1" placeholder="Input type password"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="date" class="col-sm-2 control-label"&gt;Date&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="date" class="form-control" id="date"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="datetimelocal" class="col-sm-2 control-label"&gt;Datetime&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="datetime-local" class="form-control" id="datetimelocal"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="color" class="col-sm-2 control-label"&gt;Color&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="color" class="form-control" id="color"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;div class="col-sm-offset-2 col-sm-10"&gt;
            &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Default Input Types<small>without jQuery plugins</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="form-horizontal">
                                                	<div class="form-group">
                                                		<label for="month" class="col-sm-2 control-label">Month</label>
                                                		<div class="col-sm-10">
                                                			<input type="month" class="form-control" id="month">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="time" class="col-sm-2 control-label">Time</label>
                                                		<div class="col-sm-10">
                                                			<input type="time" class="form-control" id="time">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="week" class="col-sm-2 control-label">Week</label>
                                                		<div class="col-sm-10">
                                                			<input type="week" class="form-control" id="week">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="number" class="col-sm-2 control-label">Number</label>
                                                		<div class="col-sm-10">
                                                			<input type="number" class="form-control" id="number" placeholder="Input type number">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="url" class="col-sm-2 control-label">URL</label>
                                                		<div class="col-sm-10">
                                                			<input type="url" class="form-control" id="url" placeholder="http://www.google.com">
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="search" class="col-sm-2 control-label">Search</label>
                                                		<div class="col-sm-10">
                                                			<input type="search" class="form-control" id="search" placeholder="Input type search">
                                                		</div>
                                                	</div>
                                                	<div class="form-group">
                                                		<div class="col-sm-offset-2 col-sm-10">
                                                			<button type="submit" class="btn btn-primary">Submit</button>
                                                		</div>
                                                	</div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class="form-horizontal"&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="month" class="col-sm-2 control-label"&gt;Month&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="month" class="form-control" id="month"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="time" class="col-sm-2 control-label"&gt;Time&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="time" class="form-control" id="time"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="week" class="col-sm-2 control-label"&gt;Week&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="week" class="form-control" id="week"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="number" class="col-sm-2 control-label"&gt;Number&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="number" class="form-control" id="number" placeholder="Input type number"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="url" class="col-sm-2 control-label"&gt;URL&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="url" class="form-control" id="url" placeholder="http://www.google.com"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="search" class="col-sm-2 control-label"&gt;Search&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="search" class="form-control" id="search" placeholder="Input type search"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;div class="col-sm-offset-2 col-sm-10"&gt;
            &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Basic Select <small>without jQuery plugins</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                		<label for="predefined" class="col-sm-2 control-label">Default Select</label>
                                                		<div class="col-sm-10">
                                                            <select class="form-control">
                                                                <option>Default Select</option>
                                                            	<option>Option 1</option>
                                                            	<option>Option 2</option>
                                                            	<option>Option 3</option>
                                                            	<option>Option 4</option>
                                                            	<option>Option 5</option>
                                                            </select>
                                                		</div>
                                                	</div>
                                                    <div class="form-group">
                                                		<label for="predefined" class="col-sm-2 control-label">Default Multi-Select</label>
                                                		<div class="col-sm-10">
                                                            <select multiple class="form-control" aria-describedby="helpBlock">
                                                                <option>Default Multi-Select</option>
                                                            	<option>Option 1</option>
                                                            	<option>Option 2</option>
                                                            	<option>Option 3</option>
                                                            	<option>Option 4</option>
                                                                <option>Option 5</option>
                                                                <option>Option 6</option>
                                                                <option>Option 7</option>
                                                            	<option>Option 8</option>
                                                            </select>
                                                            <span id="helpBlock" class="help-block">Use ctrl / command key on keyboard to select multiple options.</span>
                                                		</div>
                                                	</div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class="form-horizontal"&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="predefined" class="col-sm-2 control-label"&gt;Default Select&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;select class="form-control"&gt;
                &lt;option&gt;Default Select&lt;/option&gt;
                &lt;option&gt;Option 1&lt;/option&gt;
                &lt;option&gt;Option 2&lt;/option&gt;
                &lt;option&gt;Option 3&lt;/option&gt;
                &lt;option&gt;Option 4&lt;/option&gt;
                &lt;option&gt;Option 5&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;label for="predefined" class="col-sm-2 control-label"&gt;Default Multi-Select&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;select multiple class="form-control" aria-describedby="helpBlock"&gt;
                &lt;option&gt;Default Multi-Select&lt;/option&gt;
                &lt;option&gt;Option 1&lt;/option&gt;
                &lt;option&gt;Option 2&lt;/option&gt;
                &lt;option&gt;Option 3&lt;/option&gt;
                &lt;option&gt;Option 4&lt;/option&gt;
                &lt;option&gt;Option 5&lt;/option&gt;
                &lt;option&gt;Option 6&lt;/option&gt;
                &lt;option&gt;Option 7&lt;/option&gt;
                &lt;option&gt;Option 8&lt;/option&gt;
            &lt;/select&gt;
            &lt;span id="helpBlock" class="help-block"&gt;Use ctrl / command key on keyboard to select multiple options.&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-12 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Validation States <small>without jQuery plugins</small></h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="">
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Input with success state</label>
                                                		<div class="">
                                                			<input type="text" class="form-control" id="success">
                                                            <span class="help-block">This is help text with success state.</span>
                                                		</div>
                                                	</div>
                                                    <div class="form-group has-warning">
                                                        <label for="warning" class="control-label">Input with warning state</label>
                                                		<div class="">
                                                			<input type="text" class="form-control" id="warning">
                                                            <span class="help-block">This is help text with warning state.</span>
                                                		</div>
                                                	</div>
                                                    <div class="form-group has-error">
                                                        <label for="error" class="control-label">Input with error state</label>
                                                		<div class="">
                                                			<input type="text" class="form-control" id="error">
                                                            <span class="help-block">This is help text with error state.</span>
                                                		</div>
                                                	</div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class=""&gt;
    &lt;div class="form-group has-success"&gt;
        &lt;label for="success" class="control-label"&gt;Input with success state&lt;/label&gt;
        &lt;div class=""&gt;
            &lt;input type="text" class="form-control" id="success"&gt;
            &lt;span class="help-block"&gt;This is help text with success state.&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-warning"&gt;
        &lt;label for="warning" class="control-label"&gt;Input with warning state&lt;/label&gt;
        &lt;div class=""&gt;
            &lt;input type="text" class="form-control" id="warning"&gt;
            &lt;span class="help-block"&gt;This is help text with warning state.&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-error"&gt;
        &lt;label for="error" class="control-label"&gt;Input with error state&lt;/label&gt;
        &lt;div class=""&gt;
            &lt;input type="text" class="form-control" id="error"&gt;
            &lt;span class="help-block"&gt;This is help text with error state.&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>With optional icons</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="">
                                                    <div class="form-group has-success has-feedback">
                                                    	<label class="control-label" for="inputSuccess2">Input with success</label>
                                                    	<input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
                                                    	<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                    	<span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                    </div>
                                                    <div class="form-group has-warning has-feedback">
                                                    	<label class="control-label" for="inputWarning2">Input with warning</label>
                                                    	<input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
                                                    	<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
                                                    	<span id="inputWarning2Status" class="sr-only">(warning)</span>
                                                    </div>
                                                    <div class="form-group has-error has-feedback">
                                                    	<label class="control-label" for="inputError2">Input with error</label>
                                                    	<input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
                                                    	<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                                                    	<span id="inputError2Status" class="sr-only">(error)</span>
                                                    </div>
                                                    <div class="form-group has-success has-feedback">
                                                    	<label class="control-label" for="inputGroupSuccess1">Input group with success</label>
                                                    	<div class="input-group">
                                                    		<span class="input-group-addon">@</span>
                                                    		<input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
                                                    	</div>
                                                    	<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                    	<span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
                                                    </div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class=""&gt;
    &lt;div class="form-group has-success has-feedback"&gt;
        &lt;label class="control-label" for="inputSuccess2"&gt;Input with success&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status"&gt;
        &lt;span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span id="inputSuccess2Status" class="sr-only"&gt;(success)&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-warning has-feedback"&gt;
        &lt;label class="control-label" for="inputWarning2"&gt;Input with warning&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status"&gt;
        &lt;span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span id="inputWarning2Status" class="sr-only"&gt;(warning)&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-error has-feedback"&gt;
        &lt;label class="control-label" for="inputError2"&gt;Input with error&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status"&gt;
        &lt;span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span id="inputError2Status" class="sr-only"&gt;(error)&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-success has-feedback"&gt;
        &lt;label class="control-label" for="inputGroupSuccess1"&gt;Input group with success&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;span class="input-group-addon"&gt;@&lt;/span&gt;
            &lt;input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status"&gt;
        &lt;/div&gt;
        &lt;span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span id="inputGroupSuccess1Status" class="sr-only"&gt;(success)&lt;/span&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Optional icons with hidden <code>.sr-only</code> labels</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="">
                                                    <div class="form-group has-success has-feedback">
                                                    	<label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
                                                    	<input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status">
                                                    	<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                    	<span id="inputSuccess5Status" class="sr-only">(success)</span>
                                                    </div>
                                                    <div class="form-group has-success has-feedback">
                                                    	<label class="control-label sr-only" for="inputGroupSuccess4">Input group with success</label>
                                                    	<div class="input-group">
                                                    		<span class="input-group-addon">@</span>
                                                    		<input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status">
                                                    	</div>
                                                    	<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                                    	<span id="inputGroupSuccess4Status" class="sr-only">(success)</span>
                                                    </div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class=""&gt;
    &lt;div class="form-group has-success has-feedback"&gt;
        &lt;label class="control-label sr-only" for="inputSuccess5"&gt;Hidden label&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status"&gt;
        &lt;span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span id="inputSuccess5Status" class="sr-only"&gt;(success)&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-success has-feedback"&gt;
        &lt;label class="control-label sr-only" for="inputGroupSuccess4"&gt;Input group with success&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;span class="input-group-addon"&gt;@&lt;/span&gt;
            &lt;input type="text" class="form-control" id="inputGroupSuccess4" aria-describedby="inputGroupSuccess4Status"&gt;
        &lt;/div&gt;
        &lt;span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span id="inputGroupSuccess4Status" class="sr-only"&gt;(success)&lt;/span&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Input with icons</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                                <form class="form-horizontal">
                                                    <div class="form-group left-icon">
                                                		<label for="leftIcon" class="col-sm-2 control-label">Input icons</label>
                                                		<div class="col-sm-10">
                                                            <span class="glyphicon glyphicon-calendar form-left-icon"></span>
                                                			<input type="text" class="form-control" id="leftIcon" placeholder="Input with left icon">
                                                		</div>
                                                	</div>
                                                    <div class="form-group left-icon">
                                                		<label for="leftIcon2" class="col-sm-2 control-label"></label>
                                                		<div class="col-sm-10">
                                                            <span class="glyphicon glyphicon-envelope form-left-icon icon-lg"></span>
                                                			<input type="text" class="form-control input-lg" id="leftIcon2" placeholder="Left icon + Large input">
                                                		</div>
                                                	</div>
                                                    <div class="form-group left-icon">
                                                		<label for="leftIcon3" class="col-sm-2 control-label"></label>
                                                		<div class="col-sm-10">
                                                            <span class="glyphicon glyphicon-info-sign form-left-icon icon-sm"></span>
                                                			<input type="text" class="form-control input-sm" id="leftIcon3" placeholder="Left icon + Small input">
                                                		</div>
                                                	</div>
                                                    <div class="form-group left-icon">
                                                		<label for="leftIcon4" class="col-sm-2 control-label"></label>
                                                		<div class="col-sm-10">
                                                            <span class="glyphicon glyphicon-comment form-left-icon"></span>
                                                			<textarea class="form-control" id="leftIcon4" placeholder="Textarea" rows="5"></textarea>
                                                		</div>
                                                	</div>

                                                    <div class="form-group has-feedback">
                                                		<label for="rightIcon2" class="col-sm-2 control-label">Icons on Right</label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control input-lg" id="rightIcon2" placeholder="Right icon + Large input">
                                                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                		</div>
                                                	</div>
                                                    <div class="form-group has-feedback">
                                                		<label for="rightIcon" class="col-sm-2 control-label"></label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control" id="rightIcon" placeholder="Input with right icon">
                                                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                                		</div>
                                                	</div>
                                                    <div class="form-group has-feedback">
                                                		<label for="rightIcon3" class="col-sm-2 control-label"></label>
                                                		<div class="col-sm-10">
                                                			<input type="text" class="form-control input-sm" id="rightIcon3" placeholder="Right icon + Small input">
                                                            <span class="glyphicon glyphicon-info-sign form-control-feedback"></span>
                                                		</div>
                                                	</div>
                                                    <div class="form-group has-feedback">
                                                		<label for="rightIcon4" class="col-sm-2 control-label"></label>
                                                		<div class="col-sm-10">
                                                			<textarea class="form-control" id="rightIcon4" placeholder="Textarea with right icon" rows="5"></textarea>
                                                            <span class="glyphicon glyphicon-comment form-control-feedback"></span>
                                                		</div>
                                                	</div>
                                                </form>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;form class="form-horizontal"&gt;
    &lt;div class="form-group left-icon"&gt;
        &lt;label for="leftIcon" class="col-sm-2 control-label"&gt;Input icons&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;span class="glyphicon glyphicon-calendar form-left-icon"&gt;&lt;/span&gt;
            &lt;input type="text" class="form-control" id="leftIcon" placeholder="Input with left icon"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group left-icon"&gt;
        &lt;label for="leftIcon2" class="col-sm-2 control-label"&gt;&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;span class="glyphicon glyphicon-envelope form-left-icon icon-lg"&gt;&lt;/span&gt;
            &lt;input type="text" class="form-control input-lg" id="leftIcon2" placeholder="Left icon + Large input"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group left-icon"&gt;
        &lt;label for="leftIcon3" class="col-sm-2 control-label"&gt;&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;span class="glyphicon glyphicon-info-sign form-left-icon icon-sm"&gt;&lt;/span&gt;
            &lt;input type="text" class="form-control input-sm" id="leftIcon3" placeholder="Left icon + Small input"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group left-icon"&gt;
        &lt;label for="leftIcon4" class="col-sm-2 control-label"&gt;&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;span class="glyphicon glyphicon-comment form-left-icon"&gt;&lt;/span&gt;
            &lt;textarea class="form-control" id="leftIcon4" placeholder="Textarea" rows="5"&gt;&lt;/textarea&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="form-group has-feedback"&gt;
        &lt;label for="rightIcon2" class="col-sm-2 control-label"&gt;Icons on Right&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control input-lg" id="rightIcon2" placeholder="Right icon + Large input"&gt;
            &lt;span class="glyphicon glyphicon-envelope form-control-feedback"&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-feedback"&gt;
        &lt;label for="rightIcon" class="col-sm-2 control-label"&gt;&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control" id="rightIcon" placeholder="Input with right icon"&gt;
            &lt;span class="glyphicon glyphicon-calendar form-control-feedback"&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-feedback"&gt;
        &lt;label for="rightIcon3" class="col-sm-2 control-label"&gt;&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;input type="text" class="form-control input-sm" id="rightIcon3" placeholder="Right icon + Small input"&gt;
            &lt;span class="glyphicon glyphicon-info-sign form-control-feedback"&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group has-feedback"&gt;
        &lt;label for="rightIcon4" class="col-sm-2 control-label"&gt;&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;textarea class="form-control" id="rightIcon4" placeholder="Textarea with right icon" rows="5"&gt;&lt;/textarea&gt;
            &lt;span class="glyphicon glyphicon-comment form-control-feedback"&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-8 col-md-offset-2 -->
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.container-fluid -->
                        </section>
                        <!-- /.section -->

                    </div>
                    <!-- /.main-page -->

                    <div class="right-sidebar bg-white fixed-sidebar">
                        <div class="sidebar-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Useful Sidebar <i class="fa fa-times close-icon"></i></h4>
                                        <p>Code for help is added within the main page. Check for code below the example.</p>
                                        <p>You can use this sidebar to help your end-users. You can enter any HTML in this sidebar.</p>
                                        <p>This sidebar can be a 'fixed to top' or you can unpin it to scroll with main page.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <!-- /.col-md-12 -->

                                    <div class="text-center mt-20">
                                        <button type="button" class="btn btn-success btn-labeled">Purchase Now<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                    </div>
                                    <!-- /.text-center -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.sidebar-content -->
                    </div>
                    <!-- /.right-sidebar -->

                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
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

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>



        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
