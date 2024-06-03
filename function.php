<?php
global $cms, $action_be, $strutture, $header_type;

define('OPEN_MAIN', '<main>');
define('CLOSE_MAIN', '</main>');
define('PATH', $cms->getPath()."/");


// Determine the action based on the booking type
$bookingType = $cms->tipo_booking;
$action_be = getActionBasedOnBookingType($bookingType);

// Get the structures array
$strutture = $cms->array_strutture;

// Determine the header type based on the gallery type
$galleryType = $cms->getVar('type-gallery');
$header_type = getHeaderTypeBasedOnGalleryType($galleryType);

/**
 * Returns the action based on the booking type.
 *
 * @param string $bookingType The booking type.
 * @return string The action.
 */
function getActionBasedOnBookingType($bookingType) {
    switch ($bookingType) {
        case 'advanced':
            return 'reservations/risultato.html';
        case 'premium':
            return 'premium/index2.html';
        default:
            return 'reservation_hotel.htm';
    }
}

/**
 * Returns the header type based on the gallery type.
 *
 * @param string $galleryType The gallery type.
 * @return string The header type.
 */
function getHeaderTypeBasedOnGalleryType($galleryType) {
    switch ($galleryType) {
        case 'Ridotta':
            return 'header--reduce';
        case 'Nascosta':
            return 'header--hidden';
        default:
            return '';
    }
}


function src ($source, $array = null) {
    global $cms;
    return $cms->cube_parts("src.$source", $array);
}


function is_landing() {
    global $cms;
    return $cms->sub_classe == 'landing';
}


function is_landing_generator() {
    return isset($_POST['landing_generator']);
}


$cms->addHook("hook_aggiungiElementoPre_BreadCrumb", modBreadCrumb);
function modBreadCrumb($return){

    global $cube;

    $return .= "<li class='item'><a href='".$cube->getLinkHome()."'>Home</a></li>";

    return $return;

}


$cms->addHook("hook_impostaLivello_BreadCrumb", livelloBreadCrumb);
function livelloBreadCrumb($return) {

    global $cube;

    $return = 0;

    return $return;

}

?>