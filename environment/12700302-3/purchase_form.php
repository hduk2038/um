<?php
    session_start();
    $_SESSION['checkout'] = true;
?>
<html>
<head>
<title>Purchase Confirmation Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Purchase Confirmation</h1>
<p>Please fill in buyer's details for delivery.</p>
<form name="delivery_form" method="post" action="sendEmail.php" 
      onsubmit="return (areAllCompleted() && isEmailValid());">
    <table>
        <tr>
            <td><label for="name">Full Name<span class="redWord">*</span></label></td>
            <td><input type="text" class="formText" name="name"></td>     
        </tr>
        <tr>
            <td><label for="address">Address<span class="redWord">*</span></label></td>
            <td><input type="text" class="formText" name="address"></td>
        </tr>
        <tr>
            <td><label for="subur">Suburb<span class="redWord">*</span></label></td>
            <td><input type="text" class="formText" name="suburb"></td>
        </tr>
        <tr>
            <td><label for="state">State<span class="redWord">*</span></label></td>
            <td><input type="text" class="formText" name="state"></td>
        </tr>
        <tr>
            <td><label for="country">Country<span class="redWord">*</span></label></td>
            <td><input type="text" class="formText" name="country"></td>
        </tr>
        <tr>
            <td><label for="emial">Email<span class="redWord">*</span></label></td>
            <td><input type="text" class="formText" name="email"></td>
        </tr>
        <tr>
          <td colspan="2">
                <input type="submit" class="submit" value="Purchase">
          </td>
        </tr>      
    </table>
</form>

<script type="text/javascript" src="checkform.js"></script>
</body>
</html>