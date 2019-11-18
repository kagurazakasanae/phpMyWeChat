<?php
/**
 * Auto generated from x.proto at 2019-11-12 22:04:30
 */

namespace {
/**
 * GetUserBasicRequest message
 */
class GetUserBasicRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const USERNAME = 2;
    const CURRENTSYNCKEY = 3;
    const MAXSYNCKEY = 4;
    const LANGUAGE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::USERNAME => array(
            'name' => 'UserName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENTSYNCKEY => array(
            'name' => 'CurrentSynckey',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::MAXSYNCKEY => array(
            'name' => 'MaxSynckey',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::LANGUAGE => array(
            'name' => 'Language',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::CURRENTSYNCKEY] = null;
        $this->values[self::MAXSYNCKEY] = null;
        $this->values[self::LANGUAGE] = null;
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
     * Sets value of 'baseRequest' property
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
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
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
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'UserName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'CurrentSynckey' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setCurrentSynckey(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::CURRENTSYNCKEY, $value);
    }

    /**
     * Returns value of 'CurrentSynckey' property
     *
     * @return \SKBuiltinString_S
     */
    public function getCurrentSynckey()
    {
        return $this->get(self::CURRENTSYNCKEY);
    }

    /**
     * Returns true if 'CurrentSynckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentSynckey()
    {
        return $this->get(self::CURRENTSYNCKEY) !== null;
    }

    /**
     * Sets value of 'MaxSynckey' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setMaxSynckey(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::MAXSYNCKEY, $value);
    }

    /**
     * Returns value of 'MaxSynckey' property
     *
     * @return \SKBuiltinString_S
     */
    public function getMaxSynckey()
    {
        return $this->get(self::MAXSYNCKEY);
    }

    /**
     * Returns true if 'MaxSynckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxSynckey()
    {
        return $this->get(self::MAXSYNCKEY) !== null;
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