<?php 

// include "config.php";

// if ($_SESSION['admin']) {
 ?>

<hr />
<!-- atas -->
<div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">120 New</p>
                    <p class="text-muted">Messages</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">30 Tasks</p>
                    <p class="text-muted">Remaining</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">240 New</p>
                    <p class="text-muted">Notifications</p>
                </div>
             </div>
		     </div>
			</div>
            <!-- chart -->
            <div class="col-md-6 col-sm-12 col-xs-12">                     
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Bar Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-bar-chart"></div>
                    </div>
                </div>            
            </div>


                
                <!-- fix -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue">
                                <i class="fa fa-warning"></i>
                            </span>
                            <div class="text-box" >
                                <p class="main-text">52 Important Issues to Fix </p>
                                <p class="text-muted">Please fix these issues to work smooth</p>
                                <p class="text-muted">Time Left: 30 mins</p>
                                <hr />
                                <p class="text-muted">
                                      <span class="text-muted color-bottom-txt"><i class="fa fa-edit"></i>
                                           Tolong update data dijadwalkan 
                                      </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

<hr />
                <div class="row" style="margin-left: 10px; margin-right: 10px;">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Info Panel
                            </div>
                            <div class="panel-body">
                                <p>Maintenance setiap hari minggu pukul 00.00</p>
                            </div>
                            <div class="panel-footer">
                            </div>
                        </div>
                    </div>
                </div>
<?php 
// }else {
  // header("location:login.php");
// }

 ?>