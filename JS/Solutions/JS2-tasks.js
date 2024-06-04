// Task 1
let message = "";
for (let i = 1; i < 11; i++) {
    message = message.concat(" ", i);
}
document.getElementById("t1").innerHTML = document.getElementById("t1").innerHTML.concat(" ", message);
// Task 2
let t2 = document.getElementById("t2");
let o = 1;
message = "";
while (o < 11) {
    message = message.concat(" ", o);
    // console.log(o);
    o++;
}

t2.innerHTML = t2.innerHTML.concat(" ", message);
// Task 3
message = "";
for (let i = 0; i < 11; i++) {
    if (i % 2 == 0) {
        message = message.concat(" ", i);
    }
}
let t3 = document.getElementById("t3");
t3.innerHTML = t3.innerHTML.concat(" ", message);

// Task 4
let t4 = document.getElementById("t4");
message = 0;
for (let i = 1; i < 11; i++) {
    message += i;
}
t4.innerHTML = t4.innerHTML.concat(" ", message);
// Task 5
let t5 = document.getElementById("t5");
message = "";
for (let i = 0; i < 11; i++) {
    if (((i % 2) != 0)) {
        message = message.concat(" ", i);
    }
    else {
    }
}
t5.innerHTML = t5.innerHTML.concat(" ", message);
//Task 6
let t6 = document.getElementById("t6");
message = "";
function checkage() {
    let age = document.getElementById("age");
    t6.innerHTML = "You are";
    if (age.value > 27) {
        // console.log(message);
        message = "an adult";
    }
    else { message = "a child"; }
    t6.innerHTML = t6.innerHTML.concat(" ", message);
}
setInterval(checkage, 200);
//Task 7

let t7 = document.getElementById("t7");
message = "";
let score = document.getElementById("score");
function checkscore() {
    if ((score.value <= 45) && score.value > 0) {
        t7.innerHTML = "you have failed";
    }
    else if ((score.value < 100) && (score.value > 45)) { t7.innerHTML = "You passed"; }
    else { t7.innerHTML = "..."; }
}
setInterval(checkscore, 200);

//Coach salameh's task
// let i = 0.25;
// message = "";
// for(var days = 0; i <= 477.75; days++)
//     {
//         i += 0.25;
//         if(i == 477.75) { 
//             message = days;
//         }
//     }
// console.log(message);

//Task 8 
let t8 = document.getElementById("t8");
message = "";
let namee = document.getElementById("name");
function checkname() {
    t8.innerHTML = "";
    if (namee.value == "john") {
        t8.innerHTML = "Hello, john";
    }
    else if (namee.value != "") { t8.innerHTML = "(not in task)Hello ,".concat(" ", namee.value); }
}
setInterval(checkname, 200);

//Task 9 
let t9 = document.getElementById("t9");
let weekday = document.getElementById("weekday");
function TASK9() {

    if ((weekday.value == "friday" || weekday.value == "saturday")) {
        t9.innerHTML = "";
    }
    else if (weekday.value != "") {
        t9.innerHTML = "It's a weekday";
    }

}
setInterval(TASK9, 200);

//Task 10
let t10 = document.getElementById("t10");
let evenum = document.getElementById("evenum");
function checkeven() {
    // console.log("t");
    if (evenum.value % 2 == 0) {
        t10.innerHTML = "This number is even";
    }

    else t10.innerHTML = "";
}
setInterval(checkeven, 200);

//Task 11 
let t11 = document.getElementById("t11");
let x = document.getElementById("xvar");

function checkpos() 
{
    if(x.value > 0)     t11.innerHTML = "This number is positive";
    else t11.innerHTML = "";
        
}
setInterval(checkpos, 200);

//Task12
let t12 = document.getElementById("t12");
let y = document.getElementById("yvar");

function checkneg() 
{
    if(y.value < 0)     t12.innerHTML = "This number is negative";
    else t12.innerHTML = "";
}
setInterval(checkneg, 200);

//Task13
let t13 = document.getElementById("t13");
let gpa = document.getElementById("gpa");

function gpacalc()
{
    console.log("func");
    if (gpa.value > 3.0)
        {
            // console.log("cond");
            t13.innerHTML = "You have a good gpa";
        }
    else t13.innerHTML = "disappointment";
}
setInterval(gpacalc,200);

//Task 14
let t14 = document.getElementById("t14");
let prime = document.getElementById("prime");

function checkprime()
{
    let primeq = true;
    if(prime.value < 0) primeq = false;
    else if(prime.value != "" && prime.value != 1)
    {
        for(let i = (prime.value - 1); i > 1; i--)
            {
                console.log("in");
                if(prime.value% i == 0)
                    primeq = false;
            }
    }
    if(primeq == true) t14.innerHTML = "This number is prime";
    else t14.innerHTML = "this number is not prime";
}
setInterval(checkprime, 200);
