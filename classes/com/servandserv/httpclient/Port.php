<?php

namespace com\servandserv\httpclient;

use \com\servandserv\data\DataAdaptor;

interface Port
{

    const _200 = " 200 OK";
    const _204 = " 204 No Content";
    const _400 = " 400 Bad Request";
    const _403 = " 403 Forbidden";
    const _405 = " 405 Method Not Allowed";
    const _500 = " 500 Internal Server Error";

    /**
     * @param $dto \com\servandserv\happymeal\DataAdaptor request data container
     * @return \com\servandserv\happymeal\DataAdaptor
     */
    public function request( DataAdaptor $dto );
    
    /**
     *
     * @param $response \com\servandserv\happymeal\DataAdaptor
     * @param $code response code
     * @param $pi xsl stylesheet for xml document if applicable
     * @return null
     */
    public function response( DataAdaptor $response = NULL, $code = 200, $pi = NULL );
    
}
