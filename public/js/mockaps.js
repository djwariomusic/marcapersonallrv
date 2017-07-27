var s = document.getElementById("seleccion");
var u = document.getElementById("url").value;
function dibujoPorCambio(){
var str = s.options[s.selectedIndex].value;
  switch (str){
    case '1':
        document.getElementById("mockap").style="display:block;";
        document.getElementById("mockap").src= u + "/images/documents/Index.png";
    break;
    case '2':
        document.getElementById("mockap").style="display:block;";
        document.getElementById("mockap").src= u + "/images/documents/Services.png";
    break;
    case '3':
        document.getElementById("mockap").style="display:block;";
        document.getElementById("mockap").src= u + "/images/documents/Proyects.png";
    break;
    case '4':
        document.getElementById("mockap").style="display:block;";
        document.getElementById("mockap").src= u + "/images/documents/Blog.png";
    break;
    case '5':
        document.getElementById("mockap").style="display:block;";
        document.getElementById("mockap").src= u + "/images/documents/Contact.png";
    break;
  }
}
