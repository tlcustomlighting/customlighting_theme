<?php
/*
File: page-contacts-example.php
Description: configuration file for contacts-example.php page
Author: Marquis Massie
*/
get_header();

$name = $email = $phone = $company = $msg = "";
    $nameErr = $emailErr = $phoneErr = $companyErr = $msgErr = "";

    //Form Validation
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["clientName"])){
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["clientName"]);
            if(!preg_match("/^[a-zA-Z]*$/", $name)){
                $nameErr = "Letters and whitespace only";
            }
        }
        if(empty($_POST["clientEmail"])){
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["clientEmail"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Invalid email format";
            }
        }
        if(empty($_POST["clientPhone"])){
            $phone = "";
        } else {
            $phone = test_input($_POST["clientPhone"]);
            if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)){
                $phoneErr = "Invalid Phone number format";
            }
        }
        if(empty($_POST["clientCompany"])){
            $company = "";
        } else {
            $company = test_input($_POST["clientCompany"]);
            if(!preg_match("/^[a-zA-Z]*$/", $name)){
                $companyErr = "Letters and whitespace only";
            }
        }
        if(empty($_POST["message"])){
            $msgErr = "A message is required";
        } else {
            $msg = test_input($_POST["message"]);
        }
        
        //Condense important info into single message
        $message = $name."\n".$company."\nTel: ".$phone."\n".$msg;
        
        $to = 'marquistlcustom@gmail.com';
        $subject = Test;
        
        //Send email
        wp_mail($to, $subject, $message);
        if(wp_mail($to, $subject, $message)){
            echo "<h1>SUCCESS</h1>";
        } else {
            echo "<h1>You fucked up</h1>";
        }
        
        //Test input for special characters
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
?>
<div class="container contact">
    <div class="row">
        <div class="row">
            <h2>USA OFFICE</h2>
            <blockquote>
                23371 Mulholland Dr.<br/>
               Woodland Hills, CA 91364<br/>
                Phone: +1 310.622.7313<br/>
                 Fax: +1 310.300.4484<br/>
            usaoffice@tlcustomlighting.com
            </blockquote>
        </div><br/>
        <div class="row">
            <h2>EUROPE OFFICE</h2>
            <blockquote>
                Via Maistra 49<br/>
               CH 7500 St.Moritz<br/>
             Phone: +1 310.622.7313<br/>
        europeoffice@tlcustomlighting.com
            </blockquote>
        </div><br/>
    </div>
    <?php
    //Initialize variables
?>
    <form method="post" action="#">
        <h2>Contact</h2>
        <div class="form-group" method="post">
            <label for="clientName">Name</label>
            <input name="clientName" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="clientEmail">Email</label>
            <input name="clientEmail" type="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="clientPhone">Tel</label>
            <input name="clientPhone" type="tel" class="form-control">
        </div>
        <div class="form-group">
            <label for="clientCompany">Company</label>
            <input name="clientCompany" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" type="text" class="form-control" rows="5" required></textarea>
        </div>
            <button type="submit" class="btn btn-default">Send</button>
    </form>
</div>
<?php get_footer(); ?>