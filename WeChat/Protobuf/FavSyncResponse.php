<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * FavSyncResponse message
 */
class FavSyncResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RET = 1;
    const CMDLIST = 2;
    const KEY_BUF = 3;
    const CONTINUEFLAG = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RET => array(
            'name' => 'ret',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDLIST => array(
            'name' => 'cmdList',
            'required' => true,
            'type' => '\CmdList'
        ),
        self::KEY_BUF => array(
            'name' => 'key_buf',
            'required' => true,
            'type' => '\syncMsgKey'
        ),
        self::CONTINUEFLAG => array(
            'name' => 'continueFlag',
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
        $this->values[self::RET] = null;
        $this->values[self::CMDLIST] = null;
        $this->values[self::KEY_BUF] = null;
        $this->values[self::CONTINUEFLAG] = null;
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
     * Sets value of 'ret' property
     *
     * @param integer $value Property value
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
     * @return integer
     */
    public function getRet()
    {
        $value = $this->get(self::RET);
        return $value === null ? (integer)$value : $value;
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
     * Sets value of 'cmdList' property
     *
     * @param \CmdList $value Property value
     *
     * @return null
     */
    public function setCmdList(\CmdList $value=null)
    {
        return $this->set(self::CMDLIST, $value);
    }

    /**
     * Returns value of 'cmdList' property
     *
     * @return \CmdList
     */
    public function getCmdList()
    {
        return $this->get(self::CMDLIST);
    }

    /**
     * Returns true if 'cmdList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdList()
    {
        return $this->get(self::CMDLIST) !== null;
    }

    /**
     * Sets value of 'key_buf' property
     *
     * @param \syncMsgKey $value Property value
     *
     * @return null
     */
    public function setKeyBuf(\syncMsgKey $value=null)
    {
        return $this->set(self::KEY_BUF, $value);
    }

    /**
     * Returns value of 'key_buf' property
     *
     * @return \syncMsgKey
     */
    public function getKeyBuf()
    {
        return $this->get(self::KEY_BUF);
    }

    /**
     * Returns true if 'key_buf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKeyBuf()
    {
        return $this->get(self::KEY_BUF) !== null;
    }

    /**
     * Sets value of 'continueFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContinueFlag($value)
    {
        return $this->set(self::CONTINUEFLAG, $value);
    }

    /**
     * Returns value of 'continueFlag' property
     *
     * @return integer
     */
    public function getContinueFlag()
    {
        $value = $this->get(self::CONTINUEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'continueFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContinueFlag()
    {
        return $this->get(self::CONTINUEFLAG) !== null;
    }
}
}