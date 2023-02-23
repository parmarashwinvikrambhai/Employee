
<div class="container">
	<div class="card">
		<h2>Employee Details</h2>
			 <div class="card-header">
				<h2>
					<a class="btn btn-info float-right" href="menu.php">View All</a> 
				</h2>
			</div> 

<div class="card-body">
    <table>
		<form action="index.php" method="post">
			<div class="form-group">
                <tr>
                    <th>
						<label>Employee Name</label>
                    </th>
                    <td>
						<input type="text"  name="name" required="">
                    </td>
                </tr>
			</div>
			<div class="form-group">
                <tr>
                    <th>
						<label>Role</label>
                     </th>
                    <td>
						<input type="text"  name="role" required="">
                    </td>
                </tr>
			</div>
			<div class="form-group text-center">
                <tr>
                    <td>
						<input type="submit" name="submit"  value="Add">
					</td>
                </tr>
			</div>
    </table>
	</form>
	</div>
</div>
