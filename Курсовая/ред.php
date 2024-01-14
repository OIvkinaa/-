<?php
session_start();
require 'bd.php';
$user_id = $_GET["id"];
$error = array();
$edit_user = array();
$has_error = false;
if(isset($_POST["submit"])){
    $edit_user = array(
        "id" => $_POST["id"],
        "names" => $_POST["names"],
        "tel" => $_POST["tel"],
        "password" => $_POST["password"]
    );
    if($edit_user["names"] == ""){
        $error["names"] = "Поле не заполнено";
        $has_error = true;
    }
    if($edit_user["tel"] == ""){
        $error["tel"] = "Поле не заполнено";
        $has_error = true;
    }
    if($edit_user["password"] == ""){
        $error["password"] = "Поле не заполнено";
        $has_error = true;
    }
    if($has_error){
        ?>
        <form action="ред.php?id=<?=$user_id?>" method="POST">
            <input type="hidden" name="id" value="<?=$user_id?>">
            <div>
                <label for="user_login">ФИО:</label>
                <input type="text" id="names" name="names" value="<?=$edit_user["names"]?>">
                <?if(isset($error["names"]) && $error["names"]!= ""):?><?=$error["names"];?><?endif;?>
            </div>
            <div>
                <label for="user_password">Телефон:</label>
                <input type="tel" id="tel" name="tel" value="<?=$edit_user["tel"]?>">
                <?if(isset($error["tel"]) && $error["tel"] != ""):?><?=$error["tel"];?><?endif;?>
            </div>
            <div>
                <label for="user_name">Проль:</label>
                <input type="password" id="password" name="password" value="">
                <?if(isset($error["password"]) && $error["password"] != ""):?><?=$error["password"];?><?endif;?>
            </div>
            <div>
                <input type="submit" name="submit" value="Сохранить"/>
            </div>
        </form>        
        <?php
    } else {
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $bd->query("UPDATE user
                             SET names ='".$edit_user["names"]."', 
                                 tel ='".$edit_user["tel"]."',
                                 password ='".$edit_user["password"]."' 
                            WHERE id=".$user_id);
        header('Location: Редакция.php');
    }
} else {
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bd->query("SELECT * FROM user WHERE id=".$user_id);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($user = $stmt->Fetch()){
      ?>
        <form action="ред.php?id=<?=$user_id?>" method="POST">
            <input type="hidden" name="id" value="<?=$user_id?>">
            <div>
                <label for="names">ФИО:</label>
                <input type="text" id="names" name="names" value="<?=$user["names"]?>">
            </div>
            <div>
                <label for="tel">Телефон:</label>
                <input type="tel" id="tel" name="tel" value="<?=$user["tel"]?>">
            </div>
            <div>
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" value="">
            </div>
            <div>
                <button type="submit" name="submit">Сохранить</button>
            </div>
        </form>      
      <?php
    } else {
        echo "Запись не найдена. <a href='Редакция.php'>Вернуться обратно</a>";
    }
    ?>
<?php }?>