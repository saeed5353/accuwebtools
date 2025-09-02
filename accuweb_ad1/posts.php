<?php
	session_start();
	require_once 'User.php';

	// Check if user is logged in
	if (!isset($_SESSION['user_id'])) {
	    header('Location: login.php');
	    exit();
	}
	$user = new User($db);
	$userData = $user->getUserById($_SESSION['user_id']);
	include("Data.php");
	include("Blog.php");
	$blog = new Blog($db);

	$getPosts = $blog->getPosts();
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Accuwebtools Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.php" class="logo">
					Messages
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					<form class="navbar-left navbar-form nav-search mr-md-3" action="">
						<div class="input-group">
							<input type="text" placeholder="Search ..." class="form-control">
							<div class="input-group-append">
								<span class="input-group-text">
									<i class="la la-search search-icon"></i>
								</span>
							</div>
						</div>
					</form>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="assets/img/profile.jpg" alt="user-img" width="36" class="img-circle"><span >Admin</span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="assets/img/profile.jpg">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Admin
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
						</div>
					</div>
					<?php include("includes/nav.php"); ?>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Messages</h4>
						<div class="row">
						    <div class="col-md-12">
						        <div class="card">
						            <div class="card-header">
						                <h4 class="card-title">Messages List</h4>
						            </div>
						            <div class="card-body">
						                <table id="messagesTable" class="table table-bordered table-striped">
						                    <thead>
						                        <tr>
						                            <th>Title</th>
						                            <th>Slug</th>
						                            <!-- <th>Description</th> -->
						                            <th>Category</th>
						                            <th>Status</th>
						                            <th>Meta Keywords</th>
						                            <th>Meta Description</th>
						                            <th>Actions</th>
						                        </tr>
						                    </thead>
						                    <tbody>
						                        <?php foreach ($getPosts as $post): ?>
						                            <tr>
						                                <td><?= htmlspecialchars($post['title']) ?></td>
						                                <td><?= htmlspecialchars($post['slug']) ?></td>
						                                <!-- <td><?= htmlspecialchars(substr($post['description'], 0, 100)) ?></td> -->
						                                <td><?= $post['category'] ?></td>
						                                <td><?= $post['status'] ?></td>
						                                <td><?= $post['meta_keywords'] ?></td>
						                                <td><?= htmlspecialchars(substr($post['meta_description'],100))?></td>
						                                <td>
												            <a href="edit_post.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
												            <a href="delete_post.php?id=<?= $post['id'] ?>" 
												               class="btn btn-sm btn-danger" 
												               onclick="return confirm('Are you sure you want to delete this post?');">
												               Delete
												            </a>
												        </td>
						                            </tr>
						                        <?php endforeach; ?>
						                    </tbody>
						                </table>
						            </div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- <script src="assets/js/core/jquery.3.2.1.min.js"></script> -->
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>
</html>
<script>
    $('#messagesTable').DataTable({
        pageLength: 10,
        order: [[ 3, "ASC" ]]
    });
</script>

