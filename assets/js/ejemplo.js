// Seleccionar los elementos con la clase "indice0"
var elementos = document.getElementsByClassName("indice0");

// Recorrer los elementos seleccionados
for (var i = 0; i < elementos.length; i++) {
    var elemento = elementos[i];

    // Imprimir el contenido de texto del elemento
    console.log(elemento.textContent);
}
