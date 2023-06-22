<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="inscribete.css">
</head>
<body>
    <main>
        <form action="send">
            <div class="signup">
                <img src="./img/password.svg" alt="Password illustration">
                <h1>Sign up</h1>
            </div>
            <div>
                <input class="username" type="text" name="" placeholder="Introduce tu nombre de usuario:">
            </div>
            <div>
                <input class="email" type="email" name="" placeholder="Introduce tu correo:">
            </div>
            <div>
                <input class="telefono" type="number" name="" placeholder="Introduce tu numero:">
            </div>
            <div>
                <input class="pin" type="number" name="" min="-9999" max="9999" placeholder="Introduce tu pin (4 Digitos):">
            </div>

            <p class="errorDatos">Por favor completa los campos</p>
            <button class="signUpButton" type="button" onclick="send()">Sign Up</button>
        </form>
    </main>
</body>
<script src="./inscribete.js"></script>
</html>