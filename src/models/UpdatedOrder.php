<?php

namespace WebforceHQ\Stickyio\Models;

use WebforceHQ\Stickyio\Models\StickyioModel;

class UpdatedOrder extends StickyioModel
{

    protected $c1;
    protected $c2;
    protected $c3;
    protected $rma;
    protected $aid;
    protected $sid;
    protected $opt;
    protected $afid;
    protected $fraud;
    protected $notes;
    protected $email;
    protected $phone;
    protected $affid;
    protected $cc_cvv;
    protected $return;
    protected $blacklist;
    protected $last_name;
    protected $cc_number;
    protected $check_ssn;
    protected $chargeback;
    protected $first_name;
    protected $billing_zip;
    protected $shipping_zip;
    protected $billing_city;
    protected $shipping_city;
    protected $billing_state;
    protected $check_routing;
    protected $check_account;
    protected $payment_token;
    protected $shipping_state;
    protected $recurring_date;
    protected $shipping_method;
    protected $billing_country;
    protected $rebill_discount;
    protected $cc_payment_type;
    protected $tracking_number;
    protected $shipping_country;
    protected $billing_address1;
    protected $billing_address2;
    protected $payment_received;
    protected $shipping_address1;
    protected $shipping_address2;
    protected $billing_last_name;
    protected $shipping_last_name;
    protected $billing_first_name;
    protected $cc_expiration_date;
    protected $confirmation_status;
    protected $shipping_first_name;
    protected $gift_recipient_email;
    protected $rebill_discount_is_one_time;
    protected $stop_recurring_next_success;

    protected $order_id;

    /**
     * Get the value of blacklist
     */ 
    public function getBlackList()
    {
        return $this->blacklist;
    }

    /**
     * Set the value of blacklist
     *
     * @return  self
     */ 
    public function setBlackList($blacklist)
    {
        $this->blacklist = $blacklist;

        return $this;
    }

    /**
     * Get the value of fraud
     */ 
    public function getFraud()
    {
        return $this->fraud;
    }

    /**
     * Set the value of fraud
     *
     * @return  self
     */ 
    public function setFraud($fraud)
    {
        $this->fraud = $fraud;

        return $this;
    }

    /**
     * Get the value of chargeback
     */ 
    public function getChargeBack()
    {
        return $this->chargeback;
    }

    /**
     * Set the value of chargeback
     *
     * @return  self
     */ 
    public function setChargeBack($chargeback)
    {
        $this->chargeback = $chargeback;

        return $this;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */ 
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of shipping_first_name
     */ 
    public function getShippingFirstName()
    {
        return $this->shipping_first_name;
    }

    /**
     * Set the value of shipping_first_name
     *
     * @return  self
     */ 
    public function setShippingFirstName($shipping_first_name)
    {
        $this->shipping_first_name = $shipping_first_name;

        return $this;
    }

    /**
     * Get the value of shipping_last_name
     */ 
    public function getShippingLastName()
    {
        return $this->shipping_last_name;
    }

    /**
     * Set the value of shipping_last_name
     *
     * @return  self
     */ 
    public function setShippingLastName($shipping_last_name)
    {
        $this->shipping_last_name = $shipping_last_name;

        return $this;
    }

    /**
     * Get the value of shipping_method
     */ 
    public function getShippingMethod()
    {
        return $this->shipping_method;
    }

    /**
     * Set the value of shipping_method
     *
     * @return  self
     */ 
    public function setShippingMethod($shipping_method)
    {
        $this->shipping_method = $shipping_method;

        return $this;
    }

    /**
     * Get the value of shipping_address1
     */ 
    public function getShippingAddress1()
    {
        return $this->shipping_address1;
    }

    /**
     * Set the value of shipping_address1
     *
     * @return  self
     */ 
    public function setShippingAddress1($shipping_address1)
    {
        $this->shipping_address1 = $shipping_address1;

        return $this;
    }

    /**
     * Get the value of shipping_address2
     */ 
    public function getShippingAddress2()
    {
        return $this->shipping_address2;
    }

    /**
     * Set the value of shipping_address2
     *
     * @return  self
     */ 
    public function setShippingAddress2($shipping_address2)
    {
        $this->shipping_address2 = $shipping_address2;

        return $this;
    }

    /**
     * Get the value of shipping_city
     */ 
    public function getShippingCity()
    {
        return $this->shipping_city;
    }

    /**
     * Set the value of shipping_city
     *
     * @return  self
     */ 
    public function setShippingCity($shipping_city)
    {
        $this->shipping_city = $shipping_city;

        return $this;
    }

    /**
     * Get the value of shipping_zip
     */ 
    public function getShippingZip()
    {
        return $this->shipping_zip;
    }

    /**
     * Set the value of shipping_zip
     *
     * @return  self
     */ 
    public function setShippingZip($shipping_zip)
    {
        $this->shipping_zip = $shipping_zip;

        return $this;
    }

    /**
     * Get the value of shipping_state
     */ 
    public function getShippingState()
    {
        return $this->shipping_state;
    }

    /**
     * Set the value of shipping_state
     *
     * @return  self
     */ 
    public function setShippingState($shipping_state)
    {
        $this->shipping_state = $shipping_state;

        return $this;
    }

    /**
     * Get the value of shipping_country
     */ 
    public function getShippingCountry()
    {
        return $this->shipping_country;
    }

    /**
     * Set the value of shipping_country
     *
     * @return  self
     */ 
    public function setShippingCountry($shipping_country)
    {
        $this->shipping_country = $shipping_country;

        return $this;
    }

    /**
     * Get the value of billing_first_name
     */ 
    public function getBillingFirstName()
    {
        return $this->billing_first_name;
    }

    /**
     * Set the value of billing_first_name
     *
     * @return  self
     */ 
    public function setBillingFirstName($billing_first_name)
    {
        $this->billing_first_name = $billing_first_name;

        return $this;
    }

    /**
     * Get the value of billing_last_name
     */ 
    public function getBillingLastName()
    {
        return $this->billing_last_name;
    }

    /**
     * Set the value of billing_last_name
     *
     * @return  self
     */ 
    public function setBillingLastName($billing_last_name)
    {
        $this->billing_last_name = $billing_last_name;

        return $this;
    }

    /**
     * Get the value of billing_address1
     */ 
    public function getBillingAddress1()
    {
        return $this->billing_address1;
    }

    /**
     * Set the value of billing_address1
     *
     * @return  self
     */ 
    public function setBillingAddress1($billing_address1)
    {
        $this->billing_address1 = $billing_address1;

        return $this;
    }

    /**
     * Get the value of billing_address2
     */ 
    public function getBillingAddress2()
    {
        return $this->billing_address2;
    }

    /**
     * Set the value of billing_address2
     *
     * @return  self
     */ 
    public function setBillingAddress2($billing_address2)
    {
        $this->billing_address2 = $billing_address2;

        return $this;
    }

    /**
     * Get the value of billing_city
     */ 
    public function getBillingCity()
    {
        return $this->billing_city;
    }

    /**
     * Set the value of billing_city
     *
     * @return  self
     */ 
    public function setBillingCity($billing_city)
    {
        $this->billing_city = $billing_city;

        return $this;
    }

    /**
     * Get the value of billing_zip
     */ 
    public function getBillingZip()
    {
        return $this->billing_zip;
    }

    /**
     * Set the value of billing_zip
     *
     * @return  self
     */ 
    public function setBillingZip($billing_zip)
    {
        $this->billing_zip = $billing_zip;

        return $this;
    }

    /**
     * Get the value of billing_state
     */ 
    public function getBillingState()
    {
        return $this->billing_state;
    }

    /**
     * Set the value of billing_state
     *
     * @return  self
     */ 
    public function setBillingState($billing_state)
    {
        $this->billing_state = $billing_state;

        return $this;
    }

    /**
     * Get the value of billing_country
     */ 
    public function getBillingCountry()
    {
        return $this->billing_country;
    }

    /**
     * Set the value of billing_country
     *
     * @return  self
     */ 
    public function setBillingCountry($billing_country)
    {
        $this->billing_country = $billing_country;

        return $this;
    }

    /**
     * Get the value of rebill_discount
     */ 
    public function getRebillDiscount()
    {
        return $this->rebill_discount;
    }

    /**
     * Set the value of rebill_discount
     *
     * @return  self
     */ 
    public function setRebillDiscount($rebill_discount)
    {
        $this->rebill_discount = $rebill_discount;

        return $this;
    }

    /**
     * Get the value of rebill_discount_is_one_time
     */ 
    public function getRebillDiscountIsOneTime()
    {
        return $this->rebill_discount_is_one_time;
    }

    /**
     * Set the value of rebill_discount_is_one_time
     *
     * @return  self
     */ 
    public function setRebillDiscountIsOneTime($rebill_discount_is_one_time)
    {
        $this->rebill_discount_is_one_time = $rebill_discount_is_one_time;

        return $this;
    }

    /**
     * Get the value of cc_number
     */ 
    public function getCcNumber()
    {
        return $this->cc_number;
    }

    /**
     * Set the value of cc_number
     *
     * @return  self
     */ 
    public function setCcNumber($cc_number)
    {
        $this->cc_number = $cc_number;

        return $this;
    }

    /**
     * Get the value of cc_cvv
     */ 
    public function getCcCvv()
    {
        return $this->cc_cvv;
    }

    /**
     * Set the value of cc_cvv
     *
     * @return  self
     */ 
    public function setCcCvv($cc_cvv)
    {
        $this->cc_cvv = $cc_cvv;

        return $this;
    }

    /**
     * Get the value of notes
     */ 
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set the value of notes
     *
     * @return  self
     */ 
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get the value of check_routing
     */ 
    public function getCheckRouting()
    {
        return $this->check_routing;
    }

    /**
     * Set the value of check_routing
     *
     * @return  self
     */ 
    public function setCheckRouting($check_routing)
    {
        $this->check_routing = $check_routing;

        return $this;
    }

    /**
     * Get the value of check_account
     */ 
    public function getCheckAccount()
    {
        return $this->check_account;
    }

    /**
     * Set the value of check_account
     *
     * @return  self
     */ 
    public function setCheckAccount($check_account)
    {
        $this->check_account = $check_account;

        return $this;
    }

    /**
     * Get the value of check_ssn
     */ 
    public function getCheckSsn()
    {
        return $this->check_ssn;
    }

    /**
     * Set the value of check_ssn
     *
     * @return  self
     */ 
    public function setCheckSsn($check_ssn)
    {
        $this->check_ssn = $check_ssn;

        return $this;
    }

    /**
     * Get the value of cc_expiration_date
     */ 
    public function getCcExpirationDate()
    {
        return $this->cc_expiration_date;
    }

    /**
     * Set the value of cc_expiration_date
     *
     * @return  self
     */ 
    public function setCcExpirationDate($cc_expiration_date)
    {
        $this->cc_expiration_date = $cc_expiration_date;

        return $this;
    }

    /**
     * Get the value of cc_payment_type
     */ 
    public function getCcPaymentType()
    {
        return $this->cc_payment_type;
    }

    /**
     * Set the value of cc_payment_type
     *
     * @return  self
     */ 
    public function setCcPaymentType($cc_payment_type)
    {
        $this->cc_payment_type = $cc_payment_type;

        return $this;
    }

    /**
     * Get the value of stop_recurring_next_success
     */ 
    public function getStopRecurringNextSuccess()
    {
        return $this->stop_recurring_next_success;
    }

    /**
     * Set the value of stop_recurring_next_success
     *
     * @return  self
     */ 
    public function setStopRecurringNextSuccess($stop_recurring_next_success)
    {
        $this->stop_recurring_next_success = $stop_recurring_next_success;

        return $this;
    }

    /**
     * Get the value of rma
     */ 
    public function getRma()
    {
        return $this->rma;
    }

    /**
     * Set the value of rma
     *
     * @return  self
     */ 
    public function setRma($rma)
    {
        $this->rma = $rma;

        return $this;
    }

    /**
     * Get the value of return
     */ 
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * Set the value of return
     *
     * @return  self
     */ 
    public function setReturn($return)
    {
        $this->return = $return;

        return $this;
    }

    /**
     * Get the value of tracking_number
     */ 
    public function getTrackingNumber()
    {
        return $this->tracking_number;
    }

    /**
     * Set the value of tracking_number
     *
     * @return  self
     */ 
    public function setTrackingNumber($tracking_number)
    {
        $this->tracking_number = $tracking_number;

        return $this;
    }

    /**
     * Get the value of payment_received
     */ 
    public function getPaymentReceived()
    {
        return $this->payment_received;
    }

    /**
     * Set the value of payment_received
     *
     * @return  self
     */ 
    public function setPaymentReceived($payment_received)
    {
        $this->payment_received = $payment_received;

        return $this;
    }

    /**
     * Get the value of afid
     */ 
    public function getAfid()
    {
        return $this->afid;
    }

    /**
     * Set the value of afid
     *
     * @return  self
     */ 
    public function setAfid($afid)
    {
        $this->afid = $afid;

        return $this;
    }

    /**
     * Get the value of affid
     */ 
    public function getAffid()
    {
        return $this->affid;
    }

    /**
     * Set the value of affid
     *
     * @return  self
     */ 
    public function setAffid($affid)
    {
        $this->affid = $affid;

        return $this;
    }

    /**
     * Get the value of aid
     */ 
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * Set the value of aid
     *
     * @return  self
     */ 
    public function setAid($aid)
    {
        $this->aid = $aid;

        return $this;
    }

    /**
     * Get the value of sid
     */ 
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set the value of sid
     *
     * @return  self
     */ 
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get the value of c1
     */ 
    public function getC1()
    {
        return $this->c1;
    }

    /**
     * Set the value of c1
     *
     * @return  self
     */ 
    public function setC1($c1)
    {
        $this->c1 = $c1;

        return $this;
    }

    /**
     * Get the value of c2
     */ 
    public function getC2()
    {
        return $this->c2;
    }

    /**
     * Set the value of c2
     *
     * @return  self
     */ 
    public function setC2($c2)
    {
        $this->c2 = $c2;

        return $this;
    }

    /**
     * Get the value of c3
     */ 
    public function getC3()
    {
        return $this->c3;
    }

    /**
     * Set the value of c3
     *
     * @return  self
     */ 
    public function setC3($c3)
    {
        $this->c3 = $c3;

        return $this;
    }

    /**
     * Get the value of opt
     */ 
    public function getOpt()
    {
        return $this->opt;
    }

    /**
     * Set the value of opt
     *
     * @return  self
     */ 
    public function setOpt($opt)
    {
        $this->opt = $opt;

        return $this;
    }

    /**
     * Get the value of gift_recipient_email
     */ 
    public function getGiftRecipientEmail()
    {
        return $this->gift_recipient_email;
    }

    /**
     * Set the value of gift_recipient_email
     *
     * @return  self
     */ 
    public function setGiftRecipientEmail($gift_recipient_email)
    {
        $this->gift_recipient_email = $gift_recipient_email;

        return $this;
    }

    /**
     * Get the value of recurring_date
     */ 
    public function getRecurringDate()
    {
        return $this->recurring_date;
    }

    /**
     * Set the value of recurring_date
     *
     * @return  self
     */ 
    public function setRecurringDate($recurring_date)
    {
        $this->recurring_date = $recurring_date;

        return $this;
    }

    /**
     * Get the value of payment_token
     */ 
    public function getPaymentToken()
    {
        return $this->payment_token;
    }

    /**
     * Set the value of payment_token
     *
     * @return  self
     */ 
    public function setPaymentToken($payment_token)
    {
        $this->payment_token = $payment_token;

        return $this;
    }

    /**
     * Get the value of order_id
     */ 
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * Set the value of order_id
     *
     * @return  self
     */ 
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }
}
