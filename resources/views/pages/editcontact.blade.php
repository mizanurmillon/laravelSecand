<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert pages Table</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="form">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 offset-2">
					<form action="{{ URL::to('/update/'.$edit->id) }}" method="post">
						@csrf
						<div class="mb-3">
		 	 				<label for="name" class="form-label">Name</label>
		  					<input type="text" class="form-control" id="name" value="{{ $edit->name }}" name="name">
						</div>
						<div class="mb-3">
						   <label for="email" class="form-label">Email</label>
						   <input type="text" class="form-control" id="email" value="{{ $edit->email }}" name="email">
						</div>
						<div class="mb-3">
						   <label for="phone" class="form-label">Phone</label>
						   <input type="text" class="form-control" id="phone" value="{{ $edit->phone }}" name="phone">
						</div>
						<div class="mb-3">
						  <label for="message" class="form-label">Message</label>
						  <textarea class="form-control" id="message" rows="3" name="message">{{ $edit->message }}</textarea>
						</div>
						<div class="mb-3">
						  <input type="submit" class="btn btn-success" value="Update" name="submit">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>