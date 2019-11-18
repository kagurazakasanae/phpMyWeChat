<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * LbsResponse message
 */
class LbsResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const CONTACTCOUNT = 2;
    const CONTACTLIST = 3;
    const STATE = 4;
    const FLUSHTIME = 5;
    const ROOMMEMBERCOUNT = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::CONTACTCOUNT => array(
            'name' => 'contactCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTACTLIST => array(
            'name' => 'contactList',
            'repeated' => true,
            'type' => '\LBsContactInfo'
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FLUSHTIME => array(
            'name' => 'flushTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMMEMBERCOUNT => array(
            'name' => 'roomMemberCount',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::CONTACTCOUNT] = null;
        $this->values[self::CONTACTLIST] = array();
        $this->values[self::STATE] = null;
        $this->values[self::FLUSHTIME] = null;
        $this->values[self::ROOMMEMBERCOUNT] = null;
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
     * Sets value of 'contactCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContactCount($value)
    {
        return $this->set(self::CONTACTCOUNT, $value);
    }

    /**
     * Returns value of 'contactCount' property
     *
     * @return integer
     */
    public function getContactCount()
    {
        $value = $this->get(self::CONTACTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'contactCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactCount()
    {
        return $this->get(self::CONTACTCOUNT) !== null;
    }

    /**
     * Appends value to 'contactList' list
     *
     * @param \LBsContactInfo $value Value to append
     *
     * @return null
     */
    public function appendContactList(\LBsContactInfo $value)
    {
        return $this->append(self::CONTACTLIST, $value);
    }

    /**
     * Clears 'contactList' list
     *
     * @return null
     */
    public function clearContactList()
    {
        return $this->clear(self::CONTACTLIST);
    }

    /**
     * Returns 'contactList' list
     *
     * @return \LBsContactInfo[]
     */
    public function getContactList()
    {
        return $this->get(self::CONTACTLIST);
    }

    /**
     * Returns true if 'contactList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactList()
    {
        return count($this->get(self::CONTACTLIST)) !== 0;
    }

    /**
     * Returns 'contactList' iterator
     *
     * @return \ArrayIterator
     */
    public function getContactListIterator()
    {
        return new \ArrayIterator($this->get(self::CONTACTLIST));
    }

    /**
     * Returns element from 'contactList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \LBsContactInfo
     */
    public function getContactListAt($offset)
    {
        return $this->get(self::CONTACTLIST, $offset);
    }

    /**
     * Returns count of 'contactList' list
     *
     * @return int
     */
    public function getContactListCount()
    {
        return $this->count(self::CONTACTLIST);
    }

    /**
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'flushTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlushTime($value)
    {
        return $this->set(self::FLUSHTIME, $value);
    }

    /**
     * Returns value of 'flushTime' property
     *
     * @return integer
     */
    public function getFlushTime()
    {
        $value = $this->get(self::FLUSHTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'flushTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlushTime()
    {
        return $this->get(self::FLUSHTIME) !== null;
    }

    /**
     * Sets value of 'roomMemberCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomMemberCount($value)
    {
        return $this->set(self::ROOMMEMBERCOUNT, $value);
    }

    /**
     * Returns value of 'roomMemberCount' property
     *
     * @return integer
     */
    public function getRoomMemberCount()
    {
        $value = $this->get(self::ROOMMEMBERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomMemberCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomMemberCount()
    {
        return $this->get(self::ROOMMEMBERCOUNT) !== null;
    }
}
}