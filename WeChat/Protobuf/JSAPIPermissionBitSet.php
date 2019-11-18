<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * JSAPIPermissionBitSet message
 */
class JSAPIPermissionBitSet extends \ProtobufMessage
{
    /* Field index constants */
    const BITVALUE1 = 1;
    const BITVALUE2 = 2;
    const BITVALUE3 = 3;
    const BITVALUE4 = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BITVALUE1 => array(
            'default' => 0,
            'name' => 'Bitvalue1',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BITVALUE2 => array(
            'default' => 0,
            'name' => 'Bitvalue2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BITVALUE3 => array(
            'default' => 0,
            'name' => 'Bitvalue3',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BITVALUE4 => array(
            'default' => 0,
            'name' => 'Bitvalue4',
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
        $this->values[self::BITVALUE1] = self::$fields[self::BITVALUE1]['default'];
        $this->values[self::BITVALUE2] = self::$fields[self::BITVALUE2]['default'];
        $this->values[self::BITVALUE3] = self::$fields[self::BITVALUE3]['default'];
        $this->values[self::BITVALUE4] = self::$fields[self::BITVALUE4]['default'];
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
     * Sets value of 'Bitvalue1' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitvalue1($value)
    {
        return $this->set(self::BITVALUE1, $value);
    }

    /**
     * Returns value of 'Bitvalue1' property
     *
     * @return integer
     */
    public function getBitvalue1()
    {
        $value = $this->get(self::BITVALUE1);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Bitvalue1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitvalue1()
    {
        return $this->get(self::BITVALUE1) !== null;
    }

    /**
     * Sets value of 'Bitvalue2' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitvalue2($value)
    {
        return $this->set(self::BITVALUE2, $value);
    }

    /**
     * Returns value of 'Bitvalue2' property
     *
     * @return integer
     */
    public function getBitvalue2()
    {
        $value = $this->get(self::BITVALUE2);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Bitvalue2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitvalue2()
    {
        return $this->get(self::BITVALUE2) !== null;
    }

    /**
     * Sets value of 'Bitvalue3' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitvalue3($value)
    {
        return $this->set(self::BITVALUE3, $value);
    }

    /**
     * Returns value of 'Bitvalue3' property
     *
     * @return integer
     */
    public function getBitvalue3()
    {
        $value = $this->get(self::BITVALUE3);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Bitvalue3' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitvalue3()
    {
        return $this->get(self::BITVALUE3) !== null;
    }

    /**
     * Sets value of 'Bitvalue4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitvalue4($value)
    {
        return $this->set(self::BITVALUE4, $value);
    }

    /**
     * Returns value of 'Bitvalue4' property
     *
     * @return integer
     */
    public function getBitvalue4()
    {
        $value = $this->get(self::BITVALUE4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Bitvalue4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitvalue4()
    {
        return $this->get(self::BITVALUE4) !== null;
    }
}
}