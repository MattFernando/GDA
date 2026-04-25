<?php 



 

function CotacaoAtual($siglaPais) {

    $url = "https://economia.awesomeapi.com.br/json/last/{$siglaPais}";
    $json = file_get_contents($url);
    
    if ($json === false) return "Erro ao consultar API";

    $data = json_decode($json, true);
    $chave = str_replace('-', '', $siglaPais);
    $cotacao = $data[$chave]['bid'] ?? "Cotação não encontrada";
    return number_format($cotacao, 2, ',', '.');
}


function CotacaoAtualGuarani($siglaPais) {

    $url = "https://economia.awesomeapi.com.br/json/last/{$siglaPais}";
    $json = file_get_contents($url);
    
    if ($json === false) return "Erro ao consultar API";

    $data = json_decode($json, true);
    $chave = str_replace('-', '', $siglaPais);
    $cotacao = $data[$chave]['bid'] ?? "Cotação não encontrada";
    return $cotacao;
}
    


?>