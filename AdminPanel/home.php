<?php 
namespace DashboardDB;
include "templates/header.php";
require_once "DB/element_order.php";
$display = new Order();



 ?>

		<!-- Page container -->
		<div id="page-wrapper" class="page-wrapper">
		<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>

            <div class="row sortable" id="order-items">
               <?php echo $display->listItems($userid); ?>
            </div>
            <div class="row sortable">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="panel panel-pastel-green">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="pull-right text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-warning-no-bg btn-block">View All Alerts</a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-lg-12">

                        <div class="panel panel-magenta">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Chart Example
                            </div>
                            <div class="panel-body">
                                <svg class="chart1"></svg>
                            </div>
                        </div>

                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-light-blue">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Progress Bars
                        </div>
                        <div class="panel-body">
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                    40% Complete (success)
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    50% Complete (info)
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    60% Complete (warning)
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    70% Complete (danger)
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
<!-- Wrapper End -->

<!-- JS Scripts -->
<?php 
include "templates/footer.php";

 ?>
       
 


  </script>
</body>
</html>