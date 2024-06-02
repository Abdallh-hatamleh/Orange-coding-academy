function solve() {
    document.getElementById("answer1").innerHTML = document.getElementById("cash_input1").value / document.getElementById("cash_input2").value;
    document.getElementById("answer2").innerHTML = document.getElementById("net1").value - document.getElementById("net2").value;
    document.getElementById("answer3").innerHTML = Number(document.getElementById("total1").value) + Number(document.getElementById("total2").value);
    document.getElementById("answer4").innerHTML = Number(document.getElementById("nett1").value) * Number(document.getElementById("nett2").value);
    document.getElementById("answer5").innerHTML = (Number(document.getElementById("average1").value) + Number(document.getElementById("average2").value)) /2;
    document.getElementById("answer6").innerHTML = document.getElementById("discount1").value *((100 - document.getElementById("discount2").value) /100)   ;
let x = false;
x =( Number(document.getElementById("age_limit")) < 30);
    document.getElementById("answer7").innerHTML = x; //&& ( document.getElementById("age_limit") >18)  
    return 0;
}