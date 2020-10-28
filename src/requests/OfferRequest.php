<?php

namespace WebforceHQ\Stickyio\Requests;

use WebforceHQ\Stickyio\Exceptions\StickyIoUnsetIdentifierException;
use WebforceHQ\Stickyio\Models\Offer;
use WebforceHQ\Stickyio\Requests\StickyIoRequest;

class OfferRequest extends StickyIoRequest
{
    private const ENDPOINT = 'offers';

    public function __construct($username, $password, $url)
    {
        $this->url      = $url;
       $this->username  = $username;
       $this->password  = $password;
       $this->setUpHttpClient();
    }
    
    public function create(Offer $offer){
        
        return $this->post($this->apiV2.self::ENDPOINT, $offer->toArray());
        
    }

    public function read($id){

        if( ! $id ){
            throw new StickyIoUnsetIdentifierException();
        }
        return $this->get($this->apiV2.self::ENDPOINT."/{$id}");

    }


    public function update(Offer $offer){
        $id = $offer->getOfferId();
        if( ! $id ){
            throw new StickyIoUnsetIdentifierException();
        }
        
        return $this->put($this->apiV2.self::ENDPOINT."/{$id}", $offer->toArray());

    }

    public function destroy($id){

        if( ! $id ){
            throw new StickyIoUnsetIdentifierException();
        }
        return $this->delete($this->apiV2.self::ENDPOINT."/{$id}");

    }

}
