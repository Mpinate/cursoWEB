var fontSize = 1;

const AUMENTAR = 1;
const DISMINUIR = 0;
const MOSTRAR = 2;




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

    alert(document.childNodes.length);
    alert(document.childNodes[0].childNodes[1].tagName);
    document.getElementById("parrafo1").style.fontSize = fontSize + "em";
}

function Limpiar() {
    document.getElementById("parrafo1").innerHTML = "Ejemplo de Parrafo";
    document.body.style.background = "white";
}