<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:26:50
 */

namespace {
/**
 * WebWxFunctionSwitch message
 */
class WebWxFunctionSwitch extends \ProtobufMessage
{
    /* Field index constants */
    const FUNCTIONID = 1;
    const SWITCHVALUE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FUNCTIONID => array(
            'name' => 'FunctionId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SWITCHVALUE => array(
            'name' => 'SwitchValue',
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
        $this->values[self::FUNCTIONID] = null;
        $this->values[self::SWITCHVALUE] = null;
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
     * Sets value of 'FunctionId' property
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
     * Returns value of 'FunctionId' property
     *
     * @return integer
     */
    public function getFunctionId()
    {
        $value = $this->get(self::FUNCTIONID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'FunctionId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFunctionId()
    {
        return $this->get(self::FUNCTIONID) !== null;
    }

    /**
     * Sets value of 'SwitchValue' property
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
     * Returns value of 'SwitchValue' property
     *
     * @return integer
     */
    public function getSwitchValue()
    {
        $value = $this->get(self::SWITCHVALUE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'SwitchValue' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSwitchValue()
    {
        return $this->get(self::SWITCHVALUE) !== null;
    }
}
}