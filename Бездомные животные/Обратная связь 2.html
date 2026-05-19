<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Помощь бездомным животным</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
        }
        h1 {
            color: white;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .intro {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.1em;
            color: white;
        }
        .form-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }
        input, textarea, select {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
            transition: all 0.3s;
        }
        input:focus, textarea:focus, select:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 5px rgba(255,107,107,0.3);
            outline: none;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        button {
            background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
            color: white;
            padding: 14px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1em;
            font-weight: bold;
            transition: transform 0.2s, box-shadow 0.2s;
            display: block;
            width: 100%;
        }
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255,107,107,0.4);
        }
        footer {
            text-align: center;
            margin-top: 40px;
            color: white;
            font-size: 0.9em;
        }
    </style>
	<?php
header('Content-Type: text/html; charset=utf-8');

$errors = [];
$response = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
    $type = trim(filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));

    // Валидация данных
    if (empty($name)) {
        $errors[] = 'Имя обязательно для заполнения';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email введён некорректно';
    }

    if (empty($type)) {
        $errors[] = 'Пожалуйста, выберите тип помощи';
    }

    if (empty($message)) {
        $errors[] = 'Сообщение обязательно для заполнения';
    }

    if (empty($errors)) {
        $to = 'vaksik1452@gmail.com';
        $subject = 'Новое обращение: Помощь бездомным животным';

        $helpTypes = [
            'volunteer' => 'Стать волонтёром',
            'donate' => 'Сделать пожертвование',
            'adopt' => 'Взять животное домой',
            'report' => 'Сообщить о бездомном животном',
            'other' => 'Другое'
        ];
        $helpTypeText = $helpTypes[$type] ?? 'Не указано';

        $body = "Новое обращение через сайт помощи бездомным животным:\n\n";
        $body .= "Имя: $name\n";
        $body .= "Email: $email\n";
        $body .= "Телефон: " . ($phone ?: 'не указан') . "\n";
        $body .= "Тип помощи: $helpTypeText\n";
        $body .= "Сообщение:\n$message\n\n
</head>
<body>
    <div class="container">
        <header>
            <h1>🐾 Помощь бездомным животным</h1>
            <p class="intro">Каждый может помочь! Оставьте сообщение — мы свяжемся с вами для обсуждения возможностей помощи бездомным питомцам.</p>
        </header>

        <div class="form-container">
            <form action="send_email.php" method="POST">
                <div class="form-group">
                    <label for="name">Ваше имя:</label>
                    <input type="text" id="name" name="name" required placeholder="Как к вам обращаться?">
                </div>

                <div class="form-group">
                    <label for="email">Ваш email:</label>
                    <input type="email" id="email" name="email" required placeholder="example@mail.com">
                </div>

                <div class="form-group">
                    <label for="phone">Телефон (необязательно):</label>
                    <input type="tel" id="phone" name="phone" placeholder="+7 (XXX) XXX-XX-XX">
                </div>

                <div class="form-group">
                    <label for="type">Чем хотите помочь:</label>
                    <select id="type" name="type" required>
                        <option value="">Выберите вариант</option>
                        <option value="volunteer">Стать волонтёром</option>
                        <option value="donate">Сделать пожертвование</option>
                        <option value="adopt">Взять животное домой</option>
                        <option value="report">Сообщить о бездомном животном</option>
                        <option value="other">Другое</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Ваше сообщение:</label>
                    <textarea id="message" name="message" required placeholder="Расскажите подробнее..."></textarea>
                </div>

                <button type="submit">Отправить сообщение</button>
            </form>
        </div>

        <footer>
            <p>Вместе мы можем сделать мир добрее для бездомных животных! ❤️</p>
        </footer>
    </div>
</body>
</html>