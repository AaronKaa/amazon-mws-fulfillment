<?php namespace Aarcarr\AmazonMwsFulfillment;

use Aarcarr\AmazonMwsFulfillment\Model;

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


/**
 * CancelShipmentResponse
 *
 * Properties:
 * <ul>
 *
 * <li>CancelShipmentResult: CancelShipmentResult</li>
 * <li>ResponseMetadata: ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: ResponseHeaderMetadata</li>
 *
 * </ul>
 */

class CancelShipmentResponse extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array (
        'CancelShipmentResult' => array('FieldValue' => null, 'FieldType' => 'CancelShipmentResult'),
        'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseMetadata'),
        'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'ResponseHeaderMetadata'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the CancelShipmentResult property.
     *
     * @return CancelShipmentResult CancelShipmentResult.
     */
    public function getCancelShipmentResult()
    {
        return $this->_fields['CancelShipmentResult']['FieldValue'];
    }

    /**
     * Set the value of the CancelShipmentResult property.
     *
     * @param CancelShipmentResult cancelShipmentResult
     * @return this instance
     */
    public function setCancelShipmentResult($value)
    {
        $this->_fields['CancelShipmentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CancelShipmentResult is set.
     *
     * @return true if CancelShipmentResult is set.
     */
    public function isSetCancelShipmentResult()
    {
        return !is_null($this->_fields['CancelShipmentResult']['FieldValue']);
    }

    /**
     * Set the value of CancelShipmentResult, return this.
     *
     * @param cancelShipmentResult
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCancelShipmentResult($value)
    {
        $this->setCancelShipmentResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param ResponseMetadata responseMetadata
     * @return this instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param ResponseHeaderMetadata responseHeaderMetadata
     * @return this instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }
    /**
     * Construct CancelShipmentResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     *
     * @return CancelShipmentResponse
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='CancelShipmentResponse']");
        if ($response->length == 1) {
            return new CancelShipmentResponse(($response->item(0)));
        } else {
            throw new MWSException("Unable to construct CancelShipmentResponse from provided XML. 
                                  Make sure that CancelShipmentResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<CancelShipmentResponse xmlns=\"https://mws.amazonservices.com/MerchantFulfillment/2015-06-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</CancelShipmentResponse>";
        return $xml;
    }
}
