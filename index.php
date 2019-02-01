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
					<div class="card-body">
						<form action="">
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" id="title" class="form-control" autofocus placeholder="Title...">
							</div>
							<div class="form-group">
								<label for="description">Description</label>
								<textarea name="description" id="description" class="form-control" rows="4" placeholder="Tasks description...">

								</textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-info btn-block">
									Save Task
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				
			</
		</div>
	</main>

<?php

include "includes/footer.php";

?>
	