<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AddChatRoomMemberResponse message
 */
class AddChatRoomMemberResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const MEMBERCOUNT = 2;
    const MEMBERLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::MEMBERCOUNT => array(
            'name' => 'memberCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEMBERLIST => array(
            'name' => 'memberList',
            'repeated' => true,
            'type' => '\MemberResp'
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
        $this->values[self::MEMBERCOUNT] = null;
        $this->values[self::MEMBERLIST] = array();
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
     * @param \MemberResp $value Value to append
     *
     * @return null
     */
    public function appendMemberList(\MemberResp $value)
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
     * @return \MemberResp[]
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
     * @return \MemberResp
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
}
}