<?php

require 'config/function.php';

$paraResult = checkParamId('id');
if (is_numeric($paraResult)) {
        $blogId = validate($paraResult);
        $blog = getById('blog',$blogId);
    if ($blog['status'] == 200) {
        $blogDeleteRes = deleteQuery('blog',$blogId);
        if ($blogDeleteRes) {
            redirect('index.php','Blog Deleted Sucessfully');

        }else{
            redirect('index.php','Something Went Wrong');
        }
    } else {
        redirect('index.php',$blog['message']);
    }
    
} else {
    redirect('index.php',$paraResult);
}
