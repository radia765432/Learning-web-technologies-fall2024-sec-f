<?php
$nameErr = "";
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
       $nameErr = "Name is required.";
   } else {
       $name = $_POST["name"];
       if (!preg_match("/^[a-zA-Z][a-zA-Z .-]{1,}$/", $name) || str_word_count($name) < 2) {
           $nameErr = "Name must start with a letter, contain at least two words, and include valid characters.";
       }
   }
}
?>
<form method="post" action="">
<label for="name">NAME:</label>
<input type="text" name="name" value="<?php echo $name; ?>">
<span style="color: red;"><?php echo $nameErr; ?></span><br>
<input type="submit">
</form>
 
 