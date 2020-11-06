<?php
    if($_POST['data']){
        $url = 'https://taganrog.positronica.ru/search/?q='. $_POST['data'];
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        );  
        $data = file_get_contents(str_replace(' ', '%20', $url), false, stream_context_create($arrContextOptions));
        $data = str_replace('class="panel-body"','class="panel-body" id="parse"', $data);
        $data = str_replace('href="','href="https://taganrog.positronica.ru', $data);
        $domd = new DOMDocument();
        libxml_use_internal_errors(true);
        $domd->loadHTML($data);
        libxml_use_internal_errors(false);
        $div = $domd->getElementById("parse");
        
        if ($div) {
            $dom2 = new DOMDocument();
            $dom2->appendChild($dom2->importNode($div, true));
            echo $dom2->saveHTML();
        } 
        else {
            echo '<h1 id="not_found">По Вашему запросу ничего не было найдено.</h1>';
            echo $data;
        }
    }
