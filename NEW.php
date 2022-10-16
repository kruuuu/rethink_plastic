
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body bgcolor="pink">

<h2>Register Section</h2>

<div class="container">
  <div style="text-align:center">
    <h2>REGISTER YOUR SELF</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTbekseYBxMXROhWyldKumuA4G3oQzyraHEA&usqp=CAU" style="width:100%">
    </div>
    <div class="column">
      <form action="insert.php" method="post">
        <label for="firstName">First Name</label>
        <input type="text" id="fname" name="FirstName" placeholder="Your name..">
        <label for="lastName">Last Name</label>
        <input type="text" id="lname" name="LastName" placeholder="Your last name..">
        <label for="Gender">Gender</label>
        <select id="text" name="Gender">
         <option value="male">male</option>
          <option value="female">female</option>
          <option value="other">other</option>
        </select>
        <label for="Address" height="100px">Address:</label>
			  <input type="text" name="Address" id="Address">  
        <label for="emailAddress">Email Address:</label>
			<input type="text" name="E-mail" id="emailAddress">
      <label for="username">Username:</label>
			<input type="us" name="UserName" id="username">
      <label for="password">Password:</label>
			<input type="ps" name="Password" id="password">
      <!-- <label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress"> -->
        <br>
        <br>
        
        <a href="login-form.php">
        <button type="submit" onclick="myFuncation()">SUBMIT</button></a>
      
      </form>
    </div>
  </div>
</div>

</body>
</html>
<script>
    function myFuncation() {    
        alert("REGISTER SUCCESFULY!");
    }
    </script>

