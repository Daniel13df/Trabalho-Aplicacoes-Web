function checarSenha(){
    var usuario = document.getElementById("usuario");
    var nome = document.getElementById("nome");
    var senha = document.getElementById("senha").value;
    var confirmarSenha = document.getElementById("confirmar-senha").value;


    if (usuario == "" || nome == "" || senha == ""){
        alert("Por favor, preencha todos os campos!");
    }else if(senha !== confirmarSenha){
        alert("Senhas não Correspondem");
        }
        
    
}