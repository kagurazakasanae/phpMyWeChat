<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:31:17
 */

namespace {
/**
 * KVCmd message
 */
class KVCmd extends \ProtobufMessage
{
    /* Field index constants */
    const KEY = 1;
    const VALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'Key',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VALUE => array(
            'name' => 'Value',
            'required' => true,
            'type' => '\SKBuiltinString_S'
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
        $this->values[self::KEY] = null;
        $this->values[self::VALUE] = null;
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
     * Sets value of 'Key' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'Key' property
     *
     * @return integer
     */
    public function getKey()
    {
        $value = $this->get(self::KEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey()
    {
        return $this->get(self::KEY) !== null;
    }

    /**
     * Sets value of 'Value' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setValue(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::VALUE, $value);
    }

    /**
     * Returns value of 'Value' property
     *
     * @return \SKBuiltinString_S
     */
    public function getValue()
    {
        return $this->get(self::VALUE);
    }

    /**
     * Returns true if 'Value' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasValue()
    {
        return $this->get(self::VALUE) !== null;
    }
}
}