<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AutoAuthKey message
 */
class AutoAuthKey extends \ProtobufMessage
{
    /* Field index constants */
    const ENCRYPTKEY = 1;
    const KEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ENCRYPTKEY => array(
            'name' => 'encryptKey',
            'required' => true,
            'type' => '\AesKey'
        ),
        self::KEY => array(
            'name' => 'key',
            'required' => true,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::ENCRYPTKEY] = null;
        $this->values[self::KEY] = null;
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
     * Sets value of 'encryptKey' property
     *
     * @param \AesKey $value Property value
     *
     * @return null
     */
    public function setEncryptKey(\AesKey $value=null)
    {
        return $this->set(self::ENCRYPTKEY, $value);
    }

    /**
     * Returns value of 'encryptKey' property
     *
     * @return \AesKey
     */
    public function getEncryptKey()
    {
        return $this->get(self::ENCRYPTKEY);
    }

    /**
     * Returns true if 'encryptKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncryptKey()
    {
        return $this->get(self::ENCRYPTKEY) !== null;
    }

    /**
     * Sets value of 'key' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setKey(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return \SKBuiltinString_
     */
    public function getKey()
    {
        return $this->get(self::KEY);
    }

    /**
     * Returns true if 'key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey()
    {
        return $this->get(self::KEY) !== null;
    }
}
}