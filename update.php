<?php $results = mysqli_query($db, "SELECT * FROM test"); ?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Contact</th>
			<th>City</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			<td><?php echo $row['contact']; ?></td>
			<td>
				<a href="login.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="insert.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<form>