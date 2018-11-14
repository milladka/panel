<header>
	<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
		<a class="navbar-brand" href="#"><img src="img/logo.png" alt=""><div class="type-logo">پنل کاربری ساینا زبان</div></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<div class="mr-auto welcome-user">

				<p>
                    <a class="mail-user" href=""><span class="badge badge-pill badge-danger">۴</span><i class="fas fa-envelope"></i></a>
                    <i class="fa fa-user"></i><span>
                        <?php
                        $username = $_SESSION['username'];
                        $conn =connectToDB();
                        GetNameUser($username , $conn);
                        ?>
                    </span> خوش آمدید</p>
				<a class="logout-icon" href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
			</div>
		</div>
	</nav>
</header>
<div class="container-fluid">
	<div class="row">