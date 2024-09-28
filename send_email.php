<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $work_type = htmlspecialchars($_POST['work_type']);
    $phone = htmlspecialchars($_POST['phone']);

    // Ваш email для получения заявок
    $to = "Redaer05@yandex.ru";
    $subject = "Новая заявка с сайта";
    
    // Формируем текст письма
    $message = "
    <html>
    <head>
        <title>Новая заявка с сайта</title>
    </head>
    <body>
        <h2>Новая заявка:</h2>
        <p><strong>ФИО:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Тип работ:</strong> $work_type</p>
        <p><strong>Контактный номер:</strong> $phone</p>
    </body>
    </html>
    ";

    // Заголовки для отправки письма в HTML формате
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Дополнительные заголовки
    $headers .= 'From: <' . $email . '>' . "\r\n";

    // Отправляем письмо
    if (mail($to, $subject, $message, $headers)) {
        echo "Заявка успешно отправлена.";
    } else {
        echo "Ошибка при отправке заявки.";
    }
}
?>
