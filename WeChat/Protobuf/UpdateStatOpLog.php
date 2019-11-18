<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:13:54
 */

namespace {
/**
 * UpdateStatOpLog message
 */
class UpdateStatOpLog extends \ProtobufMessage
{
    /* Field index constants */
    const OPCODE = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::OPCODE => array(
            'name' => 'OpCode',
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
        $this->values[self::OPCODE] = null;
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
     * Sets value of 'OpCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpCode($value)
    {
        return $this->set(self::OPCODE, $value);
    }

    /**
     * Returns value of 'OpCode' property
     *
     * @return integer
     */
    public function getOpCode()
    {
        $value = $this->get(self::OPCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'OpCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpCode()
    {
        return $this->get(self::OPCODE) !== null;
    }
}
}