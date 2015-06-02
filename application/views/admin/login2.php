<!DOCTYPE html>
<html>
<head>
    <title>User Login | FUFTV</title>
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/brand.png'); ?>" alt="forufans Brand">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css'); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.css'); ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery-2.1.3.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap-filestyle.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/fuftv.css'); ?>" type="text/css" />
</head>
<body class="bglogin">
		<div class="login-box effect6">
	        <?php if (!empty($error)):?>
	            <div class="alert alert-danger tengah">
	                <?php echo $error ?>
	            </div>  
	        <?php endif?> 
	        <?php if (!empty($sukses)):?>
	            <div class="alert alert-success tengah">
	                <?php echo $sukses ?>
	            </div>  
	        <?php endif?> 
	        <form action="" method="post">
	            <div class="login-ttl">User Login.</div>
	            <div class="login-input-box">
	                <div class="login-label">Username</div>
	                <div class="login-input"><input type="text" class="form-control" name="usr" placeholder="Username" /></div>
	            </div>
	            <div class="login-input-box">
	                <div class="login-label">Password</div>
	                <div class="login-input"><input type="Password" class="form-control" name="pwd" placeholder="Password" /></div>
	            </div>
	            <div class="login-footer">
	                <button type="submit" class="btn btn-danger" name="submit" value="submit1" style="width:100%;"><b class="btn-login-lg">Login</b></button>
	                <div class="sambungfloat"></div>
	            </div>
	        </form>
	    </div>
</body>
</html>