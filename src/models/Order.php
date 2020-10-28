<?php

namespace WebforceHQ\Stickyio\Models;

class Order extends StickyioModel
{
    protected $order_id;
    protected $C1;
    protected $C2;
    protected $C3;
    protected $CVV;
    protected $SID;
    protected $AID;
    protected $OPT;
    protected $eci;
    protected $xid;
    protected $AFID;
    protected $cavv;
    protected $phone;
    protected $email;
    protected $AFFID;
    protected $notes;
    protected $offers;
    protected $ssn_nmi;
    protected $website;
    protected $lastName;
    protected $sepa_bic;
    protected $tranType;
    protected $click_id;
    protected $event_id;
    protected $utm_term;
    protected $firstName;
    protected $sepa_iban;
    protected $bank_code;
    protected $ipAddress;
    protected $secretSSN;
    protected $promoCode;
    protected $sessionId;
    protected $campaignId;
    protected $shippingId;
    protected $utm_source;
    protected $utm_medium;
    protected $billingZip;
    protected $browser_tz;
    protected $shippingZip;
    protected $branch_code;
    protected $utm_content;
    protected $billingCity;
    protected $referred_id;
    protected $ds_trans_id;
    protected $shippingCity;
    protected $utm_campaign;
    protected $billingState;
    protected $acs_trans_id;
    protected $stripe_token;
    protected $square_token;
    protected $wallet_token;
    protected $custom_field;
    protected $shippingState;
    protected $alt_pay_token;
    protected $create_member;
    protected $conversion_id;
    protected $creditCardType;
    protected $expirationDate;
    protected $account_number;
    protected $forceGatewayId;
    protected $thm_session_id;
    protected $billingCountry;
    protected $threed_version;
    protected $previousOrderId;
    protected $shippingCountry;
    protected $device_category;
    protected $billingLastName;
    protected $billingAddress1;
    protected $billingAddress2;
    protected $shippingAddress1;
    protected $shippingAddress2;
    protected $creditCardNumber;
    protected $alt_pay_payer_id;
    protected $temp_customer_id;
    protected $cascade_override;
    protected $billingFirstName;
    protected $browser_language;
    protected $consent_required;
    protected $checkAccountNumber;
    protected $checkRoutingNumber;
    protected $eurodebit_acct_num;
    protected $total_installments;
    protected $fields_document_id;
    protected $alt_pay_return_url;
    protected $eurodebit_route_num;
    protected $browser_color_depth;
    protected $three_d_redirect_url;
    protected $browser_java_enabled;
    protected $browser_screen_width;
    protected $billingSameAsShipping;
    protected $browser_screen_height;
    protected $danish_identity_number;
    protected $preserve_force_gateway;
    protected $dynamic_shipping_charge;
    
    protected $payment_received;

    

    /**
     * Attributes for the Order Request to Sticky.io
     */   
    public function __construct()
    {

    }

    /**
     * Get the value of previousOrderId
     */ 
    public function getPreviousOrderId()
    {
        return $this->previousOrderId;
    }

    /**
     * Set the value of previousOrderId
     *
     * @return  self
     */ 
    public function setPreviousOrderId($previousOrderId)
    {
        $this->previousOrderId = $previousOrderId;

        return $this;
    }

    /**
     * Get the value of offers
     */ 
    public function getOffers()
    {
        if( empty($this->offers) ){
            return [];
        }
        
        $offersArray = [];
        foreach($this->offers as $offer){
            $offerModel = new Offer();
            foreach($offer as $key => $value){
                $offerModel->setDynamically($key, $value);
            }
            $offersArray[] = $offerModel;
        }
        $this->offers = $offersArray;
        return $this->offers;
    }

    /**
     * Set the value of offers
     *
     * @return  self
     */ 
    public function setOffers(array $offers)
    {
        $this->allObjectsAreValidClass([Offer::class],$offers);

        $arrayOffers = [];
        foreach($offers as $offer){
            $arrayOffers[] = $offer->toArray();
        }

        $this->offers = $arrayOffers;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of shippingAddress1
     */ 
    public function getShippingAddress1()
    {
        return $this->shippingAddress1;
    }

    /**
     * Set the value of shippingAddress1
     *
     * @return  self
     */ 
    public function setShippingAddress1(string $shippingAddress1)
    {
        $this->shippingAddress1 = $shippingAddress1;

        return $this;
    }

    /**
     * Get the value of shippingAddress2
     */ 
    public function getShippingAddress2()
    {
        return $this->shippingAddress2;
    }

    /**
     * Set the value of shippingAddress2
     *
     * @return  self
     */ 
    public function setShippingAddress2(string $shippingAddress2)
    {
        $this->shippingAddress2 = $shippingAddress2;

        return $this;
    }

    /**
     * Get the value of shippingCity
     */ 
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * Set the value of shippingCity
     *
     * @return  self
     */ 
    public function setShippingCity(string $shippingCity)
    {
        $this->shippingCity = $shippingCity;

        return $this;
    }

    /**
     * Get the value of shippingState
     */ 
    public function getShippingState()
    {
        return $this->shippingState;
    }

    /**
     * Set the value of shippingState
     *
     * @return  self
     */ 
    public function setShippingState(string $shippingState)
    {
        $this->shippingState = $shippingState;

        return $this;
    }

    /**
     * Get the value of shippingZip
     */ 
    public function getShippingZip()
    {
        return $this->shippingZip;
    }

    /**
     * Set the value of shippingZip
     *
     * @return  self
     */ 
    public function setShippingZip(string $shippingZip)
    {
        $this->shippingZip = $shippingZip;

        return $this;
    }

    /**
     * Get the value of shippingCountry
     */ 
    public function getShippingCountry()
    {
        return $this->shippingCountry;
    }

    /**
     * Set the value of shippingCountry
     *
     * @return  self
     */ 
    public function setShippingCountry(string $shippingCountry)
    {
        $this->shippingCountry = $shippingCountry;

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
    public function setPhone(string $phone)
    {
        $this->phone = $phone;

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
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of creditCardType
     */ 
    public function getCreditCardType()
    {
        return $this->creditCardType;
    }

    /**
     * Set the value of creditCardType
     *
     * @return  self
     */ 
    public function setCreditCardType($creditCardType)
    {
        $this->creditCardType = $creditCardType;

        return $this;
    }

    /**
     * Get the value of creditCardNumber
     */ 
    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

    /**
     * Set the value of creditCardNumber
     *
     * @return  self
     */ 
    public function setCreditCardNumber(string $creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;

        return $this;
    }

    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate
     *
     * @return  self
     */ 
    public function setExpirationDate(string $expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get the value of CVV
     */ 
    public function getCVV()
    {
        return $this->CVV;
    }

    /**
     * Set the value of CVV
     *
     * @return  self
     */ 
    public function setCVV(string $CVV)
    {
        $this->CVV = $CVV;

        return $this;
    }

    /**
     * Get the value of checkAccountNumber
     */ 
    public function getCheckAccountNumber()
    {
        return $this->checkAccountNumber;
    }

    /**
     * Set the value of checkAccountNumber
     *
     * @return  self
     */ 
    public function setCheckAccountNumber(string $checkAccountNumber)
    {
        $this->checkAccountNumber = $checkAccountNumber;

        return $this;
    }

    /**
     * Get the value of checkRoutingNumber
     */ 
    public function getCheckRoutingNumber()
    {
        return $this->checkRoutingNumber;
    }

    /**
     * Set the value of checkRoutingNumber
     *
     * @return  self
     */ 
    public function setCheckRoutingNumber(string $checkRoutingNumber)
    {
        $this->checkRoutingNumber = $checkRoutingNumber;

        return $this;
    }

    /**
     * Get the value of sepaIban
     */ 
    public function getSepaIban()
    {
        return $this->sepa_iban;
    }

    /**
     * Set the value of sepaIban
     *
     * @return  self
     */ 
    public function setSepaIban(string $sepaIban)
    {
        $this->sepa_iban = $sepaIban;

        return $this;
    }

    /**
     * Get the value of sepaBic
     */ 
    public function getSepaBic()
    {
        return $this->sepa_bic;
    }

    /**
     * Set the value of sepaBic
     *
     * @return  self
     */ 
    public function setSepaBic(string $sepaBic)
    {
        $this->sepa_bic = $sepaBic;

        return $this;
    }

    /**
     * Get the value of eurodebitAcctNum
     */ 
    public function getEurodebitAcctNum()
    {
        return $this->eurodebit_acct_num;
    }

    /**
     * Set the value of eurodebitAcctNum
     *
     * @return  self
     */ 
    public function setEurodebitAcctNum(string $eurodebitAcctNum)
    {
        $this->eurodebit_acct_num = $eurodebitAcctNum;

        return $this;
    }

    /**
     * Get the value of eurodebitRouteNum
     */ 
    public function getEurodebitRouteNum()
    {
        return $this->eurodebit_route_num;
    }

    /**
     * Set the value of eurodebitRouteNum
     *
     * @return  self
     */ 
    public function setEurodebitRouteNum(string $eurodebitRouteNum)
    {
        $this->eurodebit_route_num = $eurodebitRouteNum;

        return $this;
    }

    /**
     * Get the value of accountNumber
     */ 
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * Set the value of accountNumber
     *
     * @return  self
     */ 
    public function setAccountNumber(string $accountNumber)
    {
        $this->account_number = $accountNumber;

        return $this;
    }

    /**
     * Get the value of bankCode
     */ 
    public function getBankCode()
    {
        return $this->bank_code;
    }

    /**
     * Set the value of bankCode
     *
     * @return  self
     */ 
    public function setBankCode(string $bankCode)
    {
        $this->bank_code = $bankCode;

        return $this;
    }

    /**
     * Get the value of branchCode
     */ 
    public function getBranchCode()
    {
        return $this->branch_code;
    }

    /**
     * Set the value of branchCode
     *
     * @return  self
     */ 
    public function setBranchCode(string $branchCode)
    {
        $this->branch_code = $branchCode;

        return $this;
    }

    /**
     * Get the value of danishIdentityNumber
     */ 
    public function getDanishIdentityNumber()
    {
        return $this->danish_identity_number;
    }

    /**
     * Set the value of danishIdentityNumber
     *
     * @return  self
     */ 
    public function setDanishIdentityNumber($danishIdentityNumber)
    {
        $this->danish_identity_number = $danishIdentityNumber;

        return $this;
    }

    /**
     * Get the value of tranType
     */ 
    public function getTranType()
    {
        return $this->tranType;
    }

    /**
     * Set the value of tranType
     *
     * @return  self
     */ 
    public function setTranType($tranType)
    {
        $this->tranType = $tranType;

        return $this;
    }

    /**
     * Get the value of ipAddress
     */ 
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set the value of ipAddress
     *
     * @return  self
     */ 
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get the value of secretSSN
     */ 
    public function getSecretSSN()
    {
        return $this->secretSSN;
    }

    /**
     * Set the value of secretSSN
     *
     * @return  self
     */ 
    public function setSecretSSN($secretSSN)
    {
        $this->secretSSN = $secretSSN;

        return $this;
    }

    /**
     * Get the value of afid
     */ 
    public function getAfid()
    {
        return $this->AFID;
    }

    /**
     * Set the value of afid
     *
     * @return  self
     */ 
    public function setAfid($afid)
    {
        $this->AFID = $afid;

        return $this;
    }

    /**
     * Get the value of sid
     */ 
    public function getSid()
    {
        return $this->SID;
    }

    /**
     * Set the value of sid
     *
     * @return  self
     */ 
    public function setSid($sid)
    {
        $this->SID = $sid;

        return $this;
    }

    /**
     * Get the value of affid
     */ 
    public function getAffid()
    {
        return $this->AFFID;
    }

    /**
     * Set the value of affid
     *
     * @return  self
     */ 
    public function setAffid($affid)
    {
        $this->AFFID = $affid;

        return $this;
    }

    /**
     * Get the value of c1
     */ 
    public function getC1()
    {
        return $this->C1;
    }

    /**
     * Set the value of c1
     *
     * @return  self
     */ 
    public function setC1($c1)
    {
        $this->C1 = $c1;

        return $this;
    }

    /**
     * Get the value of c2
     */ 
    public function getC2()
    {
        return $this->C2;
    }

    /**
     * Set the value of c2
     *
     * @return  self
     */ 
    public function setC2($c2)
    {
        $this->C2 = $c2;

        return $this;
    }

    /**
     * Get the value of c3
     */ 
    public function getC3()
    {
        return $this->C3;
    }

    /**
     * Set the value of c3
     *
     * @return  self
     */ 
    public function setC3($c3)
    {
        $this->C3 = $c3;

        return $this;
    }

    /**
     * Get the value of aid
     */ 
    public function getAid()
    {
        return $this->AID;
    }

    /**
     * Set the value of aid
     *
     * @return  self
     */ 
    public function setAid($aid)
    {
        $this->AID = $aid;

        return $this;
    }

    /**
     * Get the value of opt
     */ 
    public function getOpt()
    {
        return $this->OPT;
    }

    /**
     * Set the value of opt
     *
     * @return  self
     */ 
    public function setOpt($opt)
    {
        $this->OPT = $opt;

        return $this;
    }

    /**
     * Get the value of clickId
     */ 
    public function getClickId()
    {
        return $this->click_id;
    }

    /**
     * Set the value of clickId
     *
     * @return  self
     */ 
    public function setClickId($clickId)
    {
        $this->click_id = $clickId;

        return $this;
    }

    /**
     * Get the value of campaignId
     */ 
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set the value of campaignId
     *
     * @return  self
     */ 
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get the value of shippingId
     */ 
    public function getShippingId()
    {
        return $this->shippingId;
    }

    /**
     * Set the value of shippingId
     *
     * @return  self
     */ 
    public function setShippingId($shippingId)
    {
        $this->shippingId = $shippingId;

        return $this;
    }

    /**
     * Get the value of billingSameAsShipping
     */ 
    public function getBillingSameAsShipping()
    {
        return $this->billingSameAsShipping;
    }

    /**
     * Set the value of billingSameAsShipping
     *
     * @return  self
     */ 
    public function setBillingSameAsShipping(int $billingSameAsShipping)
    {
        $this->billingSameAsShipping = $billingSameAsShipping;

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
     * Get the value of forceGatewayId
     */ 
    public function getForceGatewayId()
    {
        return $this->forceGatewayId;
    }

    /**
     * Set the value of forceGatewayId
     *
     * @return  self
     */ 
    public function setForceGatewayId($forceGatewayId)
    {
        $this->forceGatewayId = $forceGatewayId;

        return $this;
    }

    /**
     * Get the value of preserveForceGateway
     */ 
    public function getPreserveForceGateway()
    {
        return $this->preserve_force_gateway;
    }

    /**
     * Set the value of preserveForceGateway
     *
     * @return  self
     */ 
    public function setPreserveForceGateway($preserveForceGateway)
    {
        $this->preserve_force_gateway = $preserveForceGateway;

        return $this;
    }

    /**
     * Get the value of thmSessionId
     */ 
    public function getThmSessionId()
    {
        return $this->thm_session_id;
    }

    /**
     * Set the value of thmSessionId
     *
     * @return  self
     */ 
    public function setThmSessionId($thmSessionId)
    {
        $this->thm_session_id = $thmSessionId;

        return $this;
    }

    /**
     * Get the value of totalInstallments
     */ 
    public function getTotalInstallments()
    {
        return $this->total_installments;
    }

    /**
     * Set the value of totalInstallments
     *
     * @return  self
     */ 
    public function setTotalInstallments($totalInstallments)
    {
        $this->total_installments = $totalInstallments;

        return $this;
    }

    /**
     * Get the value of altPayToken
     */ 
    public function getAltPayToken()
    {
        return $this->alt_pay_token;
    }

    /**
     * Set the value of altPayToken
     *
     * @return  self
     */ 
    public function setAltPayToken($altPayToken)
    {
        $this->alt_pay_token = $altPayToken;

        return $this;
    }

    /**
     * Get the value of altPayPayerId
     */ 
    public function getAltPayPayerId()
    {
        return $this->alt_pay_payer_id;
    }

    /**
     * Set the value of altPayPayerId
     *
     * @return  self
     */ 
    public function setAltPayPayerId($altPayPayerId)
    {
        $this->promoCode = $altPayPayerId;

        return $this;
    }

    /**
     * Get the value of promoCode
     */ 
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * Set the value of promoCode
     *
     * @return  self
     */ 
    public function setPromoCode($promoCode)
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    /**
     * Get the value of temp_customer_id
     */ 
    public function getTempCustomerId()
    {
        return $this->temp_customer_id;
    }

    /**
     * Set the value of temp_customer_id
     *
     * @return  self
     */ 
    public function setTempCustomerId($temp_customer_id)
    {
        $this->temp_customer_id = $temp_customer_id;

        return $this;
    }

    /**
     * Get the value of three_d_redirect_url
     */ 
    public function getThreedRedirectUrl()
    {
        return $this->three_d_redirect_url;
    }

    /**
     * Set the value of three_d_redirect_url
     *
     * @return  self
     */ 
    public function setThreedRedirectUrl($three_d_redirect_url)
    {
        $this->three_d_redirect_url = $three_d_redirect_url;

        return $this;
    }

    /**
     * Get the value of fields_document_id
     */ 
    public function getFieldsDocumentId()
    {
        return $this->fields_document_id;
    }

    /**
     * Set the value of fields_document_id
     *
     * @return  self
     */ 
    public function setFieldsDocumentId($fields_document_id)
    {
        $this->fields_document_id = $fields_document_id;

        return $this;
    }

    /**
     * Get the value of alt_pay_return_url
     */ 
    public function getAltPayReturnUrl()
    {
        return $this->alt_pay_return_url;
    }

    /**
     * Set the value of alt_pay_return_url
     *
     * @return  self
     */ 
    public function setAltPayReturnUrl($alt_pay_return_url)
    {
        $this->alt_pay_return_url = $alt_pay_return_url;

        return $this;
    }

    /**
     * Get the value of sessionId
     */ 
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set the value of sessionId
     *
     * @return  self
     */ 
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get the value of cascade_override
     */ 
    public function getCascadeOverride()
    {
        return $this->cascade_override;
    }

    /**
     * Set the value of cascade_override
     *
     * @return  self
     */ 
    public function setCascadeOverride($cascade_override)
    {
        $this->cascade_override = $cascade_override;

        return $this;
    }

    /**
     * Get the value of create_member
     */ 
    public function getCreateMember()
    {
        return $this->create_member;
    }

    /**
     * Set the value of create_member
     *
     * @return  self
     */ 
    public function setCreateMember($create_member)
    {
        $this->create_member = $create_member;

        return $this;
    }

    /**
     * Get the value of event_id
     */ 
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Set the value of event_id
     *
     * @return  self
     */ 
    public function setEventId($event_id)
    {
        $this->event_id = $event_id;

        return $this;
    }

    /**
     * Get the value of ssn_nmi
     */ 
    public function getSsnNmi()
    {
        return $this->ssn_nmi;
    }

    /**
     * Set the value of ssn_nmi
     *
     * @return  self
     */ 
    public function setSsnNmi($ssn_nmi)
    {
        $this->ssn_nmi = $ssn_nmi;

        return $this;
    }

    /**
     * Get the value of utm_source
     */ 
    public function getUtmSource()
    {
        return $this->utm_source;
    }

    /**
     * Set the value of utm_source
     *
     * @return  self
     */ 
    public function setUtmSource($utm_source)
    {
        $this->utm_source = $utm_source;

        return $this;
    }

    /**
     * Get the value of utm_medium
     */ 
    public function getUtmMedium()
    {
        return $this->utm_medium;
    }

    /**
     * Set the value of utm_medium
     *
     * @return  self
     */ 
    public function setUtmMedium($utm_medium)
    {
        $this->utm_medium = $utm_medium;

        return $this;
    }

    /**
     * Get the value of utm_campaign
     */ 
    public function getUtmCampaign()
    {
        return $this->utm_campaign;
    }

    /**
     * Set the value of utm_campaign
     *
     * @return  self
     */ 
    public function setUtmCampaign($utm_campaign)
    {
        $this->utm_campaign = $utm_campaign;

        return $this;
    }

    /**
     * Get the value of utm_term
     */ 
    public function getUtmTerm()
    {
        return $this->utm_term;
    }

    /**
     * Set the value of utm_term
     *
     * @return  self
     */ 
    public function setUtmTerm($utm_term)
    {
        $this->utm_term = $utm_term;

        return $this;
    }

    /**
     * Get the value of utm_content
     */ 
    public function getUtmContent()
    {
        return $this->utm_content;
    }

    /**
     * Set the value of utm_content
     *
     * @return  self
     */ 
    public function setUtmContent($utm_content)
    {
        $this->utm_content = $utm_content;

        return $this;
    }

    /**
     * Get the value of device_category
     */ 
    public function getDeviceCategory()
    {
        return $this->device_category;
    }

    /**
     * Set the value of device_category
     *
     * @return  self
     */ 
    public function setDeviceCategory($device_category)
    {
        $this->device_category = $device_category;

        return $this;
    }

    /**
     * Get the value of billingFirstName
     */ 
    public function getBillingFirstName()
    {
        return $this->billingFirstName;
    }

    /**
     * Set the value of billingFirstName
     *
     * @return  self
     */ 
    public function setBillingFirstName($billingFirstName)
    {
        $this->billingFirstName = $billingFirstName;

        return $this;
    }

    /**
     * Get the value of billingLastName
     */ 
    public function getBillingLastName()
    {
        return $this->billingLastName;
    }

    /**
     * Set the value of billingLastName
     *
     * @return  self
     */ 
    public function setBillingLastName($billingLastName)
    {
        $this->billingLastName = $billingLastName;

        return $this;
    }

    /**
     * Get the value of billingAddress1
     */ 
    public function getBillingAddress1()
    {
        return $this->billingAddress1;
    }

    /**
     * Set the value of billingAddress1
     *
     * @return  self
     */ 
    public function setBillingAddress1($billingAddress1)
    {
        $this->billingAddress1 = $billingAddress1;

        return $this;
    }

    /**
     * Get the value of billingAddress2
     */ 
    public function getBillingAddress2()
    {
        return $this->billingAddress2;
    }

    /**
     * Set the value of billingAddress2
     *
     * @return  self
     */ 
    public function setBillingAddress2($billingAddress2)
    {
        $this->billingAddress2 = $billingAddress2;

        return $this;
    }

    /**
     * Get the value of billingCity
     */ 
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * Set the value of billingCity
     *
     * @return  self
     */ 
    public function setBillingCity($billingCity)
    {
        $this->billingCity = $billingCity;

        return $this;
    }

    /**
     * Get the value of billingState
     */ 
    public function getBillingState()
    {
        return $this->billingState;
    }

    /**
     * Set the value of billingState
     *
     * @return  self
     */ 
    public function setBillingState($billingState)
    {
        $this->billingState = $billingState;

        return $this;
    }

    /**
     * Get the value of billingZip
     */ 
    public function getBillingZip()
    {
        return $this->billingZip;
    }

    /**
     * Set the value of billingZip
     *
     * @return  self
     */ 
    public function setBillingZip($billingZip)
    {
        $this->billingZip = $billingZip;

        return $this;
    }

    /**
     * Get the value of billingCountry
     */ 
    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    /**
     * Set the value of billingCountry
     *
     * @return  self
     */ 
    public function setBillingCountry($billingCountry)
    {
        $this->billingCountry = $billingCountry;

        return $this;
    }

    /**
     * Get the value of referred_id
     */ 
    public function getReferredId()
    {
        return $this->referred_id;
    }

    /**
     * Set the value of referred_id
     *
     * @return  self
     */ 
    public function setReferredId($referred_id)
    {
        $this->referred_id = $referred_id;

        return $this;
    }

    /**
     * Get the value of conversion_id
     */ 
    public function getConversionId()
    {
        return $this->conversion_id;
    }

    /**
     * Set the value of conversion_id
     *
     * @return  self
     */ 
    public function setConversionId($conversion_id)
    {
        $this->conversion_id = $conversion_id;

        return $this;
    }

    /**
     * Get the value of cavv
     */ 
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * Set the value of cavv
     *
     * @return  self
     */ 
    public function setCavv($cavv)
    {
        $this->cavv = $cavv;

        return $this;
    }

    /**
     * Get the value of eci
     */ 
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * Set the value of eci
     *
     * @return  self
     */ 
    public function setEci($eci)
    {
        $this->eci = $eci;

        return $this;
    }

    /**
     * Get the value of xid
     */ 
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * Set the value of xid
     *
     * @return  self
     */ 
    public function setXid($xid)
    {
        $this->xid = $xid;

        return $this;
    }

    /**
     * Get the value of threed_version
     */ 
    public function getThreedVersion()
    {
        return $this->threed_version;
    }

    /**
     * Set the value of threed_version
     *
     * @return  self
     */ 
    public function setThreedVersion($threed_version)
    {
        $this->threed_version = $threed_version;

        return $this;
    }

    /**
     * Get the value of ds_trans_id
     */ 
    public function getDsTransId()
    {
        return $this->ds_trans_id;
    }

    /**
     * Set the value of ds_trans_id
     *
     * @return  self
     */ 
    public function setDsTransId($ds_trans_id)
    {
        $this->ds_trans_id = $ds_trans_id;

        return $this;
    }

    /**
     * Get the value of acs_trans_id
     */ 
    public function getAcsTransId()
    {
        return $this->acs_trans_id;
    }

    /**
     * Set the value of acs_trans_id
     *
     * @return  self
     */ 
    public function setAcsTransId($acs_trans_id)
    {
        $this->acs_trans_id = $acs_trans_id;

        return $this;
    }

    /**
     * Get the value of browser_color_depth
     */ 
    public function getBrowserColorDepth()
    {
        return $this->browser_color_depth;
    }

    /**
     * Set the value of browser_color_depth
     *
     * @return  self
     */ 
    public function setBrowserColorDepth($browser_color_depth)
    {
        $this->browser_color_depth = $browser_color_depth;

        return $this;
    }

    /**
     * Get the value of browser_language
     */ 
    public function getBrowserLanguage()
    {
        return $this->browser_language;
    }

    /**
     * Set the value of browser_language
     *
     * @return  self
     */ 
    public function setBrowserLanguage($browser_language)
    {
        $this->browser_language = $browser_language;

        return $this;
    }

    /**
     * Get the value of browser_java_enabled
     */ 
    public function getBrowserJavaEnabled()
    {
        return $this->browser_java_enabled;
    }

    /**
     * Set the value of browser_java_enabled
     *
     * @return  self
     */ 
    public function setBrowserJavaEnabled($browser_java_enabled)
    {
        $this->browser_java_enabled = $browser_java_enabled;

        return $this;
    }

    /**
     * Get the value of browser_screen_height
     */ 
    public function getBrowserScreenHeight()
    {
        return $this->browser_screen_height;
    }

    /**
     * Set the value of browser_screen_height
     *
     * @return  self
     */ 
    public function setBrowserScreenHeight($browser_screen_height)
    {
        $this->browser_screen_height = $browser_screen_height;

        return $this;
    }

    /**
     * Get the value of browser_screen_width
     */ 
    public function getBrowserScreenWidth()
    {
        return $this->browser_screen_width;
    }

    /**
     * Set the value of browser_screen_width
     *
     * @return  self
     */ 
    public function setBrowserScreenWidth($browser_screen_width)
    {
        $this->browser_screen_width = $browser_screen_width;

        return $this;
    }

    /**
     * Get the value of browser_tz
     */ 
    public function getBrowserTz()
    {
        return $this->browser_tz;
    }

    /**
     * Set the value of browser_tz
     *
     * @return  self
     */ 
    public function setBrowserTz($browser_tz)
    {
        $this->browser_tz = $browser_tz;

        return $this;
    }

    /**
     * Get the value of website
     */ 
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set the value of website
     *
     * @return  self
     */ 
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the value of consent_required
     */ 
    public function getConsentRequired()
    {
        return $this->consent_required;
    }

    /**
     * Set the value of consent_required
     *
     * @return  self
     */ 
    public function setConsentRequired($consent_required)
    {
        $this->consent_required = $consent_required;

        return $this;
    }

    /**
     * Get the value of stripe_token
     */ 
    public function getStripeToken()
    {
        return $this->stripe_token;
    }

    /**
     * Set the value of stripe_token
     *
     * @return  self
     */ 
    public function setStripeToken($stripe_token)
    {
        $this->stripe_token = $stripe_token;

        return $this;
    }

    /**
     * Get the value of square_token
     */ 
    public function getSquareToken()
    {
        return $this->square_token;
    }

    /**
     * Set the value of square_token
     *
     * @return  self
     */ 
    public function setSquareToken($square_token)
    {
        $this->square_token = $square_token;

        return $this;
    }

    /**
     * Get the value of wallet_token
     */ 
    public function getWalletToken()
    {
        return $this->wallet_token;
    }

    /**
     * Set the value of wallet_token
     *
     * @return  self
     */ 
    public function setWalletToken($wallet_token)
    {
        $this->wallet_token = $wallet_token;

        return $this;
    }

    /**
     * Get the value of dynamic_shipping_charge
     */ 
    public function getDynamicShippingCharge()
    {
        return $this->dynamic_shipping_charge;
    }

    /**
     * Set the value of dynamic_shipping_charge
     *
     * @return  self
     */ 
    public function setDynamicShippingCharge($dynamic_shipping_charge)
    {
        $this->dynamic_shipping_charge = $dynamic_shipping_charge;

        return $this;
    }

    /**
     * Get the value of custom_field
     */ 
    public function getCustomField()
    {
        return $this->custom_field;
    }

    /**
     * Set the value of custom_field
     *
     * @return  self
     */ 
    public function setCustomField($custom_field)
    {
        $this->custom_field = $custom_field;

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
    public function setOrderId(int $order_id)
    {
        $this->order_id = $order_id;

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
}
