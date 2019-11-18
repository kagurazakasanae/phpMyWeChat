<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * TenPayResponse message
 */
class TenPayResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const REQTEXT = 2;
    const PLATRET = 3;
    const PLATMSG = 4;
    const CGICMDID = 5;
    const TENPAYERRTYPE = 6;
    const TENPAYERRMSG = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::REQTEXT => array(
            'name' => 'reqText',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::PLATRET => array(
            'name' => 'platRet',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLATMSG => array(
            'name' => 'platMsg',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CGICMDID => array(
            'name' => 'cgiCmdid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TENPAYERRTYPE => array(
            'name' => 'tenpayErrType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TENPAYERRMSG => array(
            'name' => 'tenpayErrMsg',
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
        $this->values[self::REQTEXT] = null;
        $this->values[self::PLATRET] = null;
        $this->values[self::PLATMSG] = null;
        $this->values[self::CGICMDID] = null;
        $this->values[self::TENPAYERRTYPE] = null;
        $this->values[self::TENPAYERRMSG] = null;
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
     * Sets value of 'reqText' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setReqText(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::REQTEXT, $value);
    }

    /**
     * Returns value of 'reqText' property
     *
     * @return \SKBuiltinString_S
     */
    public function getReqText()
    {
        return $this->get(self::REQTEXT);
    }

    /**
     * Returns true if 'reqText' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReqText()
    {
        return $this->get(self::REQTEXT) !== null;
    }

    /**
     * Sets value of 'platRet' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlatRet($value)
    {
        return $this->set(self::PLATRET, $value);
    }

    /**
     * Returns value of 'platRet' property
     *
     * @return integer
     */
    public function getPlatRet()
    {
        $value = $this->get(self::PLATRET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'platRet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlatRet()
    {
        return $this->get(self::PLATRET) !== null;
    }

    /**
     * Sets value of 'platMsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPlatMsg($value)
    {
        return $this->set(self::PLATMSG, $value);
    }

    /**
     * Returns value of 'platMsg' property
     *
     * @return string
     */
    public function getPlatMsg()
    {
        $value = $this->get(self::PLATMSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'platMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlatMsg()
    {
        return $this->get(self::PLATMSG) !== null;
    }

    /**
     * Sets value of 'cgiCmdid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCgiCmdid($value)
    {
        return $this->set(self::CGICMDID, $value);
    }

    /**
     * Returns value of 'cgiCmdid' property
     *
     * @return integer
     */
    public function getCgiCmdid()
    {
        $value = $this->get(self::CGICMDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cgiCmdid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCgiCmdid()
    {
        return $this->get(self::CGICMDID) !== null;
    }

    /**
     * Sets value of 'tenpayErrType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTenpayErrType($value)
    {
        return $this->set(self::TENPAYERRTYPE, $value);
    }

    /**
     * Returns value of 'tenpayErrType' property
     *
     * @return integer
     */
    public function getTenpayErrType()
    {
        $value = $this->get(self::TENPAYERRTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'tenpayErrType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTenpayErrType()
    {
        return $this->get(self::TENPAYERRTYPE) !== null;
    }

    /**
     * Sets value of 'tenpayErrMsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTenpayErrMsg($value)
    {
        return $this->set(self::TENPAYERRMSG, $value);
    }

    /**
     * Returns value of 'tenpayErrMsg' property
     *
     * @return string
     */
    public function getTenpayErrMsg()
    {
        $value = $this->get(self::TENPAYERRMSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'tenpayErrMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTenpayErrMsg()
    {
        return $this->get(self::TENPAYERRMSG) !== null;
    }
}
}