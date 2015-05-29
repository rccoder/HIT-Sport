<?php 
        include_once('conf.php');
        $author = $_POST['author'];
        $post = $_POST['post'];
        $time = date('y-m-d h:i:s',time());
        $sql = "INSERT INTO posts (author, post, time) VALUES ('$author', '$post', '$time')";
        if(mysql_query($sql)) {
            if(mysql_affected_rows())
                echo "<script>alert('Success!');location.href='./post.php';</script>";
            else {
                echo "<script>alert('Error');location.href='./post.php';</script>";
            }
        } else {
            die(mysql_error());
        }
?>