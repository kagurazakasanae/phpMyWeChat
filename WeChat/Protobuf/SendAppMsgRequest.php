<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SendAppMsgRequest message
 */
class SendAppMsgRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const MSG = 2;
    const COMMENTURL = 3;
    const REQTIME = 4;
    const MD5 = 5;
    const FILETYPE = 6;
    const SIGNATURE = 7;
    const FROMSENCE = 8;
    const HITMD5 = 9;
    const CRC = 10;
    const MSGFORWARDTYPE = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::MSG => array(
            'name' => 'msg',
            'required' => true,
            'type' => '\AppMsg'
        ),
        self::COMMENTURL => array(
            'name' => 'commentUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REQTIME => array(
            'name' => 'reqTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MD5 => array(
            'name' => 'md5',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FILETYPE => array(
            'name' => 'fileType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SIGNATURE => array(
            'name' => 'signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FROMSENCE => array(
            'name' => 'fromSence',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HITMD5 => array(
            'name' => 'hitMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CRC => array(
            'name' => 'crc',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGFORWARDTYPE => array(
            'name' => 'msgForwardType',
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
        $this->values[self::MSG] = null;
        $this->values[self::COMMENTURL] = null;
        $this->values[self::REQTIME] = null;
        $this->values[self::MD5] = null;
        $this->values[self::FILETYPE] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::FROMSENCE] = null;
        $this->values[self::HITMD5] = null;
        $this->values[self::CRC] = null;
        $this->values[self::MSGFORWARDTYPE] = null;
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
     * Sets value of 'msg' property
     *
     * @param \AppMsg $value Property value
     *
     * @return null
     */
    public function setMsg(\AppMsg $value=null)
    {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return \AppMsg
     */
    public function getMsg()
    {
        return $this->get(self::MSG);
    }

    /**
     * Returns true if 'msg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsg()
    {
        return $this->get(self::MSG) !== null;
    }

    /**
     * Sets value of 'commentUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCommentUrl($value)
    {
        return $this->set(self::COMMENTURL, $value);
    }

    /**
     * Returns value of 'commentUrl' property
     *
     * @return string
     */
    public function getCommentUrl()
    {
        $value = $this->get(self::COMMENTURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'commentUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCommentUrl()
    {
        return $this->get(self::COMMENTURL) !== null;
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
     * Sets value of 'md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMd5($value)
    {
        return $this->set(self::MD5, $value);
    }

    /**
     * Returns value of 'md5' property
     *
     * @return string
     */
    public function getMd5()
    {
        $value = $this->get(self::MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'md5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMd5()
    {
        return $this->get(self::MD5) !== null;
    }

    /**
     * Sets value of 'fileType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFileType($value)
    {
        return $this->set(self::FILETYPE, $value);
    }

    /**
     * Returns value of 'fileType' property
     *
     * @return integer
     */
    public function getFileType()
    {
        $value = $this->get(self::FILETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fileType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFileType()
    {
        return $this->get(self::FILETYPE) !== null;
    }

    /**
     * Sets value of 'signature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignature($value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'signature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignature()
    {
        return $this->get(self::SIGNATURE) !== null;
    }

    /**
     * Sets value of 'fromSence' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromSence($value)
    {
        return $this->set(self::FROMSENCE, $value);
    }

    /**
     * Returns value of 'fromSence' property
     *
     * @return string
     */
    public function getFromSence()
    {
        $value = $this->get(self::FROMSENCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fromSence' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromSence()
    {
        return $this->get(self::FROMSENCE) !== null;
    }

    /**
     * Sets value of 'hitMd5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHitMd5($value)
    {
        return $this->set(self::HITMD5, $value);
    }

    /**
     * Returns value of 'hitMd5' property
     *
     * @return integer
     */
    public function getHitMd5()
    {
        $value = $this->get(self::HITMD5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hitMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHitMd5()
    {
        return $this->get(self::HITMD5) !== null;
    }

    /**
     * Sets value of 'crc' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCrc($value)
    {
        return $this->set(self::CRC, $value);
    }

    /**
     * Returns value of 'crc' property
     *
     * @return integer
     */
    public function getCrc()
    {
        $value = $this->get(self::CRC);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'crc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCrc()
    {
        return $this->get(self::CRC) !== null;
    }

    /**
     * Sets value of 'msgForwardType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgForwardType($value)
    {
        return $this->set(self::MSGFORWARDTYPE, $value);
    }

    /**
     * Returns value of 'msgForwardType' property
     *
     * @return integer
     */
    public function getMsgForwardType()
    {
        $value = $this->get(self::MSGFORWARDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgForwardType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgForwardType()
    {
        return $this->get(self::MSGFORWARDTYPE) !== null;
    }
}
}