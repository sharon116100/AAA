<?php
require_once 'config.php';
?>
<html>
    <body>
        <?php
        
        $id = $_POST["id"];
        $name = $_POST["name"];
        $password = $_POST["password"];
        $pw2 = $_POST["pw2"];
        $mail = $_POST["mail"];
        
            $sql = "INSERT INTO user(id, name, password, pw2, mail) VALUES ('$id', '$name','$password', '$pw2', '$mail')";
            if($conn->query($sql) === TRUE){
                echo '新增成功!';
                
            }
            else{
                echo '新增失敗!';
            
                }
        header('Location: member.php');
          //$conn->close();
        ?>
    </body>
</html>