
<!DOCTYPE html>
<html>
<head>
        <title>Все пользователи:</title>
        <link rel="stylesheet" type="text/css" href="MyStyle.css">
        <meta charset="utf-8">
</head>
<body>
<style>
h1 {    display: flex;
        align-items: center;
        justify-content: center;
        color: plum;
        font-family: oblique;
        font-size: 45pt;
        background: linear-gradient(plum, white); 
        -webkit-background-clip: text;  
        color: transparent;
        }
</style>
        <h1>Отправленные заявки:</h1>
        <form class="box2" action="home_page.php">
         <?php
        $db= mysqli_connect('localhost', 'root', '', 'registration');
        $select="SELECT * FROM registration;";
        $result = $db->query($select);
        if ($result->num_rows>0){
                        echo "USERNAME: | SURNAME: | PHONE NUMBER: | EMAIL:". " <br>";
                        echo "<br>";
                while ($row=$result->fetch_assoc()){
                        echo $row["username"]." | ".$row["surname"]." | ".$row["phone"]." | ".$row["email"]." <br>";
                }
                }else{
                        echo "Заявок нет.";
                }
        mysqli_close($db);
        ?>
        <button class="Button" type="submit" >Вернуться</button>
        </form>
</body>
</html>
