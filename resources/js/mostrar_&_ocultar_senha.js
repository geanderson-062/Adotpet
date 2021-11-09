 //mostrar ou ocultar senha                           

 function mostrarOcultarSenha(){
    var senha=document.getElementById("exampleInputPassword1");
    if(senha.type=="password"){
            senha.type="text";
    }else{
            senha.type="password";
    }     
 } 

 function mostrarOcultarSenha2(){
    var senha=document.getElementById("exampleInputPassword2");
    if(senha.type=="password"){
            senha.type="text";
    }else{
            senha.type="password";
    }     
 } 