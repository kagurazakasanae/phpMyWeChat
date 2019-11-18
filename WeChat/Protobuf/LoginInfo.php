<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * LoginInfo message
 */
class LoginInfo extends \ProtobufMessage
{
    /* Field index constants */
    const AESKEY = 1;
    const UIN = 2;
    const GUID = 3;
    const CLIENTVER = 4;
    const ANDROIDVER = 5;
    const UNKNOWN = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AESKEY => array(
            'name' => 'aesKey',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UIN => array(
            'name' => 'uin',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GUID => array(
            'name' => 'guid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTVER => array(
            'name' => 'clientVer',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANDROIDVER => array(
            'name' => 'androidVer',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNKNOWN => array(
            'name' => 'unknown',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::AESKEY] = null;
        $this->values[self::UIN] = null;
        $this->values[self::GUID] = null;
        $this->values[self::CLIENTVER] = null;
        $this->values[self::ANDROIDVER] = null;
        $this->values[self::UNKNOWN] = null;
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
     * Sets value of 'aesKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAesKey($value)
    {
        return $this->set(self::AESKEY, $value);
    }

    /**
     * Returns value of 'aesKey' property
     *
     * @return string
     */
    public function getAesKey()
    {
        $value = $this->get(self::AESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'aesKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAesKey()
    {
        return $this->get(self::AESKEY) !== null;
    }

    /**
     * Sets value of 'uin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUin($value)
    {
        return $this->set(self::UIN, $value);
    }

    /**
     * Returns value of 'uin' property
     *
     * @return integer
     */
    public function getUin()
    {
        $value = $this->get(self::UIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUin()
    {
        return $this->get(self::UIN) !== null;
    }

    /**
     * Sets value of 'guid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGuid($value)
    {
        return $this->set(self::GUID, $value);
    }

    /**
     * Returns value of 'guid' property
     *
     * @return string
     */
    public function getGuid()
    {
        $value = $this->get(self::GUID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'guid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuid()
    {
        return $this->get(self::GUID) !== null;
    }

    /**
     * Sets value of 'clientVer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientVer($value)
    {
        return $this->set(self::CLIENTVER, $value);
    }

    /**
     * Returns value of 'clientVer' property
     *
     * @return integer
     */
    public function getClientVer()
    {
        $value = $this->get(self::CLIENTVER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clientVer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientVer()
    {
        return $this->get(self::CLIENTVER) !== null;
    }

    /**
     * Sets value of 'androidVer' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAndroidVer($value)
    {
        return $this->set(self::ANDROIDVER, $value);
    }

    /**
     * Returns value of 'androidVer' property
     *
     * @return string
     */
    public function getAndroidVer()
    {
        $value = $this->get(self::ANDROIDVER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'androidVer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAndroidVer()
    {
        return $this->get(self::ANDROIDVER) !== null;
    }

    /**
     * Sets value of 'unknown' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnknown($value)
    {
        return $this->set(self::UNKNOWN, $value);
    }

    /**
     * Returns value of 'unknown' property
     *
     * @return integer
     */
    public function getUnknown()
    {
        $value = $this->get(self::UNKNOWN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'unknown' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnknown()
    {
        return $this->get(self::UNKNOWN) !== null;
    }
}
}