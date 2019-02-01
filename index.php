<?php

	include "db.php";
	include "includes/header.php";

?>

	<main id="body" class="container mt-5 py-5">
		<h1 class="text-center mb-5 text-info">Tasks</h1>
		<hr>
		<div class="row">
			<div class="col-md-6 border-right">
				<div class="card">
					<h3 class="text-center text-info mt-3">New Task</h3>
					<div class="card-body">
						<form action="">
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" id="title" class="form-control" autofocus placeholder="Title...">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea name="description" id="description" class="form-control" placeholder="Tasks description..." rows="2"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-info btn-block mt-4">
									Save Task
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				
			</div>
			<div class="col-md-12 mt-4">
				<div class="p-3 border rounded bg-white">
					<h3 class="text-center text-info mt-2 mb-4">Tasks List</h3>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td colspan="2">Larry the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>

<?php

include "includes/footer.php";

?>
	