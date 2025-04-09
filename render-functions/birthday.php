<?php
    $currentYear = date('Y');
    $currentMonth = date('M');

    function renderAbbrMonth() {
        $monthAsAbbreviation = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]; //Each month is indexed 
        
        foreach($monthAsAbbreviation as $index => $month) { //Show all the elements in the array as abbreviation, tough their index
            if($month == $GLOBALS["currentMonth"]) {
                echo "<option value='$index' selected>$month</option>";
            } else {
                echo "<option value='$index'>$month</option>";
            }
        }
    }

    function renderValidYears() {
        //Catch the current year, and use it as a value to be decremented in each <option> tag, showing all the years 

        for($i = $GLOBALS["currentYear"]; $i >= 1905; $i--) {
            echo "<option value='$i'>$i</option>";
        }
    }
