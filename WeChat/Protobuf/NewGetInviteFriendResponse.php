<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * NewGetInviteFriendResponse message
 */
class NewGetInviteFriendResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const FRIENDCOUNT = 2;
    const FRIENDLIST = 3;
    const GROUPCOUNT = 4;
    const GROUPLIST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::FRIENDCOUNT => array(
            'name' => 'friendCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDLIST => array(
            'name' => 'friendList',
            'repeated' => true,
            'type' => '\NewInviteFriend'
        ),
        self::GROUPCOUNT => array(
            'name' => 'groupCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPLIST => array(
            'name' => 'groupList',
            'repeated' => true,
            'type' => '\FriendGroup'
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
        $this->values[self::FRIENDCOUNT] = null;
        $this->values[self::FRIENDLIST] = array();
        $this->values[self::GROUPCOUNT] = null;
        $this->values[self::GROUPLIST] = array();
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
     * Sets value of 'friendCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendCount($value)
    {
        return $this->set(self::FRIENDCOUNT, $value);
    }

    /**
     * Returns value of 'friendCount' property
     *
     * @return integer
     */
    public function getFriendCount()
    {
        $value = $this->get(self::FRIENDCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendCount()
    {
        return $this->get(self::FRIENDCOUNT) !== null;
    }

    /**
     * Appends value to 'friendList' list
     *
     * @param \NewInviteFriend $value Value to append
     *
     * @return null
     */
    public function appendFriendList(\NewInviteFriend $value)
    {
        return $this->append(self::FRIENDLIST, $value);
    }

    /**
     * Clears 'friendList' list
     *
     * @return null
     */
    public function clearFriendList()
    {
        return $this->clear(self::FRIENDLIST);
    }

    /**
     * Returns 'friendList' list
     *
     * @return \NewInviteFriend[]
     */
    public function getFriendList()
    {
        return $this->get(self::FRIENDLIST);
    }

    /**
     * Returns true if 'friendList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendList()
    {
        return count($this->get(self::FRIENDLIST)) !== 0;
    }

    /**
     * Returns 'friendList' iterator
     *
     * @return \ArrayIterator
     */
    public function getFriendListIterator()
    {
        return new \ArrayIterator($this->get(self::FRIENDLIST));
    }

    /**
     * Returns element from 'friendList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \NewInviteFriend
     */
    public function getFriendListAt($offset)
    {
        return $this->get(self::FRIENDLIST, $offset);
    }

    /**
     * Returns count of 'friendList' list
     *
     * @return int
     */
    public function getFriendListCount()
    {
        return $this->count(self::FRIENDLIST);
    }

    /**
     * Sets value of 'groupCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupCount($value)
    {
        return $this->set(self::GROUPCOUNT, $value);
    }

    /**
     * Returns value of 'groupCount' property
     *
     * @return integer
     */
    public function getGroupCount()
    {
        $value = $this->get(self::GROUPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupCount()
    {
        return $this->get(self::GROUPCOUNT) !== null;
    }

    /**
     * Appends value to 'groupList' list
     *
     * @param \FriendGroup $value Value to append
     *
     * @return null
     */
    public function appendGroupList(\FriendGroup $value)
    {
        return $this->append(self::GROUPLIST, $value);
    }

    /**
     * Clears 'groupList' list
     *
     * @return null
     */
    public function clearGroupList()
    {
        return $this->clear(self::GROUPLIST);
    }

    /**
     * Returns 'groupList' list
     *
     * @return \FriendGroup[]
     */
    public function getGroupList()
    {
        return $this->get(self::GROUPLIST);
    }

    /**
     * Returns true if 'groupList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupList()
    {
        return count($this->get(self::GROUPLIST)) !== 0;
    }

    /**
     * Returns 'groupList' iterator
     *
     * @return \ArrayIterator
     */
    public function getGroupListIterator()
    {
        return new \ArrayIterator($this->get(self::GROUPLIST));
    }

    /**
     * Returns element from 'groupList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \FriendGroup
     */
    public function getGroupListAt($offset)
    {
        return $this->get(self::GROUPLIST, $offset);
    }

    /**
     * Returns count of 'groupList' list
     *
     * @return int
     */
    public function getGroupListCount()
    {
        return $this->count(self::GROUPLIST);
    }
}
}