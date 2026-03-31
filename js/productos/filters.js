document.getElementById('buscarProducto').addEventListener('keyup', function() {
    var input = this.value.toLowerCase();
    var table = document.getElementById('tablaProductos');
    var tr = table.getElementsByTagName('tr');

    for (var i = 1; i < tr.length; i++) {
        var tdUPC = tr[i].getElementsByTagName('td')[0];
        var tdDesc = tr[i].getElementsByTagName('td')[1];
        
        if (tdUPC || tdDesc) {
            var textUPC = tdUPC.textContent || tdUPC.innerText;
            var textDesc = tdDesc.textContent || tdDesc.innerText;
            
            if (textUPC.toLowerCase().indexOf(input) > -1 || textDesc.toLowerCase().indexOf(input) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
});
