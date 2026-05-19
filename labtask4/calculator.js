// Function to add number or operator to display
function addValue(value) {
    document.getElementById("result").value += value;
}

// Function to clear display
function clearResult() {
    document.getElementById("result").value = "";
}

// Function to calculate result
function calculate() {
    let expression = document.getElementById("result").value;
    let answer = eval(expression);
    document.getElementById("result").value = answer;
}