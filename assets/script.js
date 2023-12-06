
function calcular(){
    event.preventDefault();
    var operadorSelect = document.getElementById("combustivel");
    var operador = operadorSelect.value;
    var input = parseFloat(document.getElementById("litro").value);
    var resultado;
    var gasolina = 2.31;
    var diesel = 2.68;
    var etanol = 2.3 ;
    if (operador === "gasolina") {
        resultado = input * gasolina;
      } else if (operador === "etanol") {
        resultado = input * etanol;
      } else  {
        resultado = input * diesel;
      }
      resultado = resultado.toFixed(2);
      document.getElementById("total").removeAttribute("hidden");
      document.getElementById("total").value = resultado;

      //cria um botao para aparecer depois que ele calcular
      /*var botaoenviar = document.createElement("button");
      botaoenviar.type = "submit";
      botaoenviar.textContent = "Enviar";
      document.body.for .appendChild(botaoenviar);*/
      document.getElementById("enviar").removeAttribute("hidden");



}
//document.getElementById("calcular").addEventListener("click", calcular);

document.getElementById('menu-icon').addEventListener('click', function () {
  var navList = document.getElementById('main-btn');
  navList.classList.toggle('show');
});