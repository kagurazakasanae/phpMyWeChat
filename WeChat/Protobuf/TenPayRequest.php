<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * TenPayRequest message
 */
class TenPayRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CGICMD = 2;
    const OUTPUTTYPE = 3;
    const REQTEXT = 4;
    const REQTEXTWX = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::CGICMD => array(
            'name' => 'cgiCmd',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OUTPUTTYPE => array(
            'name' => 'outPutType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQTEXT => array(
            'name' => 'reqText',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::REQTEXTWX => array(
            'name' => 'reqTextWx',
            'required' => true,
            'type' => '\SKBuiltinString_S'
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
        $this->values[self::CGICMD] = null;
        $this->values[self::OUTPUTTYPE] = null;
        $this->values[self::REQTEXT] = null;
        $this->values[self::REQTEXTWX] = null;
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
     * Sets value of 'cgiCmd' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCgiCmd($value)
    {
        return $this->set(self::CGICMD, $value);
    }

    /**
     * Returns value of 'cgiCmd' property
     *
     * @return integer
     */
    public function getCgiCmd()
    {
        $value = $this->get(self::CGICMD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cgiCmd' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCgiCmd()
    {
        return $this->get(self::CGICMD) !== null;
    }

    /**
     * Sets value of 'outPutType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOutPutType($value)
    {
        return $this->set(self::OUTPUTTYPE, $value);
    }

    /**
     * Returns value of 'outPutType' property
     *
     * @return integer
     */
    public function getOutPutType()
    {
        $value = $this->get(self::OUTPUTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'outPutType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOutPutType()
    {
        return $this->get(self::OUTPUTTYPE) !== null;
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
     * Sets value of 'reqTextWx' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setReqTextWx(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::REQTEXTWX, $value);
    }

    /**
     * Returns value of 'reqTextWx' property
     *
     * @return \SKBuiltinString_S
     */
    public function getReqTextWx()
    {
        return $this->get(self::REQTEXTWX);
    }

    /**
     * Returns true if 'reqTextWx' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReqTextWx()
    {
        return $this->get(self::REQTEXTWX) !== null;
    }
}
}