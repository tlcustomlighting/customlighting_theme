<?php
/*
File: page-login.php
Author: Marquis Massie
Description: Logn page for tl*Custom Lighting Clients
Version: 1.0
*/
get_header();
?>
<div class="row text-center">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h2 class="login-title">tL<span style="color:red;">*</span>Client Gallery</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <?php
                /* Login form submission script */
                $nameErr = $emailErr = "";
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    if(empty($_POST["name"])){  
                        $nameErr = "Name is required.";
                    } else{
                        $name = test_input($_POST["name"]);
                        if(!preg_match("/^[a-zA-Z]*$/", $name)){
                            $nameErr = "Only letters and white space allowed";
                        }
                    }
                    
                    if(empty($_POST["email"])){
                        $emailErr = "Email is required";
                    } else{
                        test_input($_POST["email"]);
                        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                            $emailErr = "Invalid email format";
                        }
                    }
                    
                }
                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" placeholder="YourEmail@provider.com" class="mail" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="pass" required>
            </div>
            <button type="submit" class="btn btn-default btn-login">Login</button>
            <p style="padding-bottom:85px;">First time Client? <a href="<?php /* Signup page link */ ?>"></a>Signup here!</p>
        </form>
        <h4><?php
                echo "Client Gallery tool is currently under development. Follow us on Facebook, Pinterest, or Twitter for updates.";
            ?>
        </h4>
    </div>
    <div class="col-md-1"></div>
</div>
<!--  Generated when the user attempts to enter email and password
<h2 class="login-info">The login feature of this website is currently under construction. For questions and queries please refer to our contact methods below or our contact page.</h2>
-->

<?php
get_footer();
?>