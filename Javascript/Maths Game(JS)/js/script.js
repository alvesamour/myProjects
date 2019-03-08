//If we click on the start/reset
let play = false;
let score;
let conter;
let timemoins;
let vraiReponse;
document.getElementById('startReset').onclick = function () {
    //if we are playing
    if (play == true) {
        //playing
        location.reload(); //reload page
    } else { //if you are not playing
        play = true;
        //score 0
        score = 0;
        document.getElementById('valueScore').innerHTML = `${score}`;
        //show conuntown box
        montrer('time');
        timemoins = 60;
        document.getElementById('timeValue').innerHTML = timemoins;
        //gacher gameOver box
        cacher('gameOver');
        //change button to reset
        document.getElementById('startReset').innerHTML = 'Reset Game';
        //start count
        startCount();
        //generer question reponses

        genererQuestionReponse();
    }
}

//click box
for (i = 1; i < 5; i++) {
    document.getElementById('box' + i).onclick = function () {
        //si on play
        if (play == true) {
            if (this.innerHTML == vraiReponse) {
                //vrais reponse
                score++;
                //ajoute un dans le score
                document.getElementById('valueScore').innerHTML = score;
                //cacher mauvais reponse
                cacher('try');
                montrer('correct');
                setTimeout(function () {
                    cacher('correct');
                }, 1000);
                //generer nouvelles question reponses
                genererQuestionReponse();
            } else {
                //mauvaise reponse
                cacher('correct');
                montrer('try');
                setTimeout(function () {
                    cacher('try');
                }, 1000);
            }
        }
    }
}


//function count time
function startCount() {
    conter = setInterval(function () {
        timemoins -= 1;
        document.getElementById('timeValue').innerHTML = timemoins;
        //not negative
        if (timemoins == 0) {
            stopCount();
            montrer('gameOver');
            document.getElementById('gameOver').innerHTML = `<p>Game Over!</p><p>Tu as eu ${score} reponses.</p>`;
            cacher('time');
            cacher('correct');
            cacher('try');
            play = false;
            document.getElementById('startReset').innerHTML = 'Start Game';
        }
    }, 1000);
}
//function stop compter
function stopCount() {
    clearInterval(conter);
}
//cacher element
function cacher(Id) {
    document.getElementById(Id).style.display = 'none';
}
//montrer element
function montrer(Id) {
    document.getElementById(Id).style.display = 'block';
}

//function generer question
function genererQuestionReponse() {
    let numberOne = 1 + Math.round(9 * Math.random());
    let numberTwo = 1 + Math.round(9 * Math.random());
    vraiReponse = numberOne + numberTwo;
    document.getElementById('question').innerHTML = `${numberOne} + ${numberTwo}`;
    let positionVrais = 1 + Math.round(3 * Math.random());
    //bonne reponse dans une des box
    document.getElementById('box' + positionVrais).innerHTML = vraiReponse;
    //mauvaises reponses dans les autres box
    let reponses = [vraiReponse];
    for (i = 1; i < 5; i++) {
        if (i != positionVrais) {
            let mauvaisReponse;
            do {
                {
                    mauvaisReponse = (1 + Math.round(9 * Math.random())) + (1 + Math.round(9 * Math.random()));

                }
            }
            while (reponses.indexOf(mauvaisReponse) > -1)
            document.getElementById('box' + i).innerHTML = mauvaisReponse;
            reponses.push(mauvaisReponse);
        }
    }
}