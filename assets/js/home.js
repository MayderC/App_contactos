usuarioActual();
actualizarContactosFrontend();

function actualizarContactosFrontend(){
    axios({
        method: 'GET',
        url: 'http://127.0.0.1/web/practica/media/backend/getContacts.php'
    }).then(function (response){

        //Funcion para pintar contactos en el dom
        let contactos = response.data;

        listarContactos(response.data);

    }).catch(function (error){
        console.log(error);
    })
}



function listarContactos(datos){

    datos.forEach(function (dato){
        document.getElementById('contact').innerHTML += `
    <div  class="contact">
        <p class="id_contacto">${dato.id_contacto}</p>
        <p>Nombre: ${dato.nombre_contacto}</p>
        <p class="contacto${dato.id_contacto}">Email: ${dato.email}</p>
        <p>Telefono: ${dato.telefono}</p>
        <input  class="btn__del btn btn-danger" id="btn__${dato.id_contacto}" type="submit" value="Eliminar">        
     </div>
    `
    })


    console.log(datos)
}






function usuarioActual() {
    axios({
        method: 'GET',
        url: 'http://127.0.0.1/web/practica/media/backend/actual.php'
    }).then(function (response) {

    }, error => {
        console.log(error);
    })
}