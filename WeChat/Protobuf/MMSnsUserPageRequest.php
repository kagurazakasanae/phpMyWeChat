<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MMSnsUserPageRequest message
 */
class MMSnsUserPageRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const T2 = 2;
    const WXID = 3;
    const T4 = 4;
    const T5 = 5;
    const T6 = 6;
    const CREATETIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::T2 => array(
            'name' => 't2',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WXID => array(
            'name' => 'wxid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::T4 => array(
            'name' => 't4',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T5 => array(
            'name' => 't5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T6 => array(
            'name' => 't6',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CREATETIME => array(
            'name' => 'createtime',
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
        $this->values[self::T2] = null;
        $this->values[self::WXID] = null;
        $this->values[self::T4] = null;
        $this->values[self::T5] = null;
        $this->values[self::T6] = null;
        $this->values[self::CREATETIME] = null;
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
     * Sets value of 't2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT2($value)
    {
        return $this->set(self::T2, $value);
    }

    /**
     * Returns value of 't2' property
     *
     * @return string
     */
    public function getT2()
    {
        $value = $this->get(self::T2);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 't2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT2()
    {
        return $this->get(self::T2) !== null;
    }

    /**
     * Sets value of 'wxid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWxid($value)
    {
        return $this->set(self::WXID, $value);
    }

    /**
     * Returns value of 'wxid' property
     *
     * @return string
     */
    public function getWxid()
    {
        $value = $this->get(self::WXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'wxid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWxid()
    {
        return $this->get(self::WXID) !== null;
    }

    /**
     * Sets value of 't4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT4($value)
    {
        return $this->set(self::T4, $value);
    }

    /**
     * Returns value of 't4' property
     *
     * @return integer
     */
    public function getT4()
    {
        $value = $this->get(self::T4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT4()
    {
        return $this->get(self::T4) !== null;
    }

    /**
     * Sets value of 't5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT5($value)
    {
        return $this->set(self::T5, $value);
    }

    /**
     * Returns value of 't5' property
     *
     * @return integer
     */
    public function getT5()
    {
        $value = $this->get(self::T5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT5()
    {
        return $this->get(self::T5) !== null;
    }

    /**
     * Sets value of 't6' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT6($value)
    {
        return $this->set(self::T6, $value);
    }

    /**
     * Returns value of 't6' property
     *
     * @return integer
     */
    public function getT6()
    {
        $value = $this->get(self::T6);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't6' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT6()
    {
        return $this->get(self::T6) !== null;
    }

    /**
     * Sets value of 'createtime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreatetime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createtime' property
     *
     * @return integer
     */
    public function getCreatetime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createtime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreatetime()
    {
        return $this->get(self::CREATETIME) !== null;
    }
}
}