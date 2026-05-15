<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт в инактиве</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #0a0a0a;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        .container {
            text-align: center;
            padding: 40px 20px;
        }

        .main-text {
            font-size: clamp(2rem, 6vw, 5rem);
            font-weight: 900;
            color: #ff2222;
            text-transform: uppercase;
            letter-spacing: 4px;
            line-height: 1.2;
            text-shadow:
                0 0 20px rgba(255, 34, 34, 0.6),
                0 0 40px rgba(255, 34, 34, 0.3);
            animation: pulse 2.5s ease-in-out infinite;
        }

        .divider {
            width: 120px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #ff2222, transparent);
            margin: 40px auto;
        }

        .sub-text {
            font-size: clamp(1.1rem, 2.8vw, 1.8rem);
            font-weight: 700;
            color: #cccccc;
            letter-spacing: 1px;
            margin-bottom: 14px;
        }

        .tg-link {
            display: inline-block;
            font-size: clamp(1rem, 2.5vw, 1.4rem);
            color: #2aabee;
            text-decoration: none;
            letter-spacing: 1px;
            transition: color 0.2s, text-shadow 0.2s;
        }

        .tg-link:hover {
            color: #5bc8ff;
            text-shadow: 0 0 12px rgba(42, 171, 238, 0.6);
        }

        .warning-text {
            margin-top: 28px;
            font-size: clamp(0.75rem, 1.6vw, 1rem);
            color: #666;
            letter-spacing: 0.5px;
        }

        .warning-text a {
            color: #e8a020;
            text-decoration: none;
            transition: color 0.2s;
        }

        .warning-text a:hover {
            color: #ffc04d;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.75; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main-text">
            Сайт в инактиве.<br>Ключей не будет
        </div>

        <div class="divider"></div>

        <div class="sub-text">Заказать пентест вашего проекта</div>
        <a class="tg-link" href="https://t.me/xstag3" target="_blank">https://t.me/xstag3</a>
        </div>
    </div>
</body>
</html>
