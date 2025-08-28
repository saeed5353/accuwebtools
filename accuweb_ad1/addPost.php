<?php
	session_start();
	require_once 'User.php';

	// Check if user is logged in
	if (!isset($_SESSION['user_id'])) {
	    header('Location: login.php');
	    exit();
	}

	$user = new User();
	$userData = $user->getUserById($_SESSION['user_id']);
	include("Data.php");

	$data = new Data();

	$getPageStats = $data->getPageVisitedStats();
	$pages = [];
	$pageVisits = [];
	foreach ($getPageStats as $row) {
	    $pages[] = $row['page'];
	    $pageVisits[] = $row['total_visits'];
	}

	// Devices data
	$getDeviceStats = $data->getDeviceStats();
	$devices = [];
	$deviceVisits = [];
	foreach ($getDeviceStats as $row) {
	    $devices[] = $row['device'];
	    $deviceVisits[] = $row['total_visits'];
	}
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
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.php" class="logo">
					Dashboard
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
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<?php include("includes/nav.php"); ?>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
				  <div class="container-fluid">
				    <h4 class="page-title">Add Blog Post</h4>
				    <div class="row">
				      <div class="col-md-8">
				        <div class="card">
				          <div class="card-body">
				            <form method="POST" enctype="multipart/form-data" action="save_post.php" id="postForm">
				              <div class="form-group">
				                <label>Post Title</label>
				                <input type="text" name="title" class="form-control" required>
				              </div>
				              <div class="form-group">
				                <label>Slug (Unique)</label>
				                <input type="text" name="slug" class="form-control" required>
				              </div>
				              <div class="form-group">
				                <label>Description</label>
				                <textarea name="description" id="description" class="form-control" required></textarea>
				              </div>
				              <div class="form-group">
				                <label>Post Image</label>
				                <input type="file" name="image" class="form-control">
				              </div>
				              <div class="form-group">
				                <label>Status</label>
				                <select name="status" class="form-control">
				                  <option value="draft">Draft</option>
				                  <option value="published">Published</option>
				                </select>
				              </div>
				              <div class="form-group">
				                <label>Category</label>
				                <input type="text" name="category" class="form-control" required>
				              </div>
				              <button type="submit" class="btn btn-success">Add Post</button>
				            </form>
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
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
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
	// Format text based on command
        function formatText(command, value = null) {
            document.getElementById('description').focus();
            
            if (command === 'createLink') {
                let url = prompt('Enter the URL:');
                if (url) {
                    document.execCommand(command, false, url);
                }
            } else {
                document.execCommand(command, false, value);
            }
            
            updateCharCount();
        }
        
        // Apply color to text
        function applyColor(color) {
            document.execCommand('foreColor', false, color);
            updateCharCount();
        }
        
        // Update character count
        function updateCharCount() {
            const text = document.getElementById('description').innerText;
            document.getElementById('charCount').textContent = text.length;
        }
        
        // Add input event listener to update character count
        document.getElementById('description').addEventListener('input', updateCharCount);
        
        // Form submission
        document.getElementById('richTextForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get the HTML content from the rich text editor
            const descriptionContent = document.getElementById('description').innerHTML;
            
            // In a real application, you would send this content to the server
            alert('Form submitted successfully!\n\nDescription content:\n' + 
                  document.getElementById('description').innerText);
            
            // Here you can submit the form via AJAX or let it submit normally
            // For demonstration, we're just showing an alert
        });
        
        // Initialize character count on page load
        document.addEventListener('DOMContentLoaded', updateCharCount);
</script>
