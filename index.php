<h4>Form Login</h4>
<form method="post">
    <table>
        <tr>
            <td><input type="text" name="username" placeholder="Username" /></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Password" /></td>
        </tr>
        <?php
            if(isset($_GET["error"])){
                echo "<tr><td style='color:red'>Username dan Password Salah !</td></tr>";
            }
        ?>
        <tr>
            <td><input type="submit" name="login" value="Login" /></td>
        </tr>
        
    </table>

</form>

<?php
session_start();
$user = "Alex Yoba";
$pass = "alex";

if(isset($_POST["login"])){
    if($_POST["username"]==$user && $_POST["password"]== $pass){
        $_SESSION["user"] = $_POST["username"];
        $_SESSION["pass"] = $_POST["password"];
        header("location:admin.php");
    } else{
        header("location:index.php?error");
    }
}

?>

