let cells = document.querySelectorAll(".cell");
let statusText = document.getElementById("status");

let currentPlayer = "X";

cells.forEach(function(cell){

    cell.addEventListener("click", function(){

        if(cell.textContent !== ""){
            return;
        }

        cell.textContent = currentPlayer;

        if(currentPlayer === "X"){
            currentPlayer = "O";
        }
        else{
            currentPlayer = "X";
        }

        statusText.textContent = "Player " + currentPlayer + " Turn";

    });

});


function resetGame(){

    cells.forEach(function(cell){
        cell.textContent = "";
    });

    currentPlayer = "X";
    statusText.textContent = "Player X Turn";
}