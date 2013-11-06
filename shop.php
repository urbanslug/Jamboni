<title> Jamboni shop </title>
<?php
require("templates/header.html");
?>

<form action="buy.php" method="POST">
<input type="text" name="fname" placeholder="first name"> <br />
<input type="text" name="lname" placeholder="last name"> <br />
<input type="text" name="payment" placeholder="credit card details"> <br />
<input type="text" name="location" placeholder="to be delivered to"> <br />

East Africa. <input type="radio" name="place" value="local"><br />
Africa. <input type="radio" name="place" value="regional"><br />
Other continent: <input type="radio" name="place" value="international" > specify: <input type="text" name="continent" placeholder="continent"> <br />

<p>
Select transport:
<select name="dropdown"> 
<option value="1"> Overight courier </option>
<option value="2"> Normal courier </option>
<option value="3"> Slow mail </option>
</select>
</p>

<p>
<input type="reset" name="reset" value="reset">
<input type="submit" name="submit" value="submit">
</p>
</form>
<?php
require("templates/footer.html");
?>
