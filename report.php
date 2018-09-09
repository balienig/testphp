
<html>
<html lang="th">
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>SURNAME</th>
				<th>PASS</th>
				<th>BDAY</th>
				<th>GENDER</th>
				<th>ADDRESS</th>
			</tr>
		</thead>
<tbody>


<?php
include("conn/mysqlConn.php");


$sql = "SELECT * FROM dataRe";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){

?>

	<tr>
		<td><?php echo $row["userid"];?></td>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["surname"];?></td>
		<td><?php echo $row["pass"];?></td>
		<td><?php echo $row["bday"];?></td>
		<td><?php echo $row["gender"];?></td>
		<td><?php echo $row["address"];?></td>
	</tr>

<?php
	// 	echo "userid".$row["userid"]."- Name".$row["name"]."- surname".$row["surname"]."pass",$row["pass"]." bday".$row["bday"]." gender".$row["gender"]." address".$row["address"]."<br>";
	}
}
else{
	echo "0 results";
} ?>
</tbody>
</table>
</body>
</html>