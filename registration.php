<html>

<head>
    <font face="arial rounded mt">
        <h2>Registration</h2>
        <style>
            body {
                align-items: center;

                color: rgb(0, 8, 82);
                display: flex;
                font-family: "arial rounded MT";
                justify-content: center;
            }

            input {
                height: 30px;
                width: 200px;
                margin-bottom: 10px;

            }

            .btn {
                height: 35px;
                width: 180px;
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



</head>

<body>
    <h3>


        <form action="insert.php" method="post">
        <div>
            Enter Name:<input class="btn" placeholder="name" name="name"><br>
            Enter Contact no:<input class="btn" type="number" placeholder="Mobile number" name="contact"><br>
            Email:<input class="btn" name="email"><br>
            Gender: <input style="height:10px;width:10px" type="radio" name="gender" id="input1" value="M">Male
            <input style="height:10px;width:10px;margin-left: 30px;" type="radio" name="gender" value="F">Female<br><br>
            Enter City:<Label class="btn" for="city"></label>
            <select class="btn" name="city">
                <option>select</option>
                <option>Ahemdabad</option>
                <option>Banaskatha</option>
                <option>Delhi</option>
                <option>Pune</option>
                <option>Surat</option>
                <option>Vadodara</option>
                <option>Mumbai</option>
                <option>Banglore</option>
                <option>Dehradun</option>
            </select><br><br>
            Username:<input name="user"><br><br>
            Password:<input type="password" name="pass"><br>
            <input class="btn yellow" type="reset"><br>
            <input class="btn yellow" type="submit">
        </div>
        </form>

    </h3>
</body>

</html>