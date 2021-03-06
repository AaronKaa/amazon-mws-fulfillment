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
 * ShippingServiceOptions
 *
 * Properties:
 * <ul>
 *
 * <li>DeliveryExperience: string</li>
 * <li>DeclaredValue: CurrencyAmount</li>
 * <li>CarrierWillPickUp: bool</li>
 * <li>LabelFormat: string</li>
 *
 * </ul>
 */

class ShippingServiceOptions extends Model
{

    public function __construct($data = null)
    {
        $this->_fields = array (
        'DeliveryExperience' => array('FieldValue' => null, 'FieldType' => 'string'),
        'DeclaredValue' => array('FieldValue' => null, 'FieldType' => 'CurrencyAmount'),
        'CarrierWillPickUp' => array('FieldValue' => null, 'FieldType' => 'bool'),
        'LabelFormat' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the DeliveryExperience property.
     *
     * @return String DeliveryExperience.
     */
    public function getDeliveryExperience()
    {
        return $this->_fields['DeliveryExperience']['FieldValue'];
    }

    /**
     * Set the value of the DeliveryExperience property.
     *
     * @param string deliveryExperience
     * @return this instance
     */
    public function setDeliveryExperience($value)
    {
        $this->_fields['DeliveryExperience']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeliveryExperience is set.
     *
     * @return true if DeliveryExperience is set.
     */
    public function isSetDeliveryExperience()
    {
        return !is_null($this->_fields['DeliveryExperience']['FieldValue']);
    }

    /**
     * Set the value of DeliveryExperience, return this.
     *
     * @param deliveryExperience
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeliveryExperience($value)
    {
        $this->setDeliveryExperience($value);
        return $this;
    }

    /**
     * Get the value of the DeclaredValue property.
     *
     * @return CurrencyAmount DeclaredValue.
     */
    public function getDeclaredValue()
    {
        return $this->_fields['DeclaredValue']['FieldValue'];
    }

    /**
     * Set the value of the DeclaredValue property.
     *
     * @param CurrencyAmount declaredValue
     * @return this instance
     */
    public function setDeclaredValue($value)
    {
        $this->_fields['DeclaredValue']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if DeclaredValue is set.
     *
     * @return true if DeclaredValue is set.
     */
    public function isSetDeclaredValue()
    {
        return !is_null($this->_fields['DeclaredValue']['FieldValue']);
    }

    /**
     * Set the value of DeclaredValue, return this.
     *
     * @param declaredValue
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withDeclaredValue($value)
    {
        $this->setDeclaredValue($value);
        return $this;
    }

    /**
     * Check the value of CarrierWillPickUp.
     *
     * @return true if CarrierWillPickUp is set to true.
     */
    public function isCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Get the value of the CarrierWillPickUp property.
     *
     * @return boolean CarrierWillPickUp.
     */
    public function getCarrierWillPickUp()
    {
        return $this->_fields['CarrierWillPickUp']['FieldValue'];
    }

    /**
     * Set the value of the CarrierWillPickUp property.
     *
     * @param bool carrierWillPickUp
     * @return this instance
     */
    public function setCarrierWillPickUp($value)
    {
        $this->_fields['CarrierWillPickUp']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CarrierWillPickUp is set.
     *
     * @return true if CarrierWillPickUp is set.
     */
    public function isSetCarrierWillPickUp()
    {
        return !is_null($this->_fields['CarrierWillPickUp']['FieldValue']);
    }

    /**
     * Set the value of CarrierWillPickUp, return this.
     *
     * @param carrierWillPickUp
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withCarrierWillPickUp($value)
    {
        $this->setCarrierWillPickUp($value);
        return $this;
    }

    /**
     * Get the value of the LabelFormat property.
     *
     * @return String LabelFormat.
     */
    public function getLabelFormat()
    {
        return $this->_fields['LabelFormat']['FieldValue'];
    }

    /**
     * Set the value of the LabelFormat property.
     *
     * @param string labelFormat
     * @return this instance
     */
    public function setLabelFormat($value)
    {
        $this->_fields['LabelFormat']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LabelFormat is set.
     *
     * @return true if LabelFormat is set.
     */
    public function isSetLabelFormat()
    {
        return !is_null($this->_fields['LabelFormat']['FieldValue']);
    }

    /**
     * Set the value of LabelFormat, return this.
     *
     * @param labelFormat
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withLabelFormat($value)
    {
        $this->setLabelFormat($value);
        return $this;
    }
}
