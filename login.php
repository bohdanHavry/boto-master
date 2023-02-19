<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/login.css"/>
    <title>DaVinci Login & Registration</title>
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Вхід</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Введіть поштову скриньку" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Введіть пароль" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Запам'ятати мене</label>
                        </div>
                        
                        <a href="#" class="text">Забули пароль?</a>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Увійти">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Ще не зареєстровані?
                        <a href="#" class="text signup-link">Зареєструватися зараз!</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Реєстрація</span>

                <form action="#">
                    <div class="input-field">
                        <input type="text" placeholder="Введіть ім'я" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Введіть поштову скриньку" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Введіть пароль" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Підтвердіть пароль" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="button" value="Зареєструватися">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Вже зареєстровані?
                        <a href="#" class="text login-link">Увійти зараз!</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>

