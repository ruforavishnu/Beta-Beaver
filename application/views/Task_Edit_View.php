
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>CodeIgniter Todo App Dashboard- Edit Task</title>

</head>
<body>

	<p>

		<?php echo "Value of taskId variable:".$taskId ?>


		<form method="" action="">
			<?php
				echo form_open('Task_Controller/update_task');
				echo form_hidden('reqdId' , $taskId);

				echo form_label('Task Description');
				echo form_input( array(
					'id'    => 'taskDescription',
					'name'  => 'taskDescription',
					'value' => $records[0]->taskDescription
				));

				echo "";

				echo form_label('Task Status');
				echo form_input(array(
					'id' => 'taskStatus',
					'name' => 'taskStatus',
					'value' => $records[0]->taskStatus
				));

				echo form_submit(array(
					'id' => 'submit',
					'value' => 'Update'
				));

				echo form_close();

				



			?>

		</form>

<!-- 
		<form action="" method="POST" id="form_EditTask" style="margin:30px;">
				<div class="row">
					<div class="col">
						<label for="editTaskForm">Edit Task</label>
						<input type="text" name="txt_EditTaskDescription" class="form-control">      
					</div>
					
					<div class="col">
						<label for="addTaskForm">Task Status</label>
						<select class="form-control" name="select_TaskStatus">
						<option selected>Not-Begun</option>
						<option value="Started">Started</option>
						<option value="Little-done">Little-done</option>
						<option value="Half-done">Half-done</option>
						<option value="Almost-done">Almost-done</option>
						<option value="Completed">Completed</option>
						</select>
						<input type="hidden" name="hiddeninput_buttonID" value = "<?php echo $taskId; ?>">
					</div>
					
				</div>
				</form>
				<button type="submit" form="form_EditTask" value="Edit Task" name="btn_EditTask" class="btn btn-primary">Update Task</button> -->
	</p>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</body>

</html>