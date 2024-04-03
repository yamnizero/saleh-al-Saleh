<?php
include('includes/header.php')
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            
            <div class="card-body">
               
            <section class="page-section bg-dark-1 light-content " id="about">
                

                <div class="container mt-5" >
                   <form action="code-blog.php" method="POST" enctype="multipart/form-data">
                    
                    <input type="file" class="form-control" name="image" >
                    <input type="text" name="title" placeholder=" Enter your Blog Title" class="form-control bg-dark text-white my-3 text-center">
                    <textarea name="sub" placeholder=" Enter your Blog SubTitle" class="form-control bg-dark text-white my-3 "></textarea>
                    
                    
                    <input type="text" name="author" placeholder="Enter your Author" class="form-control bg-dark text-white my-3 text-center">
                    <input type="text" name="category" placeholder="Enter your Category" class="form-control bg-dark text-white my-3 text-center">
                   
                    <button name="new_post" class="btn btn-dark">Add Post</button>
                   </form>
                </div>

       
          
    </section>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php')
?>