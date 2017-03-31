<!DOCTYPE html>
<html>
<head>
	<title>Embeding PHP in HTML</title>
	<style type="text/css">
		h1 {
			padding: 2em;
			text-align: center;
			background: gray;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<h3>Issue for next week</h3>
	<!-- <ul>
		<?php foreach($issues as $key => $issue):?>
			<h3>Issue: <?= $key;?></h3>
		<li> <strong>Title</strong>: <?= $issue['title'];?></li>
		<li> <strong>Due</strong>: <?= $issue['due'];?></li>

		<li> <strong>Assign to</strong>: <?= $issue['assignee'];?></li>
		
		<li> <strong>Status</strong>: 
		<?php if ($issue['status']) :?>
			<span>Close issue</span>
		<?php else:?>
			<span>Open issue</span>
		<?php endif;?>

	
		</li>

	<?php endforeach;?>

	</ul> -->

	<table class="table">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Title</th>
	      <th>Due</th>
	      <th>Assign to</th>
	      <th>Status</th>
	      <th>Image URl</th>
	      <th>Deleted</th>
	    </tr>
	  </thead>
	  <tbody>
	  <?php foreach($issues as $key => $issue):?>
		<tr>
	      <th scope="row"><?= $key;?> </th>
	      <td><?= $issue['title'];?> </td>
	      <td><?= $issue['due'];?> </td>
	      <td><?= $issue['assignee'];?> </td>
	      <td>
	      	<?php if ($issue['status']) :?>
				<span>Close issue</span>
			<?php else:?>
				<span>Open issue</span>
			<?php endif;?>
			</td>
			<td><a href="/upload/<?=$issue['filename'];?>">Your link image</a></td>
			<td><a href="/delete.php?id=<?=$issue['id'];?>">Deleted</a></td>
    	</tr>
	  <?php endforeach;?>

	  </tbody>
	</table>
	<a href="/add.php">Adding issuse</a>
</body>
</html>