<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MassSendRequest message
 */
class MassSendRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const TOLIST = 2;
    const TOLISTMD5 = 3;
    const CLIENTID = 4;
    const MSGTYPE = 5;
    const MEDIATIME = 6;
    const DATABUFFER = 7;
    const DATASTARTPOS = 8;
    const DATATOTALLEN = 9;
    const THUMBTOTALLEN = 10;
    const THUMBSTARTPOS = 11;
    const THUMBDATA = 12;
    const CAMERATYPE = 13;
    const VIDEOSOURCE = 14;
    const TOLISTCOUNT = 15;
    const ISSENDAGAIN = 16;
    const COMPRESSTYPE = 17;
    const VOICEFORMAT = 18;
    const VIDEOURL = 19;
    const THUMBURL = 20;
    const THUMBWITH = 21;
    const THUMBHEIGHT = 22;
    const THUMBAESKEY = 23;
    const VIDEOAESKEY = 24;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::TOLIST => array(
            'name' => 'toList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TOLISTMD5 => array(
            'name' => 'toListMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTID => array(
            'name' => 'clientId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGTYPE => array(
            'name' => 'msgType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEDIATIME => array(
            'name' => 'mediaTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATABUFFER => array(
            'name' => 'dataBuffer',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::DATASTARTPOS => array(
            'name' => 'dataStartPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATATOTALLEN => array(
            'name' => 'dataTotalLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::CAMERATYPE => array(
            'name' => 'cameraType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEOSOURCE => array(
            'name' => 'videoSource',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOLISTCOUNT => array(
            'name' => 'toListCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ISSENDAGAIN => array(
            'name' => 'isSendAgain',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COMPRESSTYPE => array(
            'name' => 'compressType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VOICEFORMAT => array(
            'name' => 'voiceFormat',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VIDEOURL => array(
            'name' => 'videoUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::THUMBURL => array(
            'name' => 'thumbUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::THUMBWITH => array(
            'name' => 'thumbWith',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THUMBHEIGHT => array(
            'name' => 'thumbHeight',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::THUMBAESKEY => array(
            'name' => 'thumbAeskey',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VIDEOAESKEY => array(
            'name' => 'videoAeskey',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::TOLIST] = null;
        $this->values[self::TOLISTMD5] = null;
        $this->values[self::CLIENTID] = null;
        $this->values[self::MSGTYPE] = null;
        $this->values[self::MEDIATIME] = null;
        $this->values[self::DATABUFFER] = null;
        $this->values[self::DATASTARTPOS] = null;
        $this->values[self::DATATOTALLEN] = null;
        $this->values[self::THUMBTOTALLEN] = null;
        $this->values[self::THUMBSTARTPOS] = null;
        $this->values[self::THUMBDATA] = null;
        $this->values[self::CAMERATYPE] = null;
        $this->values[self::VIDEOSOURCE] = null;
        $this->values[self::TOLISTCOUNT] = null;
        $this->values[self::ISSENDAGAIN] = null;
        $this->values[self::COMPRESSTYPE] = null;
        $this->values[self::VOICEFORMAT] = null;
        $this->values[self::VIDEOURL] = null;
        $this->values[self::THUMBURL] = null;
        $this->values[self::THUMBWITH] = null;
        $this->values[self::THUMBHEIGHT] = null;
        $this->values[self::THUMBAESKEY] = null;
        $this->values[self::VIDEOAESKEY] = null;
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
     * Sets value of 'toList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToList($value)
    {
        return $this->set(self::TOLIST, $value);
    }

    /**
     * Returns value of 'toList' property
     *
     * @return string
     */
    public function getToList()
    {
        $value = $this->get(self::TOLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'toList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToList()
    {
        return $this->get(self::TOLIST) !== null;
    }

    /**
     * Sets value of 'toListMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setToListMd5($value)
    {
        return $this->set(self::TOLISTMD5, $value);
    }

    /**
     * Returns value of 'toListMd5' property
     *
     * @return string
     */
    public function getToListMd5()
    {
        $value = $this->get(self::TOLISTMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'toListMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToListMd5()
    {
        return $this->get(self::TOLISTMD5) !== null;
    }

    /**
     * Sets value of 'clientId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientId($value)
    {
        return $this->set(self::CLIENTID, $value);
    }

    /**
     * Returns value of 'clientId' property
     *
     * @return string
     */
    public function getClientId()
    {
        $value = $this->get(self::CLIENTID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientId()
    {
        return $this->get(self::CLIENTID) !== null;
    }

    /**
     * Sets value of 'msgType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgType($value)
    {
        return $this->set(self::MSGTYPE, $value);
    }

    /**
     * Returns value of 'msgType' property
     *
     * @return integer
     */
    public function getMsgType()
    {
        $value = $this->get(self::MSGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgType()
    {
        return $this->get(self::MSGTYPE) !== null;
    }

    /**
     * Sets value of 'mediaTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMediaTime($value)
    {
        return $this->set(self::MEDIATIME, $value);
    }

    /**
     * Returns value of 'mediaTime' property
     *
     * @return integer
     */
    public function getMediaTime()
    {
        $value = $this->get(self::MEDIATIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mediaTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMediaTime()
    {
        return $this->get(self::MEDIATIME) !== null;
    }

    /**
     * Sets value of 'dataBuffer' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setDataBuffer(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::DATABUFFER, $value);
    }

    /**
     * Returns value of 'dataBuffer' property
     *
     * @return \SKBuiltinString_S
     */
    public function getDataBuffer()
    {
        return $this->get(self::DATABUFFER);
    }

    /**
     * Returns true if 'dataBuffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataBuffer()
    {
        return $this->get(self::DATABUFFER) !== null;
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
     * Sets value of 'dataTotalLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDataTotalLen($value)
    {
        return $this->set(self::DATATOTALLEN, $value);
    }

    /**
     * Returns value of 'dataTotalLen' property
     *
     * @return integer
     */
    public function getDataTotalLen()
    {
        $value = $this->get(self::DATATOTALLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dataTotalLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataTotalLen()
    {
        return $this->get(self::DATATOTALLEN) !== null;
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
     * Sets value of 'videoSource' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVideoSource($value)
    {
        return $this->set(self::VIDEOSOURCE, $value);
    }

    /**
     * Returns value of 'videoSource' property
     *
     * @return integer
     */
    public function getVideoSource()
    {
        $value = $this->get(self::VIDEOSOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'videoSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoSource()
    {
        return $this->get(self::VIDEOSOURCE) !== null;
    }

    /**
     * Sets value of 'toListCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setToListCount($value)
    {
        return $this->set(self::TOLISTCOUNT, $value);
    }

    /**
     * Returns value of 'toListCount' property
     *
     * @return integer
     */
    public function getToListCount()
    {
        $value = $this->get(self::TOLISTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'toListCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToListCount()
    {
        return $this->get(self::TOLISTCOUNT) !== null;
    }

    /**
     * Sets value of 'isSendAgain' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setIsSendAgain($value)
    {
        return $this->set(self::ISSENDAGAIN, $value);
    }

    /**
     * Returns value of 'isSendAgain' property
     *
     * @return integer
     */
    public function getIsSendAgain()
    {
        $value = $this->get(self::ISSENDAGAIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'isSendAgain' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIsSendAgain()
    {
        return $this->get(self::ISSENDAGAIN) !== null;
    }

    /**
     * Sets value of 'compressType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCompressType($value)
    {
        return $this->set(self::COMPRESSTYPE, $value);
    }

    /**
     * Returns value of 'compressType' property
     *
     * @return integer
     */
    public function getCompressType()
    {
        $value = $this->get(self::COMPRESSTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'compressType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCompressType()
    {
        return $this->get(self::COMPRESSTYPE) !== null;
    }

    /**
     * Sets value of 'voiceFormat' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVoiceFormat($value)
    {
        return $this->set(self::VOICEFORMAT, $value);
    }

    /**
     * Returns value of 'voiceFormat' property
     *
     * @return integer
     */
    public function getVoiceFormat()
    {
        $value = $this->get(self::VOICEFORMAT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'voiceFormat' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVoiceFormat()
    {
        return $this->get(self::VOICEFORMAT) !== null;
    }

    /**
     * Sets value of 'videoUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVideoUrl($value)
    {
        return $this->set(self::VIDEOURL, $value);
    }

    /**
     * Returns value of 'videoUrl' property
     *
     * @return string
     */
    public function getVideoUrl()
    {
        $value = $this->get(self::VIDEOURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'videoUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoUrl()
    {
        return $this->get(self::VIDEOURL) !== null;
    }

    /**
     * Sets value of 'thumbUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThumbUrl($value)
    {
        return $this->set(self::THUMBURL, $value);
    }

    /**
     * Returns value of 'thumbUrl' property
     *
     * @return string
     */
    public function getThumbUrl()
    {
        $value = $this->get(self::THUMBURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'thumbUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbUrl()
    {
        return $this->get(self::THUMBURL) !== null;
    }

    /**
     * Sets value of 'thumbWith' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThumbWith($value)
    {
        return $this->set(self::THUMBWITH, $value);
    }

    /**
     * Returns value of 'thumbWith' property
     *
     * @return integer
     */
    public function getThumbWith()
    {
        $value = $this->get(self::THUMBWITH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'thumbWith' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbWith()
    {
        return $this->get(self::THUMBWITH) !== null;
    }

    /**
     * Sets value of 'thumbHeight' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setThumbHeight($value)
    {
        return $this->set(self::THUMBHEIGHT, $value);
    }

    /**
     * Returns value of 'thumbHeight' property
     *
     * @return integer
     */
    public function getThumbHeight()
    {
        $value = $this->get(self::THUMBHEIGHT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'thumbHeight' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbHeight()
    {
        return $this->get(self::THUMBHEIGHT) !== null;
    }

    /**
     * Sets value of 'thumbAeskey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setThumbAeskey($value)
    {
        return $this->set(self::THUMBAESKEY, $value);
    }

    /**
     * Returns value of 'thumbAeskey' property
     *
     * @return string
     */
    public function getThumbAeskey()
    {
        $value = $this->get(self::THUMBAESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'thumbAeskey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumbAeskey()
    {
        return $this->get(self::THUMBAESKEY) !== null;
    }

    /**
     * Sets value of 'videoAeskey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVideoAeskey($value)
    {
        return $this->set(self::VIDEOAESKEY, $value);
    }

    /**
     * Returns value of 'videoAeskey' property
     *
     * @return string
     */
    public function getVideoAeskey()
    {
        $value = $this->get(self::VIDEOAESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'videoAeskey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVideoAeskey()
    {
        return $this->get(self::VIDEOAESKEY) !== null;
    }
}
}