<?php

namespace WebforceHQ\Stickyio\Tests;

use PHPUnit\Framework\TestCase;
use WebforceHQ\Stickyio\Models\Offer;
use WebforceHQ\Stickyio\Models\Order;
use WebforceHQ\Stickyio\Models\UpdatedOrder;
use WebforceHQ\Stickyio\Models\StickyCriteria;
use WebforceHQ\Stickyio\Requests\StickyIoClient;

class OrderTest extends TestCase
{

    protected function setUp(): void{
        $this->username  = <Sticky io username>;
        $this->password  = <Sticky io password>;
        $this->url       = <Sticky io project url>;

        //Campaign Id
        $this->campaignId = 131;

        //Offer Id
        $this->offerId = 3;
        
        //Product Id
        $this->productId = 83;
        
        //Billing Model Id
        $this->billingModelId = 2;

        $this->client    = new StickyIoClient($this->username, $this->password, $this->url);
    }
 
    public function testCreateOrder(){
        $order      = $this->setDemoOrderValues();
        $ordersApi  = $this->client->ordersApi();
        $response   = $ordersApi->create($order);
        $this->assertTrue($response->success);
    }

    public function testFetchOrder(){
        $searchCriteria = new StickyCriteria;
        $searchCriteria->setStartDate("2020-10-27")
                    ->setEndDate("2020-10-27")
                    ->setCampaignId($this->campaignId)
                    ->setCriteria([
                        "pending" => 1
                    ])
                    ->setSearchType('all')
                    ->setDynamicProperty("return_type","order_view");
        $ordersApi  = $this->client->ordersApi();
        $response = $ordersApi->find($searchCriteria);
        $this->assertTrue($response->success);
    }

    public function testUpdateOrder(){
        $order = new UpdatedOrder;
        $order->setOrderId(114978);
        $order->setPaymentReceived(1);
        $order->setNotes("This is a note indicating that the order has been update");
        $order->setFirstName("Jhonny");
        $order->setLastName("Does");
        $ordersApi  = $this->client->ordersApi();
        $response = $ordersApi->update([$order]);
        var_dump($response);
        $this->assertTrue($response->success);
    }

    
    private function setDemoOrderValues(){
        $order = new Order;
        $order->setFirstName("Jhon"); //Required
        $order->setLastName(" Doe"); //Required
        $order->setShippingAddress1("1 Main St"); //Required
        $order->setShippingCity("San Jose"); //Required
        $order->setShippingState("CA"); //Required
        $order->setShippingZip("95131"); //Required
        $order->setShippingCountry("US"); //Required
        $order->setPhone("+529981510858"); //Required
        $order->setEmail("jdoe@demo.com"); //Required
        $order->setCreditCardType("offline");
        $order->setTranType("Sale");
        $order->setIpAddress("127.0.0.1");
        $order->setCampaignId("131");//DEMO - WebforceHQ
        $order->setShippingId("2");//Free Shipping
        $order->setBillingSameAsShipping(0);
        $order->setNotes("This is a not for this demo order");
        $order->setBillingFirstName("Jhon");
        $order->setBillingLastName(" Doe");
        $order->setBillingAddress1("1 Main St");
        $order->setBillingCity("San Jose");
        $order->setBillingState("CA");
        $order->setBillingZip("95131");
        $order->setBillingCountry("US");

        $offer = new Offer;
        $offer->setOfferId($this->offerId);
        $offer->setProductId($this->productId);
        $offer->setBillingModelId($this->billingModelId);
        $offer->setQuantity(1);
        
        $order->setOffers([$offer]); //Required

        return $order;

    }
}
