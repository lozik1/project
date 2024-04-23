
function closeAndOpenModals() {
    $('#topic1Examples').modal('hide'); // Закрыть второе модальное окно
    $('#exampleModal').modal('show'); // Открыть первое модальное окно
}

    function closeAndOpenModals2() {
        $('#topic2Examples').modal('hide');
        $('#topic2').modal('show');
    }

    function closeAndOpenModals3() {
        $('#topic3Examples').modal('hide');
        $('#topic3').modal('show');
    }

    function closeAndOpenModals4() {
        $('#topic4Examples').modal('hide');
        $('#topic4').modal('show');
    }

    function closeAndOpenModals5() {
        $('#topic5Examples').modal('hide');
        $('#topic5').modal('show');
    }
    function closeAndOpenModals6() {
        $('#topic6Examples').modal('hide');
        $('#topic6').modal('show');
    }

    function closeAndOpenModals7() {
        $('#topic7Examples').modal('hide');
        $('#topic7').modal('show');
    }

    function closeAndOpenModals8() {
        $('#topic8').modal('show');
        $('#topiс8Examples').modal('hide');
    }

    function closeAndOpenModals9() {
        $('#topic9').modal('show');
        $('#topiс9Examples').modal('hide');
    }

    function closeAndOpenModals10() {
        $('#topic10').modal('show');
        $('#topiс10Examples').modal('hide');
    }

    function closeAndOpenModals11() {
        $('#topic11').modal('show');
        $('#topiс11Examples').modal('hide');
    }

    function closeAndOpenModals12() {
        $('#topic12').modal('show');
        $('#topiс12Examples').modal('hide');
    }

    function closeAndOpenModals13() {
        $('#topic13').modal('show');
        $('#topiс13Examples').modal('hide');
    }

    function closeAndOpenModals14() {
        $('#topic14').modal('show');
        $('#topiс14Examples').modal('hide');
    }

    function closeAndOpenModals15() {
        $('#topiс15Examples').modal('hide'); 
        $('#topic15').modal('show'); 
    }
    


    document.getElementById("showResults").addEventListener("click", function() {
        let answers = document.querySelectorAll("input[type='text']");

        // Правильные ответы для каждой задачи
        const correctAnswers = [14, -30, -22];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            // Проверка правильности ответа
            if (index < correctAnswers.length && userInput === String(correctAnswers[index])) {
                isCorrect = true;
            }

            // Обводка ячейки рамкой с цветом в зависимости от правильности ответа
            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });

document.getElementById("showResults2").addEventListener("click", function() {
    let answers = document.querySelectorAll("#topic2Examples input[type='text']");

    // Правильные ответы для каждой задачи
    const correctAnswers = [
        "0,88",
        "0,85",
        "0,5"
    ];

    answers.forEach(function(answer, index) {
        let userInput = answer.value.trim();
        let isCorrect = false;

        // Проверка правильности ответа
        if (index < correctAnswers.length && userInput.toLowerCase() === correctAnswers[index].toLowerCase()) {
            isCorrect = true;
        }

        // Обводка ячейки рамкой с цветом в зависимости от правильности ответа
        answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults3").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topic3Examples input[type='text']");

        // Правильные ответы для задач по числовым последовательностям и прогрессиям
        const correctAnswers = [17 , 10 , 5 , 2812 ];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            // Проверка правильности ответа
            if (index < correctAnswers.length && userInput === String(correctAnswers[index])) {
                isCorrect = true;
            }

            // Обводка ячейки рамкой с цветом в зависимости от правильности ответа
            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults4").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topic4Examples input[type='text']");

        // Правильные ответы для задач по числовым последовательностям и прогрессиям
        const correctAnswers = [75 , 6 , 18];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            // Проверка правильности ответа
            if (index < correctAnswers.length && userInput === String(correctAnswers[index])) {
                isCorrect = true;
            }

            // Обводка ячейки рамкой с цветом в зависимости от правильности ответа
            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults5").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topic5Examples input[type='text']");

        // Правильные ответы для задач по числовым последовательностям и прогрессиям
        const correctAnswers = [ 2 , 24  , -16];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            // Проверка правильности ответа
            if (index < correctAnswers.length && userInput === String(correctAnswers[index])) {
                isCorrect = true;
            }

            // Обводка ячейки рамкой с цветом в зависимости от правильности ответа
            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults6").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topic6Examples input[type='text']");

        // Правильные ответы для задач по числовым последовательностям и прогрессиям
        const correctAnswers = [ 0 , 1  , 0];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            // Проверка правильности ответа
            if (index < correctAnswers.length && userInput === String(correctAnswers[index])) {
                isCorrect = true;
            }

            // Обводка ячейки рамкой с цветом в зависимости от правильности ответа
            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults7").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topic7Examples input[type='text']");

        // Правильные ответы для задач по числовым последовательностям и прогрессиям
        const correctAnswers = ['b+1/b', '2', 'm+n'];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            // Проверка правильности ответа
            if (index < correctAnswers.length && userInput === String(correctAnswers[index])) {
                isCorrect = true;
            }

            // Обводка ячейки рамкой с цветом в зависимости от правильности ответа
            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults9").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topiс9Examples input[type='text']");

        const correctAnswers = ['x^4/y^5', 'x^2/(x+1)^2', '8x^3/(2-x)^3'];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            if (index < correctAnswers.length && userInput === correctAnswers[index]) {
                isCorrect = true;
            }

            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});


document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults10").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topiс10Examples input[type='text']");

        const correctAnswers = ['1/8', '1/729', '-33'];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            if (index < correctAnswers.length && userInput === correctAnswers[index]) {
                isCorrect = true;
            }

            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults11").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topiс11Examples input[type='text']");

        const correctAnswers = ['3384', '15', '35'];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            if (index < correctAnswers.length && userInput === correctAnswers[index]) {
                isCorrect = true;
            }

            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults12").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topiс12Examples input[type='text']");

        const correctAnswers = ['1,2', '3', '33'];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            if (index < correctAnswers.length && userInput === correctAnswers[index]) {
                isCorrect = true;
            }

            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults13").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topiс13Examples input[type='text']");

        const correctAnswers = ['3x^2-2x+5', '2y^4-3y^2+6y'];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            if (index < correctAnswers.length && userInput === correctAnswers[index]) {
                isCorrect = true;
            }

            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults14").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topiс14Examples input[type='text']");

        const correctAnswers = ['5', '8' , '11'];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            if (index < correctAnswers.length && userInput === correctAnswers[index]) {
                isCorrect = true;
            }

            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("showResults15").addEventListener("click", function() {
        let answers = document.querySelectorAll("#topiс15Examples input[type='text']");

        const correctAnswers = ['5', '8' , '11'];

        answers.forEach(function(answer, index) {
            let userInput = answer.value.trim();
            let isCorrect = false;

            if (index < correctAnswers.length && userInput === correctAnswers[index]) {
                isCorrect = true;
            }

            answer.style.border = isCorrect ? "2px solid lightgreen" : "2px solid tomato";
        });
    });
});

