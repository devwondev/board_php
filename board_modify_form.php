<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
    <!-- bootstrap을 사용하기 위한 CDN주소 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
<title>BOARD MODIFY</title>
</head>
<body>
    <div class="container">
        <h1>BOARD MODIFY</h1>
        <?php
            $board_no = $_GET["board_no"];
            $conn = mysqli_connect('localhost','root','java0000','php_board');       
            $sql = "SELECT board_no,board_title,board_content,board_user,board_date FROM board WHERE board_no='".$board_no."'";      
            $result = mysqli_query($conn,$sql);
            
            if($result){
                echo "success!";
            }else{
                echo mysqli_error($conn);
            }
        
            if($row=mysqli_fetch_array($result)) {
        ?>
                <form id="addForm" action="./board_modify_action.php" method="post">
                    <div class="form-group">
                        <label for="board_no">boardNo :</label> 
                        <input class="form-control" name="board_no" id="board_no" type="text" value="<?php echo $board_no;?>" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="board_pw">boardPw :</label> 
                        <input class="form-control" name="board_pw" id="board_pw" type="password" />
                    </div>
                    <div class="form-group">
                        <label for="board_title">boardTitle :</label>
                        <input class="form-control" name="board_title" id="board_title" type="text" value="<?php echo $row["board_title"];?>"/>
                    </div>
                    <div class="form-group">
                        <label for="boardContent">boardContent :</label>
                        <textarea class="form-control" name="board_content" id="board_content" rows="5" cols="50"><?php echo $row["board_content"];?></textarea>
                    </div>
                    <div>
                        <input class="btn btn-default" id="addButton" type="submit" value="글수정" />  
                    </div>
                </form>
        <?php
            }
        ?>
    </div>
</body>
</html>