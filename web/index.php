<!DOCTYPE html>
<html>
<body>

<h1>RedCarpet Guest List</h1>

<?php

$guestname = $_POST['guestname'];
echo "It will really be a great pleasure to have your warm presence at the venue. We will be honored if you come to our party and our party will become more delighted with your auspicious presence.";

//$dbconn = pg_connect("host=192.168.99.100 port=5432 dbname=guests user=admin password=admin123");
//print_r(pg_version($dbconn));

//$myPDO = new PDO('pgsql:host=192.168.99.100;dbname=guests', 'admin', 'admin123');
//$result = $myPDO->query("select * from guestlist");
//echo $result;


echo "<h2>Enter Your Name in the Guest List-</h2>";
echo '<form name="insert" action="insert.php" method="POST" >
	Enter Your Name:<input type="text" name="guestname" />
	<input type="submit" />';
	
echo "<h2>Guest List-</h2>";
try {
    $myPDO = new PDO('pgsql:host=192.168.99.100;dbname=guests', 'admin', 'admin123');
	$no=1;
    foreach($myPDO->query("select * from guestlist") as $row) {
		echo $no . ". ";
		echo $row['name'];
		echo "<br>";
		$no++;
    }
    $myPDO = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?> 

</body>
</html>