//you can't define a variable more than once
//After you declare a variable, you can reference it by name elsewhere in your code.
//You can give an existing variable a new value at any point after it’s declared.
let petName = 'Hal';
petName = 'Spot';

console.log(petName);

//Naming variables
//Variable names are pretty flexible as long as you follow a few rules:
//Start them with a letter, underscore _, or dollar sign $.
//After the first letter, you can use numbers, as well as letters, underscores, or dollar signs.
//Don’t use any of JavaScript’s reserved keywords.
//There are rules related to variable names
let test_ = 2;
let result = 3 + 4;
let camelCase = "lowercase word, then uppercase";
let dinner2Go = "pizza";
let I_AM_HUNGRY = true;
let _Hello_ = "what a nice greeting"
let $_$ = "money eyes";

//Variable names cannot be reserved keywords
// let let = 2;
//let function = false;
//let class = "easy";

//And here are some invalid variable names
//let total% = 78;
//let 2fast2catch = "bold claim";


//You can even use a variable when declaring other variables.
let x = 100;
let y = x + 102;
console.log(y);