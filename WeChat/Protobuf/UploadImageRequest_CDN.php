<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * UploadImageRequest_CDN message
 */
class UploadImageRequest_CDN extends \ProtobufMessage
{
    /* Field index constants */
    const MEDIAID = 1;
    const FROM = 2;
    const TO = 3;
    const T4 = 4;
    const T5 = 5;
    const T6 = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEDIAID => array(
            'name' => 'mediaId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FROM => array(
            'name' => 'from',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TO => array(
            'name' => 'to',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::T4 => array(
            'name' => 't4',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T5 => array(
            'name' => 't5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T6 => array(
            'name' => 't6',
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
        $this->values[self::MEDIAID] = null;
        $this->values[self::FROM] = null;
        $this->values[self::TO] = null;
        $this->values[self::T4] = null;
        $this->values[self::T5] = null;
        $this->values[self::T6] = null;
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
     * Sets value of 'mediaId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMediaId($value)
    {
        return $this->set(self::MEDIAID, $value);
    }

    /**
     * Returns value of 'mediaId' property
     *
     * @return string
     */
    public function getMediaId()
    {
        $value = $this->get(self::MEDIAID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mediaId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMediaId()
    {
        return $this->get(self::MEDIAID) !== null;
    }

    /**
     * Sets value of 'from' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFrom($value)
    {
        return $this->set(self::FROM, $value);
    }

    /**
     * Returns value of 'from' property
     *
     * @return string
     */
    public function getFrom()
    {
        $value = $this->get(self::FROM);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'from' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrom()
    {
        return $this->get(self::FROM) !== null;
    }

    /**
     * Sets value of 'to' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTo($value)
    {
        return $this->set(self::TO, $value);
    }

    /**
     * Returns value of 'to' property
     *
     * @return string
     */
    public function getTo()
    {
        $value = $this->get(self::TO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'to' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTo()
    {
        return $this->get(self::TO) !== null;
    }

    /**
     * Sets value of 't4' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT4($value)
    {
        return $this->set(self::T4, $value);
    }

    /**
     * Returns value of 't4' property
     *
     * @return integer
     */
    public function getT4()
    {
        $value = $this->get(self::T4);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't4' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT4()
    {
        return $this->get(self::T4) !== null;
    }

    /**
     * Sets value of 't5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT5($value)
    {
        return $this->set(self::T5, $value);
    }

    /**
     * Returns value of 't5' property
     *
     * @return integer
     */
    public function getT5()
    {
        $value = $this->get(self::T5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT5()
    {
        return $this->get(self::T5) !== null;
    }

    /**
     * Sets value of 't6' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setT6($value)
    {
        return $this->set(self::T6, $value);
    }

    /**
     * Returns value of 't6' property
     *
     * @return string
     */
    public function getT6()
    {
        $value = $this->get(self::T6);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 't6' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT6()
    {
        return $this->get(self::T6) !== null;
    }
}
}