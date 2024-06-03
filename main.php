<?php
global $cms;

src('header.Header');

echo OPEN_MAIN;

if ($cms->modello == "Home Page") {

    src('models.home-page');

} else {

    if ($cms->modello == 'Interne') {
        src('models.page');
    }

    if ($cms->modello == 'Interna Avanzata') {
        src('models.advanced');
    }

    if ($cms->modello == 'Camere') {
        src('models.rooms');
    }

    if ($cms->modello == 'Interna Camere') {
        src('models.room-page');
    }

    if ($cms->modello == 'Servizi') {
        src('models.services');
    }

    if ($cms->modello == 'Location') {
        src('models.location');
    }

    if ($cms->modello == 'Form') {
        src('models.form');
    }

    if ($cms->modello == 'Gallery') {
        src('models.gallery');
    }

    if ($cms->modello == 'Offerte') {
        src('models.offers');
    }
}

if ($cms->modello != 'Offerte') {
    src('components.OffersSlider');
}

echo CLOSE_MAIN;
?>