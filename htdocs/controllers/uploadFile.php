<?php
error_reporting(0);
	if(isset($_POST["submit"])) {
		$uploaddir = 'C:\xampp\htdocs\core\data/';
		$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
		$fileType = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
		if($fileType=='csv'){
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "File is valid, and was successfully uploaded.\n";
                echo "<br>";
                echo "<br>";
                //dd($dataObj);
                $dataObj->set_data($uploadfile);
                $dataObj->set_quantile();
                var_dump($dataObj->get_quantile10());
                echo "<br>";
                echo "<br>";
                dd($dataObj->get_quantile90());
                echo "<br>";
                echo "<br>";
                dd($dataObj->get_iqr());
            } else 
                echo "Possible file upload attack!\n";
        }else 
		    echo "Wrong file type!\n";
	}
?>
