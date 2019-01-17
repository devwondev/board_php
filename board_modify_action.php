<?php
    $board_no = $_POST["board_no"];
    $board_pw = $_POST["board_pw"];
    $board_title = $_POST["board_title"];
    $board_content = $_POST["board_content"];
 
    $conn = mysqli_connect('localhost','root','java0000','php_board');
 
    $sql = "UPDATE board SET board_title='".$board_title."',board_content='".$board_content."' WHERE board_no=".$board_no." AND board_pw='".$board_pw."'" ;
    $result = mysqli_query($conn, $sql);
 
    if($result){
        echo "success!";
    }else{
        echo mysqli_error($conn);
    }
 
    mysqli_close($conn);
    header("Location: ./board_list.php");
?>