<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            align-items: center;
            color: blueviolet;
            font-family: "arial rounded MT";

        }

        button {
            border-radius: 5px;
            width: 210px;
            height: 220px;
            margin: 10px;
            text-align: center;
            font-family: "arial rounded MT";

        }

        a:visited {
            text-decoration: none;
            color: Green;
        }

        a:link {
            color: green;
            text-decoration: none;
        }

        a:hover {
            color: brown;
        }

        .green {
            color: green;
            border-color: green;
        }

        .green:hover {
            color: white;
            background-color: green;
        }

        .red {
            color: red;
            border-color: red;
        }

        .red:hover {
            color: white;
            background-color: red;
        }
        table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
    </style>
    <font face="arial rounded mt">
        <center>
            <h2>Organization</h2>
        </center>
</head>

<body>
    <center>
        <img height="100" width="100" src="org.png" style="border-radius:50px;">
        <h3>Information about organization is here!</h3>

        <div>
         
            <form>
                Search:<input type="text" size="30" onkeyup="showResult(this.value)">
            </form><br>
            <table id="livesearch"></table>
            <script>
                function showResult(str) {
                    if (str.length == 0) {
                        document.getElementById("livesearch").innerHTML = "";
                        return;
                    }
                    var xhr = new XMLHttpRequest();
                    xhr.open("post", "livedata.php", true);
                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                    xhr.send("q=" + str);

                    xhr.onload = function() {
                        document.getElementById("livesearch").innerHTML = this.responseText;
                        
                    }


                }
            </script>
            <div>
                <button><img src="HI_Touch.png" height="120px"/><br><a href="https://hi-touch-plastic.business.site/">Hi Touch Plastic A Pet Bottle Recycling Co. (Timbdi)</a></button>
                <button><img src="greenotech.png" height="120px" /><br><a href="http://greenotechindia.com/plasticrecycling.html">Green O Tech India One step towards Waste to Wealth (New Delhi)</a></button>
                <button><img src="skrap.png" height="120px" /><br><a href="https://www.skrap.in/key-projects">Skrap Waste Management (Mumbai)</a></button>
                <button><img src="vital.png" height="120px" /><br><a href="http://vitalwaste.com/">Vital Waste OUR WASTE IS TOO PRECIOUS TO WASTE (Kolkata)</a></button>
                <button><img src="sahas.png" height="120px" /><br><a href="https://saahaszerowaste.com/">Saahas Waste Management(Banglore)</a></button>
                <button><img src="plfc.png" height="120px" /><br><a href="https://www.plasticsforchange.org/">Plastics For Change Changing Lives through Recycling (</a></button>
                <button><img src="banyannation.png" height="120px" /><br><a target="_blank" href="https://www.banyannation.com/">Banyan Nation (Hyderabad)</a></button>
                <button><img src="gemeryclycline.png" height="120px" /><br><a href="https://gemrecycling.com/">Gemrecycling </a></button>
                <button><img src="shakti.png" height="120px" /><br><a href="https://www.shaktiplasticinds.com/">The Shakti plastic industries Turning waste to value (Mumbai)</a></button>
                <button><img src="srichakra.png" width="130px" height="120px" /><br><a href="https://www.srichakra.in/">Srichakra Polyplast (Telangana)</a></button>
                <button><img src="ecowise.jpg" height="120px" /><br><a href="https://www.ecowise.net.in//">Eco-Wise (Noida)</a></button>
                <button><img src="NIPRA.jpg" height="120px" /><br><a href="https://www.letsrecycle.in/">Nepra (Ahemdabad)</a></button>
                <button><img src="PAPERMAN.jpg" height="120px" /><br><a href="http://www.papermanfoundation.org/">Paperman Foundation (Chennai)</a></button>
                <button><img src="synergy.jpg" height="120px" /><br><a href="https://synergywastemgmt.com/">Synergy Group (New Delhi)</a></button>
                <button><img src="LUCRO.jpg" height="120px" /><br><a href="http://www.lucro.in/">Lucro (Mumbai) </a></button><br>
            </div>   
        </div>
    </center>
</body>

</html>