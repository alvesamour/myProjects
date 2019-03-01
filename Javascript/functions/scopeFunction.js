//Global scope (convertFahrenheitToCelsius, tempOne, tempTwo)
//Local scope (fahrenheit, celcius)
//local scope (isFreesing)

let convertFahrenheitToCelsius = function (fahrenheit) {
    let celcius = (fahrenheit - 32) * 5 / 9;

    if (celcius <= 0) {
        let isFreesing = true
    }

    return celcius;
}

let tempOne = convertFahrenheitToCelsius(32);
let tempTwo = convertFahrenheitToCelsius(68);

console.log(tempOne);
console.log(tempTwo);