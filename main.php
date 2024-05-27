<?php
global $cms;

src('layouts.header');

echo OPEN_MAIN;

if ($cms->modello == "Home Page") {

    src('pages.home');

} else {

    if ($cms->modello == 'Interne') {
        src('pages.base');
    }

    if ($cms->modello == 'Interna Avanzata') {
        src('pages.advanced');
    }

    if ($cms->modello == 'Camere') {
        src('pages.rooms');
    }

    if ($cms->modello == 'Interna Camere') {
        src('pages.room');
    }

    if ($cms->modello == 'Servizi') {
        src('pages.services');
    }

    if ($cms->modello == 'Ristorante') {
        src('pages.restaurant');
    }

    if ($cms->modello == 'Interna Ristorante') {
        src('pages.restaurantPage');
    }

    if ($cms->modello == 'Location') {
        src('pages.location');
    }

    if ($cms->modello == 'Form') {
        src('pages.form');
    }

    if ($cms->modello == 'Gallery') {
        src('pages.gallery');
    }

    if ($cms->modello == 'Offerte') {
        src('pages.Offers.list');
    }
}

if ($cms->modello != 'Offerte') {
    src('pages.Offers.special');
}

src('components.Instagram');

echo CLOSE_MAIN;
?>