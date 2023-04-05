<?php
$UserId = '2';
 $_SESSION['didUserFound'] = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['didUserFound'] == false;
    if (!empty($_POST['user_signup']) && !empty($_POST['password_signup'])) {
        if (isset($_POST['submit-signup'])) {

            if ($user->verifyNewUser($_POST['user_signup'], $_POST['password_signup'])) {
                $_SESSION['didUserExist'] = false;
                header("Location:" . $_SERVER['PHP_SELF']);
            } else {
                $_SESSION['SessionUserId'] = $user->addUser($_POST['user_signup'], $_POST['password_signup']);
                header("Location:./index.php");
            }
        }
    }
}

?>


<div class="container w-75 mt-4 mb-4">

    <form method="POST">
        <h1>Create account</h1>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="user_signup" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" required>
        </div>
        <br>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password_signup" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <br>
        <?php

        if ($_SESSION['didUserExist'] == false) :
        ?>
            <div style="color: red;">
                <p>*username already taken</p>
            </div>
        <?php
        endif;
        ?>
        <br>
        <button type="submit" name="submit-signup" class="btn btn-primary">Create Account</button>
        <br>
        <br>
        <p>Already have account? <a href="./login.php">Log in</a></p>
    </form>
</div>