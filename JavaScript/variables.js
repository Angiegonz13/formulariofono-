/* variable es un contenedor o una caja 
*/


var nombre='Angie';
  console.log(nombre)

  nombre='Natalia'
  console.log(nombre)
  /* Let: es una variable local pero no se puede modificar en 
  el mismo bloque de contenido, Permite definir variables limitando su alcanse 
  al bloque declaración de expresion donde se este usando*/
   
/*prueba var y let*/

var numero= 15; //valor 15
//bloque de código
if(true){
  var numero =20;
  alert(numero);
}

alert(numero); // se altero el valor de la variable a nivel mundial 

// prueba co let 
 var textto='Todos somos fono'
console.log(txto) // valor 

if (true){
  let texto = " Materia fonoaudiologico";
  texto ="aprendiendo htmal"
  console.log(texto)

}
//constantes
/*un contenedor de datos al igual que una variable solo que ese valor
no se puede modificar y no va a poder cambiar */

var web= "http://angie.com";

let ip ="192.88.7.14";

web="http://todos somos fono.com";
ip="12344"
console.log(web,ip)



