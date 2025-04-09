const abbrMonth =  document.getElementById("abbr-month");
const selectYear = document.getElementById("select-year");

changeDays(abbrMonth);

abbrMonth.addEventListener("change", (event) => {
    changeDays(event.target);
});
selectYear.addEventListener("change", (event) => {
    changeDays(abbrMonth);
})

function changeDays(abbrMonth) {
    let monthIndex = parseInt(abbrMonth.value);
    let selectYear = document.getElementById("select-year");

    let date = new Date();
    let currentMonth = parseInt(date.getMonth());
    let currentYear = parseInt(selectYear.value);
    let currentDay = parseInt(date.getDate());

    let thirdOneMonth = [0, 2, 6, 7, 9, 11]; 
    let februaryDays = checkLeapYear(currentYear);
    
    let selectDay = document.getElementById("select-day");
    selectDay.innerHTML = "";
    let daysInMonth = 0;
    if(thirdOneMonth.includes(monthIndex)) {
        daysInMonth = 31;
        for(let i = 1; i <= 31; i++) {
            let newOption = document.createElement("option");
            newOption.text = `${i}`;
            selectDay.appendChild(newOption);
        }
    } else if(monthIndex == 1) {
        for(let i = 1; i <= februaryDays; i++) {
            let newOption = document.createElement("option");
            newOption.text = `${i}`;
            selectDay.appendChild(newOption);
        }
    } else {
        for(let i = 1; i <= 30; i++) {
            let newOption = document.createElement("option");
            newOption.text = `${i}`;
            
            if(i == currentDay) {
                newOption.selected = true;
            }            
            selectDay.appendChild(newOption);
        }
    }
}

function checkLeapYear(currentYear) {
    let februaryDays = 28;
    
    if((currentYear % 4 == 0 && currentYear % 100 != 0) || currentYear % 400 == 0) {
        februaryDays++;
    }

    return februaryDays;
}