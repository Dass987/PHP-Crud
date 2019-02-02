<?php

	include("db.php");

	if (isset($_GET["id"])) {

		$id = $_GET["id"];

		$query = "SELECT * FROM task WHERE id = $id";

		$result = mysqli_query($conn, $query);

		if (!$result) {
			die("Query failed");
		}

		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_array($result);
			$title = $row["title"];
			$description = $row["description"];
		}

	} 
	
	if (isset($_POST["update"])) {
		$id = $_GET["id"];
		$title = $_POST["title"];
		$description = $_POST["description"];

		$query = "UPDATE task SET title = '$title', description = '$description' WHERE id = $id";

		$result = mysqli_query($conn, $query);

		if(!$result) {
			die("Query failed");
		}

		$_SESSION["message"] = "Task updated successfully!";
		$_SESSION["message_type"] = "primary";

		header("Location: index.php");
	}

	include "includes/header.php";

?>

	<main class="my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<h1 class="text-center text-info my-5">Edit Task <i class="fas fa-edit"></i></h1>
					<hr>
					<div class="card mt-5">
						<div class="card-body">
							<form action="edit.php?id=<?php echo $_GET["id"]; ?>" method="POST">
								<div class="form-group">
									<label for="title">Title</label>
									<input type="text" name="title" id="title" class="form-control" value="<?php echo $title; ?>">
								</div>
								<div class="form-group">
									<label for="description">Description</label>
									<textarea name="description" id="description" class="form-control" row="2"><?php echo $description; ?></textarea>
								</div>
								<div class="form-group">
									<button type="submit" name="update" class="btn btn-info btn-block mt-4">Update</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php

	include "includes/footer.php";

?>