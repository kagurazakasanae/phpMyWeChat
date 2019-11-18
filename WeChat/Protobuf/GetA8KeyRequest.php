<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetA8KeyRequest message
 */
class GetA8KeyRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const OPCODE = 2;
    const A2KEY = 3;
    const APPID = 4;
    const SCOPE = 5;
    const STATE = 6;
    const REQURL = 7;
    const FRIENDUSERNAME = 8;
    const FRIENDQQ = 9;
    const SCENE = 10;
    const USERNAME = 11;
    const BUNDLEID = 12;
    const A2KEYNEW = 13;
    const REASON = 14;
    const FONTSCALE = 15;
    const FLAG = 16;
    const NETTYPE = 17;
    const CODETYPE = 18;
    const CODEVERSION = 19;
    const REQUESTID = 20;
    const FUNCTIONID = 21;
    const WALLETREGION = 22;
    const COOKIE = 23;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => false,
            'type' => '\BaseRequest'
        ),
        self::OPCODE => array(
            'default' => 0,
            'name' => 'opCode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::A2KEY => array(
            'name' => 'a2key',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::APPID => array(
            'name' => 'appID',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::SCOPE => array(
            'name' => 'scope',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::REQURL => array(
            'name' => 'reqUrl',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::FRIENDUSERNAME => array(
            'name' => 'friendUserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FRIENDQQ => array(
            'default' => 0,
            'name' => 'friendQQ',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SCENE => array(
            'default' => 0,
            'name' => 'scene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUNDLEID => array(
            'name' => 'bundleID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::A2KEYNEW => array(
            'name' => 'a2KeyNew',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::REASON => array(
            'name' => 'reason',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FONTSCALE => array(
            'default' => 0,
            'name' => 'fontScale',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FLAG => array(
            'default' => 0,
            'name' => 'flag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NETTYPE => array(
            'name' => 'netType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CODETYPE => array(
            'default' => 0,
            'name' => 'codeType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CODEVERSION => array(
            'default' => 0,
            'name' => 'codeVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQUESTID => array(
            'default' => 0,
            'name' => 'requestId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FUNCTIONID => array(
            'name' => 'functionId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WALLETREGION => array(
            'default' => 0,
            'name' => 'walletRegion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COOKIE => array(
            'name' => 'cookie',
            'required' => false,
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
        $this->values[self::OPCODE] = self::$fields[self::OPCODE]['default'];
        $this->values[self::A2KEY] = null;
        $this->values[self::APPID] = null;
        $this->values[self::SCOPE] = null;
        $this->values[self::STATE] = null;
        $this->values[self::REQURL] = null;
        $this->values[self::FRIENDUSERNAME] = null;
        $this->values[self::FRIENDQQ] = self::$fields[self::FRIENDQQ]['default'];
        $this->values[self::SCENE] = self::$fields[self::SCENE]['default'];
        $this->values[self::USERNAME] = null;
        $this->values[self::BUNDLEID] = null;
        $this->values[self::A2KEYNEW] = null;
        $this->values[self::REASON] = null;
        $this->values[self::FONTSCALE] = self::$fields[self::FONTSCALE]['default'];
        $this->values[self::FLAG] = self::$fields[self::FLAG]['default'];
        $this->values[self::NETTYPE] = null;
        $this->values[self::CODETYPE] = self::$fields[self::CODETYPE]['default'];
        $this->values[self::CODEVERSION] = self::$fields[self::CODEVERSION]['default'];
        $this->values[self::REQUESTID] = self::$fields[self::REQUESTID]['default'];
        $this->values[self::FUNCTIONID] = null;
        $this->values[self::WALLETREGION] = self::$fields[self::WALLETREGION]['default'];
        $this->values[self::COOKIE] = null;
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
     * Sets value of 'opCode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpCode($value)
    {
        return $this->set(self::OPCODE, $value);
    }

    /**
     * Returns value of 'opCode' property
     *
     * @return integer
     */
    public function getOpCode()
    {
        $value = $this->get(self::OPCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpCode()
    {
        return $this->get(self::OPCODE) !== null;
    }

    /**
     * Sets value of 'a2key' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setA2key(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::A2KEY, $value);
    }

    /**
     * Returns value of 'a2key' property
     *
     * @return \SKBuiltinString_
     */
    public function getA2key()
    {
        return $this->get(self::A2KEY);
    }

    /**
     * Returns true if 'a2key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasA2key()
    {
        return $this->get(self::A2KEY) !== null;
    }

    /**
     * Sets value of 'appID' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setAppID(\SKBuiltinString $value=null)
    {
        return $this->set(self::APPID, $value);
    }

    /**
     * Returns value of 'appID' property
     *
     * @return \SKBuiltinString
     */
    public function getAppID()
    {
        return $this->get(self::APPID);
    }

    /**
     * Returns true if 'appID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppID()
    {
        return $this->get(self::APPID) !== null;
    }

    /**
     * Sets value of 'scope' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setScope(\SKBuiltinString $value=null)
    {
        return $this->set(self::SCOPE, $value);
    }

    /**
     * Returns value of 'scope' property
     *
     * @return \SKBuiltinString
     */
    public function getScope()
    {
        return $this->get(self::SCOPE);
    }

    /**
     * Returns true if 'scope' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScope()
    {
        return $this->get(self::SCOPE) !== null;
    }

    /**
     * Sets value of 'state' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setState(\SKBuiltinString $value=null)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return \SKBuiltinString
     */
    public function getState()
    {
        return $this->get(self::STATE);
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'reqUrl' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setReqUrl(\SKBuiltinString $value=null)
    {
        return $this->set(self::REQURL, $value);
    }

    /**
     * Returns value of 'reqUrl' property
     *
     * @return \SKBuiltinString
     */
    public function getReqUrl()
    {
        return $this->get(self::REQURL);
    }

    /**
     * Returns true if 'reqUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReqUrl()
    {
        return $this->get(self::REQURL) !== null;
    }

    /**
     * Sets value of 'friendUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFriendUserName($value)
    {
        return $this->set(self::FRIENDUSERNAME, $value);
    }

    /**
     * Returns value of 'friendUserName' property
     *
     * @return string
     */
    public function getFriendUserName()
    {
        $value = $this->get(self::FRIENDUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'friendUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendUserName()
    {
        return $this->get(self::FRIENDUSERNAME) !== null;
    }

    /**
     * Sets value of 'friendQQ' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFriendQQ($value)
    {
        return $this->set(self::FRIENDQQ, $value);
    }

    /**
     * Returns value of 'friendQQ' property
     *
     * @return integer
     */
    public function getFriendQQ()
    {
        $value = $this->get(self::FRIENDQQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'friendQQ' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFriendQQ()
    {
        return $this->get(self::FRIENDQQ) !== null;
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
     * Sets value of 'bundleID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBundleID($value)
    {
        return $this->set(self::BUNDLEID, $value);
    }

    /**
     * Returns value of 'bundleID' property
     *
     * @return string
     */
    public function getBundleID()
    {
        $value = $this->get(self::BUNDLEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bundleID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBundleID()
    {
        return $this->get(self::BUNDLEID) !== null;
    }

    /**
     * Sets value of 'a2KeyNew' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setA2KeyNew(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::A2KEYNEW, $value);
    }

    /**
     * Returns value of 'a2KeyNew' property
     *
     * @return \SKBuiltinString_
     */
    public function getA2KeyNew()
    {
        return $this->get(self::A2KEYNEW);
    }

    /**
     * Returns true if 'a2KeyNew' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasA2KeyNew()
    {
        return $this->get(self::A2KEYNEW) !== null;
    }

    /**
     * Sets value of 'reason' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReason($value)
    {
        return $this->set(self::REASON, $value);
    }

    /**
     * Returns value of 'reason' property
     *
     * @return integer
     */
    public function getReason()
    {
        $value = $this->get(self::REASON);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reason' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReason()
    {
        return $this->get(self::REASON) !== null;
    }

    /**
     * Sets value of 'fontScale' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFontScale($value)
    {
        return $this->set(self::FONTSCALE, $value);
    }

    /**
     * Returns value of 'fontScale' property
     *
     * @return integer
     */
    public function getFontScale()
    {
        $value = $this->get(self::FONTSCALE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fontScale' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFontScale()
    {
        return $this->get(self::FONTSCALE) !== null;
    }

    /**
     * Sets value of 'flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlag($value)
    {
        return $this->set(self::FLAG, $value);
    }

    /**
     * Returns value of 'flag' property
     *
     * @return integer
     */
    public function getFlag()
    {
        $value = $this->get(self::FLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'flag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlag()
    {
        return $this->get(self::FLAG) !== null;
    }

    /**
     * Sets value of 'netType' property
     *
     * @param string $value Property value
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
     * @return string
     */
    public function getNetType()
    {
        $value = $this->get(self::NETTYPE);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'codeType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCodeType($value)
    {
        return $this->set(self::CODETYPE, $value);
    }

    /**
     * Returns value of 'codeType' property
     *
     * @return integer
     */
    public function getCodeType()
    {
        $value = $this->get(self::CODETYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'codeType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCodeType()
    {
        return $this->get(self::CODETYPE) !== null;
    }

    /**
     * Sets value of 'codeVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCodeVersion($value)
    {
        return $this->set(self::CODEVERSION, $value);
    }

    /**
     * Returns value of 'codeVersion' property
     *
     * @return integer
     */
    public function getCodeVersion()
    {
        $value = $this->get(self::CODEVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'codeVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCodeVersion()
    {
        return $this->get(self::CODEVERSION) !== null;
    }

    /**
     * Sets value of 'requestId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRequestId($value)
    {
        return $this->set(self::REQUESTID, $value);
    }

    /**
     * Returns value of 'requestId' property
     *
     * @return integer
     */
    public function getRequestId()
    {
        $value = $this->get(self::REQUESTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'requestId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRequestId()
    {
        return $this->get(self::REQUESTID) !== null;
    }

    /**
     * Sets value of 'functionId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFunctionId($value)
    {
        return $this->set(self::FUNCTIONID, $value);
    }

    /**
     * Returns value of 'functionId' property
     *
     * @return string
     */
    public function getFunctionId()
    {
        $value = $this->get(self::FUNCTIONID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'functionId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFunctionId()
    {
        return $this->get(self::FUNCTIONID) !== null;
    }

    /**
     * Sets value of 'walletRegion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWalletRegion($value)
    {
        return $this->set(self::WALLETREGION, $value);
    }

    /**
     * Returns value of 'walletRegion' property
     *
     * @return integer
     */
    public function getWalletRegion()
    {
        $value = $this->get(self::WALLETREGION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'walletRegion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWalletRegion()
    {
        return $this->get(self::WALLETREGION) !== null;
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
}
}