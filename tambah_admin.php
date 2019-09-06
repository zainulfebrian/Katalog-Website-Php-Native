<?php
	$active = "tambah_admin";

	include 'scripts/config.php';
    include 'layouts/header.php';
?>
<html>
<head>
    <title>Tambahkan Admin</title>
    <style>
        .input-group{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>	
	<div class="container">
		<div class="tambah-admin">
			<form action="tambah_admin_act.php" method="post">
				<div class="col-md-4 col-md-offset-4 kotak">
                    <h3>Masukkan Data Admin</h3>
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-user"></span></span>
						<input type="text" style="margin-top: 0; height: 36px;" class="form-control" placeholder="Username" name="uname">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="fa fa-lock"></span></span>
						<input type="password" style="margin-top: 0; height: 36px;;" class="form-control" placeholder="Password" name="pass">
					</div>
					<div class="input-group">			
						<input type="submit" class="btn btn-primary" value="Tambahkan Admin">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>