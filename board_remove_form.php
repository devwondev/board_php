<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
    <!-- bootstrap을 사용하기 위한 CDN주소 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 </head>
<body>
    <div class="container">
        <?php
            $board_no = $_GET["board_no"];
        ?>
        <h1>board_remove</h1>
        <form class="form-inline" id="removeForm" action="./board_remove_action.php" method="post">
            <input name="board_no" value="<?php echo $board_no ?>" type="hidden" />
            <div class="form-group">
                <label for="boardPw">비밀번호확인 :</label> 
                <input class="form-control" id="board_pw" name="board_pw" type="password">
            </div>
            <div class="form-group">
                <input class="btn btn-default" id="removeButton" type="submit" value="삭제" />
            </div>
        </form>
    </div>
</body>
</html>