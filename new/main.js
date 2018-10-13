let Moveleft = 0;
let Movetop = 0;
let square;
let clickCount = 0;
let counter;

function moveRect(e){
    square = document.getElementById("square");
    var cs = window.getComputedStyle(square);
    
    switch(e.keyCode){
            
        case 37: 
            if(Moveleft>0)
            Moveleft -= 10;
            
            break;
        case 38:
            if (Movetop>0)
                Movetop -= 10;
            
            break;
        case 39:
            if (Moveleft < document.documentElement.clientWidth - 100)
            Moveleft +=10
            break;
        case 40: 
            if(Movetop < document.documentElement.clientHeight - 100)
                Movetop += 10;
            break;
    }
    coord(Moveleft, Movetop);
}

function coord(left,top){
    square.style.marginLeft = left + "px";
    square.style.marginTop = top + "px";
}

addEventListener("keydown", moveRect);

function Clicker(){
  clickCount += 1;
    console.log("Количество кликов на квадрат: " + clickCount);
  
}

function colorChanger(){
    square.style.backgroundColor = prompt("bgColor?", "green");
}































