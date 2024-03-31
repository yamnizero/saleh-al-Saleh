<?php

require 'config/function.php';

$paraResult = checkParamId('id');
if (is_numeric($paraResult)) {
        $userId = validate($paraResult);
        $user = getById('users',$userId);
    if ($user['status'] == 200) {
        $userDeleteRes = deleteQuery('users',$userId);
        if ($userDeleteRes) {
            redirect('user.php','User Deleted Sucessfully');

        }else{
            redirect('user.php','Something Went Wrong');
        }
    } else {
        redirect('user.php',$user['message']);
    }
    
} else {
    redirect('user.php',$paraResult);
}
