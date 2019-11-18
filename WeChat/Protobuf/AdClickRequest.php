<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AdClickRequest message
 */
class AdClickRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const VIEWID = 2;
    const CLICKPOS = 3;
    const DESCXML = 4;
    const SCENE = 5;
    const SSID = 6;
    const BSSID = 7;
    const TIMESTAMPMS = 8;
    const SHAREINFO = 9;
    const ADTYPE = 10;
    const CLICKACTION = 11;
    const SOURCE = 12;
    const SNSSTATEXT = 13;
    const FLIPSTATUS = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::VIEWID => array(
            'name' => 'viewid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLICKPOS => array(
            'name' => 'clickpos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESCXML => array(
            'name' => 'descxml',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCENE => array(
            'name' => 'scene',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SSID => array(
            'name' => 'ssid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BSSID => array(
            'name' => 'bssid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMESTAMPMS => array(
            'name' => 'timestampMs',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHAREINFO => array(
            'name' => 'shareInfo',
            'required' => true,
            'type' => '\AdShareInfo'
        ),
        self::ADTYPE => array(
            'name' => 'adType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLICKACTION => array(
            'name' => 'clickAction',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SNSSTATEXT => array(
            'name' => 'snsStatext',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FLIPSTATUS => array(
            'name' => 'flipStatus',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::VIEWID] = null;
        $this->values[self::CLICKPOS] = null;
        $this->values[self::DESCXML] = null;
        $this->values[self::SCENE] = null;
        $this->values[self::SSID] = null;
        $this->values[self::BSSID] = null;
        $this->values[self::TIMESTAMPMS] = null;
        $this->values[self::SHAREINFO] = null;
        $this->values[self::ADTYPE] = null;
        $this->values[self::CLICKACTION] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::SNSSTATEXT] = null;
        $this->values[self::FLIPSTATUS] = null;
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
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'viewid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setViewid($value)
    {
        return $this->set(self::VIEWID, $value);
    }

    /**
     * Returns value of 'viewid' property
     *
     * @return string
     */
    public function getViewid()
    {
        $value = $this->get(self::VIEWID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'viewid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasViewid()
    {
        return $this->get(self::VIEWID) !== null;
    }

    /**
     * Sets value of 'clickpos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClickpos($value)
    {
        return $this->set(self::CLICKPOS, $value);
    }

    /**
     * Returns value of 'clickpos' property
     *
     * @return integer
     */
    public function getClickpos()
    {
        $value = $this->get(self::CLICKPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clickpos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClickpos()
    {
        return $this->get(self::CLICKPOS) !== null;
    }

    /**
     * Sets value of 'descxml' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescxml($value)
    {
        return $this->set(self::DESCXML, $value);
    }

    /**
     * Returns value of 'descxml' property
     *
     * @return string
     */
    public function getDescxml()
    {
        $value = $this->get(self::DESCXML);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'descxml' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDescxml()
    {
        return $this->get(self::DESCXML) !== null;
    }

    /**
     * Sets value of 'scene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScene($value)
    {
        return $this->set(self::SCENE, $value);
    }

    /**
     * Returns value of 'scene' property
     *
     * @return integer
     */
    public function getScene()
    {
        $value = $this->get(self::SCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScene()
    {
        return $this->get(self::SCENE) !== null;
    }

    /**
     * Sets value of 'ssid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSsid($value)
    {
        return $this->set(self::SSID, $value);
    }

    /**
     * Returns value of 'ssid' property
     *
     * @return string
     */
    public function getSsid()
    {
        $value = $this->get(self::SSID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'ssid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSsid()
    {
        return $this->get(self::SSID) !== null;
    }

    /**
     * Sets value of 'bssid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBssid($value)
    {
        return $this->set(self::BSSID, $value);
    }

    /**
     * Returns value of 'bssid' property
     *
     * @return string
     */
    public function getBssid()
    {
        $value = $this->get(self::BSSID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bssid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBssid()
    {
        return $this->get(self::BSSID) !== null;
    }

    /**
     * Sets value of 'timestampMs' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestampMs($value)
    {
        return $this->set(self::TIMESTAMPMS, $value);
    }

    /**
     * Returns value of 'timestampMs' property
     *
     * @return integer
     */
    public function getTimestampMs()
    {
        $value = $this->get(self::TIMESTAMPMS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timestampMs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestampMs()
    {
        return $this->get(self::TIMESTAMPMS) !== null;
    }

    /**
     * Sets value of 'shareInfo' property
     *
     * @param \AdShareInfo $value Property value
     *
     * @return null
     */
    public function setShareInfo(\AdShareInfo $value=null)
    {
        return $this->set(self::SHAREINFO, $value);
    }

    /**
     * Returns value of 'shareInfo' property
     *
     * @return \AdShareInfo
     */
    public function getShareInfo()
    {
        return $this->get(self::SHAREINFO);
    }

    /**
     * Returns true if 'shareInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShareInfo()
    {
        return $this->get(self::SHAREINFO) !== null;
    }

    /**
     * Sets value of 'adType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAdType($value)
    {
        return $this->set(self::ADTYPE, $value);
    }

    /**
     * Returns value of 'adType' property
     *
     * @return integer
     */
    public function getAdType()
    {
        $value = $this->get(self::ADTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'adType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdType()
    {
        return $this->get(self::ADTYPE) !== null;
    }

    /**
     * Sets value of 'clickAction' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClickAction($value)
    {
        return $this->set(self::CLICKACTION, $value);
    }

    /**
     * Returns value of 'clickAction' property
     *
     * @return integer
     */
    public function getClickAction()
    {
        $value = $this->get(self::CLICKACTION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clickAction' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClickAction()
    {
        return $this->get(self::CLICKACTION) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'snsStatext' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSnsStatext($value)
    {
        return $this->set(self::SNSSTATEXT, $value);
    }

    /**
     * Returns value of 'snsStatext' property
     *
     * @return string
     */
    public function getSnsStatext()
    {
        $value = $this->get(self::SNSSTATEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'snsStatext' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsStatext()
    {
        return $this->get(self::SNSSTATEXT) !== null;
    }

    /**
     * Sets value of 'flipStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlipStatus($value)
    {
        return $this->set(self::FLIPSTATUS, $value);
    }

    /**
     * Returns value of 'flipStatus' property
     *
     * @return integer
     */
    public function getFlipStatus()
    {
        $value = $this->get(self::FLIPSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'flipStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlipStatus()
    {
        return $this->get(self::FLIPSTATUS) !== null;
    }
}
}