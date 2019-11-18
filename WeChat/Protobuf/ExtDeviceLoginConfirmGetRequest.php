<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ExtDeviceLoginConfirmGetRequest message
 */
class ExtDeviceLoginConfirmGetRequest extends \ProtobufMessage
{
    /* Field index constants */
    const LOGINURL = 1;
    const DEVICENAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOGINURL => array(
            'name' => 'loginUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICENAME => array(
            'name' => 'deviceName',
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
        $this->values[self::LOGINURL] = null;
        $this->values[self::DEVICENAME] = null;
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
     * Sets value of 'loginUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoginUrl($value)
    {
        return $this->set(self::LOGINURL, $value);
    }

    /**
     * Returns value of 'loginUrl' property
     *
     * @return string
     */
    public function getLoginUrl()
    {
        $value = $this->get(self::LOGINURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loginUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoginUrl()
    {
        return $this->get(self::LOGINURL) !== null;
    }

    /**
     * Sets value of 'deviceName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceName($value)
    {
        return $this->set(self::DEVICENAME, $value);
    }

    /**
     * Returns value of 'deviceName' property
     *
     * @return string
     */
    public function getDeviceName()
    {
        $value = $this->get(self::DEVICENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceName()
    {
        return $this->get(self::DEVICENAME) !== null;
    }
}
}