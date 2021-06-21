<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Students Example</title>

</head>
<body>

	<p>
		<a href="<?php echo base_url(); ?> index.php/stud/add_view">Add</a>
	</p>
	<p>
		<table border="1">
		<?php
		
		$i = 1;
		echo "<tr>";
		echo "<td>Sr#</td>";
		echo "<td>Roll No.</td>";
		echo "<td>Name</td>";
		echo "<td>Edit</td>";
		echo "<td>Delete</td>";
		echo "</tr>";

		foreach($records as $r)
		{
			echo "<tr>";
			echo "<td>". $i++ ."</td>";
			echo "<td>". $r->roll_no ."</td>";
			echo "<td>". $r->name ."</td>";

			echo "<td><a href='". base_url(). "index.php/stud/edit/".$r->roll_no. "'> Edit</a></td>";
			echo "<td><a href='". base_url(). "index.php/stud/delete/".$r->roll_no. "'> Delete</a></td>";
			echo "</tr>";
		}
		?>
			
		</table>
	</p>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</body>
</html>