
<?php
    include_once "cabecalho.php";
    include_once("conexao.php"); //inclui o código do arquivo conexao.php
?>

 <link rel="stylesheet" href="assets/styleContato.css">
<script src="assets/script.js" defer> </script>
<div class="container">
    <h2 class="textp"> Entre em contato conosco!</h2>
</div>
</div>
<div class="form-container">
  <form action="inserir.php" method="POST" id="form">
    <h2 style="color:white;">Insira as informações</h2>
    <div class="form-field multi-input">
      <label for="name">Nome</label>
      <input type="text" name="txtnome" id="nome" placeholder="Digite seu nome" required />
    </div>
    <div class="form-field input-right">
    <label for="email" class="email">E-mail</label>
      <input type="text" name="txtemail" id="email" placeholder="Exemplo@mail.com" required/>
    </div>
    <div class="form-field multi-input">
    <label for="dob">Envie uma mensagem</label>
    <input type="text" name="txtmensagem" id="email" placeholder="Digite sua mensagem" required/>
    </div>
    <div class="form-field submit-field" >
    <input type="submit" class="vejamais" value="Enviar " id="btnEnviar"> 
    </div>
  </form> 
</div>

<?php
    include_once "footer.php";
?>