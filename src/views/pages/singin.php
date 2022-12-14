<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login - Devsbook</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="assets/css/login.css" />
    <script type="text/javascript" src="<?=$base;?>/assets/js/script.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <a href=""><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>
        </div>
    </header>
    <section class="container main">
        <form method="POST" action="<?=$base;?>/login">

            <?php if(!empty($flash)): ?>
                <div class="flash" id="flash"><?php echo $flash;?></div>
            <?php endif;?>    

            <input id="email" placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input id="senha" placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input class="button" type="submit" value="Acessar o sistema"/>

            <a href="<?=$base;?>/cadastro">Ainda não tem conta? Cadastre-se</a>
        </form>
    </section>
</body>
</html>