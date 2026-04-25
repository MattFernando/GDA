<?php 

function CotacaoAtual($siglaPais) {

    if ($siglaPais === 'PYG-BRL') {
        $url = "https://economia.awesomeapi.com.br/json/last/{$siglaPais}";
    $json = file_get_contents($url);
    
    if ($json === false) return "Erro ao consultar API";

    $data = json_decode($json, true);
    $chave = str_replace('-', '', $siglaPais);
    $cotacao = $data[$chave]['bid'] ?? "Cotação não encontrada";
    return number_format($cotacao, 6, ',', '.');
    } else {
        $url = "https://economia.awesomeapi.com.br/json/last/{$siglaPais}";
    $json = file_get_contents($url);
    
    if ($json === false) return "Erro ao consultar API";

    $data = json_decode($json, true);
    $chave = str_replace('-', '', $siglaPais);
    $cotacao = $data[$chave]['bid'] ?? "Cotação não encontrada";
    return number_format($cotacao, 2, ',', '.');
    }    
}

    
?>