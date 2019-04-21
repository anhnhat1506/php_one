<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Trang Admin</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>/public/admin/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
        <link href="<?php echo base_url(); ?>/public/admin/css/sb-admin.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>/public/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="navbar-toggler hidden-sm-up pull-sm-right" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    &#9776;
                    </button>
                    <a class="navbar-brand" href="index.html">Xin Chào Admin</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-nav top-nav navbar-right pull-xs-right">                    
                    <li class="dropdown nav-item">
                        <!-- <div class="dropdown"> -->
                        <a class="nav-link dropdown-toggle" href="javascript:;" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope"></i> <b class="caret"></b><span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="dropdown-item message-preview">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="media-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-item message-preview">
                                <a href="javascript:;">
                                    <div class="media">
                                        <span class="media-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li class="dropdown-item message-footer">
                                <a href="javascript:;">Read All New Messages</a>
                            </li>
                        </ul>
                        <!-- </div> -->
                    </li>
                    <li class="dropdown nav-item">
                        <!-- <div class="dropdown"> -->
                        <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i> <b class="caret"></b><span class="sr-only">(current)</span></a>
                        <ul class="dropdown-menu alert-dropdown">
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-default"> Alert Badge</span></a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;">Alert Name <span class="label label-primary"> Alert Badge</span></a>
                            </li>
                            
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item">
                                <a href="javascript:;">View All</a>
                            </li>
                        </ul>
                        <!-- </div> -->
                    </li>
                    <li class="dropdown nav-item">
                        <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="javascript:;"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="javascript:;"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown-item">
                                <a href="javascript:;"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-toggleable-sm navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav list-group">
                        <li class="list-group-item">
                            <a href="<?=base_url()?>/admin"><i class="fa fa-fw fa-dashboard"></i> Bảng Điều Khiển</a>
                        </li>
                        <li class="<?php isset($open) && $open =='category' ? 'active' : '' ?>">
                            <a href="<?php echo modules("category") ?>"><i class="fa fa-list"></i> Danh mục sản phẩm</a>
                        </li>                   
                        <li class="<?php isset($open) && $open =='product' ? 'active' : '' ?>">
                            <a href="<?php echo modules("product") ?>"><i class="fa fa-database"></i> Sản phẩm</a>
                        </li>                   
                        <li class="list-group-item">
                            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                        </li>
                        <li class="list-group-item">
                            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                        </li>
                        <li class="list-group-item">
                            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                        </li>
                        <li class="list-group-item">
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="list-group collapse">
                                <li class="list-group-item">
                                    <a href="javascript:;">Dropdown Item</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:;">Dropdown Item</a>
                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                        </li>
                        <li class="list-group-item">
                            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                        </li>
                        <li class="list-group-item more-themes">
                            <a href="http://www.strapui.com/">Buy More Themes</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">