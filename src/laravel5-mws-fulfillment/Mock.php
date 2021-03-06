<?php namespace Aarcarr\AmazonMwsFulfillment;

use Aarcarr\AmazonMwsFulfillment\ClientInterface;

/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Merchant Fulfillment Service
 * @version  2015-06-01
 * Library Version: 2016-03-30
 * Generated: Fri Nov 11 06:01:18 PST 2016
 */

class Mock implements ClientInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * Cancel Shipment
     * Cancels an existing shipment.  This will only succeed if the cancellation window has not passed and if the shipment
     *     has not been cancelled already.
     *
     * @param mixed $request array of parameters for CancelShipment request or CancelShipment object itself
     * @see CancelShipment
     * @return CancelShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function cancelShipment($request)
    {
        require_once(dirname(__FILE__) . '/Model/CancelShipmentResponse.php');
        return CancelShipmentResponse::fromXML($this->_invoke('CancelShipment'));
    }

    /**
     * Create Shipment
     * Creates a shipment for the shipping information specified.  Purchases and returns a label for the specified
     *     shipping service or shipping service offering.
     *
     * @param mixed $request array of parameters for CreateShipment request or CreateShipment object itself
     * @see CreateShipment
     * @return CreateShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function createShipment($request)
    {
        require_once(dirname(__FILE__) . '/Model/CreateShipmentResponse.php');
        return CreateShipmentResponse::fromXML($this->_invoke('CreateShipment'));
    }

    /**
     * Get Eligible Shipping Services
     * Gets a list of eligible shipping services for the shipment information specified.  The ShippingServiceId or
     *     ShippingServiceOfferingId can be used in CreateShipment to specify the shipping service or the specific offer
     *     respectively.  A list of carriers that are temporarily unavailable is also returned.
     *
     * @param mixed $request array of parameters for GetEligibleShippingServices request or GetEligibleShippingServices object itself
     * @see GetEligibleShippingServices
     * @return GetEligibleShippingServicesResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function getEligibleShippingServices($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetEligibleShippingServicesResponse.php');
        return GetEligibleShippingServicesResponse::fromXML($this->_invoke('GetEligibleShippingServices'));
    }

    /**
     * Get Shipment
     * Gets an existing shipment, including the label status, label content, shipping information.
     *
     * @param mixed $request array of parameters for GetShipment request or GetShipment object itself
     * @see GetShipment
     * @return GetShipmentResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function getShipment($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetShipmentResponse.php');
        return GetShipmentResponse::fromXML($this->_invoke('GetShipment'));
    }

    /**
     * Get Service Status
     *
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws MWSMerchantFulfillmentService_Exception
     */
    public function getServiceStatus($request)
    {
        require_once(dirname(__FILE__) . '/Model/GetServiceStatusResponse.php');
        return GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ true);
    }
}
