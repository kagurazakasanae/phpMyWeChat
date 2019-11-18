<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CreateChatRoomRequest message
 */
class CreateChatRoomRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const TOPIC = 2;
    const MEMBERCOUNT = 3;
    const MEMBERLIST = 4;
    const SCENE = 5;
    const EXTBUFFER = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::TOPIC => array(
            'name' => 'topic',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::MEMBERCOUNT => array(
            'name' => 'memberCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEMBERLIST => array(
            'name' => 'memberList',
            'repeated' => true,
            'type' => '\MemberReq'
        ),
        self::SCENE => array(
            'default' => 0,
            'name' => 'scene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXTBUFFER => array(
            'name' => 'extBuffer',
            'required' => false,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::TOPIC] = null;
        $this->values[self::MEMBERCOUNT] = null;
        $this->values[self::MEMBERLIST] = array();
        $this->values[self::SCENE] = self::$fields[self::SCENE]['default'];
        $this->values[self::EXTBUFFER] = null;
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
     * Sets value of 'topic' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setTopic(\SKBuiltinString $value=null)
    {
        return $this->set(self::TOPIC, $value);
    }

    /**
     * Returns value of 'topic' property
     *
     * @return \SKBuiltinString
     */
    public function getTopic()
    {
        return $this->get(self::TOPIC);
    }

    /**
     * Returns true if 'topic' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTopic()
    {
        return $this->get(self::TOPIC) !== null;
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
     * @param \MemberReq $value Value to append
     *
     * @return null
     */
    public function appendMemberList(\MemberReq $value)
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
     * @return \MemberReq[]
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
     * @return \MemberReq
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
     * Sets value of 'scene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScene($value)
    {
        return $this->set(self::SCENE, $value);
    }

    /**
     * Returns value of 'scene' property
     *
     * @return integer
     */
    public function getScene()
    {
        $value = $this->get(self::SCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScene()
    {
        return $this->get(self::SCENE) !== null;
    }

    /**
     * Sets value of 'extBuffer' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setExtBuffer(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::EXTBUFFER, $value);
    }

    /**
     * Returns value of 'extBuffer' property
     *
     * @return \SKBuiltinString_
     */
    public function getExtBuffer()
    {
        return $this->get(self::EXTBUFFER);
    }

    /**
     * Returns true if 'extBuffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtBuffer()
    {
        return $this->get(self::EXTBUFFER) !== null;
    }
}
}