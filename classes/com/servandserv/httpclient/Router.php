<?php

namespace com\servandserv\httpclient;

use \com\servandserv\data\DataAdaptor;

interface Router
{
    /**
     * @return boolean TRUE if redirect header has been sent
     */
    public function redirect( DataAdaptor $result = null );
}
