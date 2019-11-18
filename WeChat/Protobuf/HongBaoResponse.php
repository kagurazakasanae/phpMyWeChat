<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * HongBaoResponse message
 */
class HongBaoResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const RETTEXT = 2;
    const PLATRET = 3;
    const PLATMSG = 4;
    const CGICMDID = 5;
    const ERRORTYPE = 6;
    const ERRORMSG = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'BaseResponse',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::RETTEXT => array(
            'name' => 'retText',
            'required' => false,
            'type' => '\SKBuiltinString_S'
        ),
        self::PLATRET => array(
            'default' => 0,
            'name' => 'platRet',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLATMSG => array(
            'name' => 'platMsg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CGICMDID => array(
            'default' => 0,
            'name' => 'cgiCmdid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERRORTYPE => array(
            'default' => 0,
            'name' => 'errorType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERRORMSG => array(
            'name' => 'errorMsg',
            'required' => false,
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
        $this->values[self::RETTEXT] = null;
        $this->values[self::PLATRET] = self::$fields[self::PLATRET]['default'];
        $this->values[self::PLATMSG] = null;
        $this->values[self::CGICMDID] = self::$fields[self::CGICMDID]['default'];
        $this->values[self::ERRORTYPE] = self::$fields[self::ERRORTYPE]['default'];
        $this->values[self::ERRORMSG] = null;
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
     * Sets value of 'BaseResponse' property
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
     * Returns value of 'BaseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'BaseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'retText' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setRetText(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::RETTEXT, $value);
    }

    /**
     * Returns value of 'retText' property
     *
     * @return \SKBuiltinString_S
     */
    public function getRetText()
    {
        return $this->get(self::RETTEXT);
    }

    /**
     * Returns true if 'retText' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRetText()
    {
        return $this->get(self::RETTEXT) !== null;
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
     * Sets value of 'errorType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setErrorType($value)
    {
        return $this->set(self::ERRORTYPE, $value);
    }

    /**
     * Returns value of 'errorType' property
     *
     * @return integer
     */
    public function getErrorType()
    {
        $value = $this->get(self::ERRORTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'errorType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorType()
    {
        return $this->get(self::ERRORTYPE) !== null;
    }

    /**
     * Sets value of 'errorMsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrorMsg($value)
    {
        return $this->set(self::ERRORMSG, $value);
    }

    /**
     * Returns value of 'errorMsg' property
     *
     * @return string
     */
    public function getErrorMsg()
    {
        $value = $this->get(self::ERRORMSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'errorMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrorMsg()
    {
        return $this->get(self::ERRORMSG) !== null;
    }
}
}