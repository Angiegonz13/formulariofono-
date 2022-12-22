// condicionales 

// si a es igual a b haz algo 

//la condicional IF: ESPECIFICA UN BLOQUE DE CÓDIGO QUE SE EJECUTA SI UNA CONDICIÓN ES VERDADEA


/* SINTAXIS*/

/* if (condition) { */
    // INSTRUCCIONES SI LA CONDICION ES VERDADERA 

/* operaciones relacionales
 mayor: >
 menor:<
 mayor o igual >=
  menor o igual<=
  asignación:=
  igual:==
  igual si o so === tiene que se igual  el valor y el tipo de dato 
  distinto: !=
  */

/*   let nota = 7;
  if (nota <=6) {
    alert("no has aprobado")
    // else: especifica un bloque de codigo que se ejecuta falsa

  }else {
    alert("has aprobado") */
  

  // else if especifica una nueva condicion si la promera es falsa 

/*   if ( condicion){
    // intricciones si la condicion 1 es verdadera
      }else if(condicion2){
        // intrucciones si la condicion 1 es falsa ya la condicion 2 es verdadera

      }else{ */
        // intricciones si la condicion1 es falsa y dos es falsa 

      
 let nota = Number (prompt("ingresa tu nota"));

 if (nota <=1){
    alert("has reprobado");
     }else if (nota==3){
        alert("NotaInsuficiente");

     }else if(nota==4){
        alert("pase raspando");
     }else if (nota ==5){
        alerta ("Bien pasaste ");
     }else{
        alert("Has sacado un sobre saliente");
     }



