<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * UploadVideoRequest message
 */
class UploadVideoRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CLIENTMSGID = 2;
    const FROM = 3;
    const TO = 4;
    const THUMBTOTALLEN = 5;
    const THUMBSTARTPOS = 6;
    const THUMBDATA = 7;
    const VIDEOTOTALLEN = 8;
    const VIDEOSTARTPOS = 9;
    const VIDEODATA = 10;
    const PLAYLENGTH = 11;
    const NETWORKENV = 12;
    const CAMERATYPE = 13;
    const FUNCFLAG = 14;
    const MSGSOURCE = 15;
    const CDNVIDEOURL = 16;
    const AESKEY = 17;
    const ENCRYVER = 18;
    const CDNTHUMBURL = 19;
    const CDNTHUMBIMGSIZE = 20;
    const CDNTHUMBIMGHEIGHT = 21;
    const CDNTHUMBIMGWIDTH = 22;
    const CDNTHUMBAESKEY = 23;
    const VIDEOFROM = 24;
    const REQTIME = 25;
    const VIDEOMD5 = 26;
    const STREAMVIDEOURL = 27;
    const STREAMVIDEOTOTALTIME = 28;
    const STREAMVIDEOTITLE = 29;
    const STREAMVIDEOWORDING = 30;
    const STREAMVIDEOWEBURL = 31;
    const STREAMVIDEOTHUMBURL = 32;
    const STREAMVIDEOPUBLISHID = 33;
    const STREAMVIDEOADUXINFO = 34;
    const STAEXTSTR = 35;
    const HITMD5 = 36;
    const VIDEONEWMD5 = 37;
    const CRC32 = 38;
    const MSGFORWARDTYPE = 39;
    const SOURCE = 40;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'BaseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::CLIENTMSGID => array(
            'name' => 'clientMsgId',
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
        self::THUMBTOTALLEN => array(
            'name' => 'thumbTotalLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THUMBSTARTPOS => array(
            'name' => 'thumbStartPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THUMBDATA => array(
            'name' => 'thumbData',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::VIDEOTOTALLEN => array(
            'name' => 'videoTotalLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEOSTARTPOS => array(
            'name' => 'videoStartPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEODATA => array(
            'name' => 'videoData',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::PLAYLENGTH => array(
            'name' => 'playLength',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NETWORKENV => array(
            'name' => 'networkEnv',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CAMERATYPE => array(
            'name' => 'cameraType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FUNCFLAG => array(
            'name' => 'funcFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGSOURCE => array(
            'name' => 'msgSource',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CDNVIDEOURL => array(
            'name' => 'cDNVideoUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AESKEY => array(
            'name' => 'aESKey',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYVER => array(
            'name' => 'encryVer',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBURL => array(
            'name' => 'cDNThumbUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CDNTHUMBIMGSIZE => array(
            'name' => 'cDNThumbImgSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBIMGHEIGHT => array(
            'name' => 'cDNThumbImgHeight',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBIMGWIDTH => array(
            'name' => 'cDNThumbImgWidth',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBAESKEY => array(
            'name' => 'cDNThumbAESKey',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VIDEOFROM => array(
            'name' => 'videoFrom',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQTIME => array(
            'name' => 'reqTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEOMD5 => array(
            'name' => 'videoMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STREAMVIDEOURL => array(
            'name' => 'streamVideoUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STREAMVIDEOTOTALTIME => array(
            'name' => 'streamVideoTotalTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STREAMVIDEOTITLE => array(
            'name' => 'streamVideoTitle',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STREAMVIDEOWORDING => array(
            'name' => 'streamVideoWording',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STREAMVIDEOWEBURL => array(
            'name' => 'streamVideoWebUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STREAMVIDEOTHUMBURL => array(
            'name' => 'streamVideoThumbUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STREAMVIDEOPUBLISHID => array(
            'name' => 'streamVideoPublishId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STREAMVIDEOADUXINFO => array(
            'name' => 'streamVideoAdUxInfo',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STAEXTSTR => array(
            'name' => 'staExtStr',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HITMD5 => array(
            'name' => 'hitMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEONEWMD5 => array(
            'name' => 'VideoNewMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CRC32 => array(
            'name' => 'crc32',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGFORWARDTYPE => array(
            'name' => 'msgForwardType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'Source',
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
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::FROM] = null;
        $this->values[self::TO] = null;
        $this->values[self::THUMBTOTALLEN] = null;
        $this->values[self::THUMBSTARTPOS] = null;
        $this->values[self::THUMBDATA] = null;
        $this->values[self::VIDEOTOTALLEN] = null;
        $this->values[self::VIDEOSTARTPOS] = null;
        $this->values[self::VIDEODATA] = null;
        $this->values[self::PLAYLENGTH] = null;
        $this->values[self::NETWORKENV] = null;
        $this->values[self::CAMERATYPE] = null;
        $this->values[self::FUNCFLAG] = null;
        $this->values[self::MSGSOURCE] = null;
        $this->values[self::CDNVIDEOURL] = null;
        $this->values[self::AESKEY] = null;
        $this->values[self::ENCRYVER] = null;
        $this->values[self::CDNTHUMBURL] = null;
        $this->values[self::CDNTHUMBIMGSIZE] = null;
        $this->values[self::CDNTHUMBIMGHEIGHT] = null;
        $this->values[self::CDNTHUMBIMGWIDTH] = null;
        $this->values[self::CDNTHUMBAESKEY] = null;
        $this->values[self::VIDEOFROM] = null;
        $this->values[self::REQTIME] = null;
        $this->values[self::VIDEOMD5] = null;
        $this->values[self::STREAMVIDEOURL] = null;
        $this->values[self::STREAMVIDEOTOTALTIME] = null;
        $this->values[self::STREAMVIDEOTITLE] = null;
        $this->values[self::STREAMVIDEOWORDING] = null;
        $this->values[self::STREAMVIDEOWEBURL] = null;
        $this->values[self::STREAMVIDEOTHUMBURL] = null;
        $this->values[self::STREAMVIDEOPUBLISHID] = null;
        $this->values[self::STREAMVIDEOADUXINFO] = null;
        $this->values[self::STAEXTSTR] = null;
        $this->values[self::HITMD5] = null;
        $this->values[self::VIDEONEWMD5] = null;
        $this->values[self::CRC32] = null;
        $this->values[self::MSGFORWARDTYPE] = null;
        $this->values[self::SOURCE] = null;
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
     * Sets value of 'BaseRequest' property
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
     * Returns value of 'BaseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'BaseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'clientMsgId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientMsgId($value)
    {
        return $this->set(self::CLIENTMSGID, $value);
    }

    /**
     * Returns value of 'clientMsgId' property
     *
     * @return string
     */
    public function getClientMsgId()
    {
        $value = $this->get(self::CLIENTMSGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientMsgId()
    {
        return $this->get(self::CLIENTMSGID) !== null;
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
     * Sets value of 'thumbTotalLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThumbTotalLen($value)
    {
        return $this->set(self::THUMBTOTALLEN, $value);
    }

    /**
     * Returns value of 'thumbTotalLen' property
     *
     * @return integer
     */
    public function getThumbTotalLen()
    {
        $value = $this->get(self::THUMBTOTALLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'thumbTotalLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbTotalLen()
    {
        return $this->get(self::THUMBTOTALLEN) !== null;
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
     * Sets value of 'thumbData' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setThumbData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::THUMBDATA, $value);
    }

    /**
     * Returns value of 'thumbData' property
     *
     * @return \SKBuiltinString_
     */
    public function getThumbData()
    {
        return $this->get(self::THUMBDATA);
    }

    /**
     * Returns true if 'thumbData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbData()
    {
        return $this->get(self::THUMBDATA) !== null;
    }

    /**
     * Sets value of 'videoTotalLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVideoTotalLen($value)
    {
        return $this->set(self::VIDEOTOTALLEN, $value);
    }

    /**
     * Returns value of 'videoTotalLen' property
     *
     * @return integer
     */
    public function getVideoTotalLen()
    {
        $value = $this->get(self::VIDEOTOTALLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'videoTotalLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoTotalLen()
    {
        return $this->get(self::VIDEOTOTALLEN) !== null;
    }

    /**
     * Sets value of 'videoStartPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVideoStartPos($value)
    {
        return $this->set(self::VIDEOSTARTPOS, $value);
    }

    /**
     * Returns value of 'videoStartPos' property
     *
     * @return integer
     */
    public function getVideoStartPos()
    {
        $value = $this->get(self::VIDEOSTARTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'videoStartPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoStartPos()
    {
        return $this->get(self::VIDEOSTARTPOS) !== null;
    }

    /**
     * Sets value of 'videoData' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setVideoData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::VIDEODATA, $value);
    }

    /**
     * Returns value of 'videoData' property
     *
     * @return \SKBuiltinString_
     */
    public function getVideoData()
    {
        return $this->get(self::VIDEODATA);
    }

    /**
     * Returns true if 'videoData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoData()
    {
        return $this->get(self::VIDEODATA) !== null;
    }

    /**
     * Sets value of 'playLength' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPlayLength($value)
    {
        return $this->set(self::PLAYLENGTH, $value);
    }

    /**
     * Returns value of 'playLength' property
     *
     * @return integer
     */
    public function getPlayLength()
    {
        $value = $this->get(self::PLAYLENGTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'playLength' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPlayLength()
    {
        return $this->get(self::PLAYLENGTH) !== null;
    }

    /**
     * Sets value of 'networkEnv' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNetworkEnv($value)
    {
        return $this->set(self::NETWORKENV, $value);
    }

    /**
     * Returns value of 'networkEnv' property
     *
     * @return integer
     */
    public function getNetworkEnv()
    {
        $value = $this->get(self::NETWORKENV);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'networkEnv' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNetworkEnv()
    {
        return $this->get(self::NETWORKENV) !== null;
    }

    /**
     * Sets value of 'cameraType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCameraType($value)
    {
        return $this->set(self::CAMERATYPE, $value);
    }

    /**
     * Returns value of 'cameraType' property
     *
     * @return integer
     */
    public function getCameraType()
    {
        $value = $this->get(self::CAMERATYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cameraType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCameraType()
    {
        return $this->get(self::CAMERATYPE) !== null;
    }

    /**
     * Sets value of 'funcFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFuncFlag($value)
    {
        return $this->set(self::FUNCFLAG, $value);
    }

    /**
     * Returns value of 'funcFlag' property
     *
     * @return integer
     */
    public function getFuncFlag()
    {
        $value = $this->get(self::FUNCFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'funcFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFuncFlag()
    {
        return $this->get(self::FUNCFLAG) !== null;
    }

    /**
     * Sets value of 'msgSource' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsgSource($value)
    {
        return $this->set(self::MSGSOURCE, $value);
    }

    /**
     * Returns value of 'msgSource' property
     *
     * @return string
     */
    public function getMsgSource()
    {
        $value = $this->get(self::MSGSOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'msgSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgSource()
    {
        return $this->get(self::MSGSOURCE) !== null;
    }

    /**
     * Sets value of 'cDNVideoUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCDNVideoUrl($value)
    {
        return $this->set(self::CDNVIDEOURL, $value);
    }

    /**
     * Returns value of 'cDNVideoUrl' property
     *
     * @return string
     */
    public function getCDNVideoUrl()
    {
        $value = $this->get(self::CDNVIDEOURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cDNVideoUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNVideoUrl()
    {
        return $this->get(self::CDNVIDEOURL) !== null;
    }

    /**
     * Sets value of 'aESKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAESKey($value)
    {
        return $this->set(self::AESKEY, $value);
    }

    /**
     * Returns value of 'aESKey' property
     *
     * @return string
     */
    public function getAESKey()
    {
        $value = $this->get(self::AESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'aESKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAESKey()
    {
        return $this->get(self::AESKEY) !== null;
    }

    /**
     * Sets value of 'encryVer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEncryVer($value)
    {
        return $this->set(self::ENCRYVER, $value);
    }

    /**
     * Returns value of 'encryVer' property
     *
     * @return integer
     */
    public function getEncryVer()
    {
        $value = $this->get(self::ENCRYVER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'encryVer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncryVer()
    {
        return $this->get(self::ENCRYVER) !== null;
    }

    /**
     * Sets value of 'cDNThumbUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCDNThumbUrl($value)
    {
        return $this->set(self::CDNTHUMBURL, $value);
    }

    /**
     * Returns value of 'cDNThumbUrl' property
     *
     * @return string
     */
    public function getCDNThumbUrl()
    {
        $value = $this->get(self::CDNTHUMBURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbUrl()
    {
        return $this->get(self::CDNTHUMBURL) !== null;
    }

    /**
     * Sets value of 'cDNThumbImgSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCDNThumbImgSize($value)
    {
        return $this->set(self::CDNTHUMBIMGSIZE, $value);
    }

    /**
     * Returns value of 'cDNThumbImgSize' property
     *
     * @return integer
     */
    public function getCDNThumbImgSize()
    {
        $value = $this->get(self::CDNTHUMBIMGSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbImgSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbImgSize()
    {
        return $this->get(self::CDNTHUMBIMGSIZE) !== null;
    }

    /**
     * Sets value of 'cDNThumbImgHeight' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCDNThumbImgHeight($value)
    {
        return $this->set(self::CDNTHUMBIMGHEIGHT, $value);
    }

    /**
     * Returns value of 'cDNThumbImgHeight' property
     *
     * @return integer
     */
    public function getCDNThumbImgHeight()
    {
        $value = $this->get(self::CDNTHUMBIMGHEIGHT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbImgHeight' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbImgHeight()
    {
        return $this->get(self::CDNTHUMBIMGHEIGHT) !== null;
    }

    /**
     * Sets value of 'cDNThumbImgWidth' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCDNThumbImgWidth($value)
    {
        return $this->set(self::CDNTHUMBIMGWIDTH, $value);
    }

    /**
     * Returns value of 'cDNThumbImgWidth' property
     *
     * @return integer
     */
    public function getCDNThumbImgWidth()
    {
        $value = $this->get(self::CDNTHUMBIMGWIDTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbImgWidth' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbImgWidth()
    {
        return $this->get(self::CDNTHUMBIMGWIDTH) !== null;
    }

    /**
     * Sets value of 'cDNThumbAESKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCDNThumbAESKey($value)
    {
        return $this->set(self::CDNTHUMBAESKEY, $value);
    }

    /**
     * Returns value of 'cDNThumbAESKey' property
     *
     * @return string
     */
    public function getCDNThumbAESKey()
    {
        $value = $this->get(self::CDNTHUMBAESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbAESKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbAESKey()
    {
        return $this->get(self::CDNTHUMBAESKEY) !== null;
    }

    /**
     * Sets value of 'videoFrom' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVideoFrom($value)
    {
        return $this->set(self::VIDEOFROM, $value);
    }

    /**
     * Returns value of 'videoFrom' property
     *
     * @return integer
     */
    public function getVideoFrom()
    {
        $value = $this->get(self::VIDEOFROM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'videoFrom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoFrom()
    {
        return $this->get(self::VIDEOFROM) !== null;
    }

    /**
     * Sets value of 'reqTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReqTime($value)
    {
        return $this->set(self::REQTIME, $value);
    }

    /**
     * Returns value of 'reqTime' property
     *
     * @return integer
     */
    public function getReqTime()
    {
        $value = $this->get(self::REQTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reqTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReqTime()
    {
        return $this->get(self::REQTIME) !== null;
    }

    /**
     * Sets value of 'videoMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVideoMd5($value)
    {
        return $this->set(self::VIDEOMD5, $value);
    }

    /**
     * Returns value of 'videoMd5' property
     *
     * @return string
     */
    public function getVideoMd5()
    {
        $value = $this->get(self::VIDEOMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'videoMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoMd5()
    {
        return $this->get(self::VIDEOMD5) !== null;
    }

    /**
     * Sets value of 'streamVideoUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreamVideoUrl($value)
    {
        return $this->set(self::STREAMVIDEOURL, $value);
    }

    /**
     * Returns value of 'streamVideoUrl' property
     *
     * @return string
     */
    public function getStreamVideoUrl()
    {
        $value = $this->get(self::STREAMVIDEOURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'streamVideoUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStreamVideoUrl()
    {
        return $this->get(self::STREAMVIDEOURL) !== null;
    }

    /**
     * Sets value of 'streamVideoTotalTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStreamVideoTotalTime($value)
    {
        return $this->set(self::STREAMVIDEOTOTALTIME, $value);
    }

    /**
     * Returns value of 'streamVideoTotalTime' property
     *
     * @return integer
     */
    public function getStreamVideoTotalTime()
    {
        $value = $this->get(self::STREAMVIDEOTOTALTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'streamVideoTotalTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStreamVideoTotalTime()
    {
        return $this->get(self::STREAMVIDEOTOTALTIME) !== null;
    }

    /**
     * Sets value of 'streamVideoTitle' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreamVideoTitle($value)
    {
        return $this->set(self::STREAMVIDEOTITLE, $value);
    }

    /**
     * Returns value of 'streamVideoTitle' property
     *
     * @return string
     */
    public function getStreamVideoTitle()
    {
        $value = $this->get(self::STREAMVIDEOTITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'streamVideoTitle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStreamVideoTitle()
    {
        return $this->get(self::STREAMVIDEOTITLE) !== null;
    }

    /**
     * Sets value of 'streamVideoWording' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreamVideoWording($value)
    {
        return $this->set(self::STREAMVIDEOWORDING, $value);
    }

    /**
     * Returns value of 'streamVideoWording' property
     *
     * @return string
     */
    public function getStreamVideoWording()
    {
        $value = $this->get(self::STREAMVIDEOWORDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'streamVideoWording' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStreamVideoWording()
    {
        return $this->get(self::STREAMVIDEOWORDING) !== null;
    }

    /**
     * Sets value of 'streamVideoWebUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreamVideoWebUrl($value)
    {
        return $this->set(self::STREAMVIDEOWEBURL, $value);
    }

    /**
     * Returns value of 'streamVideoWebUrl' property
     *
     * @return string
     */
    public function getStreamVideoWebUrl()
    {
        $value = $this->get(self::STREAMVIDEOWEBURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'streamVideoWebUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStreamVideoWebUrl()
    {
        return $this->get(self::STREAMVIDEOWEBURL) !== null;
    }

    /**
     * Sets value of 'streamVideoThumbUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreamVideoThumbUrl($value)
    {
        return $this->set(self::STREAMVIDEOTHUMBURL, $value);
    }

    /**
     * Returns value of 'streamVideoThumbUrl' property
     *
     * @return string
     */
    public function getStreamVideoThumbUrl()
    {
        $value = $this->get(self::STREAMVIDEOTHUMBURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'streamVideoThumbUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStreamVideoThumbUrl()
    {
        return $this->get(self::STREAMVIDEOTHUMBURL) !== null;
    }

    /**
     * Sets value of 'streamVideoPublishId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreamVideoPublishId($value)
    {
        return $this->set(self::STREAMVIDEOPUBLISHID, $value);
    }

    /**
     * Returns value of 'streamVideoPublishId' property
     *
     * @return string
     */
    public function getStreamVideoPublishId()
    {
        $value = $this->get(self::STREAMVIDEOPUBLISHID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'streamVideoPublishId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStreamVideoPublishId()
    {
        return $this->get(self::STREAMVIDEOPUBLISHID) !== null;
    }

    /**
     * Sets value of 'streamVideoAdUxInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setStreamVideoAdUxInfo($value)
    {
        return $this->set(self::STREAMVIDEOADUXINFO, $value);
    }

    /**
     * Returns value of 'streamVideoAdUxInfo' property
     *
     * @return string
     */
    public function getStreamVideoAdUxInfo()
    {
        $value = $this->get(self::STREAMVIDEOADUXINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'streamVideoAdUxInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStreamVideoAdUxInfo()
    {
        return $this->get(self::STREAMVIDEOADUXINFO) !== null;
    }

    /**
     * Sets value of 'staExtStr' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStaExtStr($value)
    {
        return $this->set(self::STAEXTSTR, $value);
    }

    /**
     * Returns value of 'staExtStr' property
     *
     * @return integer
     */
    public function getStaExtStr()
    {
        $value = $this->get(self::STAEXTSTR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'staExtStr' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStaExtStr()
    {
        return $this->get(self::STAEXTSTR) !== null;
    }

    /**
     * Sets value of 'hitMd5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHitMd5($value)
    {
        return $this->set(self::HITMD5, $value);
    }

    /**
     * Returns value of 'hitMd5' property
     *
     * @return integer
     */
    public function getHitMd5()
    {
        $value = $this->get(self::HITMD5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hitMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHitMd5()
    {
        return $this->get(self::HITMD5) !== null;
    }

    /**
     * Sets value of 'VideoNewMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVideoNewMd5($value)
    {
        return $this->set(self::VIDEONEWMD5, $value);
    }

    /**
     * Returns value of 'VideoNewMd5' property
     *
     * @return string
     */
    public function getVideoNewMd5()
    {
        $value = $this->get(self::VIDEONEWMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'VideoNewMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoNewMd5()
    {
        return $this->get(self::VIDEONEWMD5) !== null;
    }

    /**
     * Sets value of 'crc32' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCrc32($value)
    {
        return $this->set(self::CRC32, $value);
    }

    /**
     * Returns value of 'crc32' property
     *
     * @return integer
     */
    public function getCrc32()
    {
        $value = $this->get(self::CRC32);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'crc32' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCrc32()
    {
        return $this->get(self::CRC32) !== null;
    }

    /**
     * Sets value of 'msgForwardType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgForwardType($value)
    {
        return $this->set(self::MSGFORWARDTYPE, $value);
    }

    /**
     * Returns value of 'msgForwardType' property
     *
     * @return integer
     */
    public function getMsgForwardType()
    {
        $value = $this->get(self::MSGFORWARDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgForwardType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgForwardType()
    {
        return $this->get(self::MSGFORWARDTYPE) !== null;
    }

    /**
     * Sets value of 'Source' property
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
     * Returns value of 'Source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }
}
}