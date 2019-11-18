<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ExtDeviceLoginConfirmOKRequest message
 */
class ExtDeviceLoginConfirmOKRequest extends \ProtobufMessage
{
    /* Field index constants */
    const LOGINURL = 1;
    const SESSIONLIST = 2;
    const UNREADCHATCONTACELIST = 3;
    const SYNCMSG = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LOGINURL => array(
            'name' => 'loginUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SESSIONLIST => array(
            'name' => 'sessionList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UNREADCHATCONTACELIST => array(
            'name' => 'unReadChatContaceList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SYNCMSG => array(
            'name' => 'syncMsg',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
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
        $this->values[self::LOGINURL] = null;
        $this->values[self::SESSIONLIST] = null;
        $this->values[self::UNREADCHATCONTACELIST] = null;
        $this->values[self::SYNCMSG] = null;
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
     * Sets value of 'loginUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoginUrl($value)
    {
        return $this->set(self::LOGINURL, $value);
    }

    /**
     * Returns value of 'loginUrl' property
     *
     * @return string
     */
    public function getLoginUrl()
    {
        $value = $this->get(self::LOGINURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loginUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoginUrl()
    {
        return $this->get(self::LOGINURL) !== null;
    }

    /**
     * Sets value of 'sessionList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSessionList($value)
    {
        return $this->set(self::SESSIONLIST, $value);
    }

    /**
     * Returns value of 'sessionList' property
     *
     * @return string
     */
    public function getSessionList()
    {
        $value = $this->get(self::SESSIONLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sessionList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSessionList()
    {
        return $this->get(self::SESSIONLIST) !== null;
    }

    /**
     * Sets value of 'unReadChatContaceList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUnReadChatContaceList($value)
    {
        return $this->set(self::UNREADCHATCONTACELIST, $value);
    }

    /**
     * Returns value of 'unReadChatContaceList' property
     *
     * @return string
     */
    public function getUnReadChatContaceList()
    {
        $value = $this->get(self::UNREADCHATCONTACELIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'unReadChatContaceList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnReadChatContaceList()
    {
        return $this->get(self::UNREADCHATCONTACELIST) !== null;
    }

    /**
     * Sets value of 'syncMsg' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setSyncMsg($value)
    {
        return $this->set(self::SYNCMSG, $value);
    }

    /**
     * Returns value of 'syncMsg' property
     *
     * @return boolean
     */
    public function getSyncMsg()
    {
        $value = $this->get(self::SYNCMSG);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'syncMsg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSyncMsg()
    {
        return $this->get(self::SYNCMSG) !== null;
    }
}
}