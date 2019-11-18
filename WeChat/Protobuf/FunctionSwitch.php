<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * FunctionSwitch message
 */
class FunctionSwitch extends \ProtobufMessage
{
    /* Field index constants */
    const FUNCTIONID = 1;
    const SWITCHVALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FUNCTIONID => array(
            'default' => 0,
            'name' => 'functionId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SWITCHVALUE => array(
            'default' => 0,
            'name' => 'switchValue',
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
        $this->values[self::FUNCTIONID] = self::$fields[self::FUNCTIONID]['default'];
        $this->values[self::SWITCHVALUE] = self::$fields[self::SWITCHVALUE]['default'];
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
     * Sets value of 'functionId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFunctionId($value)
    {
        return $this->set(self::FUNCTIONID, $value);
    }

    /**
     * Returns value of 'functionId' property
     *
     * @return integer
     */
    public function getFunctionId()
    {
        $value = $this->get(self::FUNCTIONID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'functionId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFunctionId()
    {
        return $this->get(self::FUNCTIONID) !== null;
    }

    /**
     * Sets value of 'switchValue' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSwitchValue($value)
    {
        return $this->set(self::SWITCHVALUE, $value);
    }

    /**
     * Returns value of 'switchValue' property
     *
     * @return integer
     */
    public function getSwitchValue()
    {
        $value = $this->get(self::SWITCHVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'switchValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSwitchValue()
    {
        return $this->get(self::SWITCHVALUE) !== null;
    }
}
}