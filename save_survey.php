<?php
// save_survey.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    
    // Тут логіка збереження у файл (як у ЛР6)
    $data = "$name, $email\n";
    file_put_contents("surveys.txt", $data, FILE_APPEND);

    // Відповідь, яку побачить JS
    echo "Дякуємо, $name! Ваші дані успішно збережено без перезавантаження.";
}
?>