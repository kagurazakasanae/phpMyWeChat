<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * TwitterInfo message
 */
class TwitterInfo extends \ProtobufMessage
{
    /* Field index constants */
    const OAUTHTOKEN = 1;
    const OAUTHTOKENSECRET = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::OAUTHTOKEN => array(
            'name' => 'oauthToken',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OAUTHTOKENSECRET => array(
            'name' => 'oauthTokenSecret',
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
        $this->values[self::OAUTHTOKEN] = null;
        $this->values[self::OAUTHTOKENSECRET] = null;
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
     * Sets value of 'oauthToken' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOauthToken($value)
    {
        return $this->set(self::OAUTHTOKEN, $value);
    }

    /**
     * Returns value of 'oauthToken' property
     *
     * @return string
     */
    public function getOauthToken()
    {
        $value = $this->get(self::OAUTHTOKEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'oauthToken' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOauthToken()
    {
        return $this->get(self::OAUTHTOKEN) !== null;
    }

    /**
     * Sets value of 'oauthTokenSecret' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOauthTokenSecret($value)
    {
        return $this->set(self::OAUTHTOKENSECRET, $value);
    }

    /**
     * Returns value of 'oauthTokenSecret' property
     *
     * @return string
     */
    public function getOauthTokenSecret()
    {
        $value = $this->get(self::OAUTHTOKENSECRET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'oauthTokenSecret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOauthTokenSecret()
    {
        return $this->get(self::OAUTHTOKENSECRET) !== null;
    }
}
}