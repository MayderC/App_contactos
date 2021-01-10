/*document.getElementById("id_form_btn").onclick = function(event) {
    event.preventDefault();


    let user = document.getElementById('id_form_user').value;
    let pass = document.getElementById('id_form_pass').value;

    console.log(this)
    //Primer intento de enviar algo con post a archivo php y este a la base de datos

    axios({
        method: "POST",
        url: "http://localhost/web/practica/media/backend/guardar.php",
        data: { 
            user: user,
            pass: pass
        }
    })
    .then(function(res){
        console.log(res);
    }, error => {
        console.log(error);
    })

}*/



