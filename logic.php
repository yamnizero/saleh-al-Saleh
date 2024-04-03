<?php

define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "saleh_al_saleh");

// define('DB_SERVER',"localhost");
// define('DB_USERNAME',"ruknam5_saleh");
// define('DB_PASSWORD',"Salehalsaleh@12345");
// define('DB_DATABASE',"ruknam5_saleh");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
   echo "<h3 class=container bg-dark text-center p-3 text-warning rounded-lg mt-5>Not able establish database Connection</h3>";
}

$sql ="SELECT * FROM blog";
$query= mysqli_query($conn,$sql);


$image_uploaded = 0;
if (isset($_POST["new_post"])) {
 
	$title=$_POST["title"];
   $sub=$_POST["sub"];
	
   $image =time().$_FILES["image"]['name'];
   if (move_uploaded_file($_FILES['image']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/Saleh-Al-Saleh/uploads/'.$image)) {
      $target_file = $_SERVER['DOCUMENT_ROOT'].'/Saleh-Al-Saleh/uploads/'.$image;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $imageName = basename($_FILES['image']['name']);
      $photo = time().$imageName;
      if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
         ?>
         <script>
            alert("Please upload photo having extension .jpg/ .jpeg/ .png");
         </script>
         <?php
      
      }else{
         $image_uploaded = 1;
      }



   }
   

   $sql = "INSERT INTO blog(image,title,sub) VALUES('$image', '$title', '$sub')";
   mysqli_query($conn,$sql);
   header("location:blog.php");
   exit();
}

?>