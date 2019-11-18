<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DownloadVoiceRequest message
 */
class DownloadVoiceRequest extends \ProtobufMessage
{
    /* Field index constants */
    const MSGID = 1;
    const OFFSET = 2;
    const LENGTH = 3;
    const CLIENTMSGID = 4;
    const BASEREQUEST = 5;
    const NEWMSGID = 6;
    const CHATROOMNAME = 7;
    const MASTERBUFID = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MSGID => array(
            'name' => 'msgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OFFSET => array(
            'name' => 'offset',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LENGTH => array(
            'name' => 'length',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTMSGID => array(
            'name' => 'clientMsgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::NEWMSGID => array(
            'name' => 'Newmsgid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATROOMNAME => array(
            'name' => 'Chatroomname',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MASTERBUFID => array(
            'name' => 'MasterbufId',
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
        $this->values[self::MSGID] = null;
        $this->values[self::OFFSET] = null;
        $this->values[self::LENGTH] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::NEWMSGID] = null;
        $this->values[self::CHATROOMNAME] = null;
        $this->values[self::MASTERBUFID] = null;
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
     * Sets value of 'offset' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOffset($value)
    {
        return $this->set(self::OFFSET, $value);
    }

    /**
     * Returns value of 'offset' property
     *
     * @return integer
     */
    public function getOffset()
    {
        $value = $this->get(self::OFFSET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'offset' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOffset()
    {
        return $this->get(self::OFFSET) !== null;
    }

    /**
     * Sets value of 'length' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLength($value)
    {
        return $this->set(self::LENGTH, $value);
    }

    /**
     * Returns value of 'length' property
     *
     * @return integer
     */
    public function getLength()
    {
        $value = $this->get(self::LENGTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'length' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLength()
    {
        return $this->get(self::LENGTH) !== null;
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
     * Sets value of 'Newmsgid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewmsgid($value)
    {
        return $this->set(self::NEWMSGID, $value);
    }

    /**
     * Returns value of 'Newmsgid' property
     *
     * @return integer
     */
    public function getNewmsgid()
    {
        $value = $this->get(self::NEWMSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Newmsgid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewmsgid()
    {
        return $this->get(self::NEWMSGID) !== null;
    }

    /**
     * Sets value of 'Chatroomname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatroomname($value)
    {
        return $this->set(self::CHATROOMNAME, $value);
    }

    /**
     * Returns value of 'Chatroomname' property
     *
     * @return string
     */
    public function getChatroomname()
    {
        $value = $this->get(self::CHATROOMNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Chatroomname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomname()
    {
        return $this->get(self::CHATROOMNAME) !== null;
    }

    /**
     * Sets value of 'MasterbufId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMasterbufId($value)
    {
        return $this->set(self::MASTERBUFID, $value);
    }

    /**
     * Returns value of 'MasterbufId' property
     *
     * @return integer
     */
    public function getMasterbufId()
    {
        $value = $this->get(self::MASTERBUFID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'MasterbufId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMasterbufId()
    {
        return $this->get(self::MASTERBUFID) !== null;
    }
}
}