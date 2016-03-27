<?php
date_default_timezone_set('Asia/Manila');
$date = strtotime(date("Y-m-d"));

$day = date('d', $date);
$month = date('m', $date);
$year = date('Y', $date);
$firstDay = mktime(0,0,0,$month, 1, $year);
$title = strftime('%B', $firstDay);
$dayOfWeek = date('D', $firstDay);
$daysInMonth = cal_days_in_month(0, $month, $year);
/* Get the name of the week days */
$timestamp = strtotime('next Sunday');
$weekDays = array();
for ($i = 0; $i < 7; $i++) {
	$weekDays[] = strftime('%a', $timestamp);
	$timestamp = strtotime('+1 day', $timestamp);
}
$blank = date('w', strtotime("{$year}-{$month}-01"));
?><!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>USC ECE Energy Tracker</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="css/templatemo_main.css">
  <style>
	li > ul > li{
		padding-left:35px;
	}
  </style>
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation" >
      <div class="navbar-header">
        <div class="logo"><h1>University of San Carlos - Energy Tracker 2016</h1></div>
        
      </div>   
	  <div class="pull-right" style='color:#fff; padding-top:10px; margin:0px 5%; float:right !important;'><span class="glyphicon glyphicon-time"><span> Server Time: </span><span class="this-time"><?php echo date("h:i:s a");?></span>
		</div>
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li style='text-align:center;margin-bottom:15px;'>
			<img src='img/usc_clean.png' style='width:50%;'>
          </li>
          <li class=""><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-flash"></i> Node Tracking <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="third.php">Third Floor</a></li>
              <li><a href="fourth.php">Fourth Floor</a></li>
              <li><a href="fifth.php">Fifth Floor</a></li>
            </ul>
          </li>
          <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-calendar"></i> Daily History <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="third_history.php">Third Floor</a></li>
              <!--<li><a href="#">Fourth Floor</a></li>
              <li><a href="#">Fifth Floor</a></li>-->
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-table"></i> Tabular Data <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="table_third.php">Third Floor</a></li>
              <!--<li><a href="table_fourth.php">Fourth Floor</a></li>
              <li><a href="table_fifth.php">Fifth Floor</a></li>-->
            </ul>
          </li>
		  <li class="sub">
            <a href="javascript:;">
              <i class="fa fa-question-circle"></i> About Project <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="abstract.php"><i class="fa fa-file"></i> Abstract</a></li>
					<li class="sub">
						<a href="javascript:;">
						  <i class="fa fa-align-justify"></i> Methodology <div class="pull-right"><span class="caret"></span></div>
						</a>
						<ul class="templatemo-submenu">
						  <li><a href="components.php">Components</a></li>
						</ul>
					</li>
              <li><a href="team.php"><i class="fa fa-users"></i> Our Team</a></li>
            </ul>
          </li>
		  <li><a href="signout.php"><i class="fa fa-sign-out"></i>Sign-Out</a></li>
          <!--<li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign Out</a></li>-->
        </ul>
<table class='table table-bordered' style="table-layout: fixed;">
	<tr>
		<th colspan="7" class="text-center"> <?php echo $title ?> <?php echo $year ?> </th>
	</tr>
	<tr>
		<?php foreach($weekDays as $key => $weekDay) : ?>
			<td class="text-center"><?php echo $weekDay ?></td>
		<?php endforeach ?>
	</tr>
	<tr>
		<?php for($i = 0; $i < $blank; $i++): ?>
			<td></td>
		<?php endfor; ?>
		<?php for($i = 1; $i <= $daysInMonth; $i++): ?>
			<?php if($day == $i): ?>
				<td style='background-color:rgb(149,206,255); color:#fff; text-shadow: 0 0 3px black;'><strong><?php echo $i ?></strong></td>
			<?php else: ?>
				<td><?php echo $i ?></td>
			<?php endif; ?>
			<?php if(($i + $blank) % 7 == 0): ?>
				</tr><tr>
			<?php endif; ?>
		<?php endfor; ?>
		<?php for($i = 0; ($i + $blank + $daysInMonth) % 7 != 0; $i++): ?>
			<td></td>
		<?php endfor; ?>
	</tr>
</table>
      </div><!--/.navbar-collapse -->
