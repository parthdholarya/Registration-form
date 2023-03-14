<head>
	<link href="Glow_Sign-up.php" >	
	<link href="" rel="stylesheet">
</head>
	</body> 

			</body>
		</table>
	</div>
</body>
</html>
 	
<?php
// if(isset($_POST['vp']))
// 			{
               
//                 if (isset($_REQUEST['vp'])) 
//                 {
                   
//                      header("location:h.php"); 
//                 }
// }
?>
<?php
$dir = "uploads/";
echo '<img src="uploads" . $dir . "" />';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		h1 {
			text-align: center;
			margin-top: 0;
		}

		.table {
			width: 100%;
			border-collapse: collapse;
		}

		.table th,
		.table td {
			padding: 10px;
			border: 1px solid #ddd;
			text-align: center;
		}

		.table th {
			background-color: #f2f2f2;
			font-weight: bold;
		}
	</style>
</head>
</html>


<body>
  <form action="glow_log-in.php">
    <input type="submit" value="Logout" name="logout">
  </form>
  <br>
  <form action="" method="post">
    <input type="submit" value="View Profile" name="vp">
  </form>
</body>

<?php
session_start();
if(!isset($_SESSION['uname'])) {
  header("location:Glow_Log-in.php"); // redirect to login page if user is not logged in
  exit;
}

if(isset($_POST['vp'])) {
  // fetch data for logged-in user
  $username = $_SESSION['uname'];
  $conn = mysqli_connect("localhost","root","","module");
  $sql = "SELECT * FROM Info WHERE uname = '$username'";
  $result = mysqli_query($conn, $sql);

  // display data
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo '<h1>Welcome ' . $row['name'] . '</h1>';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Username</th>';
    echo '<th>Password</th>';
    echo '<th>E-Mail</th>';
    echo '<th>Number</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td align="center">' . $row['name'] . '</td>';
    echo '<td align="center">' . $row['uname'] . '</td>';
    echo '<td align="center">' . $row['pw'] . '</td>';
    echo '<td align="center">' . $row['email'] . '</td>';
    echo '<td align="center">' . $row['num'] . '</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
  } else {
    echo "<br>";
    echo 'No data found';
  }

  // Close connection
  mysqli_close($conn);
}
?>