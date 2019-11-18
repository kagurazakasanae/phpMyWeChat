<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * UploadVoiceRequest message
 */
class UploadVoiceRequest extends \ProtobufMessage
{
    /* Field index constants */
    const FROM = 1;
    const TO = 2;
    const OFFSET = 3;
    const LENGTH = 4;
    const CLIENTMSGID = 5;
    const MSGID = 6;
    const VOICELEN = 7;
    const DATA = 8;
    const ENDFLAG = 9;
    const BASEREQUEST = 10;
    const CANCELFLAG = 11;
    const MSGSOURCE = 12;
    const VOICEFORMAT = 13;
    const UICREATETIME = 14;
    const FORWARDFLAG = 15;
    const NEWMSGID = 16;
    const REQTIME = 17;
    const VOICEID = 18;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROM => array(
            'name' => 'from',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TO => array(
            'name' => 'to',
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
        self::VOICELEN => array(
            'name' => 'voiceLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::ENDFLAG => array(
            'name' => 'endFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::CANCELFLAG => array(
            'name' => 'cancelFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGSOURCE => array(
            'name' => 'msgsource',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VOICEFORMAT => array(
            'name' => 'voiceFormat',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UICREATETIME => array(
            'name' => 'uicreateTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FORWARDFLAG => array(
            'name' => 'forwardFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWMSGID => array(
            'name' => 'newMsgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQTIME => array(
            'name' => 'reqTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VOICEID => array(
            'name' => 'voiceId',
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
        $this->values[self::FROM] = null;
        $this->values[self::TO] = null;
        $this->values[self::OFFSET] = null;
        $this->values[self::LENGTH] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::MSGID] = null;
        $this->values[self::VOICELEN] = null;
        $this->values[self::DATA] = null;
        $this->values[self::ENDFLAG] = null;
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::CANCELFLAG] = null;
        $this->values[self::MSGSOURCE] = null;
        $this->values[self::VOICEFORMAT] = null;
        $this->values[self::UICREATETIME] = null;
        $this->values[self::FORWARDFLAG] = null;
        $this->values[self::NEWMSGID] = null;
        $this->values[self::REQTIME] = null;
        $this->values[self::VOICEID] = null;
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
     * Sets value of 'from' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrom($value)
    {
        return $this->set(self::FROM, $value);
    }

    /**
     * Returns value of 'from' property
     *
     * @return string
     */
    public function getFrom()
    {
        $value = $this->get(self::FROM);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'from' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrom()
    {
        return $this->get(self::FROM) !== null;
    }

    /**
     * Sets value of 'to' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTo($value)
    {
        return $this->set(self::TO, $value);
    }

    /**
     * Returns value of 'to' property
     *
     * @return string
     */
    public function getTo()
    {
        $value = $this->get(self::TO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'to' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTo()
    {
        return $this->get(self::TO) !== null;
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
     * Sets value of 'voiceLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoiceLen($value)
    {
        return $this->set(self::VOICELEN, $value);
    }

    /**
     * Returns value of 'voiceLen' property
     *
     * @return integer
     */
    public function getVoiceLen()
    {
        $value = $this->get(self::VOICELEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voiceLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoiceLen()
    {
        return $this->get(self::VOICELEN) !== null;
    }

    /**
     * Sets value of 'data' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return \SKBuiltinString_
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Returns true if 'data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData()
    {
        return $this->get(self::DATA) !== null;
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
     * Sets value of 'msgsource' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsgsource($value)
    {
        return $this->set(self::MSGSOURCE, $value);
    }

    /**
     * Returns value of 'msgsource' property
     *
     * @return string
     */
    public function getMsgsource()
    {
        $value = $this->get(self::MSGSOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'msgsource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgsource()
    {
        return $this->get(self::MSGSOURCE) !== null;
    }

    /**
     * Sets value of 'voiceFormat' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoiceFormat($value)
    {
        return $this->set(self::VOICEFORMAT, $value);
    }

    /**
     * Returns value of 'voiceFormat' property
     *
     * @return integer
     */
    public function getVoiceFormat()
    {
        $value = $this->get(self::VOICEFORMAT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voiceFormat' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoiceFormat()
    {
        return $this->get(self::VOICEFORMAT) !== null;
    }

    /**
     * Sets value of 'uicreateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUicreateTime($value)
    {
        return $this->set(self::UICREATETIME, $value);
    }

    /**
     * Returns value of 'uicreateTime' property
     *
     * @return integer
     */
    public function getUicreateTime()
    {
        $value = $this->get(self::UICREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uicreateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUicreateTime()
    {
        return $this->get(self::UICREATETIME) !== null;
    }

    /**
     * Sets value of 'forwardFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setForwardFlag($value)
    {
        return $this->set(self::FORWARDFLAG, $value);
    }

    /**
     * Returns value of 'forwardFlag' property
     *
     * @return integer
     */
    public function getForwardFlag()
    {
        $value = $this->get(self::FORWARDFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'forwardFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasForwardFlag()
    {
        return $this->get(self::FORWARDFLAG) !== null;
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
     * Sets value of 'reqTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReqTime($value)
    {
        return $this->set(self::REQTIME, $value);
    }

    /**
     * Returns value of 'reqTime' property
     *
     * @return integer
     */
    public function getReqTime()
    {
        $value = $this->get(self::REQTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reqTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReqTime()
    {
        return $this->get(self::REQTIME) !== null;
    }

    /**
     * Sets value of 'voiceId' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setVoiceId(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::VOICEID, $value);
    }

    /**
     * Returns value of 'voiceId' property
     *
     * @return \SKBuiltinString_
     */
    public function getVoiceId()
    {
        return $this->get(self::VOICEID);
    }

    /**
     * Returns true if 'voiceId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoiceId()
    {
        return $this->get(self::VOICEID) !== null;
    }
}
}