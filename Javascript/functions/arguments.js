//Multiples arguments
let add = function (a, b, c) {
    return a + b + c;
};

let result = add(10, 2, 5);
console.log(result);

//Default arguments
let getScoreText = function (name = "Alves", score = 10) {
    return `Name: ${name} - Score: ${score}`;
};

let scoreText = getScoreText(undefined, 99);
console.log(scoreText);

//challenge
//total, tipPercent .2 20%
let getTip = function (total, tipPercent = 0.25) {
    let percent = tipPercent * 100;
    let tip = total * tipPercent;
    return `A ${percent}% tip on $${total} would be $${tip}`;
};
let tip = getTip(40);
console.log(tip);