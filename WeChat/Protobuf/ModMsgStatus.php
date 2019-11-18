<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ModMsgStatus message
 */
class ModMsgStatus extends \ProtobufMessage
{
    /* Field index constants */
    const MSGID = 1;
    const FROMUSERNAME = 2;
    const TOUSERNAME = 3;
    const STATUS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MSGID => array(
            'default' => 0,
            'name' => 'msgId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FROMUSERNAME => array(
            'name' => 'fromUserName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::TOUSERNAME => array(
            'name' => 'toUserName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::STATUS => array(
            'default' => 0,
            'name' => 'status',
            'required' => false,
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
        $this->values[self::MSGID] = self::$fields[self::MSGID]['default'];
        $this->values[self::FROMUSERNAME] = null;
        $this->values[self::TOUSERNAME] = null;
        $this->values[self::STATUS] = self::$fields[self::STATUS]['default'];
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
     * Sets value of 'msgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgId($value)
    {
        return $this->set(self::MSGID, $value);
    }

    /**
     * Returns value of 'msgId' property
     *
     * @return integer
     */
    public function getMsgId()
    {
        $value = $this->get(self::MSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgId()
    {
        return $this->get(self::MSGID) !== null;
    }

    /**
     * Sets value of 'fromUserName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setFromUserName(\SKBuiltinString $value=null)
    {
        return $this->set(self::FROMUSERNAME, $value);
    }

    /**
     * Returns value of 'fromUserName' property
     *
     * @return \SKBuiltinString
     */
    public function getFromUserName()
    {
        return $this->get(self::FROMUSERNAME);
    }

    /**
     * Returns true if 'fromUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromUserName()
    {
        return $this->get(self::FROMUSERNAME) !== null;
    }

    /**
     * Sets value of 'toUserName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setToUserName(\SKBuiltinString $value=null)
    {
        return $this->set(self::TOUSERNAME, $value);
    }

    /**
     * Returns value of 'toUserName' property
     *
     * @return \SKBuiltinString
     */
    public function getToUserName()
    {
        return $this->get(self::TOUSERNAME);
    }

    /**
     * Returns true if 'toUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToUserName()
    {
        return $this->get(self::TOUSERNAME) !== null;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }
}
}