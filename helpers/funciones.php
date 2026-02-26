<?php
function solo_letras($texto){
    return preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/u", $texto);
}