//undefined
let name;
//name = 'Alves';
if (name === undefined) {
    console.log('Please provide a name');
} else {
    console.log(name);
}

//undefined for function arguments
//undefined as function return default value
let square = function (num) {
    console.log(num);
}

let result = square();
console.log(result);

//Null as assigned value
let age = 33;
age = null;
console.log(age);