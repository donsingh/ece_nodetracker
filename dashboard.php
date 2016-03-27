<?php
	include("sql_connect.php");
	if(isset($_GET['date'])){
		$today = $_GET['date'];
	}else{
		$today = date("Y-m-d");
	}
	$sql = "SELECT SUM(mote) FROM (SELECT count(DISTINCT(node)) AS mote FROM single_phase UNION SELECT count(DISTINCT(node)) AS mote FROM three_phase)t";
	$result = mysqli_query($mysqli, $sql);
	$sql2= "SELECT SUM(mote) FROM 
			(SELECT SUM(actp) AS mote FROM single_phase WHERE month(date) = month(CURRENT_DATE)
			UNION 
			 SELECT SUM(actpt) AS mote FROM three_phase WHERE month(date) = month(CURRENT_DATE)
			)t";
	$result2 = mysqli_query($mysqli, $sql2);
	$sql3= "SELECT SUM(mote) FROM 
			(SELECT count(indx) AS mote FROM single_phase
			UNION 
			 SELECT count(indx) AS mote FROM three_phase
			)t";
	$result3 = mysqli_query($mysqli, $sql3);
	$cnt=0;
	$pwr=0;
	$rws=0;
	if($result){
		$cnt = mysqli_fetch_row($result);
	}
	if($result2){
		$pwr = mysqli_fetch_row($result2);
	}
	if($result3){
		$rws = mysqli_fetch_row($result3);
	}
	include("menu.php");

	include("footer.php");
?>
<script type='text/javascript' src='js/highstock.js'></script>
<script type='text/javascript' src='js/exporting.js'></script>
<style>
	.btext{
		margin:20px;
	}
	.huge{
		font-size: 40px;
	}
	.panel-yellow{
		border-color: #f0ad4e;
		border-color: #f0ad4e;
		color: #fff;
		background-color: #f0ad4e;
	}
</style>
<div class="templatemo-content-wrapper">
	<div class="templatemo-content">
	  <h1>Dashboard</h1>
	  <p>Welcome!</p>
	  <div class="row btext">
			<div class='row'>
				<div class='col-md-3'>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3 text-center">
                                    <i class="fa fa-tencent-weibo fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $cnt[0];?></div>
                                    <div>Nodes on Record</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"><i class=""></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
					</div>
				</div>
				
				
				<div class='col-md-3'>
					<div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tachometer fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format(($pwr[0]/1000000),2);?></div>
                                    <div>Megawatts this Month</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"><i class=""></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
					</div>
				</div>
				
				
				<div class='col-md-3'>
					<div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-warning fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4</div>
                                    <div>Unresponsive Nodes</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"><i class=""></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
					</div>
				</div>
				
				
				<div class='col-md-3'>
					<div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-database fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo number_format(($rws[0]/1000000),2);?> M</div>
                                    <div>Records on Database</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"><i class=""></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<?php include("current_chart.php");?>
				</div>
			</div>
	  </div>
	</div>
</div>