<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            color: blueviolet;

            font-family: "arial rounded MT";

        }

        button {
            border-radius: 5px;
            width: 40%;
            height: 210px;
            margin: 10px;
            text-align: center;
            font-family: "Arial rounded MT";

        }

        a:visited {

            color: white;
        }

        a:link {
            color: white
        }

        a:hover {
            color: white;
        }
    </style>
    <font face="arial rounded mt">
        <h2>
            <center>CART</center>
        </h2>
</head>

<body>
    <center>
        <img height="20" width="20" src="cart.jpg">
        <h2>Your selected organization!</h2>
    </center>
    <center>
        <form>
            <button>Wishlist
                <iframe src="books.php" height="100px">organization added to wishlist</iframe>
            </button>
            <button>organization added to cart
                <iframe src="books.php" height="100px">organization</iframe>
            </button>
            <br>
            <button style="background-color: red;height: 50px;width:100px; color:white" type="submit"><a
                    href="payment.html">PROCEED TO PAY</a></button>
        </form>
    </center>
</body>

</html>