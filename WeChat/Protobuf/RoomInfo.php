<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * RoomInfo message
 */
class RoomInfo extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const NICKNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'userName',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => true,
            'type' => '\SKBuiltinString'
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
        $this->values[self::USERNAME] = null;
        $this->values[self::NICKNAME] = null;
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
     * Sets value of 'userName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setUserName(\SKBuiltinString $value=null)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return \SKBuiltinString
     */
    public function getUserName()
    {
        return $this->get(self::USERNAME);
    }

    /**
     * Returns true if 'userName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'nickName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setNickName(\SKBuiltinString $value=null)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickName' property
     *
     * @return \SKBuiltinString
     */
    public function getNickName()
    {
        return $this->get(self::NICKNAME);
    }

    /**
     * Returns true if 'nickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickName()
    {
        return $this->get(self::NICKNAME) !== null;
    }
}
}