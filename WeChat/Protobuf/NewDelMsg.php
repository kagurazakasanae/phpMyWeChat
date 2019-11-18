<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:29:05
 */

namespace {
/**
 * NewDelMsg message
 */
class NewDelMsg extends \ProtobufMessage
{
    /* Field index constants */
    const FROMUSERNAME = 1;
    const TOUSERNAME = 2;
    const MSGID = 3;
    const MSGTYPE = 4;
    const NEWMSGID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROMUSERNAME => array(
            'default' => '',
            'name' => 'FromUserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOUSERNAME => array(
            'default' => '',
            'name' => 'ToUserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGID => array(
            'name' => 'MsgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGTYPE => array(
            'name' => 'MsgType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWMSGID => array(
            'default' => 0,
            'name' => 'NewMsgId',
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
        $this->values[self::FROMUSERNAME] = self::$fields[self::FROMUSERNAME]['default'];
        $this->values[self::TOUSERNAME] = self::$fields[self::TOUSERNAME]['default'];
        $this->values[self::MSGID] = null;
        $this->values[self::MSGTYPE] = null;
        $this->values[self::NEWMSGID] = self::$fields[self::NEWMSGID]['default'];
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
     * Sets value of 'FromUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromUserName($value)
    {
        return $this->set(self::FROMUSERNAME, $value);
    }

    /**
     * Returns value of 'FromUserName' property
     *
     * @return string
     */
    public function getFromUserName()
    {
        $value = $this->get(self::FROMUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'FromUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromUserName()
    {
        return $this->get(self::FROMUSERNAME) !== null;
    }

    /**
     * Sets value of 'ToUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToUserName($value)
    {
        return $this->set(self::TOUSERNAME, $value);
    }

    /**
     * Returns value of 'ToUserName' property
     *
     * @return string
     */
    public function getToUserName()
    {
        $value = $this->get(self::TOUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ToUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToUserName()
    {
        return $this->get(self::TOUSERNAME) !== null;
    }

    /**
     * Sets value of 'MsgId' property
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
     * Returns value of 'MsgId' property
     *
     * @return integer
     */
    public function getMsgId()
    {
        $value = $this->get(self::MSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'MsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgId()
    {
        return $this->get(self::MSGID) !== null;
    }

    /**
     * Sets value of 'MsgType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgType($value)
    {
        return $this->set(self::MSGTYPE, $value);
    }

    /**
     * Returns value of 'MsgType' property
     *
     * @return integer
     */
    public function getMsgType()
    {
        $value = $this->get(self::MSGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'MsgType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgType()
    {
        return $this->get(self::MSGTYPE) !== null;
    }

    /**
     * Sets value of 'NewMsgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewMsgId($value)
    {
        return $this->set(self::NEWMSGID, $value);
    }

    /**
     * Returns value of 'NewMsgId' property
     *
     * @return integer
     */
    public function getNewMsgId()
    {
        $value = $this->get(self::NEWMSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'NewMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewMsgId()
    {
        return $this->get(self::NEWMSGID) !== null;
    }
}
}