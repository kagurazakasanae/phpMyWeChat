<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ModUserDomainEmail message
 */
class ModUserDomainEmail extends \ProtobufMessage
{
    /* Field index constants */
    const STATUS = 1;
    const EMAIL = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::STATUS => array(
            'default' => 0,
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EMAIL => array(
            'name' => 'email',
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
        $this->values[self::STATUS] = self::$fields[self::STATUS]['default'];
        $this->values[self::EMAIL] = null;
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
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }

    /**
     * Sets value of 'email' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setEmail(\SKBuiltinString $value=null)
    {
        return $this->set(self::EMAIL, $value);
    }

    /**
     * Returns value of 'email' property
     *
     * @return \SKBuiltinString
     */
    public function getEmail()
    {
        return $this->get(self::EMAIL);
    }

    /**
     * Returns true if 'email' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEmail()
    {
        return $this->get(self::EMAIL) !== null;
    }
}
}