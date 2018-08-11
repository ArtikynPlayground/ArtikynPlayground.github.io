var shark,noshark, password;
function onshark(){
    shark = document.getElementById("hereShark");
    shark.outerHTML = '<div id="sharkWrapper"><img src="img/shark.jpg" alt="" id="sharkImg"><p>Введите имя создателя чтобы убрать акулку и нажмите на кнопку: <input type="text" id="password"><button onclick="checkPass()">Убрать</button></p></div>';
  }
function checkPass(){
    noshark = document.getElementById("sharkWrapper");
      password = document.getElementById("password").value
    if (password == "Артур"){
       noshark.outerHTML = '<a href="#" id="hereShark">#</a>'; 
       
    }
}
