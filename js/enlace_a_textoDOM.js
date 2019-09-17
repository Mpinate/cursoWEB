var fontSize = 1;

const AUMENTAR = 1;
const DISMINUIR = 0;
const MOSTRAR = 2;

alert($(".mibody"));

function version3(condicion) {
    switch (condicion) {
        case AUMENTAR:
            document.getElementById("parrafo1").style.color = "blue";
            fontSize++;
            break;

        case DISMINUIR:
            document.getElementById("parrafo1").style.color = "red";
            fontSize--;
            break;

        case MOSTRAR:
            alert(fontSize);
            break;

        default:
            document.body.style.background = "#fabada";
            var text = "";
            for (let index = 1; index < 11; index++) {
                text += "El numero es " + index + "<br>";
                document.getElementById("parrafo1").innerHTML = text;
            }
            break;
    }

    //document.getElementById("parrafo1").style.fontSize = fontSize + "em";

    var cuerpo = document.body.childNodes;
    for (var i = 0; i < cuerpo.length; i++) {
        if (cuerpo[i].tagName == "P") {
            cuerpo[i].style.fontSize = fontSize + "em";
        } else if (cuerpo[i].tagName == "INPUT") {
            cuerpo[i].style.background = "#fabada";
        }
    }
}






function Limpiar() {
    document.getElementById("parrafo1").innerHTML = "Ejemplo de Parrafo";
    document.body.style.background = "white";
}