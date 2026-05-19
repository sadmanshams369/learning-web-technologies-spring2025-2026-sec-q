let cells = document.querySelectorAll(".cell");
let statusText = document.getElementById("status");

let currentPlayer = "X";
let gameActive = true;

let winConditions = [
    [0,1,2],
    [3,4,5],
    [6,7,8],
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [0,4,8],
    [2,4,6]
];

cells.forEach(function(cell){

    cell.addEventListener("click", function(){

        if(cell.textContent !== "" || !gameActive){
            return;
        }

        cell.textContent = currentPlayer;
        checkWinner();

        if(!gameActive){
        return;
      }
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
    gameActive = true;
    statusText.textContent = "Player X Turn";
}

function checkWinner(){

    let board = [];

    cells.forEach(function(cell){
        board.push(cell.textContent);
    });

    for(let i = 0; i < winConditions.length; i++){

        let a = winConditions[i][0];
        let b = winConditions[i][1];
        let c = winConditions[i][2];

        if(board[a] !== "" && board[a] === board[b] && board[b] === board[c]){

            statusText.textContent = "Player " + board[a] + " Wins!";
            gameActive = false;
            return;
        }
    }

    if(!board.includes("")){
        statusText.textContent = "It's a Draw!";
        gameActive = false;
    }
}