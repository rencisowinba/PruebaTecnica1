// WINBA - Prueba técnica fundamentos
// Ricardo Patricio Enciso Peña
// Desafío cinco - Programa que ubica archivos según su nombre en diferentes carpetas

const fs = require('fs');
const RUTABASE = './CarpetasOrdenadas/' //Se asigna la ruta base donde se encuentran los archivos y carpetas
const RUTAF = RUTABASE+'OrdenaArchivos/'; //Se asigna a la constante el origen de los archivos

let rutas = ['AcuseIMSS','AcuseIVA','REPSE','DeclaracionIVA','Pago INFONAVIT']; //Asignamos los nombres de las carpetas donde se van a almacenar los archivos
let listaArchivos = fs.readdirSync(RUTAF);  // Se lee el directorio y se guarda la información en un array

rutas.forEach(ruta => {    // Se recorre el array de rutas para ir asignando los archivos a cada carpeta
    listaArchivos.forEach(archivo => {
        if (archivo.includes(ruta)){  // Si el nombre del archivo contiene el nombre de la carpeta se mueve el archivo a ésta
            fs.rename(RUTAF+archivo, RUTABASE+ruta+'/'+archivo,(err) => {
                if(err) throw err;
            });
        }
    } );
});

