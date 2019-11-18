<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsObjectOp message
 */
class SnsObjectOp extends \ProtobufMessage
{
    /* Field index constants */
    const ID = 1;
    const OPTYPE = 2;
    const EXT = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ID => array(
            'name' => 'id',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OPTYPE => array(
            'name' => 'opType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXT => array(
            'name' => 'ext',
            'required' => true,
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
        $this->values[self::ID] = null;
        $this->values[self::OPTYPE] = null;
        $this->values[self::EXT] = null;
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
     * Sets value of 'id' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setId($value)
    {
        return $this->set(self::ID, $value);
    }

    /**
     * Returns value of 'id' property
     *
     * @return integer
     */
    public function getId()
    {
        $value = $this->get(self::ID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'id' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasId()
    {
        return $this->get(self::ID) !== null;
    }

    /**
     * Sets value of 'opType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpType($value)
    {
        return $this->set(self::OPTYPE, $value);
    }

    /**
     * Returns value of 'opType' property
     *
     * @return integer
     */
    public function getOpType()
    {
        $value = $this->get(self::OPTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpType()
    {
        return $this->get(self::OPTYPE) !== null;
    }

    /**
     * Sets value of 'ext' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setExt(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::EXT, $value);
    }

    /**
     * Returns value of 'ext' property
     *
     * @return \SKBuiltinString_
     */
    public function getExt()
    {
        return $this->get(self::EXT);
    }

    /**
     * Returns true if 'ext' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExt()
    {
        return $this->get(self::EXT) !== null;
    }
}
}