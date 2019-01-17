<html>
<head>
    <!-- bootstrap을 사용하기 위한 CDN주소 -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>board_detail</h1>
        <?php
            $board_no = $_GET["board_no"];
            $conn = mysqli_connect('localhost','root','java0000','php_board');       
            $sql = "SELECT board_no,board_content,board_user,board_date FROM board WHERE board_no='".$board_no."'";      
            $result = mysqli_query($conn,$sql);
            
            if($result){
                echo "success!";
            }else{
                echo mysqli_error($conn);
            }
        ?>
        <table class="table table-striped">
            <?php
            if($row=mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td>board_no</td>
                    <td>
                        <?php
                            echo $row["board_no"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>board_content</td>
                    <td>
                        <?php
                            echo $row["board_content"];
                        ?>
                    </td>
                </tr>
                <tr>   
                    <td>board_user</td>
                    <td>
                        <?php
                            echo $row["board_user"];
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>board_date</td>
                    <td>
                        <?php
                            echo $row["board_date"];
                        ?>
                    </td>
                </tr>
            <?php
                }
            ?>
        </table>
        <a class="btn btn-default" href="./board_list.php">글목록</a>
        <?php
            echo "<a class='btn btn-default' href='./board_modify_form.php?board_no=".$row["board_no"]."'>수정</a>";
            echo "<a class='btn btn-default' href='./board_remove_form.php?board_no=".$row["board_no"]."'>삭제</a>";
        ?>
    </div>
</body>
</html>

