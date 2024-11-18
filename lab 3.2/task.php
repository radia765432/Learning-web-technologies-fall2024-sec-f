<?php
 
$emailErr = "";
 
$email = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
   if (empty($_POST["email"])) {
 
       $emailErr = "Email is required.";
 
   } else {
 
       $email = $_POST["email"];
 
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 
           $emailErr = "Invalid email format.";
 
       }
 
   }
 
}
 
?>
<form method="post" action="">
<label for="email">EMAIL:</label>
<input type="text" name="email" value="<?php echo $email; ?>">
<span style="color: red;"><?php echo $emailErr; ?></span><br>
<input type="submit">
</form>
 