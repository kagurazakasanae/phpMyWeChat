<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DelChatRoomMemberRequest message
 */
class DelChatRoomMemberRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const MEMBERCOUNT = 2;
    const MEMBERLIST = 3;
    const CHATROOMNAME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::MEMBERCOUNT => array(
            'name' => 'memberCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEMBERLIST => array(
            'name' => 'memberList',
            'repeated' => true,
            'type' => '\DelMemberReq'
        ),
        self::CHATROOMNAME => array(
            'name' => 'chatRoomName',
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
        $this->values[self::MEMBERCOUNT] = null;
        $this->values[self::MEMBERLIST] = array();
        $this->values[self::CHATROOMNAME] = null;
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
     * Sets value of 'memberCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMemberCount($value)
    {
        return $this->set(self::MEMBERCOUNT, $value);
    }

    /**
     * Returns value of 'memberCount' property
     *
     * @return integer
     */
    public function getMemberCount()
    {
        $value = $this->get(self::MEMBERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'memberCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberCount()
    {
        return $this->get(self::MEMBERCOUNT) !== null;
    }

    /**
     * Appends value to 'memberList' list
     *
     * @param \DelMemberReq $value Value to append
     *
     * @return null
     */
    public function appendMemberList(\DelMemberReq $value)
    {
        return $this->append(self::MEMBERLIST, $value);
    }

    /**
     * Clears 'memberList' list
     *
     * @return null
     */
    public function clearMemberList()
    {
        return $this->clear(self::MEMBERLIST);
    }

    /**
     * Returns 'memberList' list
     *
     * @return \DelMemberReq[]
     */
    public function getMemberList()
    {
        return $this->get(self::MEMBERLIST);
    }

    /**
     * Returns true if 'memberList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberList()
    {
        return count($this->get(self::MEMBERLIST)) !== 0;
    }

    /**
     * Returns 'memberList' iterator
     *
     * @return \ArrayIterator
     */
    public function getMemberListIterator()
    {
        return new \ArrayIterator($this->get(self::MEMBERLIST));
    }

    /**
     * Returns element from 'memberList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \DelMemberReq
     */
    public function getMemberListAt($offset)
    {
        return $this->get(self::MEMBERLIST, $offset);
    }

    /**
     * Returns count of 'memberList' list
     *
     * @return int
     */
    public function getMemberListCount()
    {
        return $this->count(self::MEMBERLIST);
    }

    /**
     * Sets value of 'chatRoomName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatRoomName($value)
    {
        return $this->set(self::CHATROOMNAME, $value);
    }

    /**
     * Returns value of 'chatRoomName' property
     *
     * @return string
     */
    public function getChatRoomName()
    {
        $value = $this->get(self::CHATROOMNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'chatRoomName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomName()
    {
        return $this->get(self::CHATROOMNAME) !== null;
    }
}
}