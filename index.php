<?php
include_once __DIR__ . '/ArrayWorker.php';

$worker = new ArrayWorker();

$worker->dump();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание для Junior веб-разработчика</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <nav class="nav">
                <ul class="list">
                    <li class="item"><a class="link" href="#">Junior</a></li>
                    <li class="item"><a class="link" href="#">Middle</a></li>
                    <li class="item"><a class="link" href="#">Senior</a></li>
                </ul>
            </nav>
        </header>
        <section class="main">
            <h1 class="title">Тестовое задание для Junior веб-разработчика</h1>
            <p class="text">
                <span class="new-line">Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта.</span>
                Ознакомиться со списком актуальных вакансий можно по ссылке: <a class="link employer" href="https://voronezh.hh.ru/employer/1132736" target="_blank">https://voronezh.hh.ru/employer/1132736</a>
            </p>
            <div class="company-info">
                <p class="text">Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и решений на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое качество наших услуг и соответствующий высокий спрос, позволяет нам более 10 лет прекрасно себя чувствовать на рынке IT-услуг, работая только на 1С-Битрикс.</p>
                <p class="text">У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет Яндекс.Алиса =)</p>
            </div>
            <div class="attention">
                <img class="btx-logo" src="img/BX-logo.png" alt="Логотип Bitrix" width="50" height="50">
                <p class="text">Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.</p>
            </div>
        </section>
        <footer class="footer">
            <p class="text">© 2009-2019 IT-Buro</p>
        </footer>
    </div>
    <!-- <script src="js/main.js"></script> -->
</body>
</html>

