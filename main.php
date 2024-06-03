<?php

src('header.Header');

echo OPEN_MAIN;

if ($this->modello == "Home Page") {

    src('models.home-page');

} else {

    if ($this->modello == 'Interne') {
        src('models.page');
    }

    if ($this->modello == 'Interna Avanzata') {
        src('models.advanced');
    }

    if ($this->modello == 'Camere') {
        src('models.rooms');
    }

    if ($this->modello == 'Interna Camere') {
        src('models.room-page');
    }

    if ($this->modello == 'Servizi') {
        src('models.services');
    }

    if ($this->modello == 'Location') {
        src('models.location');
    }

    if ($this->modello == 'Form') {
        src('models.form');
    }

    if ($this->modello == 'Gallery') {
        src('models.gallery');
    }

    if ($this->modello == 'Offerte') {
        src('models.offers');
    }
}

if ($this->modello != 'Offerte') {
    src('content.offers-slider');
}

echo CLOSE_MAIN;
?>