let NumOfmoney =parseInt(prompt('Сколько у вас денег?'));
let NumOfapples = prompt('Сколько у вас яблок?');
let NumOfbread = prompt('Сколько у вас хлеба?');
let priceOfAllApples = parseInt(prompt('Сколько стоит одно яблоко?'))*NumOfapples;
let priceOfAllBread = parseInt(prompt('Сколько стоит батон хлеба?'))*NumOfbread;
let isMoneyOk = false;

if ((priceOfAllApples + priceOfAllBread) > NumOfmoney){
	isMoneyOk = false;
    document.body.innerHTML = "У вас не хватает денег :(";
}else{
	isMoneyOk = true;
    document.body.innerHTML = "У вас хватает денег!";
}