<?php
$name = 'کاربران';
require 'header.view.php';
require 'nav-top.view.php';
require 'menu-side.admin.view.php';
$username = $_SESSION['username'];
$conn =connectToDB();
?>
<main class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4" role="main">
	<div class="container">
		<div class="row">
			<div class="col-12">

			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h4>مدیریت کاربران</h4>
			</div>
			<div class="col-12">
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body no-padding">
						<table class="table table-striped">
							<thead>
							<tr>
								<th style="width: 10px">کد</th>
								<th>نام کاربری</th>
								<th>نام</th>
								<th>ایمیل</th>
								<th>تلفن</th>
								<th>موبایل</th>
								<th>عملیات</th>
							</tr>
							</thead>
							<tbody>
							<?php viewUsers($conn); ?>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>


			</div>
		</div>


















	</div>
	</div>
</main>
</div>
</div>
</div>
<?php require 'footer.view.php';?>
