<?php
namespace DashboardDB;
session_start();
if(!isset($_SESSION['logged_in'])) {
    header("Location: LogIn page-3/LogIn.php");exit;
}
require_once 'DB/users.php';

$users = new Users();
$user = $users->retreiveAttribute($_SESSION['logged_in']);
// var_dump($user);exit;

$image = $user['image'];
$position = $user['position'];
$fullname = $user['fullname'];
$userid = $user['id'];
$role = $user['role'];


$phpSelf = $_SERVER["PHP_SELF"];
$phpSelfElements = explode("/", $phpSelf);
$scriptName = $phpSelfElements [count($phpSelfElements) - 1];
//var_dump($scriptName);exit;

if($scriptName == 'manage-users.php' && $role != 'Administrator'){
    header("Location: home.php");exit;
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

    <!-- Load c3.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css'>

	<!-- FontAwesome CSS -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css"> 

	<!-- Bootsrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" <?php if($scriptName == "uielements.php"){echo "href='css/alert-style.css'";} if($scriptName == "hor-timeline.php"){echo "href='css/style-horizontal-timelne.css'";}
    ?>>

    <?php 

        if($scriptName == "timeline.php"){
            echo '
                <link rel="stylesheet" href="./Timeline/css/style.css">
                <link rel="stylesheet" href="./Timeline/css/timelify.css">
                <link href="./Timeline/css/font-awesome.min.css" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="./Timeline/css/style.css">';
        }


     ?>

    <style>
        .chart1 {
            width: 100%;
            min-height: 420px;
        }

        .user-profile-details img{
            height: 100px;
        }

       <?php 
       if($scriptName == "manage-users.php"){
        echo '.users input, textarea{
                     width: 100%;
                     height:auto;
                     border-bottom: none;
                     text-align: center;
                }
                th{
                    text-align: center;
                }
                .btn{
                    padding: 2px 5px;
                    border-width: 1px;
            
                }

                .disabled{
                    cursor: not-allowed;
                }

                .has-success{
                   background-color: rgba(154, 200, 54, 0.48);
                   border-color: #9AC836;
                }

                .has-error{
                    background-color: rgba(252, 67, 73, 0.45);
                    border-color: #FC4349;
                }


                .formContainer{
                    width: 70%;
                    float: left;
                    padding: 10px 0;
                    
                }

                .cancel-group{
                  width: 30%;
                  text-align: center;
                  float: left;
                  padding-top: 20px ;

                }
                .cancel-group h3{
                    margin-bottom: 40px;
                }
                .cancel-group .fa{
                    font-size: 8em;
                    background-color: #fff;
                    box-shadow: 2px 2px 5px rgba(0,0,0,0.3), -2px 2px 5px rgba(0,0,0,0.3);
                    border-radius: 50%;
                    padding: 10px;
                }

                .table-bordered > tbody > tr > td{
                    text-align: center;
                }

                

                .editable{
                    color:#77c4d3;
                }

                .editable:hover, .editable:hover input{
                    
                    background-color: #f4f4f4;
                    
                }

                
                ';
            }

       if($scriptName == "charts.php"){
        echo '.chart, .chart1 , .chart2, .chart3{
                    width: 100%;
                     min-height: 230px;
                }';
            }

        if($scriptName == "forms.php"){
            echo '.panel-h {
            height: 500px;
            }';
        }

        if($scriptName == "grid.php"){
            echo ' *{
                        margin: 0;
                        padding: 0;
                    }
                        html, body{
                        height: 100%;
                    }
                    .row{
                        margin: 10px 0px;
                    }
                    .col{
                        border: 1px solid #fff;
                        text-align: center;
                        box-sizing: border-box;
                        border-radius: 2px;
                        background-color: #e0e0e0;
                        display: table;
                    }

                    .col > p {
                        display: table-cell;
                        vertical-align: middle;
                        margin: 10px 0px;
                        padding: 10px 0;
                    }

                    .panel{
                        width: 100%;
                    }';
        }

        if($scriptName == "profile.php"){
           echo '.invisible{
                display: none;

           }

           input[type=file]{
                    color: #333;
                    width: 100%;
                    background: transparent;
                    outline: none;
                    border: none;
                }

            .text-center h6{
                padding: 5px;
                font-size: 14px;
                font-weight: 600;
            }

            .image-holder{
                width: 255px;
                height: 319px;
                background-image: url("LogIn page-3/Images/'.$image.'");
                background-repeat: no-repeat; 
                background-position: center center;
                background-size: cover;
                         }


            .reqired-field{
                color: #ea2e49;
            }

            .form-group{
                text-align: center;
            }

            .text-center{
                text-align: center;
            }
            .image-holder{
                margin: 0 auto;
            }

           ' ;
        }

       ?> 
    </style>
</head>
<body>
<!-- Wrapper Start -->
	<div id="wrapper">
		<!-- Navigation bar start -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
		    <!-- Navigation Header -->
			<div class="navbar-header">
                <button id="button-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.html">LOGO Here</a>
            </div>
            <ul class="nav navbar-top-links navbar-left">
                <li>
                    <a href="#" id="menu-toggle">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </a>
                </li>
            </ul> 
            <!-- Navigation Header End -->
            
            <ul class="nav navbar-top-links navbar-right">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search..."><span class="input-group-btn">
                            <button class="btn" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-envelope fa-fw"><span class="badge">10</span></i>
                    </a>            
                </li>
                <li >
                    <a href="#">
                        <i class="fa fa-bell fa-fw"><span class="badge">2</span></i>
                    </a>
                </li>   
                <li style="border-left: 1px solid white; ">
                    
                </li>             
                <li >
                    <a href="LogIn page-3/LogOut.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                    </a>
                </li> 
            </ul>
            
            <!-- /.navbar-top-links -->
            <div  id="sidebarid" class="navbar-default sidebar" role="navigation">
                <div id="menu-down" class="sidebar-nav navbar-collapse" style="  background-image: url(img/sidebar-bg.jpg); background-size: 500px;  background-repeat: no-repeat;">
                    <ul class="nav in" id="side-menu">
                        <li class="user-profile">
                        	<!-- User profile -->
                            <div class="user-profile-details">
                               
                               <img src="<?php echo 'LogIn page-3/Images/'.$image; ?>" class="img-circle img-responsive" >
                               <h4><?php echo $fullname; ?></h4>
                               <p> <?php echo $position; ?></p>
    
                            </div>
                            <!-- /user profile -->
                        </li>
                        <li>
                        <a href="home.php" <?php if($scriptName == "home.php"){echo 'class="active"';}?>><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <?php 
                            if($role == 'Administrator'){
                                $className = ($scriptName == "manage-users.php") ? 'class="active"' : '';
                                echo '
                        <li>
                        <a href="manage-users.php" '.$className. '><i class="fa fa-users fa-fw"></i> Manage users</a>
                        </li>';
                        }
                        ?>
                        <li>
                            <a href="profile.php" <?php if($scriptName == "profile.php"){echo 'class="active"';}?>><i class="fa fa-user-o fa-fw"></i> Profile</a>
                        </li>
                        <li>
                            <a href="charts.php" <?php if($scriptName == "charts.php"){echo 'class="active"';}?>><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a>
                        </li>
                        <li>
                            <a href="tables.php" <?php if($scriptName == "tables.php"){echo 'class="active"';}?>><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li class="dropdown-list-element">
                            <a href="#"><i class="fa fa-hourglass fa-fw"></i> Timelines <i style="float: right" class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="nav nav-second-level">
                                <li>   
                                    <a href="timeline.php" <?php if($scriptName == "timeline.php"){echo 'class="active"';}?>>Vertical timeline</a>
                                </li>
                                <li>
                                    <a href="hor-timeline.php" <?php if($scriptName == "hor-timeline.php"){echo 'class="active"';}?>>Horizontal timeline</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="forms.php" <?php if($scriptName == "forms.php"){echo 'class="active"';}?>><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li class="dropdown-list-element">
                            <a href="uielements.php" <?php if($scriptName == "uielements.php"){echo 'class="active"';}?>><i class="fa fa-wrench fa-fw"></i> UI Elements</a>
                        </li>
                        <li class="dropdown-list-element">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages <i style="float: right" class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="./LogIn%20page-3/LogIn.php" <?php if($scriptName == "LogIn.php"){echo 'class="active"';}?>>Login Page</a>
                                </li>
                                <li>
                                    <a href="grid.php" <?php if($scriptName == "grid.php"){echo 'class="active"';}?>>Grid Page</a>
                                </li>
                                <li>
                                	<a href="./Calendar/evtcalendar." <?php if($scriptName == "evtcalendar.php"){echo 'class="active"';}?>>Calendar</a>
                                </li>
                                <li>
                                	<a href="./404error/error404.php" <?php if($scriptName == "error404.php"){echo 'class="active"';}?>>404 Error Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
		</nav>