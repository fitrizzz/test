<?php
	require "api.php";
	
	if(isset($_GET["submit"])){
		// var_dump($_GET);
		// echo "butang submit ditekan";

		$name = $_GET["nama"];
		$pass = $_GET["password"];

		$sql = "SELECT * FROM user
				WHERE nama = '$name' AND password = '$pass'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		
		if($row > 0){
			// echo "eh ada user";
			header("Location: index.php");
		}else{
			echo "user not found";
		}
		// var_dump($row);
		// var_dump($result);
	}

?>

<html>
	<body>
		<h1>Login User</h1>
		<form action="login.php" method="get">
			<label for="nama">Nama</label>
			<input type="text" name="nama">
			<br>
			<label for="password">password</label>
			<input type="text" name="password">
			<br>
			<button type="submit" name="submit">Submit</button>
		</form>
	</body>
</html>