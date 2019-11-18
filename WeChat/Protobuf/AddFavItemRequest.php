<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AddFavItemRequest message
 */
class AddFavItemRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CLIENTID = 2;
    const TYPE = 3;
    const SOURCETYPE = 4;
    const SOURCEID = 5;
    const OBJECT = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baserequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::CLIENTID => array(
            'name' => 'clientId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCETYPE => array(
            'name' => 'sourceType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCEID => array(
            'name' => 'sourceId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OBJECT => array(
            'name' => 'object',
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
        $this->values[self::CLIENTID] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::SOURCETYPE] = null;
        $this->values[self::SOURCEID] = null;
        $this->values[self::OBJECT] = null;
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
     * Sets value of 'baserequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaserequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baserequest' property
     *
     * @return \BaseRequest
     */
    public function getBaserequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baserequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaserequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'clientId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::CLIENTID, $value);
    }

    /**
     * Returns value of 'clientId' property
     *
     * @return string
     */
    public function getClientId()
    {
        $value = $this->get(self::CLIENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientId()
    {
        return $this->get(self::CLIENTID) !== null;
    }

    /**
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'sourceType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSourceType($value)
    {
        return $this->set(self::SOURCETYPE, $value);
    }

    /**
     * Returns value of 'sourceType' property
     *
     * @return integer
     */
    public function getSourceType()
    {
        $value = $this->get(self::SOURCETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sourceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceType()
    {
        return $this->get(self::SOURCETYPE) !== null;
    }

    /**
     * Sets value of 'sourceId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSourceId($value)
    {
        return $this->set(self::SOURCEID, $value);
    }

    /**
     * Returns value of 'sourceId' property
     *
     * @return string
     */
    public function getSourceId()
    {
        $value = $this->get(self::SOURCEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sourceId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSourceId()
    {
        return $this->get(self::SOURCEID) !== null;
    }

    /**
     * Sets value of 'object' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setObject($value)
    {
        return $this->set(self::OBJECT, $value);
    }

    /**
     * Returns value of 'object' property
     *
     * @return string
     */
    public function getObject()
    {
        $value = $this->get(self::OBJECT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'object' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObject()
    {
        return $this->get(self::OBJECT) !== null;
    }
}
}