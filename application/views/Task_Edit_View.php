
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

		<?php echo "Value of taskId variable:".$taskId ;
		
		//show_error('Testing error display');

		?>


		<form method="" action="">
			<?php

				$reqdPath = APPPATH.'controllers\Debug_Messages.php';
				echo 'Value of reqdPath:'.$reqdPath;
				require_once($reqdPath);
				echo "<br";

				Debug_Messages::add_log('Task_Edit_View loaded. About to load the form using codeigniter code');

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

				log_message('info', 'Invoked from inside the Task Edit View Page');

				



			?>

		</form>

	</p>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	
</body>

</html>