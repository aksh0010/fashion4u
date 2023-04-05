<?php

$_SESSION['didUserExist'] = true;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['user_login']) && !empty($_POST['password_login'])) {
        if (isset($_POST['submit-login'])) {


            $userId_ = $user->getUserId($_POST['user_login'], $_POST['password_login']);
            $_SESSION['SessionUserId'] = $userId_;

            if ($userId_ == 1) {
              
                $_SESSION['didUserFound'] = true;
                header("Location:" . $_SERVER['PHP_SELF']);
            } else {
                $_SESSION['didUserFound'] = false;
                header("Location:./index.php");
            }
        } else {
            header("Location:" . $_SERVER['PHP_SELF']);
        }
    }
}

?>


<div class="container w-75 mt-4 mb-4">

    <form method="POST">
        <h1>Log in</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="user_login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" required>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password_login" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <br>
        <?php

        if ($_SESSION['didUserFound'] == true) {
        ?>
            <div style="color: red;">
                <p>*username and password does not match with our records</p>
            </div>
        <?php
        }
        ?>
        <br>
        <button type="submit" name="submit-login" class="btn btn-primary">Log in</button>
        <br>
        <br>
        <p>Don't have account, create one? <a href="./signUp.php">sign up</a></p>
    </form>
</div>