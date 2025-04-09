<?php
    include_once "../render-functions/birthday.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <input type="text" placeholder="First name">
    <input type="text" placeholder="Last name">
    
    <br><br><br>
    
    <label for="birthday">Birthday</label>
    <img src="" alt="">
    
    <br>
    
    <select name="" id="abbr-month">
        <?php
            renderAbbrMonth();
        ?>  
    </select>


    <select name="" id="select-day">

    </select>

    <select name="" id="select-year">
        <?php
            renderValidYears();
        ?>
    </select>

    <br><br><br>
    
    <label for="gender">Gender</label>
    <img src="" alt="gender information">
    <div id="gender">
        <input type="radio" name="gender">
        <input type="radio" name="gender">
        <input type="radio" name="gender">
    </div>
    
    <input type="text" placeholder="Mobile number or email">
    <input type="text" placeholder="New password">
    
    <button type="submit">Sign up</button>
    <a href="../index.php">Already have an account?</a>
    <!-- Link to login page -->
    <script src="../scripts/change-days-of-month.js"></script>
</body>
</html>