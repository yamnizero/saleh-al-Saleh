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
                <?= alertMessage(); ?>
                <table class="table table-bordered table-striped">
                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            
                            <th>action</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $users = getall('users');
                        if (mysqli_num_rows($users) > 0) {
                            foreach ($users as $userItem) {
                             ?>
                                <tr>
                                    <td><?=$userItem['id']?></td>
                                    <td><?=$userItem['name']?></td>
                                    <td><?=$userItem['email']?></td>
                                    <td><?=$userItem['phone']?></td>
                                    <td><?=$userItem['role']?></td>
                                    

                                    <td>
                                        <a href="users-edit.php?id=<?=$userItem['id']?>" class="btn btn-success btn-sm">Edit</a>
                                        <a href="users-delete.php?id=<?=$userItem['id']?>" 
                                        class="btn btn-danger btn-sm mx-2"
                                        onclick="return confirm('Are You Sure You Want to Delete This Data? ')";
                                        >
                                        
                                        Delete
                                    </a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">No Record Found</td>
                            </tr>
                        <?php
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php')
?>