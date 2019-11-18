<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DelContactMsg message
 */
class DelContactMsg extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const MAXMSGID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::MAXMSGID => array(
            'default' => 0,
            'name' => 'maxMsgId',
            'required' => false,
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
        $this->values[self::USERNAME] = null;
        $this->values[self::MAXMSGID] = self::$fields[self::MAXMSGID]['default'];
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
     * Sets value of 'maxMsgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxMsgId($value)
    {
        return $this->set(self::MAXMSGID, $value);
    }

    /**
     * Returns value of 'maxMsgId' property
     *
     * @return integer
     */
    public function getMaxMsgId()
    {
        $value = $this->get(self::MAXMSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxMsgId()
    {
        return $this->get(self::MAXMSGID) !== null;
    }
}
}