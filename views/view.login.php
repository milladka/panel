<?php
require 'header.view.php'
?>
<body class="register-page">
<div class="register-box">
	<div class="register-box-body">
		<div class="logo-register"><a href="index.php"><img src="./img/logo.png" alt=""></a></div>
		<div class="title-register-page">
			ورود به پنل کاربری آکادمی ساینا زبان
		</div>
		<?php if(! is_null($status)): ?>
            <div class="alert alert-danger">
                <small><?=  $status; ?></small>
            </div>
		<?php endif;?>
		<form action="login.php" method="post">
			<div class="form-group">
				<input class="form-control" type="text" name="username" placeholder="نام کاربری">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" placeholder="رمز عبور">
			</div>
			<div class="form-group form-check">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember">   مرا به خاطر بسپار
                    </label>
                </div>
			</div>
			<button type="submit" class="btn btn-primary btn-block btn-sm">ورود</button>
			<div class="before-signup">ثبت نام نکرده اید؟<a href="register.php"><strong>  ثبت نام</strong
					></a></div>
			<div class="before-signup"><a href="">کلمه عبور را فراموش کرده اید؟</a></div>
		</form>
	</div>
	<div class="title-footer-box-register">Academy of Saina Language
	</div>
</div>
<?php
require 'footer.view.php';