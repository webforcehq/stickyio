<?php

namespace WebforceHQ\Stickyio\Requests;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ClientException;
use WebforceHQ\Stickyio\Exceptions\UnsetRequestException;

class StickyIoRequest
{

    protected $username;
    protected $password;
    protected $headers;
    
    protected $url;
    protected $apiV1;
    protected $apiV2;

    protected function setUpHttpClient()
    {
        $this->apiV1 = $this->url."/api/v1/";
        $this->apiV2 = $this->url."/api/v2/";
        $this->getClient();
    }

    private function getClient($params = null)
    {
        $this->client = new Client([
            'base_uri'  => $this->url,
        ]);
    }

    public function post($endpoint, $payload)
    {

        return $this->sendRequest('POST',$endpoint,$payload);

    }

    public function get($endpoint)
    {
        
        return $this->sendRequest('GET',$endpoint);
        
    }

    public function delete($endpoint)
    {
        
        return $this->sendRequest('DELETE',$endpoint);
    }

    public function put($endpoint, $payload)
    {
        
        return $this->sendRequest('PUT',$endpoint,$payload);
    }

    private function sendRequest($httpMethod, $endpoint, $payload = null){
       
        $responseObj = new \stdClass();
        $responseObj->success = false;
        try{

            $requestAttributes = [
                'auth'  =>  [$this->username, $this->password],
            ];
            
            if($payload){
                $requestAttributes['json'] = $payload;
            }
            
            $response = $this->client->request($httpMethod, $endpoint, $requestAttributes);
            
            $responseBody = json_decode($response->getBody()->getContents());

            $responseCode           = $responseBody->response_code;
            $responseObj->success   = $responseCode == "100" ? true : false;
            $responseObj->code      = $responseCode;
            $responseObj->body      = $responseBody;

        }catch(ClientException $e){
            
            $response               = $e->getResponse();
            $responseObj->code      = $response->getStatusCode();
            $responseObj->body      = json_decode($response->getBody()->getContents());
            $responseObj->success   = false;

        }finally{

            return $responseObj;

        }
    }

    protected function allObjectsAreValidClass(array $validClasses, array $objects){
        
        foreach($objects as $object){
            $currClazz = get_class($object);
            if( ! in_array($currClazz, $validClasses) ){
                $allowedClasses = join(",",$validClasses);
                throw new Exception("Object of class {$currClazz} not allowed, expecting objects of classes: {$allowedClasses}");
            }
        }

    }

}