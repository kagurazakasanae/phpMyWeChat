<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * StatusNotifyRequest message
 */
class StatusNotifyRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CODE = 2;
    const FROMUSERNAME_ = 3;
    const TOUSERNAME_ = 4;
    const CLIENTMSGID = 5;
    const UNREADCHATLISTCOUNT = 6;
    const UNREADCHATLIST = 7;
    const FUNCTION = 8;
    const UNREADFUNCTIONCOUNT = 9;
    const UNREADFUNCTION = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => false,
            'type' => '\BaseRequest'
        ),
        self::CODE => array(
            'name' => 'code',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FROMUSERNAME_ => array(
            'name' => 'fromUserName_',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOUSERNAME_ => array(
            'name' => 'toUserName_',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTMSGID => array(
            'name' => 'clientMsgId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNREADCHATLISTCOUNT => array(
            'default' => 0,
            'name' => 'unreadChatListCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UNREADCHATLIST => array(
            'name' => 'unreadChatList',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FUNCTION => array(
            'name' => 'function',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNREADFUNCTIONCOUNT => array(
            'default' => 0,
            'name' => 'unreadFunctionCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UNREADFUNCTION => array(
            'name' => 'unreadFunction',
            'required' => false,
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
        $this->values[self::CODE] = null;
        $this->values[self::FROMUSERNAME_] = null;
        $this->values[self::TOUSERNAME_] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::UNREADCHATLISTCOUNT] = self::$fields[self::UNREADCHATLISTCOUNT]['default'];
        $this->values[self::UNREADCHATLIST] = null;
        $this->values[self::FUNCTION] = null;
        $this->values[self::UNREADFUNCTIONCOUNT] = self::$fields[self::UNREADFUNCTIONCOUNT]['default'];
        $this->values[self::UNREADFUNCTION] = null;
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
     * Sets value of 'fromUserName_' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromUserName($value)
    {
        return $this->set(self::FROMUSERNAME_, $value);
    }

    /**
     * Returns value of 'fromUserName_' property
     *
     * @return string
     */
    public function getFromUserName()
    {
        $value = $this->get(self::FROMUSERNAME_);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fromUserName_' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromUserName()
    {
        return $this->get(self::FROMUSERNAME_) !== null;
    }

    /**
     * Sets value of 'toUserName_' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToUserName($value)
    {
        return $this->set(self::TOUSERNAME_, $value);
    }

    /**
     * Returns value of 'toUserName_' property
     *
     * @return string
     */
    public function getToUserName()
    {
        $value = $this->get(self::TOUSERNAME_);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'toUserName_' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToUserName()
    {
        return $this->get(self::TOUSERNAME_) !== null;
    }

    /**
     * Sets value of 'clientMsgId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientMsgId($value)
    {
        return $this->set(self::CLIENTMSGID, $value);
    }

    /**
     * Returns value of 'clientMsgId' property
     *
     * @return string
     */
    public function getClientMsgId()
    {
        $value = $this->get(self::CLIENTMSGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientMsgId()
    {
        return $this->get(self::CLIENTMSGID) !== null;
    }

    /**
     * Sets value of 'unreadChatListCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnreadChatListCount($value)
    {
        return $this->set(self::UNREADCHATLISTCOUNT, $value);
    }

    /**
     * Returns value of 'unreadChatListCount' property
     *
     * @return integer
     */
    public function getUnreadChatListCount()
    {
        $value = $this->get(self::UNREADCHATLISTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'unreadChatListCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnreadChatListCount()
    {
        return $this->get(self::UNREADCHATLISTCOUNT) !== null;
    }

    /**
     * Sets value of 'unreadChatList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUnreadChatList($value)
    {
        return $this->set(self::UNREADCHATLIST, $value);
    }

    /**
     * Returns value of 'unreadChatList' property
     *
     * @return string
     */
    public function getUnreadChatList()
    {
        $value = $this->get(self::UNREADCHATLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'unreadChatList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnreadChatList()
    {
        return $this->get(self::UNREADCHATLIST) !== null;
    }

    /**
     * Sets value of 'function' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFunction($value)
    {
        return $this->set(self::FUNCTION, $value);
    }

    /**
     * Returns value of 'function' property
     *
     * @return string
     */
    public function getFunction()
    {
        $value = $this->get(self::FUNCTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'function' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFunction()
    {
        return $this->get(self::FUNCTION) !== null;
    }

    /**
     * Sets value of 'unreadFunctionCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnreadFunctionCount($value)
    {
        return $this->set(self::UNREADFUNCTIONCOUNT, $value);
    }

    /**
     * Returns value of 'unreadFunctionCount' property
     *
     * @return integer
     */
    public function getUnreadFunctionCount()
    {
        $value = $this->get(self::UNREADFUNCTIONCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'unreadFunctionCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnreadFunctionCount()
    {
        return $this->get(self::UNREADFUNCTIONCOUNT) !== null;
    }

    /**
     * Sets value of 'unreadFunction' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUnreadFunction($value)
    {
        return $this->set(self::UNREADFUNCTION, $value);
    }

    /**
     * Returns value of 'unreadFunction' property
     *
     * @return string
     */
    public function getUnreadFunction()
    {
        $value = $this->get(self::UNREADFUNCTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'unreadFunction' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnreadFunction()
    {
        return $this->get(self::UNREADFUNCTION) !== null;
    }
}
}