<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * UploadVideoResponse message
 */
class UploadVideoResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const CLIENTMSGID = 2;
    const MSGID = 3;
    const THUMBSTARTPOS = 4;
    const VIDEOSTARTPOS = 5;
    const NEWMSGID = 6;
    const CDNTHUMBAESKEY = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::CLIENTMSGID => array(
            'name' => 'clientMsgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGID => array(
            'name' => 'msgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THUMBSTARTPOS => array(
            'name' => 'thumbStartPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEOSTARTPOS => array(
            'name' => 'videoStartPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWMSGID => array(
            'name' => 'newMsgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBAESKEY => array(
            'name' => 'cdnthumbaeskey',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::MSGID] = null;
        $this->values[self::THUMBSTARTPOS] = null;
        $this->values[self::VIDEOSTARTPOS] = null;
        $this->values[self::NEWMSGID] = null;
        $this->values[self::CDNTHUMBAESKEY] = null;
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
     * Sets value of 'clientMsgId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientMsgId($value)
    {
        return $this->set(self::CLIENTMSGID, $value);
    }

    /**
     * Returns value of 'clientMsgId' property
     *
     * @return string
     */
    public function getClientMsgId()
    {
        $value = $this->get(self::CLIENTMSGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientMsgId()
    {
        return $this->get(self::CLIENTMSGID) !== null;
    }

    /**
     * Sets value of 'msgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgId($value)
    {
        return $this->set(self::MSGID, $value);
    }

    /**
     * Returns value of 'msgId' property
     *
     * @return integer
     */
    public function getMsgId()
    {
        $value = $this->get(self::MSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgId()
    {
        return $this->get(self::MSGID) !== null;
    }

    /**
     * Sets value of 'thumbStartPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThumbStartPos($value)
    {
        return $this->set(self::THUMBSTARTPOS, $value);
    }

    /**
     * Returns value of 'thumbStartPos' property
     *
     * @return integer
     */
    public function getThumbStartPos()
    {
        $value = $this->get(self::THUMBSTARTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'thumbStartPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbStartPos()
    {
        return $this->get(self::THUMBSTARTPOS) !== null;
    }

    /**
     * Sets value of 'videoStartPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVideoStartPos($value)
    {
        return $this->set(self::VIDEOSTARTPOS, $value);
    }

    /**
     * Returns value of 'videoStartPos' property
     *
     * @return integer
     */
    public function getVideoStartPos()
    {
        $value = $this->get(self::VIDEOSTARTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'videoStartPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoStartPos()
    {
        return $this->get(self::VIDEOSTARTPOS) !== null;
    }

    /**
     * Sets value of 'newMsgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewMsgId($value)
    {
        return $this->set(self::NEWMSGID, $value);
    }

    /**
     * Returns value of 'newMsgId' property
     *
     * @return integer
     */
    public function getNewMsgId()
    {
        $value = $this->get(self::NEWMSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewMsgId()
    {
        return $this->get(self::NEWMSGID) !== null;
    }

    /**
     * Sets value of 'cdnthumbaeskey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCdnthumbaeskey($value)
    {
        return $this->set(self::CDNTHUMBAESKEY, $value);
    }

    /**
     * Returns value of 'cdnthumbaeskey' property
     *
     * @return string
     */
    public function getCdnthumbaeskey()
    {
        $value = $this->get(self::CDNTHUMBAESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cdnthumbaeskey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCdnthumbaeskey()
    {
        return $this->get(self::CDNTHUMBAESKEY) !== null;
    }
}
}