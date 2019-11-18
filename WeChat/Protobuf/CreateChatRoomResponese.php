<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CreateChatRoomResponese message
 */
class CreateChatRoomResponese extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const TOPIC = 2;
    const PYINITIAL = 3;
    const QUANPIN = 4;
    const MEMBERCOUNT = 5;
    const MEMBERLIST = 6;
    const CHATROOMNAME = 7;
    const IMGBUF = 8;
    const BIGHEADIMGURL = 9;
    const SMALLHEADIMGURL = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::TOPIC => array(
            'name' => 'topic',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::PYINITIAL => array(
            'name' => 'pYInitial',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::QUANPIN => array(
            'name' => 'quanPin',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::MEMBERCOUNT => array(
            'default' => 0,
            'name' => 'memberCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEMBERLIST => array(
            'name' => 'memberList',
            'repeated' => true,
            'type' => '\MemberResp'
        ),
        self::CHATROOMNAME => array(
            'name' => 'chatRoomName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::IMGBUF => array(
            'name' => 'imgBuf',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::BIGHEADIMGURL => array(
            'name' => 'bigHeadImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SMALLHEADIMGURL => array(
            'name' => 'smallHeadImgUrl',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::TOPIC] = null;
        $this->values[self::PYINITIAL] = null;
        $this->values[self::QUANPIN] = null;
        $this->values[self::MEMBERCOUNT] = self::$fields[self::MEMBERCOUNT]['default'];
        $this->values[self::MEMBERLIST] = array();
        $this->values[self::CHATROOMNAME] = null;
        $this->values[self::IMGBUF] = null;
        $this->values[self::BIGHEADIMGURL] = null;
        $this->values[self::SMALLHEADIMGURL] = null;
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
     * Sets value of 'pYInitial' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setPYInitial(\SKBuiltinString $value=null)
    {
        return $this->set(self::PYINITIAL, $value);
    }

    /**
     * Returns value of 'pYInitial' property
     *
     * @return \SKBuiltinString
     */
    public function getPYInitial()
    {
        return $this->get(self::PYINITIAL);
    }

    /**
     * Returns true if 'pYInitial' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPYInitial()
    {
        return $this->get(self::PYINITIAL) !== null;
    }

    /**
     * Sets value of 'quanPin' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setQuanPin(\SKBuiltinString $value=null)
    {
        return $this->set(self::QUANPIN, $value);
    }

    /**
     * Returns value of 'quanPin' property
     *
     * @return \SKBuiltinString
     */
    public function getQuanPin()
    {
        return $this->get(self::QUANPIN);
    }

    /**
     * Returns true if 'quanPin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQuanPin()
    {
        return $this->get(self::QUANPIN) !== null;
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

    /**
     * Sets value of 'chatRoomName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setChatRoomName(\SKBuiltinString $value=null)
    {
        return $this->set(self::CHATROOMNAME, $value);
    }

    /**
     * Returns value of 'chatRoomName' property
     *
     * @return \SKBuiltinString
     */
    public function getChatRoomName()
    {
        return $this->get(self::CHATROOMNAME);
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

    /**
     * Sets value of 'imgBuf' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setImgBuf(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::IMGBUF, $value);
    }

    /**
     * Returns value of 'imgBuf' property
     *
     * @return \SKBuiltinString_
     */
    public function getImgBuf()
    {
        return $this->get(self::IMGBUF);
    }

    /**
     * Returns true if 'imgBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgBuf()
    {
        return $this->get(self::IMGBUF) !== null;
    }

    /**
     * Sets value of 'bigHeadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBigHeadImgUrl($value)
    {
        return $this->set(self::BIGHEADIMGURL, $value);
    }

    /**
     * Returns value of 'bigHeadImgUrl' property
     *
     * @return string
     */
    public function getBigHeadImgUrl()
    {
        $value = $this->get(self::BIGHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bigHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigHeadImgUrl()
    {
        return $this->get(self::BIGHEADIMGURL) !== null;
    }

    /**
     * Sets value of 'smallHeadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSmallHeadImgUrl($value)
    {
        return $this->set(self::SMALLHEADIMGURL, $value);
    }

    /**
     * Returns value of 'smallHeadImgUrl' property
     *
     * @return string
     */
    public function getSmallHeadImgUrl()
    {
        $value = $this->get(self::SMALLHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'smallHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmallHeadImgUrl()
    {
        return $this->get(self::SMALLHEADIMGURL) !== null;
    }
}
}