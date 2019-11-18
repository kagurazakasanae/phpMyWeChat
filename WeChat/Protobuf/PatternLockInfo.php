<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * PatternLockInfo message
 */
class PatternLockInfo extends \ProtobufMessage
{
    /* Field index constants */
    const PATTERNVERSION = 1;
    const SIGN = 2;
    const LOCKSTATUS = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PATTERNVERSION => array(
            'name' => 'patternVersion',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGN => array(
            'name' => 'sign',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::LOCKSTATUS => array(
            'name' => 'lockStatus',
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
        $this->values[self::PATTERNVERSION] = null;
        $this->values[self::SIGN] = null;
        $this->values[self::LOCKSTATUS] = null;
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
     * Sets value of 'patternVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPatternVersion($value)
    {
        return $this->set(self::PATTERNVERSION, $value);
    }

    /**
     * Returns value of 'patternVersion' property
     *
     * @return integer
     */
    public function getPatternVersion()
    {
        $value = $this->get(self::PATTERNVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'patternVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPatternVersion()
    {
        return $this->get(self::PATTERNVERSION) !== null;
    }

    /**
     * Sets value of 'sign' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setSign(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::SIGN, $value);
    }

    /**
     * Returns value of 'sign' property
     *
     * @return \SKBuiltinString_
     */
    public function getSign()
    {
        return $this->get(self::SIGN);
    }

    /**
     * Returns true if 'sign' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSign()
    {
        return $this->get(self::SIGN) !== null;
    }

    /**
     * Sets value of 'lockStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLockStatus($value)
    {
        return $this->set(self::LOCKSTATUS, $value);
    }

    /**
     * Returns value of 'lockStatus' property
     *
     * @return integer
     */
    public function getLockStatus()
    {
        $value = $this->get(self::LOCKSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'lockStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLockStatus()
    {
        return $this->get(self::LOCKSTATUS) !== null;
    }
}
}