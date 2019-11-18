<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * PSMStat message
 */
class PSMStat extends \ProtobufMessage
{
    /* Field index constants */
    const MTYPE = 1;
    const ATYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MTYPE => array(
            'name' => 'mType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ATYPE => array(
            'name' => 'aType',
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
        $this->values[self::MTYPE] = null;
        $this->values[self::ATYPE] = null;
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
     * Sets value of 'mType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMType($value)
    {
        return $this->set(self::MTYPE, $value);
    }

    /**
     * Returns value of 'mType' property
     *
     * @return integer
     */
    public function getMType()
    {
        $value = $this->get(self::MTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMType()
    {
        return $this->get(self::MTYPE) !== null;
    }

    /**
     * Sets value of 'aType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAType($value)
    {
        return $this->set(self::ATYPE, $value);
    }

    /**
     * Returns value of 'aType' property
     *
     * @return string
     */
    public function getAType()
    {
        $value = $this->get(self::ATYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'aType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAType()
    {
        return $this->get(self::ATYPE) !== null;
    }
}
}