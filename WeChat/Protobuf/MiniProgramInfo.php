<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MiniProgramInfo message
 */
class MiniProgramInfo extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const PAGEPATH = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'username',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PAGEPATH => array(
            'name' => 'pagePath',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::PAGEPATH] = null;
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
     * Sets value of 'username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return string
     */
    public function getUsername()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'username' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsername()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'pagePath' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPagePath($value)
    {
        return $this->set(self::PAGEPATH, $value);
    }

    /**
     * Returns value of 'pagePath' property
     *
     * @return string
     */
    public function getPagePath()
    {
        $value = $this->get(self::PAGEPATH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'pagePath' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPagePath()
    {
        return $this->get(self::PAGEPATH) !== null;
    }
}
}