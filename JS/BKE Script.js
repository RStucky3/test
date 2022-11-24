document.querySelector("#cell1").addEventListener("click", function() {fill(1);});
document.querySelector("#cell2").addEventListener("click", function() {fill(2);});
document.querySelector("#cell3").addEventListener("click", function() {fill(3);});
document.querySelector("#cell4").addEventListener("click", function() {fill(4);});
document.querySelector("#cell5").addEventListener("click", function() {fill(5);});
document.querySelector("#cell6").addEventListener("click", function() {fill(6);});
document.querySelector("#cell7").addEventListener("click", function() {fill(7);});
document.querySelector("#cell8").addEventListener("click", function() {fill(8);});
document.querySelector("#cell9").addEventListener("click", function() {fill(9);});
document.querySelector(".restartknop").addEventListener("click", restartgame); /*eventlisteners voor de cellen*/

const cells = document.querySelectorAll(".cell"); /*individiuele cel*/
const board = document.querySelector(".board"); /*gehele board*/
const info = document.querySelector(".gameinfo"); /*info tekst boven het board*/

let x = "<img src=\"../fotos/profielfoto.jpeg\" width=\"132px\" height=\"132px\">"; /*player 2*/
let y = "<img src=\"../fotos/spelfoto.jpg\" width=\"132px\" height=\"132px\">"; /*player 1*/
let playerturn = y; /*het spel begint bij player 1*/

let gameState = ["", "", "", "", "", "", "", "", ""]; /*het board begint leeg*/
let finished = false; /*of het spel klaar is */ 

function fill(cellnum){ /*functie word uitgevoerd nadat er op een cell is gedrukt*/
    if(gameState[cellnum-1]=="" && finished == false){ /*checkt of het spel nog niet is afgelopen of dat deze cel niet al in gebruik is*/
        cells[cellnum-1].innerHTML=playerturn; /*wordt ingevuld door de speler die aan de beurt is*/
        gameState[cellnum-1]=playerturn; /*wordt in de game state ingevuld*/
        for(let i = 0; i<cells.length; i++){
            cells[i].classList.toggle("backgroundx"); /*het hovereffect wordt aangepast naar de andere speler*/
            cells[i].classList.toggle("backgroundy");
        }
    
        if (playerturn==x){ /*turn wordt overgegeven*/
            playerturn=y;
            info.innerHTML="<h1>Player 1's turn</h1>"; /*info wordt aangepast*/
        }
        else{
            playerturn=x;
            info.innerHTML="<h1>Player 2's turn</h1>";
        }
    
        if(checkWin()){ /*checkt of er al iemand heeft gewonnen*/
            if(playerturn==x){ /*als er iemand heeft gewonnen wordt de winst gegeven aan de speler die aan de beurt was*/
                info.innerHTML="<h1 style=\"color:red;\">PLAYER 1 HAS WON</h1>";
                for(let i = 0; i<cells.length; i++){
                    cells[i].classList.toggle("backgroundy"); /*zorgt dat het hover effect stopt*/
                }
            }
            else{
                info.innerHTML="<h1 style=\"color:red;\">PLAYER 2 HAS WON</h1>";
                for(let i = 0; i<cells.length; i++){
                    cells[i].classList.toggle("backgroundx");
                }
            }
            finished=true; /*variabel zodat je niet verder kan spelen nadat er gewonnen is*/
        }
    }
}

const winningConditions = [ /*alle mogelijke manieren om te winnen*/
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

function checkWin() { /*checkt de winst*/
    for (let i = 0; i <= 7; i++) { /*checkt of 1 van de 7 condities kloppen*/
        const winCondition = winningConditions[i];
        let a = gameState[winCondition[0]];
        let b = gameState[winCondition[1]];
        let c = gameState[winCondition[2]];
        if (a === '' || b === '' || c === '') {
            continue
        }
        if (a === b && b === c) {
            return true;
        }
    }
}

function restartgame(){ /*nadat er op de restart knop wordt gedrukt restart deze functie het spel*/
    if(finished==true){
        for(let i = 0; i<cells.length; i++){ 
            cells[i].classList.toggle("backgroundx");/*hover effect wordt terug gezet*/
        }
    }
    else if(playerturn==x){
        for(let i = 0; i<cells.length; i++){
            cells[i].classList.toggle("backgroundy");
            cells[i].classList.toggle("backgroundx");
        }
    }

    for(let i = 0; i<cells.length; i++){
        cells[i].innerHTML="";
    }

    gameState = ["", "", "", "", "", "", "", "", ""];/*reset de gamestate*/
    finished = false;
    playerturn = y;
    info.innerHTML="<h1>Player 1  Starts</h1>";
}