<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AccountStorage message
 */
class AccountStorage extends \ProtobufMessage
{
    /* Field index constants */
    const KEY = 1;
    const LOCAL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEY => array(
            'name' => 'Key',
            'required' => true,
            'type' => '\AesKey'
        ),
        self::LOCAL => array(
            'name' => 'local',
            'required' => true,
            'type' => '\LocalInfo'
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
        $this->values[self::KEY] = null;
        $this->values[self::LOCAL] = null;
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
     * Sets value of 'Key' property
     *
     * @param \AesKey $value Property value
     *
     * @return null
     */
    public function setKey(\AesKey $value=null)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'Key' property
     *
     * @return \AesKey
     */
    public function getKey()
    {
        return $this->get(self::KEY);
    }

    /**
     * Returns true if 'Key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey()
    {
        return $this->get(self::KEY) !== null;
    }

    /**
     * Sets value of 'local' property
     *
     * @param \LocalInfo $value Property value
     *
     * @return null
     */
    public function setLocal(\LocalInfo $value=null)
    {
        return $this->set(self::LOCAL, $value);
    }

    /**
     * Returns value of 'local' property
     *
     * @return \LocalInfo
     */
    public function getLocal()
    {
        return $this->get(self::LOCAL);
    }

    /**
     * Returns true if 'local' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLocal()
    {
        return $this->get(self::LOCAL) !== null;
    }
}
}