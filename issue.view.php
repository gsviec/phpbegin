<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h3>Adding Issue</h3>
		<form method="POST" action="" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="email">Title</label>
			    <input type="text" class="form-control" id="email" name="title">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Due:</label>
			    <input type="text" class="form-control" name="due">
			  </div>
			  <div class="form-group">
			    <label for="pwd">Assign:</label>
			    <input type="text" class="form-control" name="assign">
			  </div>

			  <div class="form-group">
			    <label for="pwd">Status:</label>
			    <select name="status">
			    	<option value="0">Close issue</option>
			    	<option value="1">Open issue</option>
			    </select>
			  </div>
			 <input type="file" name="upload">
			  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	 
</body>
</html>