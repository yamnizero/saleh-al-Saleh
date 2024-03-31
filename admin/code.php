<?php

  require 'config/function.php';

  if (isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    
    $role = validate($_POST['role']);


    if ($name != '' || $email != '' || $phone != '' || $password != '') {
      $query = "INSERT INTO users (name,phone,email,password,role)
     VALUES ('$name','$phone','$email','$password','$role')";

      $reuslt = mysqli_query($conn, $query);
      if ($reuslt) {
        redirect('user.php', 'User\Admin Added Sucessfully');
      } else {
        redirect('user-create.php', 'Something Went Wrong');
      }
    } else {
      redirect('user-create.php', 'Please Fill All Input Fields');
    }
  }

  if (isset($_POST['updateUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    
    $role = validate($_POST['role']);

    $userId = validate($_POST['userId']);
    $user = getById('users', $userId);
    if ($user['status'] != 200) {
      redirect('users-edit.php?id=' . $userId, 'No Such Id Found');
    }


    if ($name != '' || $email != '' || $phone != '' || $password != '') {
      $query = "UPDATE users SET 
    name ='$name',
    phone ='$phone',
    email ='$email',
    password ='$password',
   
    role ='$role'
    WHERE id='$userId'";

      $reuslt = mysqli_query($conn, $query);
      if ($reuslt) {
        redirect('user.php', 'User\Admin Updated Sucessfully');
      } else {
        redirect('user-create.php', 'Something Went Wrong');
      }
    } else {
      redirect('user-create.php', 'Please Fill All Input Fields');
    }
  }