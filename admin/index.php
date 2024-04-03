<?php
include('includes/header.php');
//include "code-blog.php"



$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
   echo "<h3 class=container bg-dark text-center p-3 text-warning rounded-lg mt-5>Not able establish database Connection</h3>";
}
$sql ="SELECT * FROM blog";
$query= mysqli_query($conn,$sql);
?>


<div class="row  row-cols-1 row-cols-md-3 g-4">
    <?php
    $blog = getall('blog') ;
    if (mysqli_num_rows($blog) > 0) {
     foreach ($query as $q) { ?>
    
        <div class="col">
        <div class="card">
            
            <img src="<?= "uploads/" . $q['image'] ?>" class="card-img-top" alt="Image Description" />
          
            <div class="card-body">
         
                <h5 class="card-title"><?= $q['title'] ?></h5>
                <p class="card-text">
                <?= $q['sub'] ?>
                </p>
            </div>
            <div class="card-footer">
                <div class="row">
                <small class="text-muted"><?= $q['created']?></small>
                <a href="blog-delete.php?id=<?=$q['id']?>" 
                                        
                class="btn bg-gradient-primary btn-sm mx-2"
                                        onclick="return confirm('Are You Sure You Want to Delete This Data? ')";
                                        >
                                        
                                        Delete
                                    </a>
                </div>
            </div>
        </div>
        </div>
        
    
    <?php } }?>



    <!-- <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class=" text-sm text-capitalize fw-bold">Todday Mo</p>
            <h5 class="fw-bold mb-0"> 2 </h5>

        </div>
    </div> -->

</div>