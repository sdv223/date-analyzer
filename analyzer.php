<!-- 
03/17/2016
AUTHOR: SEBASTIAN VELASQUEZ
 Note: included the css provided by instructor
Lab Practicum 1- analyzer.php
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Date Duration Analyzer</title>
        <link rel="stylesheet" type="text/css" href="prac1style.css"/>
    </head>
<body>
<div class="header">
        	Duration between Dates Meter
</div>
<?php
date_default_timezone_set('America/New_York');


function seconds($secs)
{
    $arr = array('d' => $secs / 86400);
    foreach($arr as $k => $v){
          return floor($v);
          $sl = strlen(floor($v));
          for ($u=0;$u<$sl;$u++){
              echo $f = substr($v,$u,1). '<br />';
              for($w=0;$w<$f;$w++){
                  echo "<div class=\"bx\">";
                  echo "</div>";
              }
          }
    }
}





function box($secs)
{
    $arr = array('d' => $secs / 86400);
    foreach($arr as $k => $v){
          $sl = strlen(floor($v));
          for ($u=0;$u<$sl;$u++){
              echo $f = substr($v,$u,1). '<br />';
              for($w=0;$w<$f;$w++){
				 
                  echo "<div class=\"bx\">";
                  echo "</div>";
				  
              }
          }
    }
}




//$t = 750850000;// 5 days => seconds
//echo days_diff_in_seconds($t);

//echo date('l M m, Y',$t);

?>

<?php
if (isset($_POST['Submit']))
{
  $smonth = $_POST['startingmonth'];
  $sday = $_POST['startingday'];
  $syear = $_POST['startingyear'];

  $emonth = $_POST['endingmonth'];
  $eday = $_POST['endingday'];
  $eyear = $_POST['endingyear'];

  $sdate = mktime(0,0,0,$smonth,$sday,$syear);
  $edate = mktime(0,0,0,$emonth,$eday,$eyear);
  
  $res = $edate - $sdate;


?>

<div class="body">
	<?php  
	
	box($res);
	
	
	
	?>
</div>
<div class='footer'>
	<?php
echo "There are " . seconds($res) . " days between " .  date("l, F j, Y ",mktime(0,0,0,$smonth,$sday,$syear)) . " and " . date("l, F j, Y ",mktime(0,0,0,$emonth,$eday,$eyear));}
	?>
	
</div>
<div class="f">
<?php echo "Last modified: " . date("H:i M j, Y T ", getlastmod()) . "<a href=\"index.html\">Return to home page</a>" ;?>
</div>
</body>
</html>