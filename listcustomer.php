<?php

require_once 'db_connect.php'; ?>

<h3> DATABASE CUSTOMER </h3>
<table border="1" cellspacing="0" cellpadding="6">
		<thead>
			<tr>
				<th>ID Cust</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Telephone</th>
				<th>Email</th>
				<th>Address</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM customer WHERE active =1";
			$result = $connect->query($sql);
			if($result-> num_rows > 0) {
				while($row = $result-> fetch_assoc()) {
					echo "<tr>
						<td>".$row['id_cust']."</td>
						<td>".$row['fname_cust']."</td>
						<td>".$row['lname_cust']."</td>
						<td>".$row['telephone_cust']."</td>
						<td>".$row['email_cust']."</td>
						<td>".$row['address_cust']."</td>
						<td>".$row['username_cust']."</td>
						<td>".$row['password_cust']."</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='9'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>