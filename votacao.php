<?php
require_once('util.php');

$eleitorLogado = eleitorLogado();

if (!$eleitorLogado) {
  header('Location: eleitor.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Urna Eletrônica</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="urna">
    <div class="tela">
      <div class="d-1">
        <div class="d-1-left">
          <div class="d-1-1">
            <span>SEU VOTO PARA</span>
          </div>
          <div class="d-1-2">
            <span>SENADOR</span>
          </div>
          <div class="d-1-3">
            <div class="numero pisca"></div>
            <div class="numero"></div>
          </div>
          <div class="d-1-4">
            Nome: FULANO DE TAL<br />
            Partido: QQQ<br />
            Vice-Prefeito: BELTRANO DE TAL
          </div>
        </div>
        <div class="d-1-right">
          <div class="d-1-image">
            <img src="images/84.jpg" alt="" />
            Prefeito
          </div>
        </div>
      </div>
      <div class="d-2">
        Aperte a tela:<br />
        CONFIRMA para CONFIRMAR este voto<br />
        CORRIGE para REINICIAR este voto
      </div>
    </div>
    <div class="teclado">
      <div class="teclado--linha">
        <div class="teclado--botao" onclick="clicou('1')">1</div>
        <div class="teclado--botao" onclick="clicou('2')">2</div>
        <div class="teclado--botao" onclick="clicou('3')">3</div>
      </div>
      <div class="teclado--linha">
        <div class="teclado--botao" onclick="clicou('4')">4</div>
        <div class="teclado--botao" onclick="clicou('5')">5</div>
        <div class="teclado--botao" onclick="clicou('6')">6</div>
      </div>
      <div class="teclado--linha">
        <div class="teclado--botao" onclick="clicou('7')">7</div>
        <div class="teclado--botao" onclick="clicou('8')">8</div>
        <div class="teclado--botao" onclick="clicou('9')">9</div>
      </div>
      <div class="teclado--linha">
        <div class="teclado--botao" onclick="clicou('0')">0</div>
      </div>
      <div class="teclado--linha">
        <div class="teclado--botao botao--branco" onclick="branco()">
          BRANCO
        </div>
        <div class="teclado--botao botao--corrige" onclick="corrige()">
          CORRIGE
        </div>
        <div class="teclado--botao botao--confirma" onclick="confirma()">
          CONFIRMA
        </div>
      </div>
    </div>
  </div>

  <script src="etapas.js"></script>
  <script src="script.js"></script>
</body>

</html>