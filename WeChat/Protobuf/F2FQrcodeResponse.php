<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * F2FQrcodeResponse message
 */
class F2FQrcodeResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const URL = 2;
    const UPPERRIGHTITEMS = 3;
    const BOTTOMITEM = 4;
    const TRUENAME = 5;
    const BOTTOMLEFTICONURL = 6;
    const BOTTOMRIGHTARROWFLAG = 7;
    const BUSITYPE = 8;
    const UPPERWORDING = 9;
    const MCHNAME = 10;
    const MCHPHOTO = 11;
    const GUIDEMATERIALFLAG = 12;
    const BUYMATERIALINFO = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::URL => array(
            'name' => 'url',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UPPERRIGHTITEMS => array(
            'name' => 'upperRightItems',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BOTTOMITEM => array(
            'name' => 'bottomItem',
            'required' => true,
            'type' => '\MenuItem'
        ),
        self::TRUENAME => array(
            'name' => 'trueName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BOTTOMLEFTICONURL => array(
            'name' => 'bottomleftIconUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BOTTOMRIGHTARROWFLAG => array(
            'name' => 'bottomRightArrowFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_BOOL,
        ),
        self::BUSITYPE => array(
            'name' => 'busiType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPPERWORDING => array(
            'name' => 'upperWording',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MCHNAME => array(
            'name' => 'mchName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MCHPHOTO => array(
            'name' => 'mchPhoto',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::GUIDEMATERIALFLAG => array(
            'name' => 'guideMaterialFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUYMATERIALINFO => array(
            'name' => 'buyMaterialInfo',
            'required' => true,
            'type' => '\MiniProgramInfo'
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
        $this->values[self::URL] = null;
        $this->values[self::UPPERRIGHTITEMS] = null;
        $this->values[self::BOTTOMITEM] = null;
        $this->values[self::TRUENAME] = null;
        $this->values[self::BOTTOMLEFTICONURL] = null;
        $this->values[self::BOTTOMRIGHTARROWFLAG] = null;
        $this->values[self::BUSITYPE] = null;
        $this->values[self::UPPERWORDING] = null;
        $this->values[self::MCHNAME] = null;
        $this->values[self::MCHPHOTO] = null;
        $this->values[self::GUIDEMATERIALFLAG] = null;
        $this->values[self::BUYMATERIALINFO] = null;
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
     * Sets value of 'url' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUrl($value)
    {
        return $this->set(self::URL, $value);
    }

    /**
     * Returns value of 'url' property
     *
     * @return string
     */
    public function getUrl()
    {
        $value = $this->get(self::URL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'url' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUrl()
    {
        return $this->get(self::URL) !== null;
    }

    /**
     * Sets value of 'upperRightItems' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUpperRightItems($value)
    {
        return $this->set(self::UPPERRIGHTITEMS, $value);
    }

    /**
     * Returns value of 'upperRightItems' property
     *
     * @return string
     */
    public function getUpperRightItems()
    {
        $value = $this->get(self::UPPERRIGHTITEMS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'upperRightItems' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpperRightItems()
    {
        return $this->get(self::UPPERRIGHTITEMS) !== null;
    }

    /**
     * Sets value of 'bottomItem' property
     *
     * @param \MenuItem $value Property value
     *
     * @return null
     */
    public function setBottomItem(\MenuItem $value=null)
    {
        return $this->set(self::BOTTOMITEM, $value);
    }

    /**
     * Returns value of 'bottomItem' property
     *
     * @return \MenuItem
     */
    public function getBottomItem()
    {
        return $this->get(self::BOTTOMITEM);
    }

    /**
     * Returns true if 'bottomItem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBottomItem()
    {
        return $this->get(self::BOTTOMITEM) !== null;
    }

    /**
     * Sets value of 'trueName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTrueName($value)
    {
        return $this->set(self::TRUENAME, $value);
    }

    /**
     * Returns value of 'trueName' property
     *
     * @return string
     */
    public function getTrueName()
    {
        $value = $this->get(self::TRUENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'trueName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTrueName()
    {
        return $this->get(self::TRUENAME) !== null;
    }

    /**
     * Sets value of 'bottomleftIconUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBottomleftIconUrl($value)
    {
        return $this->set(self::BOTTOMLEFTICONURL, $value);
    }

    /**
     * Returns value of 'bottomleftIconUrl' property
     *
     * @return string
     */
    public function getBottomleftIconUrl()
    {
        $value = $this->get(self::BOTTOMLEFTICONURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bottomleftIconUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBottomleftIconUrl()
    {
        return $this->get(self::BOTTOMLEFTICONURL) !== null;
    }

    /**
     * Sets value of 'bottomRightArrowFlag' property
     *
     * @param boolean $value Property value
     *
     * @return null
     */
    public function setBottomRightArrowFlag($value)
    {
        return $this->set(self::BOTTOMRIGHTARROWFLAG, $value);
    }

    /**
     * Returns value of 'bottomRightArrowFlag' property
     *
     * @return boolean
     */
    public function getBottomRightArrowFlag()
    {
        $value = $this->get(self::BOTTOMRIGHTARROWFLAG);
        return $value === null ? (boolean)$value : $value;
    }

    /**
     * Returns true if 'bottomRightArrowFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBottomRightArrowFlag()
    {
        return $this->get(self::BOTTOMRIGHTARROWFLAG) !== null;
    }

    /**
     * Sets value of 'busiType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBusiType($value)
    {
        return $this->set(self::BUSITYPE, $value);
    }

    /**
     * Returns value of 'busiType' property
     *
     * @return integer
     */
    public function getBusiType()
    {
        $value = $this->get(self::BUSITYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'busiType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBusiType()
    {
        return $this->get(self::BUSITYPE) !== null;
    }

    /**
     * Sets value of 'upperWording' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUpperWording($value)
    {
        return $this->set(self::UPPERWORDING, $value);
    }

    /**
     * Returns value of 'upperWording' property
     *
     * @return string
     */
    public function getUpperWording()
    {
        $value = $this->get(self::UPPERWORDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'upperWording' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpperWording()
    {
        return $this->get(self::UPPERWORDING) !== null;
    }

    /**
     * Sets value of 'mchName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMchName($value)
    {
        return $this->set(self::MCHNAME, $value);
    }

    /**
     * Returns value of 'mchName' property
     *
     * @return string
     */
    public function getMchName()
    {
        $value = $this->get(self::MCHNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mchName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMchName()
    {
        return $this->get(self::MCHNAME) !== null;
    }

    /**
     * Sets value of 'mchPhoto' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMchPhoto($value)
    {
        return $this->set(self::MCHPHOTO, $value);
    }

    /**
     * Returns value of 'mchPhoto' property
     *
     * @return string
     */
    public function getMchPhoto()
    {
        $value = $this->get(self::MCHPHOTO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mchPhoto' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMchPhoto()
    {
        return $this->get(self::MCHPHOTO) !== null;
    }

    /**
     * Sets value of 'guideMaterialFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGuideMaterialFlag($value)
    {
        return $this->set(self::GUIDEMATERIALFLAG, $value);
    }

    /**
     * Returns value of 'guideMaterialFlag' property
     *
     * @return integer
     */
    public function getGuideMaterialFlag()
    {
        $value = $this->get(self::GUIDEMATERIALFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'guideMaterialFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGuideMaterialFlag()
    {
        return $this->get(self::GUIDEMATERIALFLAG) !== null;
    }

    /**
     * Sets value of 'buyMaterialInfo' property
     *
     * @param \MiniProgramInfo $value Property value
     *
     * @return null
     */
    public function setBuyMaterialInfo(\MiniProgramInfo $value=null)
    {
        return $this->set(self::BUYMATERIALINFO, $value);
    }

    /**
     * Returns value of 'buyMaterialInfo' property
     *
     * @return \MiniProgramInfo
     */
    public function getBuyMaterialInfo()
    {
        return $this->get(self::BUYMATERIALINFO);
    }

    /**
     * Returns true if 'buyMaterialInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuyMaterialInfo()
    {
        return $this->get(self::BUYMATERIALINFO) !== null;
    }
}
}