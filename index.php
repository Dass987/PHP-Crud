<?php

	include "db.php";
	include "includes/header.php";

	$queryLastTask = "SELECT * FROM task ORDER BY created_at DESC LIMIT 1";

	$resultLastTask = mysqli_query($conn, $queryLastTask);

	if (!$resultLastTask) {
		die("Unexpected error!");
	}

	$lastTask = mysqli_fetch_array($resultLastTask);

?>

	<main id="body" class="container mt-5 py-5">
		<h1 class="text-center mb-5 text-info">Tasks</h1>
		
		<?php if (isset($_SESSION["message"])): ?>
			<div class="alert alert-<?php echo $_SESSION["message_type"]; ?> alert-dismissible fade show text-center pt-3" role="alert">
				<h5><?php echo $_SESSION["message"]; ?></h5>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php 
		 	session_unset();
		 	endif;
		?>

		<hr>
		<div class="row">
			<div class="col-md-6 border-right">
				<div class="card">
					<h3 class="text-center text-info mt-3">New Task</h3>
					<div class="card-body">
						<form action="save.php" method="POST">
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" id="title" class="form-control" autofocus placeholder="Title...">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea name="description" id="description" class="form-control" placeholder="Tasks description..." rows="2"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" name="save_task" class="btn btn-info btn-block mt-4">
									Save Task
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
			<div class="card">
					<h3 class="text-center text-info mt-3">Last inserted</h3>
					<hr>
					<div class="card-body py-5">
						<p class="h4">Title: <span class="text-info"><?php echo $lastTask["title"]; ?></span></p>
						<p class="h4">Description: <span class="text-info"><?php echo $lastTask["description"]; ?></span></p>
						<p class="h4">Created at: <span class="text-info"><?php echo $lastTask["created_at"]; ?></span></p>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4">
				<div class="p-3 border rounded bg-white">
					<h3 class="text-center text-info mt-2 mb-4">Tasks List</h3>
					<table class="table table-bordered table-hover text-center">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Description</th>
								<th scope="col">Created At</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php

								$query = "SELECT * FROM task ORDER BY created_at DESC";

								$result = mysqli_query($conn, $query);

								if (!$result) {
									die("Unexpected error!");
								}

								$cont = 1;

								while($row = mysqli_fetch_array($result)) :
							
							?>

									<tr>
										<th class="align-middle" scope="row"><?php echo $cont; ?></th>
										<td class="align-middle"><?php echo $row["title"]; ?></td>
										<td class="align-middle text-left"><?php echo $row["description"]; ?></td>
										<td class="align-middle"><?php echo $row["created_at"]; ?></td>
										<td>
											<a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
											<a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
										</td>
									</tr>

							<?php $cont++;endwhile; ?>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>

<?php

include "includes/footer.php";

?>
	