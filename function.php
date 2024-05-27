<?php
global $cms, $action_be, $strutture;

define('OPEN_MAIN', '<main>');
define('CLOSE_MAIN', '</main>');
define('PATH', $cms->getPath()."/");

$action_be = (($cms->tipo_booking == 'advanced') ? 'reservations/risultato.html' : (($cms->tipo_booking == 'premium') ? 'premium/index2.html' : 'reservation_hotel.htm'));
$strutture = $cms->array_strutture;

function curl_get_file_size( $url ) {
    // Assume failure.
    $result = -1;

    $curl = curl_init( $url );

    // Issue a HEAD request and follow any redirects.
    curl_setopt( $curl, CURLOPT_NOBODY, true );
    curl_setopt( $curl, CURLOPT_HEADER, true );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $curl, CURLOPT_FOLLOWLOCATION, true );

    $data = curl_exec( $curl );
    curl_close( $curl );

    if( $data ) {
        $content_length = false;
        $status = false;

        if( preg_match( "/^HTTP\/1\.[01] (\d\d\d)/", $data, $matches ) ) {
            $status = (int)$matches[1];
        }

        if( preg_match( "/Content-Length: (\d+)/", $data, $matches ) ) {
            $content_length = (int)$matches[1];
        }

        // http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
        if( $status == 200 || ($status > 300 && $status <= 308) ) {
            $result = $content_length;
        }
    }

    return $result;
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