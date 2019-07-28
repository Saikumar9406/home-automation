<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
</head>
	<meta http-equiv="refresh" content="1">
        <body>
        WEB PAGE ON PHP BASED GPIO Control:
        <form method="get" action="gpio.php">
               
        </form>
        <?php
        
	$myfile = fopen("/home/pi/log.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("/home/pi/log.txt"));
	fclose($myfile);
        ?>
	
        </body>
</html>

