<?php
    include 'inc/header.php';
?>
        <div class="change_pass_page">
            <h2>Tranding Fashion</h2>
            <form action="" method="post">
                <h3>Change Your Password</h3>
                <div class="change_pass_form">

                    <div class="old_pass">
                        <label for="old_pass">Old Password</label>
                        <input type="password" id="old_pass" name="old_pass" placeholder="Enter your old password" autocomplete="off">
                    </div>

                    <div class="new_pass">
                        <label for="new_pass">New Password</label>
                        <input type="password" id="new_pass" name="new_pass" placeholder="Enter your new password" autocomplete="off">
                    </div>
                            
                    <input type="submit" name="change_pass" value="Change Password">
                </div>
            </form>
    </div>
<?php
    include 'inc/footer.php';
?>