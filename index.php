<?php

    $fname = isset($_POST['fname']) ? $_POST['fname'] : '';

    $lname = isset($_POST['lname']) ? $_POST['lname'] : '';

    $email = isset($_POST['email']) ? $_POST['email'] : '';

    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    $message = isset($_POST['message']) ? $_POST['message'] : '';

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>
    
    <div class="form-box">
        <h1>დაგვიკავშრდით</h1>
        <form action="send.php" method="post">
            <div class="input-boxes">
                <label for="">სახელი</label>
                <input type="text" name="fname">
            </div>
            <div class="input-boxes">
                <label for="">გვარი</label>
                <input type="text" name="lname">
            </div>
            <div class="input-boxes">
                <label for="">იმეილი</label>
                <input type="text" name="email">
            
                <label for="">ტელეფონის ნომერი</label>
                <input type="text"  name="phone">
            </div>
            <div class="input-boxes">
                <label for="">მესიჯი</label>
                <textarea name="message" cols="30" rows="10"></textarea>
            </div>
        
            <?php if(isset($_GET['status']) && $_GET['status'] == 0) { ?>
            <div class="error">გაგზავნის დროს დაფიქსირდა შეცდომა გთხოვთ სცადოთ თავიდან</div>
            <?php } ?>

            <button type="submit">send</button>
        </form>
    </div>

</body>
</html>