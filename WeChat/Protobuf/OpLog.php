<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * OpLog message
 */
class OpLog extends \ProtobufMessage
{
    /* Field index constants */
    const CMDID = 1;
    const BUFFER = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CMDID => array(
            'default' => 0,
            'name' => 'cmdid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUFFER => array(
            'name' => 'buffer',
            'required' => false,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::CMDID] = self::$fields[self::CMDID]['default'];
        $this->values[self::BUFFER] = null;
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
     * Sets value of 'cmdid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCmdid($value)
    {
        return $this->set(self::CMDID, $value);
    }

    /**
     * Returns value of 'cmdid' property
     *
     * @return integer
     */
    public function getCmdid()
    {
        $value = $this->get(self::CMDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cmdid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdid()
    {
        return $this->get(self::CMDID) !== null;
    }

    /**
     * Sets value of 'buffer' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setBuffer(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::BUFFER, $value);
    }

    /**
     * Returns value of 'buffer' property
     *
     * @return \SKBuiltinString_
     */
    public function getBuffer()
    {
        return $this->get(self::BUFFER);
    }

    /**
     * Returns true if 'buffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuffer()
    {
        return $this->get(self::BUFFER) !== null;
    }
}
}