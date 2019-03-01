//Function - input(argument), code, output(return value)

let greetUser = function () {
    console.log('Welcome user!');
}

greetUser();

let square = function (num) {
    let result = num * num;
    return result;
}

let value = square(3);
console.log(value);

//challange

//convertFahrenheitToCelcius
//Call a couple of times (32 -> 0) (68 -> 20)
//Print the converted values

let convertFahrenheitToCelcius = function (temp) {
    let celcius = (temp - 32) * (5 / 9);
    return celcius;
}

let celciusResult = convertFahrenheitToCelcius(32);
let celciusResultOther = convertFahrenheitToCelcius(68);
console.log('The temperature of 32 F is: ' + celciusResult);
console.log('The temperature of 68 F is: ' + celciusResultOther);