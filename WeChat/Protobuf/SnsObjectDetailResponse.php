<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsObjectDetailResponse message
 */
class SnsObjectDetailResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const OBJECT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::OBJECT => array(
            'name' => 'object',
            'required' => true,
            'type' => '\SnsObject'
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
     * Sets value of 'object' property
     *
     * @param \SnsObject $value Property value
     *
     * @return null
     */
    public function setObject(\SnsObject $value=null)
    {
        return $this->set(self::OBJECT, $value);
    }

    /**
     * Returns value of 'object' property
     *
     * @return \SnsObject
     */
    public function getObject()
    {
        return $this->get(self::OBJECT);
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