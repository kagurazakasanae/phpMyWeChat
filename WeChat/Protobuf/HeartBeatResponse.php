<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * HeartBeatResponse message
 */
class HeartBeatResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const NEXTTIME = 2;
    const SELECTOR = 3;
    const BLUETOOTHBROAD = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::NEXTTIME => array(
            'name' => 'Nexttime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SELECTOR => array(
            'name' => 'Selector',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLUETOOTHBROAD => array(
            'name' => 'Bluetoothbroad',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::NEXTTIME] = null;
        $this->values[self::SELECTOR] = null;
        $this->values[self::BLUETOOTHBROAD] = null;
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
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'Nexttime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNexttime($value)
    {
        return $this->set(self::NEXTTIME, $value);
    }

    /**
     * Returns value of 'Nexttime' property
     *
     * @return integer
     */
    public function getNexttime()
    {
        $value = $this->get(self::NEXTTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Nexttime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNexttime()
    {
        return $this->get(self::NEXTTIME) !== null;
    }

    /**
     * Sets value of 'Selector' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSelector($value)
    {
        return $this->set(self::SELECTOR, $value);
    }

    /**
     * Returns value of 'Selector' property
     *
     * @return integer
     */
    public function getSelector()
    {
        $value = $this->get(self::SELECTOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Selector' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSelector()
    {
        return $this->get(self::SELECTOR) !== null;
    }

    /**
     * Sets value of 'Bluetoothbroad' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setBluetoothbroad(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::BLUETOOTHBROAD, $value);
    }

    /**
     * Returns value of 'Bluetoothbroad' property
     *
     * @return \SKBuiltinString_
     */
    public function getBluetoothbroad()
    {
        return $this->get(self::BLUETOOTHBROAD);
    }

    /**
     * Returns true if 'Bluetoothbroad' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBluetoothbroad()
    {
        return $this->get(self::BLUETOOTHBROAD) !== null;
    }
}
}