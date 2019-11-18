<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SafeDevice message
 */
class SafeDevice extends \ProtobufMessage
{
    /* Field index constants */
    const NAME = 1;
    const UUID = 2;
    const DEVICETYPE = 3;
    const CREATETIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NAME => array(
            'name' => 'name',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICETYPE => array(
            'name' => 'deviceType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATETIME => array(
            'name' => 'createTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::NAME] = null;
        $this->values[self::UUID] = null;
        $this->values[self::DEVICETYPE] = null;
        $this->values[self::CREATETIME] = null;
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
     * Sets value of 'name' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setName($value)
    {
        return $this->set(self::NAME, $value);
    }

    /**
     * Returns value of 'name' property
     *
     * @return string
     */
    public function getName()
    {
        $value = $this->get(self::NAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'name' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasName()
    {
        return $this->get(self::NAME) !== null;
    }

    /**
     * Sets value of 'uuid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUuid($value)
    {
        return $this->set(self::UUID, $value);
    }

    /**
     * Returns value of 'uuid' property
     *
     * @return string
     */
    public function getUuid()
    {
        $value = $this->get(self::UUID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'uuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUuid()
    {
        return $this->get(self::UUID) !== null;
    }

    /**
     * Sets value of 'deviceType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceType($value)
    {
        return $this->set(self::DEVICETYPE, $value);
    }

    /**
     * Returns value of 'deviceType' property
     *
     * @return string
     */
    public function getDeviceType()
    {
        $value = $this->get(self::DEVICETYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceType()
    {
        return $this->get(self::DEVICETYPE) !== null;
    }

    /**
     * Sets value of 'createTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createTime' property
     *
     * @return integer
     */
    public function getCreateTime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreateTime()
    {
        return $this->get(self::CREATETIME) !== null;
    }
}
}