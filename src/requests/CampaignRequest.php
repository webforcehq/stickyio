<?php

namespace WebforceHQ\Stickyio\Requests;

use WebforceHQ\Stickyio\Exceptions\StickyIoUnsetIdentifierException;
use WebforceHQ\Stickyio\Models\Campaign;

class CampaignRequest extends StickyIoRequest
{

    private const ENDPOINT = 'campaigns';
    
    public function __construct($username, $password, $url)
    {
       $this->url       = $url;
       $this->username  = $username;
       $this->password  = $password;
       $this->setUpHttpClient();
    }

    public function create(Campaign $campaign)
    {

        return $this->post($this->apiV2.self::ENDPOINT, $campaign->toArray());

    }

    public function read(int $campaignId)
    {
        if( ! $campaignId ){
            throw new StickyIoUnsetIdentifierException();
        }

        return $this->get($this->apiV2.self::ENDPOINT."/{$campaignId}");

    }

    /**
     * All fields should be passed through. Any empty fields will be set to blank on the record.
     */
    public function update(int $campaignId, Campaign $campaign){

        if( ! $campaignId ){
            throw new StickyIoUnsetIdentifierException();
        }

        return $this->put($this->apiV2.self::ENDPOINT."/{$campaignId}", $campaign->toArray());

    }

    public function destroy(int $campaignId)
    {
        if( ! $campaignId ){
            throw new StickyIoUnsetIdentifierException();
        }
        
        return $this->delete($this->apiV2.self::ENDPOINT."/{$campaignId}");

    }

    public function list()
    {
        
        return $this->get($this->apiV2.self::ENDPOINT);

    }

    public function archive(int $campaignId)
    {
        if( ! $campaignId ){
            throw new StickyIoUnsetIdentifierException();
        }

        return $this->put($this->apiV2.self::ENDPOINT."/{$campaignId}/archive",[]);

    }

    public function restore(int $campaignId)
    {
        if( ! $campaignId ){
            throw new StickyIoUnsetIdentifierException();
        }

        return $this->put($this->apiV2.self::ENDPOINT."/{$campaignId}/restore",[]);

    }

}
