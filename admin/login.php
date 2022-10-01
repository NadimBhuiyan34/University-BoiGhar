<?php
	require_once 'functions/function.php';
    if (getLoggedID()) {
        header('Location: index.php');
    }

    $message = null;
	if (!empty($_POST)) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$query = "SELECT * FROM adm_user WHERE user_username='$username' AND user_password='$password'";
		$query = mysqli_query($con, $query);
		$data = mysqli_fetch_assoc($query);
		if ($data) {
			$_SESSION['id'] = $data['user_id'];
			$_SESSION['name'] = $data['user_name'];
			$_SESSION['username'] = $data['user_username'];
			$_SESSION['role'] = $data['role_id'];
			header('Location: index.php');
		} else {
			$message = "Username or Password didn't match!";
		}
	}
	?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel :: Login </title>
	<link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="css/style.css" rel="stylesheet" />
</head>

<body>
	<div class="container">
		<div class="full-view">
			<div class="col-md-5">
				<div class="panel panel-info login-form">
					<div class="panel-heading">
						<div class="panel-title">Sign In</div>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="POST" action="#">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="login-username" type="text" class="form-control" name="username" value=""
									placeholder="username">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
							</div>
							<div class="input-group">
								<div class="checkbox">
									<label>
										<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
									</label>
								</div>
							</div>

                            <?php if ($message) { ?>
                            <div class="input-group col-md-12 text-center">
                                <span class="text-danger"><?= $message ?></span>
                            </div>
                            <?php } ?>

							<div class="form-group">
								<div class="col-sm-12 controls d-flex justify-content-end">
									<button id="btn-login" class="btn btn-success">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>

</html>