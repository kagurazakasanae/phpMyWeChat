<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * HeartBeatRequest message
 */
class HeartBeatRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const TIMESTAMP = 2;
    const KEYBUF = 3;
    const BLUETOOTHBROADCASTCONTENT = 4;
    const SCENE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::TIMESTAMP => array(
            'name' => 'Timestamp',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEYBUF => array(
            'name' => 'Keybuf',
            'required' => true,
            'type' => '\syncMsgKey'
        ),
        self::BLUETOOTHBROADCASTCONTENT => array(
            'name' => 'blueToothBroadCastContent',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::SCENE => array(
            'name' => 'scene',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::KEYBUF] = null;
        $this->values[self::BLUETOOTHBROADCASTCONTENT] = null;
        $this->values[self::SCENE] = null;
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
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'Timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'Timestamp' property
     *
     * @return integer
     */
    public function getTimestamp()
    {
        $value = $this->get(self::TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Timestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestamp()
    {
        return $this->get(self::TIMESTAMP) !== null;
    }

    /**
     * Sets value of 'Keybuf' property
     *
     * @param \syncMsgKey $value Property value
     *
     * @return null
     */
    public function setKeybuf(\syncMsgKey $value=null)
    {
        return $this->set(self::KEYBUF, $value);
    }

    /**
     * Returns value of 'Keybuf' property
     *
     * @return \syncMsgKey
     */
    public function getKeybuf()
    {
        return $this->get(self::KEYBUF);
    }

    /**
     * Returns true if 'Keybuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKeybuf()
    {
        return $this->get(self::KEYBUF) !== null;
    }

    /**
     * Sets value of 'blueToothBroadCastContent' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setBlueToothBroadCastContent(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::BLUETOOTHBROADCASTCONTENT, $value);
    }

    /**
     * Returns value of 'blueToothBroadCastContent' property
     *
     * @return \SKBuiltinString_
     */
    public function getBlueToothBroadCastContent()
    {
        return $this->get(self::BLUETOOTHBROADCASTCONTENT);
    }

    /**
     * Returns true if 'blueToothBroadCastContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlueToothBroadCastContent()
    {
        return $this->get(self::BLUETOOTHBROADCASTCONTENT) !== null;
    }

    /**
     * Sets value of 'scene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScene($value)
    {
        return $this->set(self::SCENE, $value);
    }

    /**
     * Returns value of 'scene' property
     *
     * @return integer
     */
    public function getScene()
    {
        $value = $this->get(self::SCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScene()
    {
        return $this->get(self::SCENE) !== null;
    }
}
}