<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MassSendResponse message
 */
class MassSendResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const DATASTARTPOS = 2;
    const THUMBSTARTPOS = 3;
    const MAXSUPPORT = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::DATASTARTPOS => array(
            'name' => 'dataStartPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THUMBSTARTPOS => array(
            'name' => 'thumbStartPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXSUPPORT => array(
            'name' => 'maxSupport',
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
        $this->values[self::DATASTARTPOS] = null;
        $this->values[self::THUMBSTARTPOS] = null;
        $this->values[self::MAXSUPPORT] = null;
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
     * Sets value of 'dataStartPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDataStartPos($value)
    {
        return $this->set(self::DATASTARTPOS, $value);
    }

    /**
     * Returns value of 'dataStartPos' property
     *
     * @return integer
     */
    public function getDataStartPos()
    {
        $value = $this->get(self::DATASTARTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dataStartPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataStartPos()
    {
        return $this->get(self::DATASTARTPOS) !== null;
    }

    /**
     * Sets value of 'thumbStartPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThumbStartPos($value)
    {
        return $this->set(self::THUMBSTARTPOS, $value);
    }

    /**
     * Returns value of 'thumbStartPos' property
     *
     * @return integer
     */
    public function getThumbStartPos()
    {
        $value = $this->get(self::THUMBSTARTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'thumbStartPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbStartPos()
    {
        return $this->get(self::THUMBSTARTPOS) !== null;
    }

    /**
     * Sets value of 'maxSupport' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxSupport($value)
    {
        return $this->set(self::MAXSUPPORT, $value);
    }

    /**
     * Returns value of 'maxSupport' property
     *
     * @return integer
     */
    public function getMaxSupport()
    {
        $value = $this->get(self::MAXSUPPORT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxSupport' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxSupport()
    {
        return $this->get(self::MAXSUPPORT) !== null;
    }
}
}