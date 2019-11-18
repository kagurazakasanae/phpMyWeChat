<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetMFriendResponse message
 */
class GetMFriendResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const COUNT = 2;
    const FRIENDLIST = 3;
    const MD5 = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRIENDLIST => array(
            'name' => 'friendList',
            'required' => true,
            'type' => '\Mobile'
        ),
        self::MD5 => array(
            'name' => 'md5',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::FRIENDLIST] = null;
        $this->values[self::MD5] = null;
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
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCount()
    {
        return $this->get(self::COUNT) !== null;
    }

    /**
     * Sets value of 'friendList' property
     *
     * @param \Mobile $value Property value
     *
     * @return null
     */
    public function setFriendList(\Mobile $value=null)
    {
        return $this->set(self::FRIENDLIST, $value);
    }

    /**
     * Returns value of 'friendList' property
     *
     * @return \Mobile
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
        return $this->get(self::FRIENDLIST) !== null;
    }

    /**
     * Sets value of 'md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMd5($value)
    {
        return $this->set(self::MD5, $value);
    }

    /**
     * Returns value of 'md5' property
     *
     * @return string
     */
    public function getMd5()
    {
        $value = $this->get(self::MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'md5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMd5()
    {
        return $this->get(self::MD5) !== null;
    }
}
}