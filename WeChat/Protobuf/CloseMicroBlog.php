<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CloseMicroBlog message
 */
class CloseMicroBlog extends \ProtobufMessage
{
    /* Field index constants */
    const MICROBLOGUSERNAME = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MICROBLOGUSERNAME => array(
            'name' => 'microBlogUserName',
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
        $this->values[self::MICROBLOGUSERNAME] = null;
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
     * Sets value of 'microBlogUserName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setMicroBlogUserName(\SKBuiltinString $value=null)
    {
        return $this->set(self::MICROBLOGUSERNAME, $value);
    }

    /**
     * Returns value of 'microBlogUserName' property
     *
     * @return \SKBuiltinString
     */
    public function getMicroBlogUserName()
    {
        return $this->get(self::MICROBLOGUSERNAME);
    }

    /**
     * Returns true if 'microBlogUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMicroBlogUserName()
    {
        return $this->get(self::MICROBLOGUSERNAME) !== null;
    }
}
}