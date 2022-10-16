<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .title {
            font-family: 'arial rounded Mt';
            text-align: center;
            color: black;
            font-size: 3em;
        }

        .nav {
            /* Auto layout */

            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 10px;
            

            position: relative;
            height: 30px;

            /* Base Colors/pop black/500 */

  
            float: right;
        }

        body {

            background-image: url("bgg.jpg");
            background-repeat: repeat-y;
            background-size: 100%;
        }

        td {

            border-style: solid;

        }

        a {
            text-overflow: scroll;
            font-family: 'arial rounded Mt';
            font-size: 1em;
        }

        a:visited {
            text-decoration: none;
            color: blueviolet;
        }

        a:link {
            color: indigo;
            text-decoration: none;
        }

        a:hover {
            color: red;
        }

        li {
            border: solid 2px black;
            border-radius: 5px;
            padding: 2px;
            display: inline;
            margin-right: 15px;
        }

        img {
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 10px;

        }
    </style>
</head>

<body>

    <div class="title">
        <img src="mainlogo.png" style="height:150px;display:inline;border-radius:50%;">
        RETHINK PLASTIC
    </div>

    <div class="nav">
        <ul>
            <li><a href="login.php" target="here">LOGIN</a></li>
            <li><a href="registration.php" target="here">REGISTER</a></li>
            <li><a href="video.php" target="here">PROJECTS</a></li>
            <li><a href="orgs.php" target="here">DONATE</a></li>
            <li><a href="contact.php" target="here">CONTACT US</a></li>
        </ul>
    </div>
    <div>
        <iframe name="here" src="home.php" height="100%" width="100%"></iframe>
    </div>
</body>

</html>