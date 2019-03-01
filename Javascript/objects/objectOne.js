let myBook = {
    title: '1984',
    author: 'George Orwell',
    pageCount: 400
}

console.log(`${myBook.title} by ${myBook.author}`);

myBook.title = 'Matrix';
console.log(`${myBook.title} by ${myBook.author}`);

//Challenge
//name, age, location
let myPerson = {
    name: 'Romilson',
    age: 33,
    location: 'Luxembourg'
}

console.log(`${myPerson.name} is ${myPerson.age} years old and lives in ${myPerson.location}.`);
myPerson.age = myPerson.age + 1;
console.log(`${myPerson.name} is ${myPerson.age} years old and lives in ${myPerson.location}.`);