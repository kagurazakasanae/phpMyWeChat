<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * DelMemberResp message
 */
class DelMemberResp extends \ProtobufMessage
{
    /* Field index constants */
    const MEMBERNAME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEMBERNAME => array(
            'name' => 'memberName',
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
        $this->values[self::MEMBERNAME] = null;
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
     * Sets value of 'memberName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setMemberName(\SKBuiltinString $value=null)
    {
        return $this->set(self::MEMBERNAME, $value);
    }

    /**
     * Returns value of 'memberName' property
     *
     * @return \SKBuiltinString
     */
    public function getMemberName()
    {
        return $this->get(self::MEMBERNAME);
    }

    /**
     * Returns true if 'memberName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberName()
    {
        return $this->get(self::MEMBERNAME) !== null;
    }
}
}