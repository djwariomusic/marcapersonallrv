var s = document.getElementById("seleccion");
function dibujoPorCambio(){
var str = s.options[s.selectedIndex].value;

switch (str){
  case '1':
      document.getElementById("mockap").style="display:block;";
      document.getElementById("mockap").src="/images/mockaps/Index.png";
  break;
  case '2':
      document.getElementById("mockap").style="display:block;";
      document.getElementById("mockap").src="/images/mockaps/Services.png";
  break;
  case '3':
      document.getElementById("mockap").style="display:block;";
      document.getElementById("mockap").src="/images/mockaps/Proyects.png";
  break;
  case '4':
      document.getElementById("mockap").style="display:block;";
      document.getElementById("mockap").src="/images/mockaps/Blog.png";
  break;
  case '5':
      document.getElementById("mockap").style="display:block;";
      document.getElementById("mockap").src="/images/mockaps/Contact.png";
  break;

}
}