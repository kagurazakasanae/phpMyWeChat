<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetQRCodeResponse message
 */
class GetQRCodeResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const QRCODE = 2;
    const STYLE = 3;
    const FOOTERWORDING = 4;
    const REVOKEQRCODEID = 5;
    const REVOKEQRCODEWORDING = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::QRCODE => array(
            'name' => 'qrcode',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::STYLE => array(
            'name' => 'style',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FOOTERWORDING => array(
            'name' => 'footerWording',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REVOKEQRCODEID => array(
            'name' => 'revokeQrcodeId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REVOKEQRCODEWORDING => array(
            'name' => 'revokeQrcodeWording',
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
        $this->values[self::QRCODE] = null;
        $this->values[self::STYLE] = null;
        $this->values[self::FOOTERWORDING] = null;
        $this->values[self::REVOKEQRCODEID] = null;
        $this->values[self::REVOKEQRCODEWORDING] = null;
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
     * Sets value of 'qrcode' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setQrcode(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::QRCODE, $value);
    }

    /**
     * Returns value of 'qrcode' property
     *
     * @return \SKBuiltinString_
     */
    public function getQrcode()
    {
        return $this->get(self::QRCODE);
    }

    /**
     * Returns true if 'qrcode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQrcode()
    {
        return $this->get(self::QRCODE) !== null;
    }

    /**
     * Sets value of 'style' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStyle($value)
    {
        return $this->set(self::STYLE, $value);
    }

    /**
     * Returns value of 'style' property
     *
     * @return integer
     */
    public function getStyle()
    {
        $value = $this->get(self::STYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'style' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStyle()
    {
        return $this->get(self::STYLE) !== null;
    }

    /**
     * Sets value of 'footerWording' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFooterWording($value)
    {
        return $this->set(self::FOOTERWORDING, $value);
    }

    /**
     * Returns value of 'footerWording' property
     *
     * @return string
     */
    public function getFooterWording()
    {
        $value = $this->get(self::FOOTERWORDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'footerWording' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFooterWording()
    {
        return $this->get(self::FOOTERWORDING) !== null;
    }

    /**
     * Sets value of 'revokeQrcodeId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRevokeQrcodeId($value)
    {
        return $this->set(self::REVOKEQRCODEID, $value);
    }

    /**
     * Returns value of 'revokeQrcodeId' property
     *
     * @return string
     */
    public function getRevokeQrcodeId()
    {
        $value = $this->get(self::REVOKEQRCODEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'revokeQrcodeId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRevokeQrcodeId()
    {
        return $this->get(self::REVOKEQRCODEID) !== null;
    }

    /**
     * Sets value of 'revokeQrcodeWording' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRevokeQrcodeWording($value)
    {
        return $this->set(self::REVOKEQRCODEWORDING, $value);
    }

    /**
     * Returns value of 'revokeQrcodeWording' property
     *
     * @return string
     */
    public function getRevokeQrcodeWording()
    {
        $value = $this->get(self::REVOKEQRCODEWORDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'revokeQrcodeWording' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRevokeQrcodeWording()
    {
        return $this->get(self::REVOKEQRCODEWORDING) !== null;
    }
}
}