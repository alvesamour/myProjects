let myPerson = {
    name: 'Romilson',
    age: 33,
    location: 'Luxembourg'
}

let otherPerson = {
    name: 'Victor',
    age: 4,
    location: 'Luxembourg'
}

let getPerson = function (person) {
    return {
        description: `${person.name} is ${person.age}`,
        countryLives: `${person.name} lives in ${person.location}`
    }
}

let myPersonDescription = getPerson(myPerson);
let myPersonLives = getPerson(otherPerson);

console.log(myPersonLives.countryLives);

//Challenge
//Create function - take fahrenheit - return object with all three
let converteFahrenheit = function (fahrenheit) {
    return {
        fahrenheit: fahrenheit,
        kelvin: (fahrenheit + 459.67) * (5 / 9),
        celcius: (fahrenheit - 32) * (5 / 9)
    }
}

let temp = converteFahrenheit(75);
console.log(temp);