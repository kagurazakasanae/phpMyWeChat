<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * OpLogRet message
 */
class OpLogRet extends \ProtobufMessage
{
    /* Field index constants */
    const COUNT = 1;
    const RET = 2;
    const ERRMSG = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COUNT => array(
            'name' => 'count',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::RET => array(
            'name' => 'ret',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ERRMSG => array(
            'name' => 'errMsg',
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
        $this->values[self::COUNT] = null;
        $this->values[self::RET] = null;
        $this->values[self::ERRMSG] = null;
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
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCount()
    {
        return $this->get(self::COUNT) !== null;
    }

    /**
     * Sets value of 'ret' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRet($value)
    {
        return $this->set(self::RET, $value);
    }

    /**
     * Returns value of 'ret' property
     *
     * @return string
     */
    public function getRet()
    {
        $value = $this->get(self::RET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRet()
    {
        return $this->get(self::RET) !== null;
    }

    /**
     * Sets value of 'errMsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setErrMsg($value)
    {
        return $this->set(self::ERRMSG, $value);
    }

    /**
     * Returns value of 'errMsg' property
     *
     * @return string
     */
    public function getErrMsg()
    {
        $value = $this->get(self::ERRMSG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'errMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrMsg()
    {
        return $this->get(self::ERRMSG) !== null;
    }
}
}