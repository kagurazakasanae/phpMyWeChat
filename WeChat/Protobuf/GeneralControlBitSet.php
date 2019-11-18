<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GeneralControlBitSet message
 */
class GeneralControlBitSet extends \ProtobufMessage
{
    /* Field index constants */
    const BITVALUE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BITVALUE => array(
            'default' => 0,
            'name' => 'Bitvalue',
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
     * Sets value of 'Bitvalue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitvalue($value)
    {
        return $this->set(self::BITVALUE, $value);
    }

    /**
     * Returns value of 'Bitvalue' property
     *
     * @return integer
     */
    public function getBitvalue()
    {
        $value = $this->get(self::BITVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Bitvalue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitvalue()
    {
        return $this->get(self::BITVALUE) !== null;
    }
}
}