<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * OnlineInfo message
 */
class OnlineInfo extends \ProtobufMessage
{
    /* Field index constants */
    const DEVICETYPE = 1;
    const DEVICEID = 2;
    const WORDINGXML = 3;
    const CLIENTKEY = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DEVICETYPE => array(
            'name' => 'deviceType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICEID => array(
            'name' => 'deviceID',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WORDINGXML => array(
            'name' => 'wordingXML',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTKEY => array(
            'name' => 'clientKey',
            'required' => true,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::DEVICETYPE] = null;
        $this->values[self::DEVICEID] = null;
        $this->values[self::WORDINGXML] = null;
        $this->values[self::CLIENTKEY] = null;
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
     * Sets value of 'deviceType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeviceType($value)
    {
        return $this->set(self::DEVICETYPE, $value);
    }

    /**
     * Returns value of 'deviceType' property
     *
     * @return integer
     */
    public function getDeviceType()
    {
        $value = $this->get(self::DEVICETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'deviceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceType()
    {
        return $this->get(self::DEVICETYPE) !== null;
    }

    /**
     * Sets value of 'deviceID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceID($value)
    {
        return $this->set(self::DEVICEID, $value);
    }

    /**
     * Returns value of 'deviceID' property
     *
     * @return string
     */
    public function getDeviceID()
    {
        $value = $this->get(self::DEVICEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceID()
    {
        return $this->get(self::DEVICEID) !== null;
    }

    /**
     * Sets value of 'wordingXML' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWordingXML($value)
    {
        return $this->set(self::WORDINGXML, $value);
    }

    /**
     * Returns value of 'wordingXML' property
     *
     * @return string
     */
    public function getWordingXML()
    {
        $value = $this->get(self::WORDINGXML);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'wordingXML' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWordingXML()
    {
        return $this->get(self::WORDINGXML) !== null;
    }

    /**
     * Sets value of 'clientKey' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setClientKey(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIENTKEY, $value);
    }

    /**
     * Returns value of 'clientKey' property
     *
     * @return \SKBuiltinString_
     */
    public function getClientKey()
    {
        return $this->get(self::CLIENTKEY);
    }

    /**
     * Returns true if 'clientKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientKey()
    {
        return $this->get(self::CLIENTKEY) !== null;
    }
}
}