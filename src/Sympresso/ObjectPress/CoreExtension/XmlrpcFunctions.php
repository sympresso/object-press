<?php

namespace Sympresso\ObjectPress\CoreExtension;

use Sympresso\ObjectPress\Extension;

class XmlrpcFunctions extends Extension
{
    const FUNCTION_NAMESPACE = 'xmlrpc';

    /**
     * @return string
     */
    public function __getNamespace()
    {
        return self::FUNCTION_NAMESPACE;
    }

    /**
     * @return array
     */
    public function __getGlobalVariables()
    {
        return array();
    }

    /**
     * @param $content
     * @return array|string
     * https://developer.wordpress.org/reference/functions/xmlrpc_getpostcategory/
     */
    public function xmlrpc_getpostcategory($content)
    {
        return xmlrpc_getpostcategory($content);
    }

    /**
     * @param $content
     * @return string
     * https://developer.wordpress.org/reference/functions/xmlrpc_getposttitle/
     */
    public function xmlrpc_getposttitle($content)
    {
        return xmlrpc_getposttitle($content);
    }

    /**
     * @param $content
     * @return string
     * https://developer.wordpress.org/reference/functions/xmlrpc_removepostdata/
     */
    public function xmlrpc_removepostdata($content)
    {
        return xmlrpc_removepostdata($content);
    }
}