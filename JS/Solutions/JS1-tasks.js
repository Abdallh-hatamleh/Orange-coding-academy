function solve() {
    document.getElementById("answer1").innerHTML = document.getElementById("cash_input1").value / document.getElementById("cash_input2").value;
    document.getElementById("answer2").innerHTML = document.getElementById("net1").value - document.getElementById("net2").value;
    document.getElementById("answer3").innerHTML = Number(document.getElementById("total1").value) + Number(document.getElementById("total2").value);
    document.getElementById("answer4").innerHTML = Number(document.getElementById("nett1").value) * Number(document.getElementById("nett2").value);
    document.getElementById("answer5").innerHTML = (Number(document.getElementById("average1").value) + Number(document.getElementById("average2").value)) /2;
    document.getElementById("answer6").innerHTML = document.getElementById("discount1").value *((100 - document.getElementById("discount2").value) /100)   ;
    let x = document.getElementById("age").value < 30;
    let y = document.getElementById("age").value > 18;
    document.getElementById("answer7").innerHTML = x && y;
    document.getElementById("answer8").innerHTML = document.getElementById("expo1").value ** document.getElementById("expo2").value //"k"+1
    document.getElementById("answer9").innerHTML = document.getElementById("remainder1").value % document.getElementById("remainder2").value //"k"+1
    return 0;
}

function Task2()
{
    document.write(typeof(100));
    document.write(" , ");
    document.write(typeof(73.9));
    document.write(" , ");
    document.write(typeof(NaN));
    document.write(" , ");
    document.write(typeof("Water"));
    document.write(" , ");
    document.write(typeof(9 != 11));
    document.write(" , ");
    document.write("Orang" + "e");
    document.write(" , ");
    document.write("Orange" - "s");
    document.write(" , ");
    document.write("4" + "8");
    document.write(" , ");
    document.write("4" - "8");
    document.write(" , ");
    document.write("name" + 3);
    document.write(" , ");
    document.write("name" - 3);
    document.write(" , ");
    document.write(82 * "word");
    document.write(" , ");
    document.write(1 + "hello");
    document.write(" , ");
    document.write("hello" + 1);
    document.write(" , ");
    document.write(1 + true);
    document.write(" , ");
    document.write("hello" + true);
    document.write(" , ");
    document.write(typeof (Infinity));
    document.write(" , ");
    document.write(1 == '1');
    document.write(" , ");
    document.write(1 === '1');
}

function Task3() 
{
    let x = "Welcome to Orange";
    let upperx = x.toUpperCase();
    document.write(upperx);
    let sliceofx = upperx.slice(7,10);
    document.write(" , ");
    document.write(sliceofx);
    document.write(" , ");
    let hello = x.replace("Welcome to", "Hello from");
    document.write(hello);
    document.write(" , ");
    let lowerx = x.toLowerCase();
    document.write(lowerx);
    let sizer = x.length;
    document.write(" , ");
    document.write(sizer);
    let quoties = x.replace("Orange", "\"orange\"")
    document.write(" , ");
    document.write(quoties);
    document.write(" , ");
    document.write(x.concat(" ", "jordan"));
}

function Task4()
{
    alert("welcome!");
}

function Task5() {

}

function Task6() {

    
        {
            var x = "this is a var";
            let y = "this is a let";
            document.write("inside a block:" + x + " , " + y);  
        }

    document.write("    ,   outside block:" + x + y);
}

//Task 7
function refresh()
{
    a = Number(document.getElementById("task71").value);
    b = Number(document.getElementById("task72").value);
}
let a = Number(document.getElementById("task71").value);
let b = Number(document.getElementById("task72").value);
let ans = document.getElementById("task7ans");
function addition()
{
   refresh();
    ans.innerHTML = a + b;
}
function subtract() 
{
   refresh();
    ans.innerHTML = a-b;
}
function multi()
{
   refresh();
    ans.innerHTML = a*b;
}
function division()
{
   refresh();
    ans.innerHTML = a/b;
}
function modulus()
{
   refresh();
    ans.innerHTML = a % b;
}
function greater()
{
   refresh();
    ans.innerHTML = a > b;
}

function lesser()
{
    refresh();
    ans.innerHTML = a < b;
}

function equalto()
{
    refresh();
    ans.innerHTML = a == b;
}

function unequalto() 
{
    refresh();
    ans.innerHTML = a != b;
}

function greatereq()
{
    refresh();
    ans.innerHTML = a >= b;
}

function lesseq()
{
    refresh();
    ans.innerHTML = a <= b;
}

function pluseq()
{
    refresh();
    a += b;
    ans.innerHTML = "a =" + a;
}

function minuseq()
{
    refresh();
    a -= b;
    ans.innerHTML = "a =" + a;
}
function timeseq()
{
    refresh();
    a *= b;
    ans.innerHTML = "a =" + a;
}
function and() 
{
    a = document.getElementById("task71").value;
    b = document.getElementById("task72").value;
    ans.innerHTML = a && b;
}
function or() 
{
    a = document.getElementById("task71").value;
    b = document.getElementById("task72").value;
    ans.innerHTML = (a) || (b);
}

function not()
{
    a = document.getElementById("task71").value;
    b = document.getElementById("task72").value;
    ans.innerHTML = !(a);
}

//Task 8 

document.getElementById("task8").innerHTML = "Task 8";
alert("Task8");
console.log("task8");