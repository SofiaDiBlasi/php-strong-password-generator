<?php
    const LETTERE = 'abcdefghijklmnopqrstuvwxyz';
    const NUMERI = '0123456789';
    const SPECIALI = '!@#$%^&*()_+-={}[]|:;"<>,.?/';

    function generapassword($lunghezza) {
        $listacaratteri =LETTERE . mb_strtoupper(LETTERE) . NUMERI . SPECIALI;
        
        $password = "";
        while ($lunghezza > 0) {
            $lunghezza--;
            $index = random_int(0, mb_strlen($listacaratteri) - 1);
            $selezione = $listacaratteri[$index];
            $password .= $selezione;
        }
        return $password;
    }
?>