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
		?>