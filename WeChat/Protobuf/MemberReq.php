<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MemberReq message
 */
class MemberReq extends \ProtobufMessage
{
    /* Field index constants */
    const MEMBER = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEMBER => array(
            'name' => 'member',
            'required' => false,
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
        $this->values[self::MEMBER] = null;
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
     * Sets value of 'member' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setMember(\SKBuiltinString $value=null)
    {
        return $this->set(self::MEMBER, $value);
    }

    /**
     * Returns value of 'member' property
     *
     * @return \SKBuiltinString
     */
    public function getMember()
    {
        return $this->get(self::MEMBER);
    }

    /**
     * Returns true if 'member' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMember()
    {
        return $this->get(self::MEMBER) !== null;
    }
}
}