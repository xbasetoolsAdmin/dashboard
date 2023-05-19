


<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>

    <div class="alert alert-info text-left" role="alert" style="margin: 15px;">
        <ul>
            <li> Click on check button before buy any RDP to know if it's work or not.</li>
            <li>There is <b> 0 </b> RDPs Available.</li>
        </ul>
    </div>


  <ul class="nav nav-tabs">
  <li class="active"><a href="#filter" data-toggle="tab">Filter</a></li>
</ul>
<div id="myTabContent" class="tab-content" >
  <div class="tab-pane active in" id="filter"><table class="table"><thead><tr><th>Country</th>
<th>Windows Type</th>
<th>Access</th>
<th>Detected Hosting</th>
<th>Seller</th>
<th></th></tr></thead><tbody><tr><td><select class='filterselect form-control input-sm' name="rdp_country"><option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`country`) FROM `rdps` WHERE `sold` = '0' ORDER BY country ASC");
	while($row = mysqli_fetch_assoc($query)){
	echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
	}
?>
</select></td><td><select class='filterselect form-control input-sm' name="rdp_windows">
<option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`windows`) FROM `rdps` WHERE `sold` = '0' ORDER BY windows ASC");
	while($row = mysqli_fetch_assoc($query)){
	echo '<option value="'.$row['windows'].'">'.$row['windows'].'</option>';
	}
?>
</td>
<td><select class='filterselect form-control input-sm' name="rdp_access"><option value="">ALL</option><option value="ADMIN">ADMIN</option><option value="USER">USER</option></select></td><td><input class='filterinput form-control input-sm' name="rdp_hosting" size='3'></td><td><select class='filterselect form-control input-sm' name="rdp_seller"><option value="">ALL</option>
<?php
$query = mysqli_query($dbcon, "SELECT DISTINCT(`resseller`) FROM `rdps` WHERE `sold` = '0' ORDER BY resseller ASC");
	while($row = mysqli_fetch_assoc($query)){
		 $qer = mysqli_query($dbcon, "SELECT DISTINCT(`id`) FROM resseller WHERE username='".$row['resseller']."' ORDER BY id ASC")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
	echo '<option value="'.$SellerNick.'">'.$SellerNick.'</option>';
	}
?>
</select></td><td><button id='filterbutton'class="btn btn-primary btn-sm" disabled>Filter <span class="glyphicon glyphicon-filter"></span></button></td></tr></tbody></table></div>
</div>



    <div class="row m-2 pt-3" style="color: var(--font-color); background-color: var(--color-card);">
        <div class="col-sm-12 table-responsive" id="mainDiv">
            <table id="rdp_data" class="display responsive table-hover" style="width:100%" style="color: var(--font-color); background-color: var(--color-card);">
               <thead>
		  <tr>
      <th scope="col" >Country</th>
      <th scope="col" >State</th>
      <th scope="col" >Windows</th>
      <th scope="col" >Ram</th>
      <th scope="col">Access</th>
      <th scope="col">Detect Hosting</th>
      <th scope="col">Seller</th>
      <th scope="col">Price</th>
      <th scope="col">Added on </th>
      <th scope="col">Buy</th>
    </tr>
</thead>
