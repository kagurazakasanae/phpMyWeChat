<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsUploadRequest message
 */
class SnsUploadRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const TYPE = 2;
    const STARTPOS = 3;
    const TOTALLEN = 4;
    const BUFFER = 5;
    const CLIENTID = 6;
    const FILTERSTYPE = 7;
    const SYNCFLAG = 8;
    const DESCRIPT = 9;
    const PHOTOFROM = 10;
    const NETTYPE = 11;
    const TWITTERINFO = 12;
    const APPID = 13;
    const EXTFLAG = 14;
    const MD5 = 15;
    const OBJECTTYPE = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTPOS => array(
            'name' => 'startPos',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALLEN => array(
            'name' => 'totalLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BUFFER => array(
            'name' => 'buffer',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::CLIENTID => array(
            'name' => 'clientId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FILTERSTYPE => array(
            'name' => 'filterStype',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SYNCFLAG => array(
            'name' => 'syncFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESCRIPT => array(
            'name' => 'descript',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHOTOFROM => array(
            'name' => 'photoFrom',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NETTYPE => array(
            'name' => 'netType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TWITTERINFO => array(
            'name' => 'twitterInfo',
            'required' => true,
            'type' => '\TwitterInfo'
        ),
        self::APPID => array(
            'name' => 'appId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXTFLAG => array(
            'name' => 'extFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MD5 => array(
            'name' => 'md5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OBJECTTYPE => array(
            'name' => 'objectType',
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
        $this->values[self::TYPE] = null;
        $this->values[self::STARTPOS] = null;
        $this->values[self::TOTALLEN] = null;
        $this->values[self::BUFFER] = null;
        $this->values[self::CLIENTID] = null;
        $this->values[self::FILTERSTYPE] = null;
        $this->values[self::SYNCFLAG] = null;
        $this->values[self::DESCRIPT] = null;
        $this->values[self::PHOTOFROM] = null;
        $this->values[self::NETTYPE] = null;
        $this->values[self::TWITTERINFO] = null;
        $this->values[self::APPID] = null;
        $this->values[self::EXTFLAG] = null;
        $this->values[self::MD5] = null;
        $this->values[self::OBJECTTYPE] = null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'startPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartPos($value)
    {
        return $this->set(self::STARTPOS, $value);
    }

    /**
     * Returns value of 'startPos' property
     *
     * @return integer
     */
    public function getStartPos()
    {
        $value = $this->get(self::STARTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartPos()
    {
        return $this->get(self::STARTPOS) !== null;
    }

    /**
     * Sets value of 'totalLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalLen($value)
    {
        return $this->set(self::TOTALLEN, $value);
    }

    /**
     * Returns value of 'totalLen' property
     *
     * @return integer
     */
    public function getTotalLen()
    {
        $value = $this->get(self::TOTALLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalLen()
    {
        return $this->get(self::TOTALLEN) !== null;
    }

    /**
     * Sets value of 'buffer' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setBuffer(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::BUFFER, $value);
    }

    /**
     * Returns value of 'buffer' property
     *
     * @return \SKBuiltinString_
     */
    public function getBuffer()
    {
        return $this->get(self::BUFFER);
    }

    /**
     * Returns true if 'buffer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuffer()
    {
        return $this->get(self::BUFFER) !== null;
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
     * Sets value of 'filterStype' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFilterStype($value)
    {
        return $this->set(self::FILTERSTYPE, $value);
    }

    /**
     * Returns value of 'filterStype' property
     *
     * @return integer
     */
    public function getFilterStype()
    {
        $value = $this->get(self::FILTERSTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'filterStype' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFilterStype()
    {
        return $this->get(self::FILTERSTYPE) !== null;
    }

    /**
     * Sets value of 'syncFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSyncFlag($value)
    {
        return $this->set(self::SYNCFLAG, $value);
    }

    /**
     * Returns value of 'syncFlag' property
     *
     * @return integer
     */
    public function getSyncFlag()
    {
        $value = $this->get(self::SYNCFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'syncFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSyncFlag()
    {
        return $this->get(self::SYNCFLAG) !== null;
    }

    /**
     * Sets value of 'descript' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescript($value)
    {
        return $this->set(self::DESCRIPT, $value);
    }

    /**
     * Returns value of 'descript' property
     *
     * @return string
     */
    public function getDescript()
    {
        $value = $this->get(self::DESCRIPT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'descript' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDescript()
    {
        return $this->get(self::DESCRIPT) !== null;
    }

    /**
     * Sets value of 'photoFrom' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPhotoFrom($value)
    {
        return $this->set(self::PHOTOFROM, $value);
    }

    /**
     * Returns value of 'photoFrom' property
     *
     * @return integer
     */
    public function getPhotoFrom()
    {
        $value = $this->get(self::PHOTOFROM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'photoFrom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhotoFrom()
    {
        return $this->get(self::PHOTOFROM) !== null;
    }

    /**
     * Sets value of 'netType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNetType($value)
    {
        return $this->set(self::NETTYPE, $value);
    }

    /**
     * Returns value of 'netType' property
     *
     * @return integer
     */
    public function getNetType()
    {
        $value = $this->get(self::NETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'netType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNetType()
    {
        return $this->get(self::NETTYPE) !== null;
    }

    /**
     * Sets value of 'twitterInfo' property
     *
     * @param \TwitterInfo $value Property value
     *
     * @return null
     */
    public function setTwitterInfo(\TwitterInfo $value=null)
    {
        return $this->set(self::TWITTERINFO, $value);
    }

    /**
     * Returns value of 'twitterInfo' property
     *
     * @return \TwitterInfo
     */
    public function getTwitterInfo()
    {
        return $this->get(self::TWITTERINFO);
    }

    /**
     * Returns true if 'twitterInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTwitterInfo()
    {
        return $this->get(self::TWITTERINFO) !== null;
    }

    /**
     * Sets value of 'appId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAppId($value)
    {
        return $this->set(self::APPID, $value);
    }

    /**
     * Returns value of 'appId' property
     *
     * @return string
     */
    public function getAppId()
    {
        $value = $this->get(self::APPID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'appId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppId()
    {
        return $this->get(self::APPID) !== null;
    }

    /**
     * Sets value of 'extFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExtFlag($value)
    {
        return $this->set(self::EXTFLAG, $value);
    }

    /**
     * Returns value of 'extFlag' property
     *
     * @return integer
     */
    public function getExtFlag()
    {
        $value = $this->get(self::EXTFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'extFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtFlag()
    {
        return $this->get(self::EXTFLAG) !== null;
    }

    /**
     * Sets value of 'md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMd5($value)
    {
        return $this->set(self::MD5, $value);
    }

    /**
     * Returns value of 'md5' property
     *
     * @return string
     */
    public function getMd5()
    {
        $value = $this->get(self::MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'md5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMd5()
    {
        return $this->get(self::MD5) !== null;
    }

    /**
     * Sets value of 'objectType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setObjectType($value)
    {
        return $this->set(self::OBJECTTYPE, $value);
    }

    /**
     * Returns value of 'objectType' property
     *
     * @return integer
     */
    public function getObjectType()
    {
        $value = $this->get(self::OBJECTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'objectType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectType()
    {
        return $this->get(self::OBJECTTYPE) !== null;
    }
}
}