<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DownloadVoiceResponse message
 */
class DownloadVoiceResponse extends \ProtobufMessage
{
    /* Field index constants */
    const MSGID = 1;
    const OFFSET = 2;
    const LENGTH = 3;
    const VOICELENGTH = 5;
    const CLIENTMSGID = 6;
    const DATA = 7;
    const ENDFLAG = 8;
    const BASERESPONSE = 9;
    const CANCELFLAG = 10;
    const NEWMSGID = 11;

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
        self::VOICELENGTH => array(
            'name' => 'Voicelength',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTMSGID => array(
            'name' => 'Clientmsgid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DATA => array(
            'name' => 'Data',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::ENDFLAG => array(
            'name' => 'Endflag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::CANCELFLAG => array(
            'name' => 'Cancelflag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWMSGID => array(
            'name' => 'Newmsgid',
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
        $this->values[self::VOICELENGTH] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::DATA] = null;
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
     * Sets value of 'Voicelength' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoicelength($value)
    {
        return $this->set(self::VOICELENGTH, $value);
    }

    /**
     * Returns value of 'Voicelength' property
     *
     * @return integer
     */
    public function getVoicelength()
    {
        $value = $this->get(self::VOICELENGTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Voicelength' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoicelength()
    {
        return $this->get(self::VOICELENGTH) !== null;
    }

    /**
     * Sets value of 'Clientmsgid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientmsgid($value)
    {
        return $this->set(self::CLIENTMSGID, $value);
    }

    /**
     * Returns value of 'Clientmsgid' property
     *
     * @return string
     */
    public function getClientmsgid()
    {
        $value = $this->get(self::CLIENTMSGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Clientmsgid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientmsgid()
    {
        return $this->get(self::CLIENTMSGID) !== null;
    }

    /**
     * Sets value of 'Data' property
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
     * Returns value of 'Data' property
     *
     * @return \SKBuiltinString_
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Returns true if 'Data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData()
    {
        return $this->get(self::DATA) !== null;
    }

    /**
     * Sets value of 'Endflag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEndflag($value)
    {
        return $this->set(self::ENDFLAG, $value);
    }

    /**
     * Returns value of 'Endflag' property
     *
     * @return integer
     */
    public function getEndflag()
    {
        $value = $this->get(self::ENDFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Endflag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEndflag()
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
     * Sets value of 'Cancelflag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCancelflag($value)
    {
        return $this->set(self::CANCELFLAG, $value);
    }

    /**
     * Returns value of 'Cancelflag' property
     *
     * @return integer
     */
    public function getCancelflag()
    {
        $value = $this->get(self::CANCELFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Cancelflag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCancelflag()
    {
        return $this->get(self::CANCELFLAG) !== null;
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
}
}