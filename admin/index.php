<?php
include('includes/header.php');
include "code-blog.php"
?>


<div class="row  row-cols-1 row-cols-md-3 g-4">
    

    <?php foreach ($query as $q) { ?>
    
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
                <small class="text-muted"><?= $q['created']?></small>
            </div>
        </div>
        </div>
        
    
    <?php } ?>
    <!-- <div class="col-md-3 mb-4">
        <div class="card card-body p-3">
            <p class=" text-sm text-capitalize fw-bold">Todday Mo</p>
            <h5 class="fw-bold mb-0"> 2 </h5>

        </div>
    </div> -->

</div>