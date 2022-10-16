<?php

$conn= mysqli_connect("localhost", "root", "","orgdata");
$sql ="SELECT org,city FROM info where city like '%".$_POST['q']."%'";
echo "<tr><th>Name</th><th>Location</th></tr>";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result))
{

	echo "  <tr>
		    <td>".$row["org"]."</td>
		    <td>".$row["city"]."</td>	

		    </tr>";
}
 }
 else
 
 echo 'No records ';

?>