<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetChatroomMemberDetailRequest message
 */
class GetChatroomMemberDetailRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CHATROOMUSERNAME = 2;
    const CLIENTVERSION = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::CHATROOMUSERNAME => array(
            'name' => 'chatroomUserName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTVERSION => array(
            'name' => 'clientVersion',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::CHATROOMUSERNAME] = null;
        $this->values[self::CLIENTVERSION] = null;
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
     * Sets value of 'chatroomUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatroomUserName($value)
    {
        return $this->set(self::CHATROOMUSERNAME, $value);
    }

    /**
     * Returns value of 'chatroomUserName' property
     *
     * @return string
     */
    public function getChatroomUserName()
    {
        $value = $this->get(self::CHATROOMUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'chatroomUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomUserName()
    {
        return $this->get(self::CHATROOMUSERNAME) !== null;
    }

    /**
     * Sets value of 'clientVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientVersion($value)
    {
        return $this->set(self::CLIENTVERSION, $value);
    }

    /**
     * Returns value of 'clientVersion' property
     *
     * @return integer
     */
    public function getClientVersion()
    {
        $value = $this->get(self::CLIENTVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clientVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientVersion()
    {
        return $this->get(self::CLIENTVERSION) !== null;
    }
}
}