<?php
require 'header.view.php'
?>
<body class="register-page">

<div class="register-box">

	<div class="register-box-body">
		<div class="logo-register"><a href="index.php"><img src="./img/logo.png" alt=""></a></div>
		<div class="title-register-page">
			ثبت نام در آکادمی ساینا زبان
		</div>
		<?php if(! is_null($status)): ?>
		<div class="alert alert-danger">
			<small><?=  $status; ?></small>
		</div>
		<?php endif;?>
		<form action="register.php" method="POST">
			<div class="form-group row" >
                <label for="name" class="col-sm-4 col-form-label">نام</label>
                 <div class="col-sm-8">
				      <input id="name" class="form-control" type="text" name="name" value="<?= old('name') ?>">
                 </div>
			</div>
            <div class="form-group row" >
                <label for="family" class="col-sm-4 col-form-label">نام خانوادگی</label>
                <div class="col-sm-8">
                    <input class="form-control" id="family" type="text" name="family"  value="<?= old('family') ?>">
                </div>
			</div>
            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">نام کاربری</label>
                 <div class="col-sm-8">
                     <input id="username" class="form-control" type="text" name="username" value="<?= old('username') ?>">
                 </div>
			</div>
			<div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label small">ایمیل</label>
                <div class="col-sm-8">
				   <input class="form-control" type="email" name="email" id="email" value="<?= old('email') ?>" oninvalid="this.setCustomValidity('لطفا یک ایمیل صحیح وارد کنید')"
                          oninput="setCustomValidity('')">
                </div>
			</div>
			<div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">رمز عبور</label>
                <div class="col-sm-8">
				   <input class="form-control" type="password" name="password" id="password">
                </div>
			</div>
			<div class="form-group form-check">
				<input type="checkbox" class="form-check-input" name="rule" id="exampleCheck1" required oninvalid="this.setCustomValidity('لطفا قوانین را مطالعه کنید')"
                       oninput="setCustomValidity('')">
				<label class="form-check-label" for="exampleCheck1">قوانین و مقررات آکادمی ساینا زبان را می پذیرم.</label>
			</div>
			<button type="submit" class="btn btn-primary btn-block btn-sm">ثبت نام</button>
			<div class="before-signup">  قبلا ثبت نام کرده ام. <a href="login.php">وارد شوید</a></div>
		</form>
	</div>
	<div class="title-footer-box-register">Academy of Saina Language
	</div>
</div>
<?php
require 'footer.view.php'
?>
