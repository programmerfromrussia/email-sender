<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Отправить сообщение</h1>
    <center>
    <form method="post" action="send.php">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Электронный адрес</label>
        <input type="email" name="email" id="email" required>
        
        <label for="subject">Тема</label>
        <input type="text" name="subject" id="subject" required>
        
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" required></textarea>
        
        <br>
        
        <button>Отправить</button>
    </form>
    <center>
</body>
</html>