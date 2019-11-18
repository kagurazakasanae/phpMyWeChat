<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CmdItem message
 */
class CmdItem extends \ProtobufMessage
{
    /* Field index constants */
    const CMDID = 1;
    const CMDBUF = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CMDID => array(
            'name' => 'cmdid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDBUF => array(
            'name' => 'cmdBuf',
            'required' => true,
            'type' => '\DATA'
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
        $this->values[self::CMDID] = null;
        $this->values[self::CMDBUF] = null;
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
     * Sets value of 'cmdid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCmdid($value)
    {
        return $this->set(self::CMDID, $value);
    }

    /**
     * Returns value of 'cmdid' property
     *
     * @return integer
     */
    public function getCmdid()
    {
        $value = $this->get(self::CMDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cmdid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdid()
    {
        return $this->get(self::CMDID) !== null;
    }

    /**
     * Sets value of 'cmdBuf' property
     *
     * @param \DATA $value Property value
     *
     * @return null
     */
    public function setCmdBuf(\DATA $value=null)
    {
        return $this->set(self::CMDBUF, $value);
    }

    /**
     * Returns value of 'cmdBuf' property
     *
     * @return \DATA
     */
    public function getCmdBuf()
    {
        return $this->get(self::CMDBUF);
    }

    /**
     * Returns true if 'cmdBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdBuf()
    {
        return $this->get(self::CMDBUF) !== null;
    }
}
}