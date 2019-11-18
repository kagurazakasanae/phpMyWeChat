<?php
/**
 * Auto generated from x.proto at 2019-11-13 06:13:58
 */

namespace {
/**
 * InitRequest message
 */
class InitRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const USERNAME = 2;
    const SYNCKEY = 3;
    const BUFFER = 4;
    const LANGUAGE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'BaseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::USERNAME => array(
            'name' => 'UserName',
            'required' => true,
            'type' => '\SKBuiltinString_t'
        ),
        self::SYNCKEY => array(
            'name' => 'SyncKey',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUFFER => array(
            'name' => 'Buffer',
            'required' => true,
            'type' => '\SKBuiltinString_t'
        ),
        self::LANGUAGE => array(
            'default' => '',
            'name' => 'Language',
            'required' => false,
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::SYNCKEY] = null;
        $this->values[self::BUFFER] = null;
        $this->values[self::LANGUAGE] = self::$fields[self::LANGUAGE]['default'];
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
     * Sets value of 'BaseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'BaseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'BaseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'UserName' property
     *
     * @param \SKBuiltinString_t $value Property value
     *
     * @return null
     */
    public function setUserName(\SKBuiltinString_t $value=null)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'UserName' property
     *
     * @return \SKBuiltinString_t
     */
    public function getUserName()
    {
        return $this->get(self::USERNAME);
    }

    /**
     * Returns true if 'UserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'SyncKey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSyncKey($value)
    {
        return $this->set(self::SYNCKEY, $value);
    }

    /**
     * Returns value of 'SyncKey' property
     *
     * @return integer
     */
    public function getSyncKey()
    {
        $value = $this->get(self::SYNCKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'SyncKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSyncKey()
    {
        return $this->get(self::SYNCKEY) !== null;
    }

    /**
     * Sets value of 'Buffer' property
     *
     * @param \SKBuiltinString_t $value Property value
     *
     * @return null
     */
    public function setBuffer(\SKBuiltinString_t $value=null)
    {
        return $this->set(self::BUFFER, $value);
    }

    /**
     * Returns value of 'Buffer' property
     *
     * @return \SKBuiltinString_t
     */
    public function getBuffer()
    {
        return $this->get(self::BUFFER);
    }

    /**
     * Returns true if 'Buffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuffer()
    {
        return $this->get(self::BUFFER) !== null;
    }

    /**
     * Sets value of 'Language' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLanguage($value)
    {
        return $this->set(self::LANGUAGE, $value);
    }

    /**
     * Returns value of 'Language' property
     *
     * @return string
     */
    public function getLanguage()
    {
        $value = $this->get(self::LANGUAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Language' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLanguage()
    {
        return $this->get(self::LANGUAGE) !== null;
    }
}
}