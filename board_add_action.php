<?php
    $board_pw = $_POST["board_pw"];
    $board_title = $_POST["board_title"];
    $board_content = $_POST["board_content"];
    $board_user = $_POST["board_user"];

    $conn = mysqli_connect('localhost','root','java0000','php_board');
 
    $sql = "INSERT INTO board(board_pw,board_title,board_content,board_user,board_date) VALUES('".$board_pw."','".$board_title."','".$board_content."','".$board_user."',now())";
    /* MySQLi 는 MySQL Improved Extension 의 약자로 기존 MySQL 함수의 확장된 함수이다.
        MySQLi 함수는 기존의 함수 방식과 객체 방식 두 가지 형태로 사용할 수 있지만 PHP 5 이상에서만
        사용할 수 있기 때문에 호환성 문제가 있다면 MySQL 함수를 사용하도록 한다. */
    $result = mysqli_query($conn, $sql);
    
    /* echo : 하나 이상의 문자열을 출력 print보다 속도면에서 미미하게 빠르다. */
    if($result){
        echo '입력 성공 :<br>'.$result;
        
    }else{
        echo '입력 실패 :<br>'.mysqli_error($conn);
 
    }
 
    mysqli_close($conn);
    header("Location: ./board_list.php");
?>