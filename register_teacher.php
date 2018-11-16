<?php
require_once 'functions.php';
// section work
AuthLogin();
$username = $_SESSION['username'];
$status = null;
$typestatus = 'danger';
$conn     = connectToDB();
if(isPost()){

	extract($_POST);
	if(validation_required([$typecourse , $languagescourse , $namecourse])){

		//get date fils
		$cartmelli = $_FILES['attachment_1'];
		$madrak = $_FILES['attachment_2'];
		$rezume = $_FILES['attachment_3'];
		if(validation_required([$cartmelli,$madrak,$rezume] ) ){
			// explode data cart melli
			$fileNamecartmelli  = $cartmelli['name'];
			$fileTmpNamecartmelli = $cartmelli['tmp_name'];
			$fileTypecartmelli  = $cartmelli['type'];
			$fileSizecartmelli  = $cartmelli['size'];
			$fileErrorcartmelli = $cartmelli['error'];
			// explode data madrak
			$fileNamemadrak  = $madrak['name'];
			$fileTmpNamemadrak = $madrak['tmp_name'];
			$fileTypemadrak  = $madrak['type'];
			$fileSizemadrak  = $madrak['size'];
			$fileErrormadrak = $madrak['error'];
			// explode data madrak
			$fileNamerezume    = $rezume['name'];
			$fileTmpNamerezume = $rezume['tmp_name'];
			$fileTyperezume    = $rezume['type'];
			$fileSizerezume    = $rezume['size'];
			$fileErrorrezume   = $rezume['error'];
			// explode file type
			$fileExtcartmelli = explode('.', $fileNamecartmelli);
			$fileExtmadrak    = explode('.', $fileNamemadrak);
			$fileExtrezume    = explode('.', $fileNamerezume);
			// explode file type
			$fileActualExtcartmelli = strtolower(end($fileExtcartmelli));
			$fileActualExtmadrak    = strtolower(end($fileExtmadrak));
			$fileActufileExtrezume  = strtolower(end($fileExtrezume));
			//allowed files
			$allowedImage = array('jpg','jpeg','png');
			$allowedpdf = array('pdf');
			if(in_array($fileActualExtcartmelli ,$allowedImage) || in_array($fileActualExtmadrak , $allowedImage) || in_array($fileAcfileExtrezume,$allowedpdf )){
				if( ($fileErrorcartmelli === 0) || ($fileErrormadrak === 0) ||($fileErrorrezume === 0) ){
					if( $fileSizecartmelli < 200000 ){
						if( $fileSizemadrak < 200000 ){
							if ($fileSizerezume < 20000000 ){

								$fileNamecartmelliNew = uniqid('',true).".".$fileActualExtcartmelli;
								$fileNamemadrakNew = uniqid('',true).".".$fileActualExtmadrak;
								$fileNamerezumeNew = uniqid('',true).".".$fileActufileExtrezume;
								$FileDestiationcartmelli =  'upload/'.$fileNamecartmelliNew;
								$FileDestiationmadrak =  'upload/'.$fileNamemadrakNew;
								$FileDestiationrezume =  'upload/'.$fileNamerezumeNew;
								move_uploaded_file($fileTmpNamecartmelli,$FileDestiationcartmelli);
								move_uploaded_file($fileTmpNamerezume,$FileDestiationrezume);
								move_uploaded_file($fileTmpNamemadrak,$FileDestiationmadrak);
								//add to db
								$typecourse = $_POST['typecourse'];
								$languagescourse = $_POST['languagescourse'];
								$namecourse = $_POST['namecourse'];
								$id_user = $_POST['id_user'];


								$conn = connectToDB();
								$pdoquery = "INSERT INTO `teachers`(`id_user`, `nameuser`, `typecourse`, `languagescourse`, `namecourse`, `filekartmelli`, `filemadrak`, `fileresume`) VALUES (:id_user, :nameuser,:typecourse,:languagescourse,:namecourse,:filekartmelli,:filemadrak,:fileresume)";
								$statement = $conn->prepare($pdoquery);

								$statementres = $statement->execute(array(
									':id_user' => $id_user,
									':nameuser' => $username,
									':typecourse' => $typecourse,
									':languagescourse' => $languagescourse,
									':namecourse' => $namecourse,
									':filekartmelli' => $FileDestiationcartmelli,
									':filemadrak' => $FileDestiationmadrak,
									':fileresume' => $FileDestiationrezume
								));

								if($statementres){
									$typestatus='success'; $status ='درخواست شما با موفقیت ثبت شد پس از بررسی به شما اطلاع داده می شود.';
								} else{
									$status = 'note';
								}
							} else {
								$status ='حجم فایل رزومه بیش از 2MB است';
							}
						} else {
							$status ='حجم فایل مدرک تحصیلی بیش از 200kb است';
						}
					} else {
						$status ='حجم فایل کارت ملی بیش از 200kb است';
					}
				} else {
					$status = 'در آپلود مدارک مشکلی بوجود آمده دوباره امتحان کنید';
				}
			} else {
				$status = 'پسوند یکی از فایل های آپلودی اشتباه است، لطفا به توضیحات پسوند هر فایل دقت کنید.';
			}
		}

	} else {
		$status ='کلیه فیلدها ضروری است';
	}

}
require 'views/register_teacher.view.php';