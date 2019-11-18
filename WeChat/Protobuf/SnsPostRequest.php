<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsPostRequest message
 */
class SnsPostRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const OBJECTDESC = 2;
    const WITHUSERLISTNUM = 3;
    const WITHUSERLIST = 4;
    const PRIVACY = 5;
    const SYNCFLAG = 6;
    const CLIENTID = 7;
    const POSTBGIMGTYPE = 8;
    const GROUPNUM = 9;
    const GROUPIDS = 10;
    const OBJECTSOURCE = 11;
    const REFERID = 12;
    const BLACKLISTNUM = 13;
    const BLACKLIST = 14;
    const TWITTERINFO = 15;
    const GROUPUSERNUM = 16;
    const GROUPUSER = 17;
    const CTOCUPLOADINFO = 18;
    const SNSPOSTOPERATIONFIELDS = 19;
    const SNSREDENVELOPS = 20;
    const POIINFO = 21;
    const FROMSCENE = 22;
    const CANVASINFO = 23;
    const MEDIAINFOCOUNT = 24;
    const MEDIAINFO = 25;
    const WEAPPINFO = 26;
    const CLIENTCHECKDATA = 27;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::OBJECTDESC => array(
            'name' => 'objectDesc',
            'required' => true,
            'type' => '\SKBuiltinString_S'
        ),
        self::WITHUSERLISTNUM => array(
            'name' => 'withUserListNum',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WITHUSERLIST => array(
            'name' => 'withUserList',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::PRIVACY => array(
            'name' => 'privacy',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SYNCFLAG => array(
            'name' => 'syncFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTID => array(
            'name' => 'clientId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::POSTBGIMGTYPE => array(
            'name' => 'postBGImgType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPNUM => array(
            'name' => 'groupNum',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPIDS => array(
            'name' => 'groupIds',
            'repeated' => true,
            'type' => '\SnsGroup'
        ),
        self::OBJECTSOURCE => array(
            'name' => 'objectSource',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REFERID => array(
            'name' => 'referId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLACKLISTNUM => array(
            'name' => 'blackListNum',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLACKLIST => array(
            'name' => 'blackList',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::TWITTERINFO => array(
            'name' => 'twitterInfo',
            'required' => true,
            'type' => '\TwitterInfo'
        ),
        self::GROUPUSERNUM => array(
            'name' => 'groupUserNum',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::GROUPUSER => array(
            'name' => 'groupUser',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::CTOCUPLOADINFO => array(
            'name' => 'ctocUploadInfo',
            'required' => true,
            'type' => '\SnsPostCtocUploadInfo'
        ),
        self::SNSPOSTOPERATIONFIELDS => array(
            'name' => 'snsPostOperationFields',
            'required' => true,
            'type' => '\SnsPostOperationFields'
        ),
        self::SNSREDENVELOPS => array(
            'name' => 'snsRedEnvelops',
            'required' => true,
            'type' => '\SnsRedEnvelops'
        ),
        self::POIINFO => array(
            'name' => 'poiInfo',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::FROMSCENE => array(
            'name' => 'fromScene',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CANVASINFO => array(
            'name' => 'canvasInfo',
            'required' => true,
            'type' => '\CanvasInfo'
        ),
        self::MEDIAINFOCOUNT => array(
            'name' => 'mediaInfoCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MEDIAINFO => array(
            'name' => 'mediaInfo',
            'repeated' => true,
            'type' => '\MediaInfo'
        ),
        self::WEAPPINFO => array(
            'name' => 'weAppInfo',
            'repeated' => true,
            'type' => '\SnsWeAppInfo'
        ),
        self::CLIENTCHECKDATA => array(
            'name' => 'clientCheckData',
            'required' => true,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::OBJECTDESC] = null;
        $this->values[self::WITHUSERLISTNUM] = null;
        $this->values[self::WITHUSERLIST] = array();
        $this->values[self::PRIVACY] = null;
        $this->values[self::SYNCFLAG] = null;
        $this->values[self::CLIENTID] = null;
        $this->values[self::POSTBGIMGTYPE] = null;
        $this->values[self::GROUPNUM] = null;
        $this->values[self::GROUPIDS] = array();
        $this->values[self::OBJECTSOURCE] = null;
        $this->values[self::REFERID] = null;
        $this->values[self::BLACKLISTNUM] = null;
        $this->values[self::BLACKLIST] = array();
        $this->values[self::TWITTERINFO] = null;
        $this->values[self::GROUPUSERNUM] = null;
        $this->values[self::GROUPUSER] = array();
        $this->values[self::CTOCUPLOADINFO] = null;
        $this->values[self::SNSPOSTOPERATIONFIELDS] = null;
        $this->values[self::SNSREDENVELOPS] = null;
        $this->values[self::POIINFO] = null;
        $this->values[self::FROMSCENE] = null;
        $this->values[self::CANVASINFO] = null;
        $this->values[self::MEDIAINFOCOUNT] = null;
        $this->values[self::MEDIAINFO] = array();
        $this->values[self::WEAPPINFO] = array();
        $this->values[self::CLIENTCHECKDATA] = null;
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
     * Sets value of 'objectDesc' property
     *
     * @param \SKBuiltinString_S $value Property value
     *
     * @return null
     */
    public function setObjectDesc(\SKBuiltinString_S $value=null)
    {
        return $this->set(self::OBJECTDESC, $value);
    }

    /**
     * Returns value of 'objectDesc' property
     *
     * @return \SKBuiltinString_S
     */
    public function getObjectDesc()
    {
        return $this->get(self::OBJECTDESC);
    }

    /**
     * Returns true if 'objectDesc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectDesc()
    {
        return $this->get(self::OBJECTDESC) !== null;
    }

    /**
     * Sets value of 'withUserListNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWithUserListNum($value)
    {
        return $this->set(self::WITHUSERLISTNUM, $value);
    }

    /**
     * Returns value of 'withUserListNum' property
     *
     * @return integer
     */
    public function getWithUserListNum()
    {
        $value = $this->get(self::WITHUSERLISTNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'withUserListNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWithUserListNum()
    {
        return $this->get(self::WITHUSERLISTNUM) !== null;
    }

    /**
     * Appends value to 'withUserList' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendWithUserList(\SKBuiltinString $value)
    {
        return $this->append(self::WITHUSERLIST, $value);
    }

    /**
     * Clears 'withUserList' list
     *
     * @return null
     */
    public function clearWithUserList()
    {
        return $this->clear(self::WITHUSERLIST);
    }

    /**
     * Returns 'withUserList' list
     *
     * @return \SKBuiltinString[]
     */
    public function getWithUserList()
    {
        return $this->get(self::WITHUSERLIST);
    }

    /**
     * Returns true if 'withUserList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWithUserList()
    {
        return count($this->get(self::WITHUSERLIST)) !== 0;
    }

    /**
     * Returns 'withUserList' iterator
     *
     * @return \ArrayIterator
     */
    public function getWithUserListIterator()
    {
        return new \ArrayIterator($this->get(self::WITHUSERLIST));
    }

    /**
     * Returns element from 'withUserList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getWithUserListAt($offset)
    {
        return $this->get(self::WITHUSERLIST, $offset);
    }

    /**
     * Returns count of 'withUserList' list
     *
     * @return int
     */
    public function getWithUserListCount()
    {
        return $this->count(self::WITHUSERLIST);
    }

    /**
     * Sets value of 'privacy' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPrivacy($value)
    {
        return $this->set(self::PRIVACY, $value);
    }

    /**
     * Returns value of 'privacy' property
     *
     * @return integer
     */
    public function getPrivacy()
    {
        $value = $this->get(self::PRIVACY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'privacy' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPrivacy()
    {
        return $this->get(self::PRIVACY) !== null;
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
     * Sets value of 'postBGImgType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPostBGImgType($value)
    {
        return $this->set(self::POSTBGIMGTYPE, $value);
    }

    /**
     * Returns value of 'postBGImgType' property
     *
     * @return integer
     */
    public function getPostBGImgType()
    {
        $value = $this->get(self::POSTBGIMGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'postBGImgType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPostBGImgType()
    {
        return $this->get(self::POSTBGIMGTYPE) !== null;
    }

    /**
     * Sets value of 'groupNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupNum($value)
    {
        return $this->set(self::GROUPNUM, $value);
    }

    /**
     * Returns value of 'groupNum' property
     *
     * @return integer
     */
    public function getGroupNum()
    {
        $value = $this->get(self::GROUPNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupNum()
    {
        return $this->get(self::GROUPNUM) !== null;
    }

    /**
     * Appends value to 'groupIds' list
     *
     * @param \SnsGroup $value Value to append
     *
     * @return null
     */
    public function appendGroupIds(\SnsGroup $value)
    {
        return $this->append(self::GROUPIDS, $value);
    }

    /**
     * Clears 'groupIds' list
     *
     * @return null
     */
    public function clearGroupIds()
    {
        return $this->clear(self::GROUPIDS);
    }

    /**
     * Returns 'groupIds' list
     *
     * @return \SnsGroup[]
     */
    public function getGroupIds()
    {
        return $this->get(self::GROUPIDS);
    }

    /**
     * Returns true if 'groupIds' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupIds()
    {
        return count($this->get(self::GROUPIDS)) !== 0;
    }

    /**
     * Returns 'groupIds' iterator
     *
     * @return \ArrayIterator
     */
    public function getGroupIdsIterator()
    {
        return new \ArrayIterator($this->get(self::GROUPIDS));
    }

    /**
     * Returns element from 'groupIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SnsGroup
     */
    public function getGroupIdsAt($offset)
    {
        return $this->get(self::GROUPIDS, $offset);
    }

    /**
     * Returns count of 'groupIds' list
     *
     * @return int
     */
    public function getGroupIdsCount()
    {
        return $this->count(self::GROUPIDS);
    }

    /**
     * Sets value of 'objectSource' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setObjectSource($value)
    {
        return $this->set(self::OBJECTSOURCE, $value);
    }

    /**
     * Returns value of 'objectSource' property
     *
     * @return integer
     */
    public function getObjectSource()
    {
        $value = $this->get(self::OBJECTSOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'objectSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasObjectSource()
    {
        return $this->get(self::OBJECTSOURCE) !== null;
    }

    /**
     * Sets value of 'referId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReferId($value)
    {
        return $this->set(self::REFERID, $value);
    }

    /**
     * Returns value of 'referId' property
     *
     * @return integer
     */
    public function getReferId()
    {
        $value = $this->get(self::REFERID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'referId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReferId()
    {
        return $this->get(self::REFERID) !== null;
    }

    /**
     * Sets value of 'blackListNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBlackListNum($value)
    {
        return $this->set(self::BLACKLISTNUM, $value);
    }

    /**
     * Returns value of 'blackListNum' property
     *
     * @return integer
     */
    public function getBlackListNum()
    {
        $value = $this->get(self::BLACKLISTNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'blackListNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlackListNum()
    {
        return $this->get(self::BLACKLISTNUM) !== null;
    }

    /**
     * Appends value to 'blackList' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendBlackList(\SKBuiltinString $value)
    {
        return $this->append(self::BLACKLIST, $value);
    }

    /**
     * Clears 'blackList' list
     *
     * @return null
     */
    public function clearBlackList()
    {
        return $this->clear(self::BLACKLIST);
    }

    /**
     * Returns 'blackList' list
     *
     * @return \SKBuiltinString[]
     */
    public function getBlackList()
    {
        return $this->get(self::BLACKLIST);
    }

    /**
     * Returns true if 'blackList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlackList()
    {
        return count($this->get(self::BLACKLIST)) !== 0;
    }

    /**
     * Returns 'blackList' iterator
     *
     * @return \ArrayIterator
     */
    public function getBlackListIterator()
    {
        return new \ArrayIterator($this->get(self::BLACKLIST));
    }

    /**
     * Returns element from 'blackList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getBlackListAt($offset)
    {
        return $this->get(self::BLACKLIST, $offset);
    }

    /**
     * Returns count of 'blackList' list
     *
     * @return int
     */
    public function getBlackListCount()
    {
        return $this->count(self::BLACKLIST);
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
     * Sets value of 'groupUserNum' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGroupUserNum($value)
    {
        return $this->set(self::GROUPUSERNUM, $value);
    }

    /**
     * Returns value of 'groupUserNum' property
     *
     * @return integer
     */
    public function getGroupUserNum()
    {
        $value = $this->get(self::GROUPUSERNUM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'groupUserNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupUserNum()
    {
        return $this->get(self::GROUPUSERNUM) !== null;
    }

    /**
     * Appends value to 'groupUser' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendGroupUser(\SKBuiltinString $value)
    {
        return $this->append(self::GROUPUSER, $value);
    }

    /**
     * Clears 'groupUser' list
     *
     * @return null
     */
    public function clearGroupUser()
    {
        return $this->clear(self::GROUPUSER);
    }

    /**
     * Returns 'groupUser' list
     *
     * @return \SKBuiltinString[]
     */
    public function getGroupUser()
    {
        return $this->get(self::GROUPUSER);
    }

    /**
     * Returns true if 'groupUser' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGroupUser()
    {
        return count($this->get(self::GROUPUSER)) !== 0;
    }

    /**
     * Returns 'groupUser' iterator
     *
     * @return \ArrayIterator
     */
    public function getGroupUserIterator()
    {
        return new \ArrayIterator($this->get(self::GROUPUSER));
    }

    /**
     * Returns element from 'groupUser' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getGroupUserAt($offset)
    {
        return $this->get(self::GROUPUSER, $offset);
    }

    /**
     * Returns count of 'groupUser' list
     *
     * @return int
     */
    public function getGroupUserCount()
    {
        return $this->count(self::GROUPUSER);
    }

    /**
     * Sets value of 'ctocUploadInfo' property
     *
     * @param \SnsPostCtocUploadInfo $value Property value
     *
     * @return null
     */
    public function setCtocUploadInfo(\SnsPostCtocUploadInfo $value=null)
    {
        return $this->set(self::CTOCUPLOADINFO, $value);
    }

    /**
     * Returns value of 'ctocUploadInfo' property
     *
     * @return \SnsPostCtocUploadInfo
     */
    public function getCtocUploadInfo()
    {
        return $this->get(self::CTOCUPLOADINFO);
    }

    /**
     * Returns true if 'ctocUploadInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCtocUploadInfo()
    {
        return $this->get(self::CTOCUPLOADINFO) !== null;
    }

    /**
     * Sets value of 'snsPostOperationFields' property
     *
     * @param \SnsPostOperationFields $value Property value
     *
     * @return null
     */
    public function setSnsPostOperationFields(\SnsPostOperationFields $value=null)
    {
        return $this->set(self::SNSPOSTOPERATIONFIELDS, $value);
    }

    /**
     * Returns value of 'snsPostOperationFields' property
     *
     * @return \SnsPostOperationFields
     */
    public function getSnsPostOperationFields()
    {
        return $this->get(self::SNSPOSTOPERATIONFIELDS);
    }

    /**
     * Returns true if 'snsPostOperationFields' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsPostOperationFields()
    {
        return $this->get(self::SNSPOSTOPERATIONFIELDS) !== null;
    }

    /**
     * Sets value of 'snsRedEnvelops' property
     *
     * @param \SnsRedEnvelops $value Property value
     *
     * @return null
     */
    public function setSnsRedEnvelops(\SnsRedEnvelops $value=null)
    {
        return $this->set(self::SNSREDENVELOPS, $value);
    }

    /**
     * Returns value of 'snsRedEnvelops' property
     *
     * @return \SnsRedEnvelops
     */
    public function getSnsRedEnvelops()
    {
        return $this->get(self::SNSREDENVELOPS);
    }

    /**
     * Returns true if 'snsRedEnvelops' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsRedEnvelops()
    {
        return $this->get(self::SNSREDENVELOPS) !== null;
    }

    /**
     * Sets value of 'poiInfo' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setPoiInfo(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::POIINFO, $value);
    }

    /**
     * Returns value of 'poiInfo' property
     *
     * @return \SKBuiltinString_
     */
    public function getPoiInfo()
    {
        return $this->get(self::POIINFO);
    }

    /**
     * Returns true if 'poiInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPoiInfo()
    {
        return $this->get(self::POIINFO) !== null;
    }

    /**
     * Sets value of 'fromScene' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFromScene($value)
    {
        return $this->set(self::FROMSCENE, $value);
    }

    /**
     * Returns value of 'fromScene' property
     *
     * @return string
     */
    public function getFromScene()
    {
        $value = $this->get(self::FROMSCENE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fromScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromScene()
    {
        return $this->get(self::FROMSCENE) !== null;
    }

    /**
     * Sets value of 'canvasInfo' property
     *
     * @param \CanvasInfo $value Property value
     *
     * @return null
     */
    public function setCanvasInfo(\CanvasInfo $value=null)
    {
        return $this->set(self::CANVASINFO, $value);
    }

    /**
     * Returns value of 'canvasInfo' property
     *
     * @return \CanvasInfo
     */
    public function getCanvasInfo()
    {
        return $this->get(self::CANVASINFO);
    }

    /**
     * Returns true if 'canvasInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCanvasInfo()
    {
        return $this->get(self::CANVASINFO) !== null;
    }

    /**
     * Sets value of 'mediaInfoCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMediaInfoCount($value)
    {
        return $this->set(self::MEDIAINFOCOUNT, $value);
    }

    /**
     * Returns value of 'mediaInfoCount' property
     *
     * @return integer
     */
    public function getMediaInfoCount()
    {
        $value = $this->get(self::MEDIAINFOCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mediaInfoCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMediaInfoCount()
    {
        return $this->get(self::MEDIAINFOCOUNT) !== null;
    }

    /**
     * Appends value to 'mediaInfo' list
     *
     * @param \MediaInfo $value Value to append
     *
     * @return null
     */
    public function appendMediaInfo(\MediaInfo $value)
    {
        return $this->append(self::MEDIAINFO, $value);
    }

    /**
     * Clears 'mediaInfo' list
     *
     * @return null
     */
    public function clearMediaInfo()
    {
        return $this->clear(self::MEDIAINFO);
    }

    /**
     * Returns 'mediaInfo' list
     *
     * @return \MediaInfo[]
     */
    public function getMediaInfo()
    {
        return $this->get(self::MEDIAINFO);
    }

    /**
     * Returns true if 'mediaInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMediaInfo()
    {
        return count($this->get(self::MEDIAINFO)) !== 0;
    }

    /**
     * Returns 'mediaInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getMediaInfoIterator()
    {
        return new \ArrayIterator($this->get(self::MEDIAINFO));
    }

    /**
     * Returns element from 'mediaInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \MediaInfo
     */
    public function getMediaInfoAt($offset)
    {
        return $this->get(self::MEDIAINFO, $offset);
    }

    /**
     * Appends value to 'weAppInfo' list
     *
     * @param \SnsWeAppInfo $value Value to append
     *
     * @return null
     */
    public function appendWeAppInfo(\SnsWeAppInfo $value)
    {
        return $this->append(self::WEAPPINFO, $value);
    }

    /**
     * Clears 'weAppInfo' list
     *
     * @return null
     */
    public function clearWeAppInfo()
    {
        return $this->clear(self::WEAPPINFO);
    }

    /**
     * Returns 'weAppInfo' list
     *
     * @return \SnsWeAppInfo[]
     */
    public function getWeAppInfo()
    {
        return $this->get(self::WEAPPINFO);
    }

    /**
     * Returns true if 'weAppInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeAppInfo()
    {
        return count($this->get(self::WEAPPINFO)) !== 0;
    }

    /**
     * Returns 'weAppInfo' iterator
     *
     * @return \ArrayIterator
     */
    public function getWeAppInfoIterator()
    {
        return new \ArrayIterator($this->get(self::WEAPPINFO));
    }

    /**
     * Returns element from 'weAppInfo' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SnsWeAppInfo
     */
    public function getWeAppInfoAt($offset)
    {
        return $this->get(self::WEAPPINFO, $offset);
    }

    /**
     * Returns count of 'weAppInfo' list
     *
     * @return int
     */
    public function getWeAppInfoCount()
    {
        return $this->count(self::WEAPPINFO);
    }

    /**
     * Sets value of 'clientCheckData' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setClientCheckData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIENTCHECKDATA, $value);
    }

    /**
     * Returns value of 'clientCheckData' property
     *
     * @return \SKBuiltinString_
     */
    public function getClientCheckData()
    {
        return $this->get(self::CLIENTCHECKDATA);
    }

    /**
     * Returns true if 'clientCheckData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientCheckData()
    {
        return $this->get(self::CLIENTCHECKDATA) !== null;
    }
}
}