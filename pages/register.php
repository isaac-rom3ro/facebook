<?php
    $currentYear = date("Y");
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

    <br>

    <label for="birthday">Birthday</label>
    <img src="" alt="birthday information">

    <div id="birthday">
        <select name="" id="">
            <?php
                $monthAsAbbreviation = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]; //Each month is indexed 

                foreach($monthAsAbbreviation as $index => $month) { //Show all the elements in the array as abbreviation, tough their index
                    echo "<option value='$index'>$month</option>";
                }
            ?>  
        </select>
        
        <select name="" id="">
            <?php
                $thirdOneMonth = [0, 2, 6, 7, 9, 11]; //Months with 31 days 
                $februaryDays = 28; //Alone february

                //If the year is a leap year => february increase +1 days
                if(($currentYear % 4 == 0 && $currentYear % 100 != 0) || $currentYear % 400 == 0) {
                    $februaryDays++;
                }

                foreach($monthAsAbbreviation as $index => $dayMonth) {
                    if(in_array($index, $thirdOneMonth)) { //If the index match with the month's who's in thirdOneMonth array show 31 days
                        echo "<option value='$index'>31</option>";
                    } else if($index == 1) { //If the month if february show the days as well
                        echo "<option value='$index'>$februaryDays</option>";
                    } else { //And so on
                        echo "<option value='$index'>30</option>";
                    }
                }
            ?>
        </select>
        
        <select name="" id="">
            <?php
                //Catch the current year, and use it as a value to be decremented in each <option> tag, showing all the years 
                for($i = $currentYear; $i >= 1905; $i--) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select>
    </div>

    <label for="gender">Gender</label>
    <img src="" alt="gender information">
    <div id="gender">
        <input type="radio">
        <input type="radio">
        <input type="radio">
    </div>

    <input type="text" placeholder="Mobile number or email">
    <input type="text" placeholder="New password">

    <button type="submit">Sign up</button>
    <a href="../index.php">Already have an account?</a>
    <!-- Link to login page -->
</body>
</html>