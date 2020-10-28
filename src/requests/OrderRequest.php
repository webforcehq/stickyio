<?php

namespace WebforceHQ\Stickyio\Requests;

use WebforceHQ\Stickyio\Exceptions\StickyIoUnsetIdentifierException;
use WebforceHQ\Stickyio\Exceptions\UpdateOrdersArrayEmpty;
use WebforceHQ\Stickyio\Models\Order;
use WebforceHQ\Stickyio\Models\StickyCriteria;
use WebforceHQ\Stickyio\Models\UpdatedOrder;
use WebforceHQ\Stickyio\Requests\StickyIoRequest;

class OrderRequest extends StickyIoRequest
{
    private const ENDPOINT          = 'new_order';
    private const FIND_ENDPOINT     = 'order_find';
    private const UPDATE_ENDPOINT   = 'order_update';


    public function __construct($username, $password, $url)
    {
        $this->url       = $url;
        $this->username  = $username;
        $this->password  = $password;
        $this->setUpHttpClient();
    }
    
    public function create(Order $order){
        
        return $this->post($this->apiV1.SELF::ENDPOINT, $order->toArray());
        
    }

    public function find(StickyCriteria $criteria){
        
        return $this->post($this->apiV1.SELF::FIND_ENDPOINT, $criteria->toArray());

    }

    public function update(array $orders){
        
        $this->allObjectsAreValidClass([UpdatedOrder::class],$orders);

        $ordersToUpdate = [];
        
        foreach($orders as $order){
            
            $orderId = $order->getOrderId();

            if( ! $orderId ){
                
                throw new StickyIoUnsetIdentifierException();
                
            }

            $orderArray = $order->toArray();
            unset($orderArray["order_id"]);
            $ordersToUpdate[$orderId] = $orderArray;

        }

        if( empty($ordersToUpdate) ){
            
            throw new UpdateOrdersArrayEmpty();

        }

        $ordersToBeUpdated = [
            
            'order_id' => $ordersToUpdate

        ];

        return $this->post($this->apiV1.SELF::UPDATE_ENDPOINT, $ordersToBeUpdated);

    }
    

}
