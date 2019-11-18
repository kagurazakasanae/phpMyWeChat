<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsPostResponse message
 */
class SnsPostResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const SNSOBJECT = 2;
    const SPAMTIPS = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::SNSOBJECT => array(
            'name' => 'snsObject',
            'required' => true,
            'type' => '\SnsObject'
        ),
        self::SPAMTIPS => array(
            'name' => 'spamTips',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::SNSOBJECT] = null;
        $this->values[self::SPAMTIPS] = null;
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
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'snsObject' property
     *
     * @param \SnsObject $value Property value
     *
     * @return null
     */
    public function setSnsObject(\SnsObject $value=null)
    {
        return $this->set(self::SNSOBJECT, $value);
    }

    /**
     * Returns value of 'snsObject' property
     *
     * @return \SnsObject
     */
    public function getSnsObject()
    {
        return $this->get(self::SNSOBJECT);
    }

    /**
     * Returns true if 'snsObject' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsObject()
    {
        return $this->get(self::SNSOBJECT) !== null;
    }

    /**
     * Sets value of 'spamTips' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSpamTips($value)
    {
        return $this->set(self::SPAMTIPS, $value);
    }

    /**
     * Returns value of 'spamTips' property
     *
     * @return string
     */
    public function getSpamTips()
    {
        $value = $this->get(self::SPAMTIPS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'spamTips' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpamTips()
    {
        return $this->get(self::SPAMTIPS) !== null;
    }
}
}