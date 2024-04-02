<?php

define('DB_SERVER',"localhost");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"saleh_al_saleh");


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
   echo "<h3 class=container bg-dark text-center p-3 text-warning rounded-lg mt-5>Not able establish database Connection</h3>";
}





$image_uploaded = 0;
if (isset($_POST["new_post"])) {
 
   $title=$_POST["title"];
   $sub=$_POST["sub"];
   $author=$_POST["author"];
   $category=$_POST["category"];
     

   $image =time().$_FILES["image"]['name'];
   
      $target_dir = "../admin/uploads/";
      if(!is_dir($target_dir)){
         mkdir($target_dir, 0777, true);
      }else{}
 
      $target_file = $target_dir . basename($_FILES['image']['name']);
      $imageName = basename($_FILES['image']['name']);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
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
 
 
 
   
   
 
   $sql = "INSERT INTO blog(image,title,sub,author,category) VALUES('$imageName', '$title', '$sub' ,'$author','$category')";
   if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      header("location:index.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
 
   //mysqli_query($conn,$sql);
  
   exit();
}

?>