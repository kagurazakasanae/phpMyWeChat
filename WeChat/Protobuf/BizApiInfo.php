<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * BizApiInfo message
 */
class BizApiInfo extends \ProtobufMessage
{
    /* Field index constants */
    const APINAME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::APINAME => array(
            'name' => 'apiName',
            'required' => false,
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
        $this->values[self::APINAME] = null;
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
     * Sets value of 'apiName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setApiName($value)
    {
        return $this->set(self::APINAME, $value);
    }

    /**
     * Returns value of 'apiName' property
     *
     * @return string
     */
    public function getApiName()
    {
        $value = $this->get(self::APINAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'apiName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasApiName()
    {
        return $this->get(self::APINAME) !== null;
    }
}
}