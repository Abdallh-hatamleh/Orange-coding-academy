//Task 1
let button1 = document.getElementById("button1");
button1.addEventListener("click", function() {alert("Button clicked")});
//Task 2
let p1 = document.getElementsByTagName("p")[0]
button1.addEventListener("click", function() {p1.innerText = "text changed"});
//Task 3
let dc = document.querySelector("#DC");
dc.addEventListener("dblclick",function() {dc.style.backgroundColor = "Red"});
//Task 4
let me = document.querySelector("#mouseEnter");
let meOriginalText = me.innerText;
me.addEventListener("mouseover", function() {me.innerText = "changed text"});
//Task 5    
me.addEventListener("mouseout", function() {me.innerText = meOriginalText});
//Task 6
document.getElementById("form1").addEventListener("submit",(e) => {
    e.preventDefault();
    console.log("Form not submitted");
});
//Task 7
let inp1 = document.getElementById("inp1")
inp1.addEventListener("focus",function() {inp1.style.backgroundColor = "aqua"});
//Task 8 
inp1.addEventListener("focusout", () => {inp1.style.background = "none"})
//Task 9
inp1.addEventListener("keydown", (e) => {console.log(e.key)});
//Task 10
let classShifter = document.getElementById("classad");
classShifter.addEventListener("dblclick",() => {classShifter.classList.add("shiftTo")});
//Task 11
let form2 = document.getElementById("form2");
let f2user = document.getElementById("f2user");
let f2pass = document.getElementById("f2pass");
form2.addEventListener("submit", (e) => {
    if(f2user.value == "abdallh" && f2pass.value == "password") console.log("form submitted");
        else 
    {
        e.preventDefault();
        alert("WRONG CREDINTIALS");
        document.getElementById("hint").innerText = "abdallh password";
    }
})
//Task 12
let imgBtn = document.getElementById("imgchanger");
let img = document.getElementsByTagName("img")[0];
imgBtn.addEventListener("click", () => { 
    if(img.src == "../../Media/warning.webp") {
            img.src = "../../Media/jo-circle-01.png";
        }
    else {img.src = "../../Media/warning.webp";}
})
//Task 13
let passchk = document.getElementById("passchk");
passchk.addEventListener("change", () => {
    if (f2pass.type == "text") {
        f2pass.type = "password";
    } else {
        f2pass.type = "text";
    }
})
//Task 14
    let coloredDiv = document.getElementById("coloredDiv");
    let colorChanger = document.getElementById("colorChanger");
    colorChanger.addEventListener("change", () => {
        coloredDiv.style.backgroundColor = colorChanger.value;
    })
//Task 15
    let catImg = document.getElementById("catimg");
    let prevBtn = document.getElementById("prev");
    let nextBtn = document.getElementById("next");
    let catArray = ["https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        "https://images.unsplash.com/photo-1608848461950-0fe51dfc41cb?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8fA%3D%3D",
        "https://i.natgeofe.com/n/548467d8-c5f1-4551-9f58-6817a8d2c45e/NationalGeographic_2572187_square.jpg",
        "https://images.unsplash.com/photo-1615789591457-74a63395c990?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8ZG9tZXN0aWMlMjBjYXR8ZW58MHx8MHx8fDA%3D"];
    catImg.src = catArray[1];
    prevBtn.addEventListener("click", () => 
    {
        if (catImg.src == catArray[0]) {
            
        } else {
            for(let i = 0; i < catArray.length; i++)
                {
                    if (catArray[i] == catImg.src) {
                        catImg.src = catArray[i-1];
                    }
                }
        }
    })
    nextBtn.addEventListener("click", () => 
    {
        if (catImg.src == catArray[3]) {
            
        } else {
            for(let i = 0; i < catArray.length; i++)
                {
                    if (catArray[i] == catImg.src) {
                        catImg.src = catArray[i+1];
                        break;
                        console.log(catArray[i+1])
                    }
                }
        }
    })
//Task 16 
let stringarray = ["string1", "string2", "string3"];
let div16 = document.getElementById("task16");
let Btn16 = document.getElementById("task16Btn");
let stringcount = 0;
Btn16.addEventListener("click",() => {
    if(stringcount == 0) {
            div16.innerHTML = stringarray[0];
        }
    else if(stringcount < stringarray.length){
        div16.innerHTML = div16.innerHTML.concat(" ",stringarray[stringcount]);
    }
    stringcount++;
})
//Task 17
let cMenu = document.getElementById("customContext");
document.addEventListener("contextmenu",function(e) {
    let mouseY = e.clientY;
    let mouseX = e.clientX;
e.preventDefault();
cMenu.style.top = mouseY + "px";
cMenu.style.left = mouseX + "px";
cMenu.style.visibility = "visible";
})

document.addEventListener("click", () =>
{
    cMenu.style.visibility = "hidden";
})
//Task 18
window.addEventListener("resize", () => 
{
    let dimensions = "Height: " + window.innerHeight + ", Width: " + window.innerWidth;
    console.log(dimensions);
})
//Task 19
const scrollBtn = document.getElementById("scroll")
scrollBtn.addEventListener("click", () => 
{
document.documentElement.scrollTo(
{
    top : 0,
    behavior : "smooth",
});
});
//Task 20 
const linky = document.getElementsByTagName("a")[0];
linky.addEventListener("click", (e) => {
    e.preventDefault();
    linky.innerText = "SIKE!";
})
//Task 21
let tooltip = document.getElementById("tooltip");
catImg.addEventListener("mouseenter", (e) => {
    tooltip.style.top = e.clientY + "px";
    tooltip.style.left = e.clientX + "px";
    tooltip.style.visibility = "visible";
})
catImg.addEventListener("mouseleave", () =>
{
    tooltip.style.visibility = "hidden";
})