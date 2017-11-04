<?php 

include "templates/header.php";

 ?>

		<!-- Page container -->
		<div id="page-wrapper" class="page-wrapper" >
		<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-md-12">
                  <div class="box box-primary">
                    <div class="box-header">
                      <h3 class="box-title">Buttons</h3>
                      <hr class="hr-small">
                    </div>
                    <div class="box-body pad table-responsive">
                      <p>Various types of buttons. Using the base class <code>.btn</code></p>
                      <table class="table table-bordered text-center table-btn">
                      <!-- Various types of buttons -->
                        <tbody><tr>
                          <th>Normal</th>
                          <th>No Background</th>
                          <th>Large <code>.btn-lg</code></th>
                          <th>Small <code>.btn-sm</code></th>
                          <th>X-Small <code>.btn-xs</code></th>
                          <th>Disabled <code>.disabled</code></th>
                        </tr>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-block btn-default">Default</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default-no-bg">Default</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default btn-lg">Default</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default btn-sm">Default</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default btn-xs">Default</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-default disabled">Default</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-block btn-primary">Primary</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-primary-no-bg">Primary</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-primary btn-sm">Primary</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-primary btn-xs">Primary</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-primary disabled">Primary</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-block btn-success">Success</button>
                          </td>
                           <td>
                            <button type="button" class="btn btn-block btn-success-no-bg">Success</button>
                          </td>                         
                          <td>
                            <button type="button" class="btn btn-block btn-success btn-lg">Success</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-success btn-sm">Success</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-success btn-xs">Success</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-success disabled">Success</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-block btn-info">Info</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-info-no-bg">Info</button>
                          </td>                          
                          <td>
                            <button type="button" class="btn btn-block btn-info btn-lg">Info</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-info btn-sm">Info</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-info btn-xs">Info</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-info disabled">Info</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-block btn-danger">Danger</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-danger-no-bg">Danger</button>
                          </td>                          
                          <td>
                            <button type="button" class="btn btn-block btn-danger btn-lg">Danger</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-danger btn-sm">Danger</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-danger btn-xs">Danger</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-danger disabled">Danger</button>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <button type="button" class="btn btn-block btn-warning">Warning</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-warning-no-bg">Warning</button>
                          </td>                          
                          <td>
                            <button type="button" class="btn btn-block btn-warning btn-lg">Warning</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-warning btn-sm">Warning</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-warning btn-xs">Warning</button>
                          </td>
                          <td>
                            <button type="button" class="btn btn-block btn-warning disabled">Warning</button>
                          </td>
                        </tr>
                      </tbody></table>
                    </div>
                  </div>
                </div>
            </div>

            <!-- Buttons color -->
            <div class="row">
                <div class="col-md-12">
                      <div class="panel panel-light-blue">
                          <div class="panel-heading">
                              <h3>Button Colors</h3>
                          </div>
                          <div class="panel-body" style="background-color: rgb(245, 245, 245)">
                          <div class="content-body">
                              <div class="row btn-colors">
                                  <div class="col-md-12">
                                        <button type="button" class="btn btn-default">Default</button>
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                  </div>
                              </div>
                          </div>
                          </div>
                          </div>
                      </div>
            </div>

            <div class="row">

                    <div class="box-header">
                        <h3 class="box-title">Notifications</h3>
                        <hr class="hr-small">
                    </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="panel panel-light-blue">
                        <div class="panel-heading">
                            <h3>Alert Styles</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alerts">
                                <div class="success-update notice">
                                    <p>Something has been successful.</p>
                                </div>
                                <div class="updated notice">
                                    <p>Something has been updated.</p>
                                </div>
                                <div class="error notice">
                                    <p>There has been an error.</p>
                                </div>
                                <div class="update notice">
                                    <p>Your profile hasn't been updated for X days.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="panel panel-light-blue">
                        <div class="panel-heading">
                            <h3>Dismissable Alerts</h3>
                        </div>
                        <div class="panel-body">
                            <div class="alerts">
                                <div class="success-update notice disable" id="hide">
                                    <p>Something has been successful.</p>
                                    <div class="close">
                                        <a href="#" class="remove">
                                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            
                                <div class="updated notice disable">
                                    <p>Something has been updated.</p>
                                    <div class="close">
                                        <a href="#" class="remove">
                                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="error notice disable">
                                    <p>There has been an error.</p>

                                    <div class="close">
                                        <a href="#" class="remove">
                                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <div class="update notice disable">
                                    <p>Your profile hasn't been updated for X days.</p>
                                    <div class="close">
                                        <a href="#" class="remove">
                                            <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                          
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
		</div>
	</div>
            <div class="row">

                <div class="box-header">
                    <h3 class="box-title">Panels</h3>
                    <hr class="hr-small">
                </div>
                <div class="pannel-parent sortable"> 
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="panel panel-light-blue">
                        <div class="panel-heading">
                            Light Blue Panel
                        </div>
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="panel panel-magenta">
                        <div class="panel-heading"> Magenta Panel</div>
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="panel panel-pastel-green">
                        <div class="panel-heading">Pastel Green Panel</div>
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="panel panel-light-yellow">
                        <div class="panel-heading"> Light Yellow Panel</div>
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.
                        </div>
                    </div>
                </div>
             </div>     
            </div>
<!-- Wrapper End -->
	
	<!-- JS Scripts -->
	<?php 
include  "templates/footer.php";


   ?>

     $( function() {

    $(".remove").on( "click", function(e) {
      e.preventDefault();
    
    $(this).parents(".notice").hide("drop", 1000);


    }); }); 
     
    
  </script>
</body>
</html>