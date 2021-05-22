<?php

/**
 * Variavel para debugar
 * @param $variavel
 */
function debugar($variavel)
{
    echo "<pre>";
        print_r($variavel);
    echo "</pre>";
    die();
}