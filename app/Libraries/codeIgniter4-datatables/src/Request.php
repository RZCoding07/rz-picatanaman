<?php
namespace RZCoding\DataTables;

use \Config\Services;

class Request
{

	 /**
     * Get DataTable Request
     *  
     * @param  String $requestName
     * @return String|Array
     */


    public static function get($requestName = NULL)
    {
    	$request = Services::request();
        if($requestName !== NULL)
    	   return $request->getGetPost($requestName);
        
        return (Object) ((strtolower($request->getMethod()) == 'get') ? $request->getGet() : $request->getPost());

    }


}