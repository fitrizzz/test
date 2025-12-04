<?php

require "api.php";

$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);

?>
<html>
	<body>
		<table border = "1px">
			<thead>
				<tr>
					<td>id</td>
					<td>name</td>
					<td>password</td>
				</tr>
			</thead>
			<tbody>
				<?php while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
						<td><?= $row["id"] ?></td>
						<td><?= $row["nama"] ?></td>
						<td><?= $row["password"] ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>