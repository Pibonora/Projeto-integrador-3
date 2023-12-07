<?php
    include_once "cabecalho.php";
?>

<div class="container">
    <h2 class="textp"> Junte-se a nós em uma ação pelo planeta!</h2>
</div>
</div>
<div class="container mid">
    <div class="imagem1">
        <img src="assets/plantar.jpg" alt="" class="fotinha">
    </div>
    <div class="conteudo">
        <h1 class="text-"> Seja consciente, cuide do planeta </h1>
        <p class="text-">Esta ferramenta calcula as emissões de CO₂ geradas a partir das suas principais atividades
            cotidianas: transporte,
            consumo de energia elétrica, gás de cozinha e viagens aéreas. Use a calculadora para descobrir sua pegada de
            carbono e quantas árvores
            precisa plantar para compensar essas emissões!</p>

    </div>
</div>



</div>
<div id="fundo">
    <div id="calculadora">


        <h2>Calculadora de Emissão de CO2</h2>
        <form action="inserirconsumo.php" method="POST">
            <div class="input-box">
                <div class="input-field">
                    <label for="value"> Gasto de combustivel mensal em Litros:</label>
                    <input type="number" id="litro" name="litro">
                </div>
                <div class="input-field">
                    <h4 for="combustivel"> Tipo de combustivel:</h4>
                    <br>
                    <div class="container">
                        <label for=""> Combustivel:</label>
                        <select name="combustivel" id="combustivel">
                            <option value="gasolina"> Gasolina </option>
                            <option value="etanol"> Etanol </option>
                            <option value="diesel"> Diesel</option>
                        </select>
                    </div>
                </div>
                <div id="resultado">
                    <h4>Resultado</h4>
                    <div class="input-field">
                        <input type="text" name="total" id="total" readonly hidden>
                    </div>
                </div>
                <a id="calcular" class="calcular" onclick="calcular();"> Calcular</a>
                <button id="enviar" class="calcular " hidden> Enviar ao banco de dados</button>
        </form>
    </div>
</div>
</div>
<div id="fundo2">
    <div class="exibir">
        <?php
    include_once("conexao.php");
    $consulta = mysqli_query($conexao," select round(sum(co2)) as 'CO2', sum(litros) as 'Litros' from informacoes"); //executa a consulta sql
    $linha = mysqli_fetch_assoc($consulta); //carrega a primeira linha
    ?>
        <p> CO₂ gerado pelos usuarios do site: <span class="linha"><br><?php  echo $linha['CO2'] ;?> kg</span></p>
        <p>Litros consumidos pelos usuarios do site:<span class="linha"> <br><?php  echo $linha['Litros'];?> L</span></p>
    </div>
    <?php
    include_once "footer.php";
    ?>
    </div>
    
</div>
