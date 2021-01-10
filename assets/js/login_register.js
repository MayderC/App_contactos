document.getElementById('btn__login').onclick = function(e) {
    e.preventDefault();

    let pass = document.getElementById('id_login_pass').value;
    let email = document.getElementById('id_login_email').value;

    // TODO: let option = validar(user, pass);

    login(email, pass);
} 

/*function validar(user, pass){

}*/

function login(email, pass){

    axios({
        method:'POST',
        url: 'http://localhost/web/practica/media/backend/checkLogin.php',
        data: {
            email: email,
            pass: pass
        }
    }).then(function(response){
        
        goHome(response.data);

    }, error =>{
        console.log(error);
    })


}

function  goHome(datos){
    let data= datos;
    console.log(data);
    if(data.user){
        window.location.href = "http://localhost/web/practica/media/views/home.php";
    }
}