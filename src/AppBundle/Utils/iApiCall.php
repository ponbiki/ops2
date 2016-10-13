<?php
/**
 * Created by PhpStorm.
 * User: ponbiki
 * Date: 10/13/16
 * Time: 12:05 PM
 */

namespace AppBundle\Utils;

/**
 * Interface iApiCall
 * @package AppBundle\Utils
 */

interface iApiCall
{
    /**
     * Remote base URL for ops-api
     * @const string Base URL of ops-api for baseCurl method
     */
    const BASEURL = 'https://ops-api.nsone.co/v1/';
    public function zoneInfo($zone);
}