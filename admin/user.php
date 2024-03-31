<?php
include('includes/header.php')
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    User Lists
                    <a href="user-create.php" class="btn btn-primary float-end">Add Users</a>
                </h4>
            </div>
            <div class="card-body">
                
                <table class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Is Ban</th>
                            <th>action</th>
                        </tr>

                    </thead>
                    
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php')
?>