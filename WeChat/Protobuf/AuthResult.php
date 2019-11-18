<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AuthResult message
 */
class AuthResult extends \ProtobufMessage
{
    /* Field index constants */
    const CODE = 1;
    const ERR_MSG = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CODE => array(
            'name' => 'code',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ERR_MSG => array(
            'name' => 'err_msg',
            'required' => true,
            'type' => '\ErrMsg'
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
        $this->values[self::CODE] = null;
        $this->values[self::ERR_MSG] = null;
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
     * Sets value of 'code' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCode($value)
    {
        return $this->set(self::CODE, $value);
    }

    /**
     * Returns value of 'code' property
     *
     * @return integer
     */
    public function getCode()
    {
        $value = $this->get(self::CODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'code' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCode()
    {
        return $this->get(self::CODE) !== null;
    }

    /**
     * Sets value of 'err_msg' property
     *
     * @param \ErrMsg $value Property value
     *
     * @return null
     */
    public function setErrMsg(\ErrMsg $value=null)
    {
        return $this->set(self::ERR_MSG, $value);
    }

    /**
     * Returns value of 'err_msg' property
     *
     * @return \ErrMsg
     */
    public function getErrMsg()
    {
        return $this->get(self::ERR_MSG);
    }

    /**
     * Returns true if 'err_msg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasErrMsg()
    {
        return $this->get(self::ERR_MSG) !== null;
    }
}
}