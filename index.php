<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="img/simbol.jpg" width="50%">
        <h2>Contact Us</h2>
        <form action="process_contact.php" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <button type="submit">Submit</button>
        </form>
        <?php if(isset($_GET['notif'])): ?>
            <?php if($_GET['notif'] == 'kirimberhasil'): ?>
                <br>
                <div class="alert success">
                    Pesan berhasil dikirim
                </div>
            <?php else: ?>
                <br>
                <div class="alert failed">
                    Pesan gagal dikirim
                </div>
            <?php endif ?>
        <?php endif ?>
    </div>
</body>
</html>