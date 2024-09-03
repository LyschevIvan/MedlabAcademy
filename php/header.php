<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="static/favicon.svg">
    <title>МедЛаб Академия</title>
    <style>
        body, html {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
            box-sizing: border-box;
            overflow-x: hidden; /* Убираем горизонтальную прокрутку */
            color: #333;
        }
        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Гарантируем, что высота контейнера будет не меньше высоты окна */
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #55b043; /* Основной зеленый цвет для заголовка */
            color: white;
            padding: 15px 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Легкая тень для выделения */
        }
        .site-title {
            margin: 0;
            font-size: 26px;
            font-weight: 600;
        }
        .nav-button {
            font-size: 28px;
            cursor: pointer;
            background-color: #55b043;
            border: none;
            color: white;
            padding: 10px;
            margin-right: 10px;
            transition: background-color 0.3s;
            display: none; /* Скрываем кнопку по умолчанию */
        }
        .nav-button:hover {
            background-color: #4a9b39; /* Цвет на наведение для кнопки */
        }
        nav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #4a9b39; /* Чуть темнее для боковой панели */
            overflow-x: hidden;
            transition: 0.3s;
            padding-top: 60px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2); /* Тень для боковой панели */
        }
        nav a {
            padding: 12px 20px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: background-color 0.3s, padding-left 0.3s;
        }
        nav a:hover {
            background-color: #3e8a32;
            padding-left: 30px; /* Легкое движение вправо при наведении */
        }
        .menu {
            display: flex;
            align-items: center;
        }
        .menu a {
            padding: 12px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: background-color 0.3s;
            margin-left: 20px;
        }
        .menu a:hover {
            background-color: #4a9b39;
        }
        main {
            flex: 1; /* Заставляет main занимать все доступное пространство */
            padding: 30px;
            background-color: #f4f4f4; /* Легкий фон для контраста */
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }
        footer p {
            margin: 5px 0;
        }
        footer a {
            color: #55b043;
            text-decoration: none;
            margin: 0 10px;
        }
        footer a:hover {
            text-decoration: underline;
        }

        /* Медиа-запросы для адаптивного дизайна */
        @media (max-width: 768px) {
            .menu {
                display: none; /* Скрываем меню на мобильных */
            }
            .nav-button {
                display: block; /* Показываем кнопку на мобильных */
            }
        }
    </style>
</head>
<body>
<div class="container">
    <header>
        <button class="nav-button" onclick="toggleNav()">&#9776;</button>
        <div class="menu">
            <a href="index.php">Главная</a>
            <a href="about.php">Сведения об организации</a>
            <a href="for-doctors.php">Для врачей</a>
            <a href="admission.php">Поступающим</a>
            <a href="programs.php">Образовательные программы</a>
        </div>
        <h1 class="site-title">МедЛаб Академия</h1>
    </header>
    <nav id="sidebar">
        <a href="javascript:void(0)" onclick="toggleNav()" style="position: absolute; top: 0; right: 25px; font-size: 28px;">&times;</a>
        <a href="index.php">Главная</a>
        <a href="about.php">Сведения об организации</a>
        <a href="for-doctors.php">Для врачей</a>
        <a href="admission.php">Поступающим</a>
        <a href="programs.php">Образовательные программы</a>
    </nav>
    <script>
        function toggleNav() {
            var sidebar = document.getElementById("sidebar");
            if (sidebar.style.width === "250px") {
                sidebar.style.width = "0";
            } else {
                sidebar.style.width = "250px";
            }
        }
    </script>
