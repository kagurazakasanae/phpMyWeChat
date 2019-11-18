<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * Ecdh message
 */
class Ecdh extends \ProtobufMessage
{
    /* Field index constants */
    const NID = 1;
    const ECDHKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NID => array(
            'name' => 'nid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ECDHKEY => array(
            'name' => 'ecdhkey',
            'required' => true,
            'type' => '\EcdhKey'
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
        $this->values[self::NID] = null;
        $this->values[self::ECDHKEY] = null;
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
     * Sets value of 'nid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNid($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nid' property
     *
     * @return integer
     */
    public function getNid()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNid()
    {
        return $this->get(self::NID) !== null;
    }

    /**
     * Sets value of 'ecdhkey' property
     *
     * @param \EcdhKey $value Property value
     *
     * @return null
     */
    public function setEcdhkey(\EcdhKey $value=null)
    {
        return $this->set(self::ECDHKEY, $value);
    }

    /**
     * Returns value of 'ecdhkey' property
     *
     * @return \EcdhKey
     */
    public function getEcdhkey()
    {
        return $this->get(self::ECDHKEY);
    }

    /**
     * Returns true if 'ecdhkey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEcdhkey()
    {
        return $this->get(self::ECDHKEY) !== null;
    }
}
}