<?php
function calcularIdade($dn){

    //Criando objeto data e hora:
$dn = new DateTime($dn);

//Criando data e hora atual:
$hoje =new DateTime();

//calcular diferença entre as datas:
$diferenca = $hoje->diff($dn);

//retornar anos,meses e dias:
return "Você tem ".$diferenca->y . " anos, " .$diferenca->m . "
meses e " .$diferenca->d . " dias.";

}

//Exemplo de uso da função:
$dn="2008-07-18";
echo calcularIdade($dn);

?>