<?php
    include 'get_data.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Алгебра в интерактивном формате</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">Главная</a>
            <button class="btn btn-primary mr-auto" data-toggle="modal" data-target="#developerModal">О разработчике</button>
        </div>
    </nav>
    
    <!-- Модальное окно с информацией о разработчике -->
    <div id="developerModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Информация о разработчике</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><strong>Имя:</strong> Гусев Артем</p>
                    <p><strong>о проекте:</strong> Данный проект был разработан с целью помощи ученикам в осноение тем по алгебе</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mx-auto">
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#exampleModal">Квадратные неравенства</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic2">теория вероятности</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic3">Числовые последовательности. Прогрессии</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic4">Текстовые задачи</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic5">Дробные рациональные уравнения</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic6">Тригонометрия. Элементы теории тригонометрических функций</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic7">Сложение и вычитание алгебраических дробей с одинаковыми знаменателями</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic8">Сложение и вычитание алгебраических дробей с разными знаменателями</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic9">Возведение алгебраической дроби в степень</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic10">Степени с отрицательными показателями</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic11">Математические модели</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic12">Пропорция и пропорциональные отношения</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic13">Многочлен</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic14">понятие квадратного корня</button>
        <button class="btn btn-info mt-2 d-block text-center" data-toggle="modal" data-target="#topic15">понятие степени с натуральным показателем</button>
    </div>
    
    <!-- Модальные окна -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Квадратные неравенства</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row['subject_1']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples" data-dismiss="modal" data-toggle="modal" data-target="#topic1Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topic1Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по квадратным неравенствам</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Здесь можно добавить примеры и задания для решения квадратных неравенств -->
                <p>Решите следующие неравенства:</p>
                <ol>
                    <li>x^2 + 3x + 4 > 0 <br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ без пробелов"></li>
                    <li>x^2 + 3x <= 0 <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ без пробелов"></li>
                    <li>2x^2 <= 8 <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ без пробелов"></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack" onclick="closeAndOpenModals();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults">Показать результат</button>
                </div>
            </div>
        </div>
    </div>

    <div id="topic2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">теория вероятности</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                   <p><?php echo $row2['subject_2']; ?></p>
                   <button type="button" class="btn btn-primary" id="showExamples2" data-dismiss="modal" data-toggle="modal" data-target="#topic2Examples">Посмотреть примеры и выполнить задания</button>
                </div>
            </div>
        </div>
    </div>

    <div id="topic2Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по теории вероятности</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <ol>
                <li>На экзамене 25 билетов, Сергей не выучил 3 из них. Найдите вероятность того, что ему попадется выученный билет <br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ "></li>
                <li>Телевизор у Маши сломался и показывает только один случайный канал. Маша включает телевизор. В это время по трем каналам из двадцати показывают кинокомедии. Найдите вероятность того, что Маша попадет на канал, где комедия не идет <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ "></li>
                <li>Петя, Вика, Катя, Игорь, Антон, Полина бросили жребий  — кому начинать игру. Найдите вероятность того, что начинать игру должен будет мальчик <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
            </ol>
                <button type="button" class="btn btn-secondary" id="goBack2" onclick="closeAndOpenModals2();">Назад</button>
                <button type="button" class="btn btn-primary" id="showResults2">Показать результат</button>
            </div>
        </div>
    </div>
</div>


    <div id="topic3" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Числовые последовательности. Прогрессии</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row3['subject_3']; ?></p>
                    <button type="button" class="btn btn-primary" id="showExamples3" data-dismiss="modal" data-toggle="modal" data-target="#topic3Examples">Посмотреть примеры и выполнить задания</button>
                </div>
            </div>
        </div>
    </div>

    <div id="topic3Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по числовым последовательностям и прогрессиям</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <ol>
                    <li>Последовательность задана формулой an=5n+2 чему равен её третий член? <br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>последовательность задана фомрулой an = 55-4n.Найдите номер члена последовательности , равного 15 <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>Число 324 является членом геометрической прогрессии 4,12,36, .. . Найдите номер этого члена.<br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>Найдите сумму всех натуральных чисел, кратных 4 и не превышающих 150 <br> <input type="text" id="answer4" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                <button type="button" class="btn btn-secondary" id="goBack3" onclick="closeAndOpenModals3();">Назад</button>
                <button type="button" class="btn btn-primary" id="showResults3">Показать результат</button>
            </div>
        </div>
    </div>
</div>

    <div id="topic4" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Текстовые задачи</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row4['subject_4']; ?></p>
                    <button type="button" class="btn btn-primary" id="showExamples4" data-dismiss="modal" data-toggle="modal" data-target="#topic4Examples">Посмотреть примеры и выполнить задания</button>
                </div>
            </div>
        </div>
    </div>

    <div id="topic4Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Текстовые задачи</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <ol>
                    <li>На пост главы администрации города претендовало три кандидата: Журавлев, Зайцев, Иванов. Во время выборов за Иванова было отдано в 2 раза больше голосов, чем за Журавлева, а за Зайцева  — в 3 раза больше, чем за Журавлева и Иванова вместе. Сколько процентов голосов было отдано за победителя?<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>Из пунктов А и В, расстояние между которыми 19 км, вышли одновременно навстречу друг другу два пешехода и встретились в 9 км от А. Найдите скорость пешехода, шедшего из А, если известно, что он шел со скоростью, на 1 км/ч большей, чем пешеход, шедший из В, и сделал в пути получасовую остановку<br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>Расстояние между пристанями А и В равно 80 км. Из А в В по течению реки отправился плот, а через 2 часа вслед за ним отправилась яхта, которая, прибыв в пункт В, тотчас повернула обратно и возвратилась в А. К этому времени плот прошел 22 км. Найдите скорость яхты в неподвижной воде, если скорость течения реки равна 2 км/ч. Ответ дайте в км/ч.<br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                <button type="button" class="btn btn-secondary" id="goBack4" onclick="closeAndOpenModals4();">Назад</button>
                <button type="button" class="btn btn-primary" id="showResults4">Показать результат</button>
            </div>
        </div>
    </div>
</div>

    <div id="topic5" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Дробные рациональные уравнения</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row5['subject_5']; ?></p>
                    <button type="button" class="btn btn-primary" id="showExamples5" data-dismiss="modal" data-toggle="modal" data-target="#topic5Examples">Посмотреть примеры и выполнить задания</button>
                </div>
            </div>
        </div>
    </div>

    <div id="topic5Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по Дробным рациональным уравнениям</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <ol>
                    <li>x^2/3-x=2x/3-x<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ и запишите его без пробелов "></li>
                    <li>5y-2/2y+1=3y+2/y+3 <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ и запишите его без пробелов "></li>
                    <li>6x+8=-3/4<br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                <button type="button" class="btn btn-secondary" id="goBack5" onclick="closeAndOpenModals5();">Назад</button>
                <button type="button" class="btn btn-primary" id="showResults5">Показать результат</button>
            </div>
        </div>
    </div>
</div>

    <div id="topic6" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Тригонометрия. Элементы теории тригонометрических функций</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row6['subject_6']; ?></p>
                    <button type="button" class="btn btn-primary" id="showExamples6" data-dismiss="modal" data-toggle="modal" data-target="#topic6Examples">Посмотреть примеры и выполнить задания</button>
                </div>
            </div>
        </div>
    </div>

    <div id="topic6Examples" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Примеры по тригонометрии. Элементы теории тригонометрических функций</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <ol>
                    <li>найдите косинус 0°<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ и запишите его без пробелов "></li>
                    <li>найдите синус 90° <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ и запишите его без пробелов "></li>
                    <li>найдите тангенс 180° <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack6" onclick="closeAndOpenModals6();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults6">Показать результат</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="topic7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Сложение и вычитание алгебраических дробей с одинаковыми знаменателями</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row7['subject_7']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples7" data-dismiss="modal" data-toggle="modal" data-target="#topic7Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topic7Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по cложению и вычитанию алгебраических дробей с одинаковыми знаменателями</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Здесь можно добавить примеры и задания для решения квадратных неравенств -->
                <p>Решите следующие задания</p>
                <ol>
                    <li>4b+9/6b+2b-3/6b <br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>q+2/q-2-6-q/q-2 <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>m^2/m-n-n^2/m-n <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack7" onclick="closeAndOpenModals7();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults7">Показать результат</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="topic8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Сложение и вычитание алгебраических дробей с разными знаменателями</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row8['subject_8']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples8" data-dismiss="modal" data-toggle="modal" data-target="#topiс8Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topiс8Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по cложению и вычитанию алгебраических дробей с разными знаменателями</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Здесь можно добавить примеры и задания для решения квадратных неравенств -->
                <p>Решите следующие примеры</p>
                <ol>
                    <li>x-x/x+1<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>x/x+y+y/x-y <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>5/x^2+5x+x+15/25-x^2 <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack8" onclick="closeAndOpenModals8();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults8">Показать результат</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="topic9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Возведение алгебраической дроби в степень</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row9['subject_9']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples8" data-dismiss="modal" data-toggle="modal" data-target="#topiс9Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topiс9Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по возведению алгебраической дроби в степень</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <p>Решите следующие примеры</p>
                <ol>
                    <li>(1/xy)^2*(x^2/y)^3<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>(x/x+1)^2 <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>(2x/2-x)^3 <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack9" onclick="closeAndOpenModals9();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults9">Показать результат</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="topic10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Степени с отрицательными показателями</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row10['subject_10']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples8" data-dismiss="modal" data-toggle="modal" data-target="#topiс10Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topiс10Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по Степеням с отрицательными показателями</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <p>Решите следующие примеры</p>
                <ol>
                    <li>2^-3<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Вычислить значение выражения"></li>
                    <li>3^-2*3^-4 <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Упростить выражение"></li>
                    <li>x^-2=1/9 <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Решить уравнение "></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack10" onclick="closeAndOpenModals10();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults10">Показать результат</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="topic11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Математические модели</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row11['subject_11']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples8" data-dismiss="modal" data-toggle="modal" data-target="#topiс11Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topiс11Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры по математическим моделям</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <p>Решите следующие примеры</p>
                <ol>
                    <li>в железной руде содержится железо и примесей в отношении 8:1.Определите, сколько тонн железа получиться из 423т руды <br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ"></li>
                    <li>В овощном салате содержится морковь и прочие овощи в отношении 5:3. Если в салате всего 24 кг овощей, сколько килограммов моркови в нем содержится? <br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ"></li>
                    <li>В смеси песка и цемента содержится песок и цемент в отношении 7:2. Если в смеси всего 45 кг материалов, сколько килограммов песка в смеси? <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ"></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack11" onclick="closeAndOpenModals11();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults11">Показать результат</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="topic12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Пропорция и пропорциональные отношения</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row12['subject_12']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples8" data-dismiss="modal" data-toggle="modal" data-target="#topiс12Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topiс12Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры на Пропорцию и пропорциональные отношения </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <p>Решите следующие примеры</p>
                <ol>
                    <li>3/8=y/3,2<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ в виде десятичной дроби"></li>
                    <li>x/2,4=0,5/0,4<br> <input type="text" id="answer2" class="form-control mt-2" placeholder="Введите ответ"></li>
                    <li>15x-5=35-14x<br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ в виде целого числа"></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack12" onclick="closeAndOpenModals12();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults12">Показать результат</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="topic13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Многочлен</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row13['subject_13']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples8" data-dismiss="modal" data-toggle="modal" data-target="#topiс13Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topiс13Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры на многочлен </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <p>Решите следующие примеры</p>
                <ol>
                    <li>(3x^2-2x+5<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ"></li>
                    <li>(2y^4-3y^2+6y<br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                    <button type="button" class="btn btn-secondary" id="goBack13" onclick="closeAndOpenModals13();">Назад</button>
                    <button type="button" class="btn btn-primary" id="showResults13">Показать результат</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="topic14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">понятие квадратного корня</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row14['subject_14']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples8" data-dismiss="modal" data-toggle="modal" data-target="#topiс14Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topiс14Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Примеры на понятие квадратного корня </h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <p>Решите следующие примеры</p>
                <ol>
                    <li>найдите корень из √25<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ"></li>
                    <li>найдите корень из √64 <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>найдите корень из √121 <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                <button type="button" class="btn btn-secondary" id="goBack14" onclick="closeAndOpenModals14();">Назад</button>
                <button type="button" class="btn btn-primary" id="showResults14">Показать результат</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="topic15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">понятие степени с натуральным показателем</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?php echo $row15['subject_15']; ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="showExamples8" data-dismiss="modal" data-toggle="modal" data-target="#topiс15Examples">Посмотреть примеры и выполнить задания</button> 
                </div>
            </div>
        </div>
    </div>

    <div id="topiс15Examples" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">понятие степени с натуральным показателем</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <p>Решите следующие примеры</p>
                <ol>
                    <li>Возведите 2^4<br> <input type="text" id="answer1" class="form-control mt-2" placeholder="Введите ответ"></li>
                    <li> Возведите 8^3<br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                    <li>Возведите 5^2 <br> <input type="text" id="answer3" class="form-control mt-2" placeholder="Введите ответ "></li>
                </ol>
                <button type="button" class="btn btn-secondary" id="goBack15" onclick="closeAndOpenModals15();">Назад</button>
                <button type="button" class="btn btn-primary" id="showResults15">Показать результат</button>
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>
</html>
