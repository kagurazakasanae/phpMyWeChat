<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CDNClientConfig message
 */
class CDNClientConfig extends \ProtobufMessage
{
    /* Field index constants */
    const C2CSHOWERRORDELAYMS = 1;
    const SNSSHOWERRORDELAYMS = 2;
    const C2CRETRYINTERVAL = 3;
    const SNSRETRYINTERVAL = 4;
    const C2CRWTIMEOUT = 5;
    const SNSRWTIMEOUT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::C2CSHOWERRORDELAYMS => array(
            'name' => 'c2CshowErrorDelayMs',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SNSSHOWERRORDELAYMS => array(
            'name' => 'snsshowErrorDelayMs',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::C2CRETRYINTERVAL => array(
            'name' => 'c2CretryInterval',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SNSRETRYINTERVAL => array(
            'name' => 'snsretryInterval',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::C2CRWTIMEOUT => array(
            'name' => 'c2Crwtimeout',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SNSRWTIMEOUT => array(
            'name' => 'snsrwtimeout',
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
        $this->values[self::C2CSHOWERRORDELAYMS] = null;
        $this->values[self::SNSSHOWERRORDELAYMS] = null;
        $this->values[self::C2CRETRYINTERVAL] = null;
        $this->values[self::SNSRETRYINTERVAL] = null;
        $this->values[self::C2CRWTIMEOUT] = null;
        $this->values[self::SNSRWTIMEOUT] = null;
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
     * Sets value of 'c2CshowErrorDelayMs' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setC2CshowErrorDelayMs($value)
    {
        return $this->set(self::C2CSHOWERRORDELAYMS, $value);
    }

    /**
     * Returns value of 'c2CshowErrorDelayMs' property
     *
     * @return integer
     */
    public function getC2CshowErrorDelayMs()
    {
        $value = $this->get(self::C2CSHOWERRORDELAYMS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'c2CshowErrorDelayMs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasC2CshowErrorDelayMs()
    {
        return $this->get(self::C2CSHOWERRORDELAYMS) !== null;
    }

    /**
     * Sets value of 'snsshowErrorDelayMs' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSnsshowErrorDelayMs($value)
    {
        return $this->set(self::SNSSHOWERRORDELAYMS, $value);
    }

    /**
     * Returns value of 'snsshowErrorDelayMs' property
     *
     * @return integer
     */
    public function getSnsshowErrorDelayMs()
    {
        $value = $this->get(self::SNSSHOWERRORDELAYMS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'snsshowErrorDelayMs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsshowErrorDelayMs()
    {
        return $this->get(self::SNSSHOWERRORDELAYMS) !== null;
    }

    /**
     * Sets value of 'c2CretryInterval' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setC2CretryInterval($value)
    {
        return $this->set(self::C2CRETRYINTERVAL, $value);
    }

    /**
     * Returns value of 'c2CretryInterval' property
     *
     * @return integer
     */
    public function getC2CretryInterval()
    {
        $value = $this->get(self::C2CRETRYINTERVAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'c2CretryInterval' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasC2CretryInterval()
    {
        return $this->get(self::C2CRETRYINTERVAL) !== null;
    }

    /**
     * Sets value of 'snsretryInterval' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSnsretryInterval($value)
    {
        return $this->set(self::SNSRETRYINTERVAL, $value);
    }

    /**
     * Returns value of 'snsretryInterval' property
     *
     * @return integer
     */
    public function getSnsretryInterval()
    {
        $value = $this->get(self::SNSRETRYINTERVAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'snsretryInterval' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsretryInterval()
    {
        return $this->get(self::SNSRETRYINTERVAL) !== null;
    }

    /**
     * Sets value of 'c2Crwtimeout' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setC2Crwtimeout($value)
    {
        return $this->set(self::C2CRWTIMEOUT, $value);
    }

    /**
     * Returns value of 'c2Crwtimeout' property
     *
     * @return integer
     */
    public function getC2Crwtimeout()
    {
        $value = $this->get(self::C2CRWTIMEOUT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'c2Crwtimeout' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasC2Crwtimeout()
    {
        return $this->get(self::C2CRWTIMEOUT) !== null;
    }

    /**
     * Sets value of 'snsrwtimeout' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSnsrwtimeout($value)
    {
        return $this->set(self::SNSRWTIMEOUT, $value);
    }

    /**
     * Returns value of 'snsrwtimeout' property
     *
     * @return integer
     */
    public function getSnsrwtimeout()
    {
        $value = $this->get(self::SNSRWTIMEOUT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'snsrwtimeout' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsrwtimeout()
    {
        return $this->get(self::SNSRWTIMEOUT) !== null;
    }
}
}