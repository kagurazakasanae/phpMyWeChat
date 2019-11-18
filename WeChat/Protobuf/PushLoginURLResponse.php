<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * PushLoginURLResponse message
 */
class PushLoginURLResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const UUID = 2;
    const NOTIFYKEY = 3;
    const CHECKTIME = 4;
    const EXPIREDTIME = 5;
    const BLUETOOTHBROADCASTUUID = 6;
    const BLUETOOTHBROADCASTCONTENT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOTIFYKEY => array(
            'name' => 'Notifykey',
            'required' => true,
            'type' => '\AesKey'
        ),
        self::CHECKTIME => array(
            'name' => 'Checktime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXPIREDTIME => array(
            'name' => 'Expiredtime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLUETOOTHBROADCASTUUID => array(
            'name' => 'blueToothBroadCastUuid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BLUETOOTHBROADCASTCONTENT => array(
            'name' => 'blueToothBroadCastContent',
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
        $this->values[self::UUID] = null;
        $this->values[self::NOTIFYKEY] = null;
        $this->values[self::CHECKTIME] = null;
        $this->values[self::EXPIREDTIME] = null;
        $this->values[self::BLUETOOTHBROADCASTUUID] = null;
        $this->values[self::BLUETOOTHBROADCASTCONTENT] = null;
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
     * Sets value of 'uuid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUuid($value)
    {
        return $this->set(self::UUID, $value);
    }

    /**
     * Returns value of 'uuid' property
     *
     * @return string
     */
    public function getUuid()
    {
        $value = $this->get(self::UUID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'uuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUuid()
    {
        return $this->get(self::UUID) !== null;
    }

    /**
     * Sets value of 'Notifykey' property
     *
     * @param \AesKey $value Property value
     *
     * @return null
     */
    public function setNotifykey(\AesKey $value=null)
    {
        return $this->set(self::NOTIFYKEY, $value);
    }

    /**
     * Returns value of 'Notifykey' property
     *
     * @return \AesKey
     */
    public function getNotifykey()
    {
        return $this->get(self::NOTIFYKEY);
    }

    /**
     * Returns true if 'Notifykey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNotifykey()
    {
        return $this->get(self::NOTIFYKEY) !== null;
    }

    /**
     * Sets value of 'Checktime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChecktime($value)
    {
        return $this->set(self::CHECKTIME, $value);
    }

    /**
     * Returns value of 'Checktime' property
     *
     * @return integer
     */
    public function getChecktime()
    {
        $value = $this->get(self::CHECKTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Checktime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChecktime()
    {
        return $this->get(self::CHECKTIME) !== null;
    }

    /**
     * Sets value of 'Expiredtime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpiredtime($value)
    {
        return $this->set(self::EXPIREDTIME, $value);
    }

    /**
     * Returns value of 'Expiredtime' property
     *
     * @return integer
     */
    public function getExpiredtime()
    {
        $value = $this->get(self::EXPIREDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Expiredtime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExpiredtime()
    {
        return $this->get(self::EXPIREDTIME) !== null;
    }

    /**
     * Sets value of 'blueToothBroadCastUuid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBlueToothBroadCastUuid($value)
    {
        return $this->set(self::BLUETOOTHBROADCASTUUID, $value);
    }

    /**
     * Returns value of 'blueToothBroadCastUuid' property
     *
     * @return string
     */
    public function getBlueToothBroadCastUuid()
    {
        $value = $this->get(self::BLUETOOTHBROADCASTUUID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'blueToothBroadCastUuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlueToothBroadCastUuid()
    {
        return $this->get(self::BLUETOOTHBROADCASTUUID) !== null;
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
}
}