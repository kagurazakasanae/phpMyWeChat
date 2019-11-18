<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CheckLoginQRCodeResponse message
 */
class CheckLoginQRCodeResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const DATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => true,
            'type' => '\LoginQRCodeNotifyPkg'
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
        $this->values[self::DATA] = null;
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
     * Sets value of 'data' property
     *
     * @param \LoginQRCodeNotifyPkg $value Property value
     *
     * @return null
     */
    public function setData(\LoginQRCodeNotifyPkg $value=null)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return \LoginQRCodeNotifyPkg
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Returns true if 'data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData()
    {
        return $this->get(self::DATA) !== null;
    }
}
}