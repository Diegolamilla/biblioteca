async function registrar_libro() {
    let cod_libro = document.getElementById('#cod_libro').value;
    let nombre = document.querySelector('#nombre').value;
    let autor = document.querySelector('#autor').value;
    let categoria = document.querySelector('#categoria').value;
    let estado = document.querySelector('#estado').value;
    let cantidad_libros = document.querySelector('#cantidad_libros').value;
    if (cod_libro == "" || nombre == "" || autor == "" || precio == "" ||
        stock == "" || categoria == "" || estado == "" || cantidad_libros == "") {
        alert("error,campos vacios");
        return;
    }
    try {
        //capturamos datos del formulario html
        const datos = new FormData(frmRegistrar);
        // enviar datos hacia el controlador 
        let respuesta = await fetch(base_url + 'controller/libro.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }
        console.log(json);
    } catch (e) {
        console.log("opss, ocurrio un error" + e);
    }
}