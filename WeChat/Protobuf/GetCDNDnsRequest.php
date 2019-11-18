<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetCDNDnsRequest message
 */
class GetCDNDnsRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CLIENTIP = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::CLIENTIP => array(
            'name' => 'clientIP',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::CLIENTIP] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'clientIP' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientIP($value)
    {
        return $this->set(self::CLIENTIP, $value);
    }

    /**
     * Returns value of 'clientIP' property
     *
     * @return string
     */
    public function getClientIP()
    {
        $value = $this->get(self::CLIENTIP);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientIP' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientIP()
    {
        return $this->get(self::CLIENTIP) !== null;
    }
}
}