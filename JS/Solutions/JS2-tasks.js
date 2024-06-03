let message = "";
for(let i = 1; i <11; i++)
    {
        message = message.concat(" ", i);
    }
document.getElementById("t1").innerHTML = document.getElementById("t1").innerHTML.concat(" ", message);
let t2 = document.getElementById("t2");
let o = 1;
message = "";
while(o < 11)
    {
        message = message.concat(" ", o);
        console.log(o);
        o++;
    }

t2.innerHTML = t2.innerHTML.concat(" ", message);