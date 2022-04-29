<?php

    function calcula_idade($data)
    {
        $data_atual = date("Y-m-d");
        $lista_atual = explode('-', $data_atual);
        $lista_dt_nasc = explode('-', $data);

        $ano_atual = $lista_atual[0];
        $mes_atual = $lista_atual[1];
        $dia_atual = $lista_atual[2];

        $ano_nasc = $lista_dt_nasc[0];
        $mes_nasc = $lista_dt_nasc[1];
        $dia_nasc = $lista_dt_nasc[2];

        $idade = $ano_atual - $ano_nasc;
        
        if ($mes_atual < $mes_nasc){
            $idade --;
        } elseif ($dia_atual < $dia_nasc){
            $idade --;
        }

        return $idade;
    }