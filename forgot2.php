<html>
    <body>

<?php
        
        $conn=mysqli_connect("localhost","root","","userdata");
        if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
        $npass=$_REQUEST['npass'];
        $user=$_REQUEST['requser'];
        $s="UPDATE info SET password='$npass' WHERE username='$user'";
        mysqli_query($conn,$s);
?>
    </body>
</html>