<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetA8KeyResponse message
 */
class GetA8KeyResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const FULLURL = 2;
    const A8KEY = 3;
    const ACTIONCODE = 4;
    const TITLE = 5;
    const CONTENT = 6;
    const JSAPIPERMISSION = 7;
    const GENERALCONTROLBITSET = 8;
    const USERNAME = 9;
    const SHAREURL = 15;
    const SCOPECOUNT = 16;
    const SCOPELIST = 17;
    const ANTISPAMTICKET = 18;
    const SSID = 20;
    const MID = 21;
    const DEEPLINKBITSET = 22;
    const JSAPICONTROLBYTES = 23;
    const HTTPHEADERCOUNT = 24;
    const HTTPHEADER = 25;
    const WORDING = 26;
    const HEADIMG = 27;
    const COOKIE = 28;
    const MENUWORDING = 29;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::FULLURL => array(
            'name' => 'fullURL',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::A8KEY => array(
            'name' => 'a8key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ACTIONCODE => array(
            'default' => \enMMScanQrcodeActionCode::MMSCAN_QRCODE_A8KEY,
            'name' => 'actionCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TITLE => array(
            'name' => 'title',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::JSAPIPERMISSION => array(
            'name' => 'jSAPIPermission',
            'required' => false,
            'type' => '\JSAPIPermissionBitSet'
        ),
        self::GENERALCONTROLBITSET => array(
            'name' => 'generalControlBitSet',
            'required' => false,
            'type' => '\GeneralControlBitSet'
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHAREURL => array(
            'name' => 'shareURL',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCOPECOUNT => array(
            'default' => 0,
            'name' => 'scopeCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCOPELIST => array(
            'name' => 'ScopeList',
            'repeated' => true,
            'type' => '\BizScopeInfo'
        ),
        self::ANTISPAMTICKET => array(
            'name' => 'antispamTicket',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SSID => array(
            'name' => 'ssid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MID => array(
            'name' => 'mID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEEPLINKBITSET => array(
            'name' => 'deepLinkBitSet',
            'required' => false,
            'type' => '\DeepLinkBitSet'
        ),
        self::JSAPICONTROLBYTES => array(
            'name' => 'jSAPIControlBytes',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::HTTPHEADERCOUNT => array(
            'default' => 0,
            'name' => 'httpHeaderCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HTTPHEADER => array(
            'name' => 'httpHeader',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::WORDING => array(
            'name' => 'wording',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HEADIMG => array(
            'name' => 'headimg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COOKIE => array(
            'name' => 'cookie',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::MENUWORDING => array(
            'name' => 'menuWording',
            'required' => false,
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
        $this->values[self::FULLURL] = null;
        $this->values[self::A8KEY] = null;
        $this->values[self::ACTIONCODE] = self::$fields[self::ACTIONCODE]['default'];
        $this->values[self::TITLE] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::JSAPIPERMISSION] = null;
        $this->values[self::GENERALCONTROLBITSET] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::SHAREURL] = null;
        $this->values[self::SCOPECOUNT] = self::$fields[self::SCOPECOUNT]['default'];
        $this->values[self::SCOPELIST] = array();
        $this->values[self::ANTISPAMTICKET] = null;
        $this->values[self::SSID] = null;
        $this->values[self::MID] = null;
        $this->values[self::DEEPLINKBITSET] = null;
        $this->values[self::JSAPICONTROLBYTES] = null;
        $this->values[self::HTTPHEADERCOUNT] = self::$fields[self::HTTPHEADERCOUNT]['default'];
        $this->values[self::HTTPHEADER] = null;
        $this->values[self::WORDING] = null;
        $this->values[self::HEADIMG] = null;
        $this->values[self::COOKIE] = null;
        $this->values[self::MENUWORDING] = null;
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
     * Sets value of 'fullURL' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFullURL($value)
    {
        return $this->set(self::FULLURL, $value);
    }

    /**
     * Returns value of 'fullURL' property
     *
     * @return string
     */
    public function getFullURL()
    {
        $value = $this->get(self::FULLURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fullURL' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFullURL()
    {
        return $this->get(self::FULLURL) !== null;
    }

    /**
     * Sets value of 'a8key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setA8key($value)
    {
        return $this->set(self::A8KEY, $value);
    }

    /**
     * Returns value of 'a8key' property
     *
     * @return string
     */
    public function getA8key()
    {
        $value = $this->get(self::A8KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'a8key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasA8key()
    {
        return $this->get(self::A8KEY) !== null;
    }

    /**
     * Sets value of 'actionCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setActionCode($value)
    {
        return $this->set(self::ACTIONCODE, $value);
    }

    /**
     * Returns value of 'actionCode' property
     *
     * @return integer
     */
    public function getActionCode()
    {
        $value = $this->get(self::ACTIONCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'actionCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasActionCode()
    {
        return $this->get(self::ACTIONCODE) !== null;
    }

    /**
     * Sets value of 'title' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTitle($value)
    {
        return $this->set(self::TITLE, $value);
    }

    /**
     * Returns value of 'title' property
     *
     * @return string
     */
    public function getTitle()
    {
        $value = $this->get(self::TITLE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'title' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTitle()
    {
        return $this->get(self::TITLE) !== null;
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContent()
    {
        return $this->get(self::CONTENT) !== null;
    }

    /**
     * Sets value of 'jSAPIPermission' property
     *
     * @param \JSAPIPermissionBitSet $value Property value
     *
     * @return null
     */
    public function setJSAPIPermission(\JSAPIPermissionBitSet $value=null)
    {
        return $this->set(self::JSAPIPERMISSION, $value);
    }

    /**
     * Returns value of 'jSAPIPermission' property
     *
     * @return \JSAPIPermissionBitSet
     */
    public function getJSAPIPermission()
    {
        return $this->get(self::JSAPIPERMISSION);
    }

    /**
     * Returns true if 'jSAPIPermission' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJSAPIPermission()
    {
        return $this->get(self::JSAPIPERMISSION) !== null;
    }

    /**
     * Sets value of 'generalControlBitSet' property
     *
     * @param \GeneralControlBitSet $value Property value
     *
     * @return null
     */
    public function setGeneralControlBitSet(\GeneralControlBitSet $value=null)
    {
        return $this->set(self::GENERALCONTROLBITSET, $value);
    }

    /**
     * Returns value of 'generalControlBitSet' property
     *
     * @return \GeneralControlBitSet
     */
    public function getGeneralControlBitSet()
    {
        return $this->get(self::GENERALCONTROLBITSET);
    }

    /**
     * Returns true if 'generalControlBitSet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGeneralControlBitSet()
    {
        return $this->get(self::GENERALCONTROLBITSET) !== null;
    }

    /**
     * Sets value of 'userName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'userName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'shareURL' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShareURL($value)
    {
        return $this->set(self::SHAREURL, $value);
    }

    /**
     * Returns value of 'shareURL' property
     *
     * @return string
     */
    public function getShareURL()
    {
        $value = $this->get(self::SHAREURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'shareURL' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShareURL()
    {
        return $this->get(self::SHAREURL) !== null;
    }

    /**
     * Sets value of 'scopeCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScopeCount($value)
    {
        return $this->set(self::SCOPECOUNT, $value);
    }

    /**
     * Returns value of 'scopeCount' property
     *
     * @return integer
     */
    public function getScopeCount()
    {
        $value = $this->get(self::SCOPECOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scopeCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScopeCount()
    {
        return $this->get(self::SCOPECOUNT) !== null;
    }

    /**
     * Appends value to 'ScopeList' list
     *
     * @param \BizScopeInfo $value Value to append
     *
     * @return null
     */
    public function appendScopeList(\BizScopeInfo $value)
    {
        return $this->append(self::SCOPELIST, $value);
    }

    /**
     * Clears 'ScopeList' list
     *
     * @return null
     */
    public function clearScopeList()
    {
        return $this->clear(self::SCOPELIST);
    }

    /**
     * Returns 'ScopeList' list
     *
     * @return \BizScopeInfo[]
     */
    public function getScopeList()
    {
        return $this->get(self::SCOPELIST);
    }

    /**
     * Returns true if 'ScopeList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScopeList()
    {
        return count($this->get(self::SCOPELIST)) !== 0;
    }

    /**
     * Returns 'ScopeList' iterator
     *
     * @return \ArrayIterator
     */
    public function getScopeListIterator()
    {
        return new \ArrayIterator($this->get(self::SCOPELIST));
    }

    /**
     * Returns element from 'ScopeList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \BizScopeInfo
     */
    public function getScopeListAt($offset)
    {
        return $this->get(self::SCOPELIST, $offset);
    }

    /**
     * Returns count of 'ScopeList' list
     *
     * @return int
     */
    public function getScopeListCount()
    {
        return $this->count(self::SCOPELIST);
    }

    /**
     * Sets value of 'antispamTicket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAntispamTicket($value)
    {
        return $this->set(self::ANTISPAMTICKET, $value);
    }

    /**
     * Returns value of 'antispamTicket' property
     *
     * @return string
     */
    public function getAntispamTicket()
    {
        $value = $this->get(self::ANTISPAMTICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'antispamTicket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAntispamTicket()
    {
        return $this->get(self::ANTISPAMTICKET) !== null;
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
     * Sets value of 'mID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMID($value)
    {
        return $this->set(self::MID, $value);
    }

    /**
     * Returns value of 'mID' property
     *
     * @return string
     */
    public function getMID()
    {
        $value = $this->get(self::MID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMID()
    {
        return $this->get(self::MID) !== null;
    }

    /**
     * Sets value of 'deepLinkBitSet' property
     *
     * @param \DeepLinkBitSet $value Property value
     *
     * @return null
     */
    public function setDeepLinkBitSet(\DeepLinkBitSet $value=null)
    {
        return $this->set(self::DEEPLINKBITSET, $value);
    }

    /**
     * Returns value of 'deepLinkBitSet' property
     *
     * @return \DeepLinkBitSet
     */
    public function getDeepLinkBitSet()
    {
        return $this->get(self::DEEPLINKBITSET);
    }

    /**
     * Returns true if 'deepLinkBitSet' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeepLinkBitSet()
    {
        return $this->get(self::DEEPLINKBITSET) !== null;
    }

    /**
     * Sets value of 'jSAPIControlBytes' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setJSAPIControlBytes(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::JSAPICONTROLBYTES, $value);
    }

    /**
     * Returns value of 'jSAPIControlBytes' property
     *
     * @return \SKBuiltinString_
     */
    public function getJSAPIControlBytes()
    {
        return $this->get(self::JSAPICONTROLBYTES);
    }

    /**
     * Returns true if 'jSAPIControlBytes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJSAPIControlBytes()
    {
        return $this->get(self::JSAPICONTROLBYTES) !== null;
    }

    /**
     * Sets value of 'httpHeaderCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHttpHeaderCount($value)
    {
        return $this->set(self::HTTPHEADERCOUNT, $value);
    }

    /**
     * Returns value of 'httpHeaderCount' property
     *
     * @return integer
     */
    public function getHttpHeaderCount()
    {
        $value = $this->get(self::HTTPHEADERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'httpHeaderCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHttpHeaderCount()
    {
        return $this->get(self::HTTPHEADERCOUNT) !== null;
    }

    /**
     * Sets value of 'httpHeader' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setHttpHeader(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::HTTPHEADER, $value);
    }

    /**
     * Returns value of 'httpHeader' property
     *
     * @return \SKBuiltinString_
     */
    public function getHttpHeader()
    {
        return $this->get(self::HTTPHEADER);
    }

    /**
     * Returns true if 'httpHeader' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHttpHeader()
    {
        return $this->get(self::HTTPHEADER) !== null;
    }

    /**
     * Sets value of 'wording' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWording($value)
    {
        return $this->set(self::WORDING, $value);
    }

    /**
     * Returns value of 'wording' property
     *
     * @return string
     */
    public function getWording()
    {
        $value = $this->get(self::WORDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'wording' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWording()
    {
        return $this->get(self::WORDING) !== null;
    }

    /**
     * Sets value of 'headimg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHeadimg($value)
    {
        return $this->set(self::HEADIMG, $value);
    }

    /**
     * Returns value of 'headimg' property
     *
     * @return string
     */
    public function getHeadimg()
    {
        $value = $this->get(self::HEADIMG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'headimg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHeadimg()
    {
        return $this->get(self::HEADIMG) !== null;
    }

    /**
     * Sets value of 'cookie' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setCookie(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::COOKIE, $value);
    }

    /**
     * Returns value of 'cookie' property
     *
     * @return \SKBuiltinString_
     */
    public function getCookie()
    {
        return $this->get(self::COOKIE);
    }

    /**
     * Returns true if 'cookie' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCookie()
    {
        return $this->get(self::COOKIE) !== null;
    }

    /**
     * Sets value of 'menuWording' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMenuWording($value)
    {
        return $this->set(self::MENUWORDING, $value);
    }

    /**
     * Returns value of 'menuWording' property
     *
     * @return string
     */
    public function getMenuWording()
    {
        $value = $this->get(self::MENUWORDING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'menuWording' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMenuWording()
    {
        return $this->get(self::MENUWORDING) !== null;
    }
}
}