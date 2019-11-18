<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DeepLinkBitSet message
 */
class DeepLinkBitSet extends \ProtobufMessage
{
    /* Field index constants */
    const BITVALUE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BITVALUE => array(
            'default' => 0,
            'name' => 'bitValue',
            'required' => false,
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
        $this->values[self::BITVALUE] = self::$fields[self::BITVALUE]['default'];
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
     * Sets value of 'bitValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitValue($value)
    {
        return $this->set(self::BITVALUE, $value);
    }

    /**
     * Returns value of 'bitValue' property
     *
     * @return integer
     */
    public function getBitValue()
    {
        $value = $this->get(self::BITVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bitValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitValue()
    {
        return $this->get(self::BITVALUE) !== null;
    }
}
}