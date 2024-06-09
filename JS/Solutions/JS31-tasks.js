//Task 1 
function calculatearea(r) {
    return Math.PI * (r * r);
}
//Task 2
let reversestring = function(stringpar) 
{
    let temp = "";
    for(let i = stringpar.length - 1; i >= 0; i--)
{
    temp = temp.concat("", stringpar[i]);
}
return temp;
}
//Task 3 
let filterEvenNumbers = (x) =>  {
    let temp = [];
    for(let i =0; i < x.length; i++)
        {
            // console.log(x[i])
            if(x[i] % 2 == 0)
                {    
                temp.push(x[i]);
                }
        }
    return temp;
}
//Task 4 
const library = {
    books: [
        {title : "example book",
         author : "example author" 
        }
        , 
        {
            title : "da vinci's code" ,
            author : "Dan Brown"
        }
        ,
        {
            title: "Communist manifsto",
            author: "Karl marx"
        }
    ],
    addbook : function(x) {
        this.books.push(x)
    }
}
//Task 5
const numbers = [1,2,4,5,7,1,2,13,53,874,21];
function sumarray(x)
{
    let temp = 0;
for(let i = 0; i < x.length; i++)
    {
        temp += x[i];
    }
    return temp;
}
//Task 6
const vowels = ['a','e','i','o','u'];
    function countvowels(x)
    {
        let counter = 0;
        for(let i = 0; i < x.length;i++)
            {
                for(let o = 0; o < vowels.length; o++)
                    {
                        if(x[i] == vowels[o]) counter++;
                    }
            }
        return counter;
    }
//Task 7 
function capitalizefirst(x)
{
    let xarr = x.split(" ");
    let temp = "";
    for(let i =0; i < xarr.length; i++)
        {    
         xarr[i] = xarr[i][0].toUpperCase() + xarr[i].slice(1); 
         temp = temp.concat(" ", xarr[i]);
        }
    return temp;
}
//Task 8
function splitnreverse(x)
{
    let temp = x.split(" ");
    let temparray = [];
    let counter = 0;
    for(let i = temp.length - 1; i >= 0; i--)
        {
            temparray[counter] = temp[i];
            counter++;
        }
    return temparray;
}

