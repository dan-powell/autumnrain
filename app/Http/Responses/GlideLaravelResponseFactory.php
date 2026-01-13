<?php

namespace App\Http\Responses;

use League\Flysystem\FilesystemOperator;
use League\Glide\Responses\ResponseFactoryInterface;
use Symfony\Component\HttpFoundation\StreamedResponse;
                                                                                                   
class GlideLaravelResponseFactory implements ResponseFactoryInterface                                                                                               
{                                                                                                                                                                   
    /**                                                                                                                                                             
     * Create a response.                                                                                                                                           
     *                                                                                                                                                              
     * @param FilesystemOperator $cache                                                                                                                             
     * @param string $path                                                                                                                                          
     * @return StreamedResponse                                                                                                                                     
     */                                                                                                                                                             
    public function create(FilesystemOperator $cache, $path) 
    {
        $response = new StreamedResponse();

        $response->headers->set('Content-Type', $cache->mimeType($path));                                                                                           
        $response->headers->set('Content-Length', $cache->fileSize($path));                                                                                         
        $response->setPublic();                                                                                                                                     
        $response->setMaxAge(31536000);                                                                                                                             
        $response->setExpires(date_create('+1 year'));                                                                                                              
                                                                                                                                                                    
        $response->sendHeaders();                                                                                                                                   
                                                                                                                                                                    
        echo $cache->read($path);

        return $response;
    }
}
