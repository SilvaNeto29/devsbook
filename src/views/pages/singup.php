<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro - Devsbook</title>
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
        <form method="POST" action="<?=$base;?>/cadastro">

            <?php if(!empty($flash)): ?>
                <div class="flash" id="flash"><?php echo $flash;?></div>
            <?php endif;?>    

            <input id="email" placeholder="Digite seu nome completo" class="input" type="text" name="name" />
            <input id="senha" placeholder="Digite seu email" class="input" type="email" name="email" />
            <input id="senha" placeholder="Digite sua data de nascimento" class="input" type="date" name="birthdate" id="birthdate" />
            <input id="senha" placeholder="Digite sua senha" class="input" type="password" name="password" />
            <input class="button" type="submit" value="Fazer o cadastro"/>

            <a href="<?=$base;?>/login">Já tem cadastro? Faça o login</a>
        </form>
    </section>
    <script
			  src="https://code.jquery.com/jquery-3.6.2.js"
			  integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4="
			  crossorigin="anonymous"></script>
<script>
    $('#birthdate').mask('99/99/9999',{placeholder:"mm/dd/yyyy"});
</script> 
</body>
</html>