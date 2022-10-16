<html>
    <head>
       <center>R E G I S T E R E D</center>
        <style>
            *{
                font-family:'arial rounded mt';
            }
            div{
                border:black 1px solid;
                height:fit-content;
                width:50%;

            }
            p{
                display:inline;
                margin:10px;
                background:yellow;
            }
            </style>
            
    </head>
    <body>
        <?php
        
        $conn=mysqli_connect("localhost","root","","userdata");
        if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
        $name=$_REQUEST['name'];
        $contact=$_REQUEST['contact'];
        $email=$_REQUEST['email'];
        $gender=$_REQUEST['gender'];
        $city=$_REQUEST['city'];
        $us=$_REQUEST['user'];
        $ps=$_REQUEST['pass'];
        $a="INSERT INTO info VALUES('$name','$contact','$email','$gender','$city','$us','$ps')";
        $d=mysqli_query($conn,$a);	
        header('location:login.php');	
        ?>
      
        <a href="home.html" target="here"><button>H O M E</button></a>
    </body>
    
</html>