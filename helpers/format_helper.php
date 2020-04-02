<?php

// Datum formatie
function formatDate($date)
{
    $date = date("j M Y, G:i:s", strtotime($date));
    return $date;
}

// is_active functie Footer-categoriën
function is_active($category)
{
    if ( isset($_GET['cat'])){
        if ( $_GET['cat'] == $category ){
            return 'active';
        } else {
            return '';
        }
    } else {
        if ( $category == null ){
            return 'active';
        }
    }
}