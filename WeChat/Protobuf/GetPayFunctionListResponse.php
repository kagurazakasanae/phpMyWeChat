<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetPayFunctionListResponse message
 */
class GetPayFunctionListResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const PAYFUNCTIONLIST = 2;
    const NOTSHOWTUTORIAL = 3;
    const CACHETIME = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::PAYFUNCTIONLIST => array(
            'name' => 'payFunctionList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NOTSHOWTUTORIAL => array(
            'name' => 'notShowTutorial',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CACHETIME => array(
            'name' => 'cacheTime',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::PAYFUNCTIONLIST] = null;
        $this->values[self::NOTSHOWTUTORIAL] = null;
        $this->values[self::CACHETIME] = null;
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
     * Sets value of 'payFunctionList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPayFunctionList($value)
    {
        return $this->set(self::PAYFUNCTIONLIST, $value);
    }

    /**
     * Returns value of 'payFunctionList' property
     *
     * @return string
     */
    public function getPayFunctionList()
    {
        $value = $this->get(self::PAYFUNCTIONLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'payFunctionList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPayFunctionList()
    {
        return $this->get(self::PAYFUNCTIONLIST) !== null;
    }

    /**
     * Sets value of 'notShowTutorial' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNotShowTutorial($value)
    {
        return $this->set(self::NOTSHOWTUTORIAL, $value);
    }

    /**
     * Returns value of 'notShowTutorial' property
     *
     * @return integer
     */
    public function getNotShowTutorial()
    {
        $value = $this->get(self::NOTSHOWTUTORIAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'notShowTutorial' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNotShowTutorial()
    {
        return $this->get(self::NOTSHOWTUTORIAL) !== null;
    }

    /**
     * Sets value of 'cacheTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCacheTime($value)
    {
        return $this->set(self::CACHETIME, $value);
    }

    /**
     * Returns value of 'cacheTime' property
     *
     * @return integer
     */
    public function getCacheTime()
    {
        $value = $this->get(self::CACHETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cacheTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCacheTime()
    {
        return $this->get(self::CACHETIME) !== null;
    }
}
}