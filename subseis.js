// WINBA - Prueba técnica fundamentos
// Ricardo Patricio Enciso Peña
// Desafío seis - función que retorna el elemento más grande

let LISTA = [1,11,4,6,7,8]; //Definimos la lista de elementos en un array

function maximo(numeros){  //Se define la función máximo pasando como parárametro el array 
    let numeroMaximo = numeros[0];  //Asignamos el valor inicial del array a la variable a comparar
    for(i=0;i<=numeros.length;i++){   
        if(numeros[i] > numeroMaximo){   //Se recorre el array y se compara con la variable de valor hasta ese momento mayor, si es mayor el nuevo dato entonces se reasigna a la variable base
            numeroMaximo = numeros[i]
        }
    }
    return numeroMaximo; //Se retorna el valor maximo encontrado
}

console.log (maximo(LISTA)); //Se reporta el valor encontrado