<?php
$name = 'پیشخوان';
require 'header.view.php';
require 'nav-top.view.php';
require 'menu-side.admin.view.php';

$username = $_SESSION['username'];
 $conn =connectToDB();
?>

	<main class="col-md-9 mr-sm-auto col-lg-10 pt-3 px-4" role="main">
			<div class="container">
				<div class="row">
					<div class="col-12"><h5>پیشخوان مدیر</h5></div>
					<div class="col-12">
                       <? GetemptyUser($username , $conn);?>
                    </div>

				</div>
			</div>
		</main>


</div>
	</div>
</div>
<?php require 'footer.view.php';
