axios({
    method:'GET',
    url: 'http://localhost/web/practica/media/backend/checkLogin.php',

}).then(function(response){
   
    console.log(response.data)

}, error =>{
    console.log(error);
})