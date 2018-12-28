function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que n�o � d�gito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca par�nteses em volta dos dois primeiros d�gitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca h�fen entre o quarto e o quinto d�gitos
    return v;
}
function mcpf(v){
    v=v.replace(/\D/g,"");//Remove tudo o que n�o � d�gito

    v=v.replace(/(\d)(\d{8})$/,"$1.$2");
    v=v.replace(/(\d)(\d{5})$/,"$1.$2");
    v=v.replace(/(\d)(\d{2})$/,"$1-$2");
    return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
    id('telefone').onkeypress = function(){
        mascara( this, mtel );
    }
    id('cpf').onkeypress = function(){
        mascara( this, mcpf);
}
}

