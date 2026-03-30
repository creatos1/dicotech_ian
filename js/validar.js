function validar() {
    var upc = document.getElementsByName("upc")[0].value;
    var desc = document.getElementsByName("descripcion")[0].value;
    var precio = document.getElementsByName("precio")[0].value;

    if (upc == "" || desc == "" || precio == "") {
        alert("Llena todos los campos, amigo");
        return false;
    }
    return true;
}
