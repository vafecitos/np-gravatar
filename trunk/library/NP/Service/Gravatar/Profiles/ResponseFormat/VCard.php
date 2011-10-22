<?php
/**
 * NP-Gravatar
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is
 * bundled with this package in the file LICENSE.txt.
 */

require_once 'NP/Service/Gravatar/Profiles/ResponseFormat/Abstract.php';

/**
 * vCard response format.
 *
 * @author Nikola Posa <posa.nikola@gmail.com>
 * @license New BSD License
 */
class NP_Service_Gravatar_Profiles_ResponseFormat_VCard extends NP_Service_Gravatar_Profiles_ResponseFormat_Abstract
{
    public function getResponseFormatId()
    {
        return 'vcf';
    }
}