<?php

require __DIR__ . '/../../vendor/autoload.php';

error_reporting(0);
	
	$emp = (new App\Database\DBTransaction())->fetchEmployee();

?>

		<div class="card">
			<div class="card-header">
				<h2>
					<a class="btn btn-success" href="add.php">Add Employee</a>
					<!-- <a class="btn btn-info float-right" href="date_view.php">View All</a> -->
				</h2>
			</div>

<div class="card-body">
	<div class="card bg-light text-center mb-3">
		</div>
			<form action="index.php" method="post">
				<table border="3">
					<thead>
						<tr>
							<th width="25%">Employee ID</th>
                            <th width="25%">Employee Name</th>
							<th width="25%">Employee Roll</th>
							<th width="25%">Employee Attendance</th>
							<th width="25%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($emp as $ts) { ?>
							<tr>
								<td><?= $ts['emp_id'];?></td>
								<td><?= $ts['emp_name'];?></td>
								<td><?= $ts['role'];?></td>
								<td>
								<input type="radio" name="attendance<?php echo '_' . $ts['emp_id']; ?>" value="present" <?php if($ts['attendance'] == "1") {echo "checked";} ?>>P
								<input type="radio" name="attendance<?php echo '_' . $ts['emp_id']; ?>" value="absent" <?php if($ts['attendance'] == "0") {echo "checked";} ?>>A
								</td>
							</tr>
					</tbody>
						<?php } ?>
				</table>
			</form>
		</div>
	</div>
</div>
