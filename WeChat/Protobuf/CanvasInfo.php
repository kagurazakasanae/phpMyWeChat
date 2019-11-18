<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CanvasInfo message
 */
class CanvasInfo extends \ProtobufMessage
{
    /* Field index constants */
    const DATABUFFER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::DATABUFFER => array(
            'name' => 'dataBuffer',
            'required' => true,
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
        $this->values[self::DATABUFFER] = null;
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
     * Sets value of 'dataBuffer' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDataBuffer($value)
    {
        return $this->set(self::DATABUFFER, $value);
    }

    /**
     * Returns value of 'dataBuffer' property
     *
     * @return string
     */
    public function getDataBuffer()
    {
        $value = $this->get(self::DATABUFFER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'dataBuffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataBuffer()
    {
        return $this->get(self::DATABUFFER) !== null;
    }
}
}