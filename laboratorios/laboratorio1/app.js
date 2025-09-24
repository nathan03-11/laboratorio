function mostrarCampos() {
    const operacion = document.getElementById("operacion").value;
    const campos = document.getElementById("campos");
    campos.innerHTML = "";

    if (operacion === "cuadratica") {
        campos.innerHTML = 
          "<label>Coeficiente a:</label><input type='number' name='a' required>" +
          "<label>Coeficiente b:</label><input type='number' name='b' required>" +
          "<label>Coeficiente c:</label><input type='number' name='c' required>";
    } else if (operacion === "raiz") {
        campos.innerHTML = 
          "<label>Número:</label><input type='number' name='number' required>";
    } else if (operacion === "potencia") {
        campos.innerHTML = 
          "<label>Base:</label><input type='number' name='base' required>" +
          "<label>Exponente:</label><input type='number' name='exponente' required>";
    }
}
