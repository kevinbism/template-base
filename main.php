<?php

$this->cube_parts('parts.header.Header');

echo OPEN_MAIN;

if ($this->modello == "Home Page") {

    $this->cube_parts('parts.models.home-page');

} else {

    if ($this->modello == 'Interne') {
        $this->cube_parts('parts.models.page');
    }

    if ($this->modello == 'Interna Avanzata') {
        $this->cube_parts('parts.models.advanced');
    }

    if ($this->modello == 'Camere') {
        $this->cube_parts('parts.models.rooms');
    }

    if ($this->modello == 'Interna Camere') {
        $this->cube_parts('parts.models.room-page');
    }

    if ($this->modello == 'Servizi') {
        $this->cube_parts('parts.models.services');
    }

    if ($this->modello == 'Location') {
        $this->cube_parts('parts.models.location');
    }

    if ($this->modello == 'Form') {
        $this->cube_parts('parts.models.form');
    }

    if ($this->modello == 'Gallery') {
        $this->cube_parts('parts.models.gallery');
    }

    if ($this->modello == 'Offerte') {
        $this->cube_parts('parts.models.offers');
    }
}

if ($this->modello != 'Offerte') {
    $this->cube_parts('parts.content.offers-slider');
}

echo CLOSE_MAIN;
?>