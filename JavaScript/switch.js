/* se utiliza para hacer difeentes acciones 
basadas en diferentes casos
- la exprecion se evalua una unica ves si hay una insidencia 
con algun valor se ejecutara en bloque de codigo correspondiente*/

/*sintaxis 
switch(expresion){
    case valor 1:
        //intricciones para el valor 1 en dado caso que se cumpla 
        break;
        case valor2:
            //instrucciones para valor 2

            default
            //intrucciones en caso de que no se cumplaninguna condicion
}*/

let nota = Number(prompt("ingresa tu nota"));
let mensaje = "";
switch (nota) {
    case 1:
        mensaje = "Reprobado"
        break;
    case 2:
        mensaje = "Reprobado"
        break;
    case 3:
        mensaje = "Reprobado"
        break;
    case 4:
        mensaje = "Reprobado"
        break;
    case 5:
        mensaje = "Reprobado"
        break;
    case 6:
        mensaje = "Pasaste raspando"
        break;
    case 7:
        mensaje = " Bien, has pasado"
        break;
    case 8:
        mensaje = "Bien, has pasado"
        break;
    case 9:
        mensaje = "Exelente"
        break;
    case 10:
        mensaje = "Sobresaliente "
        break;

    default:
        mensaje="El valor no es valido"
        break;
}


alert(mensaje);
