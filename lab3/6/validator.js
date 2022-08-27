check = true;
var i = 0;
function tictactoe(boxid) {
    let turn = document.getElementById("turn");
    let change = document.getElementById(boxid);
    i++;
    if (i % 2 == 0) {
        turn.innerHTML = "It's Turn : X Player";
    } else {
        turn.innerHTML = "It's Turn : O Player";
    }
    if (check && change.innerHTML == "" && boxid != "reset") {
        change.innerHTML = "X";
        check = false;
        change.style.borderColor = "#04c0b2";
        checkwin();
    } else if (!check && change.innerHTML == "" && boxid != "reset") {
        change.innerHTML = "O";
        check = true;
        change.style.borderColor = "#04c0b2";
        checkwin();
    } else if (boxid == "reset") {
        reset();
    }
}

function reset() {
    i = 0;
    check = true;
    turn.innerHTML = "It's Turn : X Player";
    box1.innerHTML = "";
    box2.innerHTML = "";
    box3.innerHTML = "";
    box4.innerHTML = "";
    box5.innerHTML = "";
    box6.innerHTML = "";
    box7.innerHTML = "";
    box8.innerHTML = "";
    box9.innerHTML = "";
    
    box1.style.borderColor = "black";
    box2.style.borderColor = "black";
    box3.style.borderColor = "black";
    box4.style.borderColor = "black";
    box5.style.borderColor = "black";
    box6.style.borderColor = "black";
    box7.style.borderColor = "black";
    box8.style.borderColor = "black";
    box9.style.borderColor = "black";
}

function checkwin() {
    if (box1.innerHTML == box4.innerHTML && box4.innerHTML == box7.innerHTML && box1.innerHTML != "") {
        alert("Player " + box1.innerHTML + " WIN!!");
        reset();
    } else if(box2.innerHTML == box5.innerHTML && box5.innerHTML == box8.innerHTML && box2.innerHTML != ""){
        alert("Player " + box2.innerHTML + " WIN!!");
        reset()
    } else if(box3.innerHTML == box6.innerHTML && box6.innerHTML == box9.innerHTML && box3.innerHTML != ""){
        alert("Player " + box3.innerHTML + " WIN!!");
        reset();
    } else if(box1.innerHTML == box2.innerHTML && box2.innerHTML == box3.innerHTML && box1.innerHTML != ""){
        alert("Player " + box1.innerHTML + " WIN!!");
        reset();
    } else if(box4.innerHTML == box5.innerHTML && box5.innerHTML == box6.innerHTML && box4.innerHTML != ""){
        alert("Player " + box4.innerHTML + " WIN!!");
        reset();
    } else if(box7.innerHTML == box8.innerHTML && box8.innerHTML == box9.innerHTML && box7.innerHTML != ""){
        alert("Player " + box7.innerHTML + " WIN!!");
        reset();
    } else if(box1.innerHTML == box5.innerHTML && box5.innerHTML == box9.innerHTML && box1.innerHTML != ""){
        alert("Player " + box1.innerHTML + " WIN!!");
        reset();
    } else if(box3.innerHTML == box5.innerHTML && box5.innerHTML == box7.innerHTML && box3.innerHTML != ""){
        alert("Player " + box3.innerHTML + " WIN!!");
        reset();
    } else if(box1.innerHTML != "" && box2.innerHTML != "" && box3.innerHTML != "" && box4.innerHTML != "" && box5.innerHTML != "" && box6.innerHTML != "" && box7.innerHTML != "" && box8.innerHTML != "" && box9.innerHTML != ""){
        alert("Game Draw!!");
        reset();
    }
}