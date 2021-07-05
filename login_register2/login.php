<?php
    include 'inc/header.php';
    include 'User.php';
?>

<?php
    $user = new User();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        $userlogin = $user->userlogin($_POST);
    }
?>
    <div class="login_page" id="login">
        <div class="main_login_page">
            <div class="login_page_left">

            </div>

            <div class="login_page_right">
            <h2>Tranding Fashion</h2>
            <h2 class="tabs"><a href="#login">Login</a> / <a href="signin.php">Sign in</a></h2>

<?php
    if (isset($userlogin)) {
        echo $userlogin;
    }
?>

                <form action="" method="post">
                    <div class="login_form">
                        <div class="email">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Enter your email" autocomplete="off">
                        </div>

                        <div class="pass">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="off">
                        </div>
                            
                        <input type="submit" name="login" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    include 'inc/footer.php';
?>


