// WINBA - Prueba técnica fundamentos
// Ricardo Patricio Enciso Peña
// Desafío uno - Función que elimina los datos repetidos de un array

const ORIGEN = [1,2,1,5,4,67,3,6,6,1,2,10,13,22]; //Se asigna a la constante ORIGEN el array a evaluar

function quitaRepetidos (datosrepetidos){    //Se define la función que realizará la acción
    let dato = [...new Set(datosrepetidos)]; //Utilizando el objeto Set, el cual no permite valores duplicados, se hace pasar el array a evaluar y  el resultado se asinga a la variable dato 
    return dato;   //La función regresa el contenido de la variable dato
}

console.log(quitaRepetidos(ORIGEN));  // Se imprime en consola el dato retornado por al función quitaRepetidos