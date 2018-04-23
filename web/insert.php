<?php

try {
    $myPDO = new PDO('pgsql:host=192.168.99.100;dbname=guests', 'admin', 'admin123');
	$myPDO->query("insert into guestlist values (1, '$_POST[guestname]')");
	echo '<script type="text/javascript">location.href = "index.php";</script>';
    $myPDO = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?> 
