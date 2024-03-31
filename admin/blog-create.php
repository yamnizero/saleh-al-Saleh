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
                    <input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center">
                    <textarea name="sub" class="form-control bg-dark text-white my-3 "></textarea>
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