<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsSyncResponse message
 */
class SnsSyncResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const CMDLIST = 2;
    const CONTINUEFLAG = 3;
    const KEYBUF = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::CMDLIST => array(
            'name' => 'cmdList',
            'required' => true,
            'type' => '\CmdList'
        ),
        self::CONTINUEFLAG => array(
            'name' => 'continueFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEYBUF => array(
            'name' => 'keyBuf',
            'required' => true,
            'type' => '\syncMsgKey'
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
        $this->values[self::CMDLIST] = null;
        $this->values[self::CONTINUEFLAG] = null;
        $this->values[self::KEYBUF] = null;
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

    /**
     * Sets value of 'keyBuf' property
     *
     * @param \syncMsgKey $value Property value
     *
     * @return null
     */
    public function setKeyBuf(\syncMsgKey $value=null)
    {
        return $this->set(self::KEYBUF, $value);
    }

    /**
     * Returns value of 'keyBuf' property
     *
     * @return \syncMsgKey
     */
    public function getKeyBuf()
    {
        return $this->get(self::KEYBUF);
    }

    /**
     * Returns true if 'keyBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKeyBuf()
    {
        return $this->get(self::KEYBUF) !== null;
    }
}
}