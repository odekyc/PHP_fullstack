<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console
 $url = $_SERVER['REQUEST_URI'];
 
 echo $url;
 
 $date = getdate()[year];
 
 echo $date;

?>
</body>
</html>