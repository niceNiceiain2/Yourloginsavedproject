<?php
function db_connect($db){
	$dblink = new mysqli("localhost", "webuser", "xPNdihLYx]UrCuT5", $db);
	return $dblink;
}


function redirect ( $uri )
{  ?>
	  <script type="text/javascript">
	  document.location.href="<?php echo $uri; ?>";
	  </script>
<?php die;
}
?>