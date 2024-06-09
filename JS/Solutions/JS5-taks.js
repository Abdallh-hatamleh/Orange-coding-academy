let button1 = document.getElementById("button1");
button1.addEventListener("click", function() {alert("Button clicked")});
let p1 = document.getElementsByTagName("p")[0]
button1.addEventListener("click", function() {p1.innerText = "text changed"});
let dc = document.querySelector("#DC");
dc.addEventListener("dblclick",function() {dc.style.backgroundColor = "Red"});
let me = document.querySelector("#mouseEnter");
let meOriginalText = me.innerText;
me.addEventListener("mouseover", function() {me.innerText = "changed text"});
me.addEventListener("mouseout", function() {me.innerText = meOriginalText});
let subBtn = document.getElementById("subBtn");

