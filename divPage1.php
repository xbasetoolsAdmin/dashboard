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



<table width="100%"  class="table table-striped table-bordered table-condensed sticky-header" id="table">
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
  <tbody>
 <?php
include("cr.php");
$q = mysqli_query($dbcon,"SELECT * FROM accounts WHERE sold='0' ORDER BY RAND()")or die(mysql_error());					
	while($row = mysqli_fetch_assoc($q)){
	 	 $countryfullname = $row['country'];
		 $code = array_search("$countryfullname", $countrycodes);
		 $countrycode = strtolower($code);
	 	 $tld = end(explode(".", parse_url($row['url'], PHP_URL_HOST))); 
		 $qer = mysqli_query($dbcon, "SELECT * FROM resseller WHERE username='".$row['resseller']."'")or die(mysql_error());
		   while($rpw = mysqli_fetch_assoc($qer))
			 $SellerNick = "seller".$rpw["id"]."";
     echo "
 <tr>    
    <td id='rdp_country'><i class='flag-icon flag-icon-$countrycode'></i>&nbsp;".htmlspecialchars($row['country'])." </td>
    <td> ".htmlspecialchars($row['city'])." </td>
    <td id='rdp_windows'> ".htmlspecialchars($row['windows'])." </td>
    <td> ".htmlspecialchars($row['ram'])." </td>
    <td id='rdp_access'> ".htmlspecialchars($row['access'])." </td>
    <td id='rdp_hosting'> ".htmlspecialchars($row['hosting'])."</td>
    <td id='rdp_seller'> ".htmlspecialchars($SellerNick)."</td>
    <td> ".htmlspecialchars($row['price'])."</td>
	    <td> ".htmlspecialchars($row['date'])."</td>
    <td>";
    echo '
	<span id="rdp'.$row['id'].'" title="buy" type="cpanel"><a onclick="javascript:buythistool('.$row['id'].')" class="btn btn-primary btn-xs"><font color=white>Buy</font></a></span><center>
    </td>
            </tr>
     ';
 }

 ?>
      </tbody>
</table>
</div>