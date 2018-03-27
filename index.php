
 <?php

  // variaves 
  $numero1;
  $numero2;

 ?>
 <!-- Formulário da Calculadora -->
  <link rel="stylesheet" href="estilo.css">
  <div id="formatocal">
  <form method="post" action="index.php">
  <input type="text" name="numero1" id="numero1" maxlength="50" />
  <input type="num" name="numero2" id="numero2" maxlength="50" /><br>
  <input type="radio" name="opera"   value="somar" /><label>Somar</label><br>
  <input type="radio" name="opera"   value="multiplica" /><label>Multipicar</label><br>
  <input type="radio" name="opera"   value="dividir" /><label>Dividir</label><br>
  <input type="radio" name="opera"   value="subitrai" /><label>Subitrair</label><br>
  <input type="submit" value="SOMAR" />
</div>
</form>
<? 
// incluindo a página que faz as comparações e operações 
include("resultado.php"); ?>
<? 
//imprimindo o resuldado 
echo((isset($resultado))?"<h1>".$resultado."</h1>":""); ?>
