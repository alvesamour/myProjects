//student score
//15/20 -> you got a C(75%)!
//90-100->A, 80-89->B, 60-69->D, 0-59->F

let calculateScore = function (score, totalScore) {
    let percent = (score / totalScore) * 100;
    let letterScore = '';

    if (percent >= 90) {
        letterScore = 'A';
    } else if (percent >= 80) {
        letterScore = 'B';
    } else if (percent >= 70) {
        letterScore = 'C';
    } else if (percent >= 60) {
        letterScore = 'D';
    } else {
        letterScore = 'F';
    }
    return `You got a ${letterScore} (${percent}%)!`;
}
let result = calculateScore(10, 20);
console.log(result);