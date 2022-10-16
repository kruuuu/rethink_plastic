<html>

<head>

    <style>
        body {
            align-items: center;
            color: indigo;
            font-family: "arial rounded MT";
        }

        h2 {
            font-size: 15px;
        }

        td {
            align-items: center;
            width: 33%;
        }

        a:hover {
            color: red;
        }

        img {
            height: 300px;
        }

        .btn {
            height: 35px;
            width: 160px;
            border-radius: 5px;
            margin: 5px;

            font-family: 'arial rounded mt';
        }

        .yellow {
            color: goldenrod;
            border-color: goldenrod;

        }

        .yellow:hover {
            color: black;
            background-color: goldenrod;
        }
    </style>
    <font face="arial rounded mt">
        <center>
            <h1>Login</h1>
        </center>
</head>

<body>
    <center>
        <h3>
            <center><img src="log.png" style="height: 50px;"></center>
            Login to your account.
            Dont have account? <a href="registration.php">Create</a>
        </h3>
    
    <?php
    if ($_POST) {
        $u = $_POST['un'];
        $p = $_POST['pw'];
        $conn = mysqli_connect("localhost", "root", "", "userdata");
        $query = "SELECT * from info WHERE us='$u' and ps='$p'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            Session_start();
            $_SESSION['auth'] = 'true';
            header('location:orgs.php');
        } else {
            echo 'Wrong username or password';
        }
    }
    ?></center>
    <table width="100%">
        <tr>
            <td></td>
            <td>
                <form method="post">
                    <h2>USERNAME:<input class="btn" type="text" name="un"><br>
                        PASSWORD:<input class="btn" type="password" name="pw">

                    </h2>

                    <button class="btn yellow" type="submit" style="margin-top:10px">LOGIN</button>
                </form>
                <a href="forgot.php"> <button class="btn yellow" type="submit" style="margin-top:10px">FORGOT PASSWORD</button></a>

            </td>
            <td></td>
                

        </tr>
    </table>


</body>

</html>