<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsTagListRequest message
 */
class SnsTagListRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const OPCODE = 2;
    const TAGLISTMD5 = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::OPCODE => array(
            'name' => 'opCode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAGLISTMD5 => array(
            'name' => 'tagListMd5',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::OPCODE] = null;
        $this->values[self::TAGLISTMD5] = null;
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
     * Sets value of 'opCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpCode($value)
    {
        return $this->set(self::OPCODE, $value);
    }

    /**
     * Returns value of 'opCode' property
     *
     * @return integer
     */
    public function getOpCode()
    {
        $value = $this->get(self::OPCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpCode()
    {
        return $this->get(self::OPCODE) !== null;
    }

    /**
     * Sets value of 'tagListMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTagListMd5($value)
    {
        return $this->set(self::TAGLISTMD5, $value);
    }

    /**
     * Returns value of 'tagListMd5' property
     *
     * @return string
     */
    public function getTagListMd5()
    {
        $value = $this->get(self::TAGLISTMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'tagListMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagListMd5()
    {
        return $this->get(self::TAGLISTMD5) !== null;
    }
}
}