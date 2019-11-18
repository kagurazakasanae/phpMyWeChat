<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * UploadVoiceResponse message
 */
class UploadVoiceResponse extends \ProtobufMessage
{
    /* Field index constants */
    const FROMUSERNAME = 1;
    const TOUSERNAME = 2;
    const OFFSET = 3;
    const LENGTH = 4;
    const CREATETIME = 5;
    const CLIENTMSGID = 6;
    const MSGID = 7;
    const VOICELENGTH = 8;
    const ENDFLAG = 9;
    const BASERESPONSE = 10;
    const CANCELFLAG = 11;
    const NEWMSGID = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROMUSERNAME => array(
            'name' => 'fromUserName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOUSERNAME => array(
            'name' => 'toUserName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        self::CREATETIME => array(
            'name' => 'createTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::VOICELENGTH => array(
            'name' => 'voiceLength',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ENDFLAG => array(
            'name' => 'endFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::CANCELFLAG => array(
            'name' => 'cancelFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWMSGID => array(
            'name' => 'newMsgId',
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
        $this->values[self::FROMUSERNAME] = null;
        $this->values[self::TOUSERNAME] = null;
        $this->values[self::OFFSET] = null;
        $this->values[self::LENGTH] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::MSGID] = null;
        $this->values[self::VOICELENGTH] = null;
        $this->values[self::ENDFLAG] = null;
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::CANCELFLAG] = null;
        $this->values[self::NEWMSGID] = null;
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
     * Sets value of 'fromUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromUserName($value)
    {
        return $this->set(self::FROMUSERNAME, $value);
    }

    /**
     * Returns value of 'fromUserName' property
     *
     * @return string
     */
    public function getFromUserName()
    {
        $value = $this->get(self::FROMUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fromUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromUserName()
    {
        return $this->get(self::FROMUSERNAME) !== null;
    }

    /**
     * Sets value of 'toUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToUserName($value)
    {
        return $this->set(self::TOUSERNAME, $value);
    }

    /**
     * Returns value of 'toUserName' property
     *
     * @return string
     */
    public function getToUserName()
    {
        $value = $this->get(self::TOUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'toUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToUserName()
    {
        return $this->get(self::TOUSERNAME) !== null;
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
     * Sets value of 'createTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createTime' property
     *
     * @return integer
     */
    public function getCreateTime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreateTime()
    {
        return $this->get(self::CREATETIME) !== null;
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
     * Sets value of 'voiceLength' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoiceLength($value)
    {
        return $this->set(self::VOICELENGTH, $value);
    }

    /**
     * Returns value of 'voiceLength' property
     *
     * @return integer
     */
    public function getVoiceLength()
    {
        $value = $this->get(self::VOICELENGTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voiceLength' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoiceLength()
    {
        return $this->get(self::VOICELENGTH) !== null;
    }

    /**
     * Sets value of 'endFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndFlag($value)
    {
        return $this->set(self::ENDFLAG, $value);
    }

    /**
     * Returns value of 'endFlag' property
     *
     * @return integer
     */
    public function getEndFlag()
    {
        $value = $this->get(self::ENDFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'endFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndFlag()
    {
        return $this->get(self::ENDFLAG) !== null;
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
     * Sets value of 'cancelFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCancelFlag($value)
    {
        return $this->set(self::CANCELFLAG, $value);
    }

    /**
     * Returns value of 'cancelFlag' property
     *
     * @return integer
     */
    public function getCancelFlag()
    {
        $value = $this->get(self::CANCELFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cancelFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCancelFlag()
    {
        return $this->get(self::CANCELFLAG) !== null;
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
}
}