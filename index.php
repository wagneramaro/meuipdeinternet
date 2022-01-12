<?php
$ipeth = $_SERVER['REMOTE_ADDR']; 
$operadora = gethostbyaddr($_SERVER['REMOTE_ADDR']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubra aqui qual é o seu IP Internet e acesse as melhores ferramentas de diagnostico de sua rede, Medidor e teste Velocidade">
    <meta name="keywords" content="qual é o seu ip rede conexão endereço ferramentas Internet Medidor teste Velocidade Speedometro Calculadora Email Blacklist Verify">
    <meta name="author" content="Wagner Amaro">
    <title>Meu Ip de Internet - Qual é o meu ip?</title>
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.png" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7CBBVEP5P7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7CBBVEP5P7');
</script>

</head>
<body>
<div class="main">

<div class="container">

<div class="frase1"><h1>Seu IP de Internet é:</h1></div>
<div class="ip" id="ip"><?php  echo $ipeth; ?></div>
<input style="visibility: hidden; display:none;" type="text" value="<?php  echo $ipeth; ?>" id="campo">

<div class="center">
    
    <button class="button" onclick="copy()" role="button" style="display: inline-flex; align-items: center;"  ><ion-icon name="copy-outline" style="margin-right: 8px;" ></ion-icon> Copiar</button></div>

 
</div>

</div>

<div class="container"> 
  <div class="ip">O que é um IP?</div>
  <p>Descubra aqui qual é o seu ip (ip da rede, ip conexão, endereço ip, ip fixo), além de várias ferramentas de diagnóstico de sua conexão Internet, como: Medidor e teste de velocidade, Velocidade na Internet, Speedometro, Calculadora IP, Email Checker, Email Blacklist, Email Verify, etc.</p>
</div>



<?php
//echo "<ion-icon name='git-network-outline'></ion-icon> IP Reverso:<br>".$operadora;
?>

<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script src="js/script.js"></script>
</body>
</html>