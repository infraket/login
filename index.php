<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="add.ico" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("login.php");
    ?>

    <form action="registr.php" method="post">
        <p>Регистрация</p>
        <input type="text" placeholder="email or phone" name="email">

        <input type="text" placeholder="password" name="pass">
        <input type="text" placeholder="repeat password" name="repeatpass">
        <input type="text" placeholder="login" name="login">

        <button class="glow-on-hover" type="submit">Зарегистрироваться</button>

    </form>
    <form action="login.php" method="post">
        <p>Авторизация</p>
        <input type="text" placeholder="email or phone" name="email">
        <input type="text" placeholder="password" name="pass">
        <button class="glow-on-hover" type="submit">Войти</button>
        <div class="col-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <label for="quiz"
                            class="col-sm-3 col-form-label">
                            <?php echo $num1 . '+' . $num2; ?>
                        </label>
                        <div class="col-sm-9">


                            <input type="hidden"
                                name="no1"
                                value="<?php echo $num1 ?>">
                            <input type="hidden"
                                name="no2"
                                value="<?php echo $num2 ?>">
                            <input type="text"
                                name="test"
                                class="form-control quiz-control"
                                autocomplete="off"
                                id="quiz" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </form>

</body>

</html>