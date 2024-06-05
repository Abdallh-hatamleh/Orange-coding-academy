function  replace_all_text(arr,text)
{
    for(let i =0; i < arr.length; i++)
        {
            arr[i].innerHTML = text;
        }
        
}

//Task 1
document.getElementById("header").innerHTML = "Welcom to DOM manipulation!";
//Task 2 
let objarr = document.getElementsByClassName("class1");
replace_all_text(objarr, "Class Item");
//Task 3
const objarr2 = document.getElementsByTagName("p");
replace_all_text(objarr2, "Paragraph element");
// console.log(objarr)

//Task 4
document.querySelector(".css_selector").innerHTML = "First highlighted Item";

//Task 5
let liarr = document.querySelectorAll("li");
replace_all_text(liarr, "List Item");

//Task 6 
document.querySelector("#footer").innerHTML = "Footer Updated";

//Task 7
replace_all_text(document.querySelectorAll(".box"),"Box Item")

//Task 8 
document.querySelector(".container p").innerHTML = "Task 8";

//Task 9 
document.querySelector('[role = "admin"]').innerHTML = "Admin role";

//Tasl 10
let spanarr = document.getElementsByTagName("span")
replace_all_text(spanarr, "span element")
