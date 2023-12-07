
function calcular(){
    event.preventDefault();
    var operadorSelect = document.getElementById("combustivel");
    var operador = operadorSelect.value;
    var input = parseFloat(document.getElementById("litro").value);
    var resultado;
    var gasolina = 2.31;
    var diesel = 2.68;
    var etanol = 2.3 ;
    var arvore = 1;
    if (operador === "gasolina") {
        resultado = input * gasolina;
        mensagem = "kg de CO₂ " + " equivalem a " + arvore*input + " árvores ";
      } else if (operador === "etanol") {
        resultado = input * etanol;
        mensagem = "kg de CO₂ " + " equivalem a " + arvore*input + " árvores ";
      } else  {
        resultado = input * diesel;
        mensagem = "kg de CO₂ " + " equivalem a " + arvore*input + " árvores ";
      }
      resultado = resultado.toFixed(2);
      document.getElementById("total").removeAttribute("hidden");
      document.getElementById("total").value = resultado+mensagem;

      //cria um botao para aparecer depois que ele calcular
      document.getElementById("enviar").removeAttribute("hidden");
}

document.getElementById('menu-icon').addEventListener('click', function () {
  var navList = document.getElementById('main-btn');
  navList.classList.toggle('show');
});