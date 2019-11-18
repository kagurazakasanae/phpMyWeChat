<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DelChatRoomMemberResponse message
 */
class DelChatRoomMemberResponse extends \ProtobufMessage
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
            'required' => true,
            'type' => '\DelMemberResp'
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
        $this->values[self::MEMBERLIST] = null;
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
     * Sets value of 'memberList' property
     *
     * @param \DelMemberResp $value Property value
     *
     * @return null
     */
    public function setMemberList(\DelMemberResp $value=null)
    {
        return $this->set(self::MEMBERLIST, $value);
    }

    /**
     * Returns value of 'memberList' property
     *
     * @return \DelMemberResp
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
        return $this->get(self::MEMBERLIST) !== null;
    }
}
}