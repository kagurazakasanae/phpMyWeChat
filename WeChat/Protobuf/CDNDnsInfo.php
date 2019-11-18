<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * CDNDnsInfo message
 */
class CDNDnsInfo extends \ProtobufMessage
{
    /* Field index constants */
    const VER = 1;
    const UIN = 2;
    const EXPIRETIME = 3;
    const FRONTID = 4;
    const FRONTIPCOUNT = 5;
    const FONTIPLIST = 6;
    const ZONEDOMAIN = 7;
    const AUTHKEY = 8;
    const ZONEID = 9;
    const ZONEIPCOUNT = 10;
    const ZONEIPLIST = 11;
    const FRONTIPPORTLIST = 12;
    const ZONEIPPORTLIST = 13;
    const FRONTIPPORTCOUNT = 14;
    const ZONEIPPORTCOUNT = 15;
    const FAKEUIN = 16;
    const NEWAUTHKEY = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VER => array(
            'name' => 'ver',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UIN => array(
            'name' => 'uin',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXPIRETIME => array(
            'name' => 'expireTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRONTID => array(
            'name' => 'frontID',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FRONTIPCOUNT => array(
            'name' => 'frontIPCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FONTIPLIST => array(
            'name' => 'fontIPList',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::ZONEDOMAIN => array(
            'name' => 'zoneDomain',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTHKEY => array(
            'name' => 'authKey',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::ZONEID => array(
            'name' => 'zoneID',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ZONEIPCOUNT => array(
            'name' => 'zoneIPCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ZONEIPLIST => array(
            'name' => 'zoneIPList',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::FRONTIPPORTLIST => array(
            'name' => 'frontIPPortList',
            'repeated' => true,
            'type' => '\CDNDnsPortInfo'
        ),
        self::ZONEIPPORTLIST => array(
            'name' => 'zoneIPPortList',
            'repeated' => true,
            'type' => '\CDNDnsPortInfo'
        ),
        self::FRONTIPPORTCOUNT => array(
            'name' => 'frontIPPortCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ZONEIPPORTCOUNT => array(
            'name' => 'zoneIPPortCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FAKEUIN => array(
            'name' => 'fakeUin',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWAUTHKEY => array(
            'name' => 'newAuthkey',
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
        $this->values[self::VER] = null;
        $this->values[self::UIN] = null;
        $this->values[self::EXPIRETIME] = null;
        $this->values[self::FRONTID] = null;
        $this->values[self::FRONTIPCOUNT] = null;
        $this->values[self::FONTIPLIST] = array();
        $this->values[self::ZONEDOMAIN] = null;
        $this->values[self::AUTHKEY] = null;
        $this->values[self::ZONEID] = null;
        $this->values[self::ZONEIPCOUNT] = null;
        $this->values[self::ZONEIPLIST] = array();
        $this->values[self::FRONTIPPORTLIST] = array();
        $this->values[self::ZONEIPPORTLIST] = array();
        $this->values[self::FRONTIPPORTCOUNT] = null;
        $this->values[self::ZONEIPPORTCOUNT] = null;
        $this->values[self::FAKEUIN] = null;
        $this->values[self::NEWAUTHKEY] = null;
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
     * Sets value of 'ver' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVer($value)
    {
        return $this->set(self::VER, $value);
    }

    /**
     * Returns value of 'ver' property
     *
     * @return integer
     */
    public function getVer()
    {
        $value = $this->get(self::VER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ver' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVer()
    {
        return $this->get(self::VER) !== null;
    }

    /**
     * Sets value of 'uin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUin($value)
    {
        return $this->set(self::UIN, $value);
    }

    /**
     * Returns value of 'uin' property
     *
     * @return integer
     */
    public function getUin()
    {
        $value = $this->get(self::UIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUin()
    {
        return $this->get(self::UIN) !== null;
    }

    /**
     * Sets value of 'expireTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpireTime($value)
    {
        return $this->set(self::EXPIRETIME, $value);
    }

    /**
     * Returns value of 'expireTime' property
     *
     * @return integer
     */
    public function getExpireTime()
    {
        $value = $this->get(self::EXPIRETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'expireTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExpireTime()
    {
        return $this->get(self::EXPIRETIME) !== null;
    }

    /**
     * Sets value of 'frontID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFrontID($value)
    {
        return $this->set(self::FRONTID, $value);
    }

    /**
     * Returns value of 'frontID' property
     *
     * @return integer
     */
    public function getFrontID()
    {
        $value = $this->get(self::FRONTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'frontID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrontID()
    {
        return $this->get(self::FRONTID) !== null;
    }

    /**
     * Sets value of 'frontIPCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFrontIPCount($value)
    {
        return $this->set(self::FRONTIPCOUNT, $value);
    }

    /**
     * Returns value of 'frontIPCount' property
     *
     * @return integer
     */
    public function getFrontIPCount()
    {
        $value = $this->get(self::FRONTIPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'frontIPCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrontIPCount()
    {
        return $this->get(self::FRONTIPCOUNT) !== null;
    }

    /**
     * Appends value to 'fontIPList' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendFontIPList(\SKBuiltinString $value)
    {
        return $this->append(self::FONTIPLIST, $value);
    }

    /**
     * Clears 'fontIPList' list
     *
     * @return null
     */
    public function clearFontIPList()
    {
        return $this->clear(self::FONTIPLIST);
    }

    /**
     * Returns 'fontIPList' list
     *
     * @return \SKBuiltinString[]
     */
    public function getFontIPList()
    {
        return $this->get(self::FONTIPLIST);
    }

    /**
     * Returns true if 'fontIPList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFontIPList()
    {
        return count($this->get(self::FONTIPLIST)) !== 0;
    }

    /**
     * Returns 'fontIPList' iterator
     *
     * @return \ArrayIterator
     */
    public function getFontIPListIterator()
    {
        return new \ArrayIterator($this->get(self::FONTIPLIST));
    }

    /**
     * Returns element from 'fontIPList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getFontIPListAt($offset)
    {
        return $this->get(self::FONTIPLIST, $offset);
    }

    /**
     * Returns count of 'fontIPList' list
     *
     * @return int
     */
    public function getFontIPListCount()
    {
        return $this->count(self::FONTIPLIST);
    }

    /**
     * Sets value of 'zoneDomain' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setZoneDomain($value)
    {
        return $this->set(self::ZONEDOMAIN, $value);
    }

    /**
     * Returns value of 'zoneDomain' property
     *
     * @return string
     */
    public function getZoneDomain()
    {
        $value = $this->get(self::ZONEDOMAIN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'zoneDomain' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneDomain()
    {
        return $this->get(self::ZONEDOMAIN) !== null;
    }

    /**
     * Sets value of 'authKey' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setAuthKey(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::AUTHKEY, $value);
    }

    /**
     * Returns value of 'authKey' property
     *
     * @return \SKBuiltinString_
     */
    public function getAuthKey()
    {
        return $this->get(self::AUTHKEY);
    }

    /**
     * Returns true if 'authKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthKey()
    {
        return $this->get(self::AUTHKEY) !== null;
    }

    /**
     * Sets value of 'zoneID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneID($value)
    {
        return $this->set(self::ZONEID, $value);
    }

    /**
     * Returns value of 'zoneID' property
     *
     * @return integer
     */
    public function getZoneID()
    {
        $value = $this->get(self::ZONEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneID()
    {
        return $this->get(self::ZONEID) !== null;
    }

    /**
     * Sets value of 'zoneIPCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneIPCount($value)
    {
        return $this->set(self::ZONEIPCOUNT, $value);
    }

    /**
     * Returns value of 'zoneIPCount' property
     *
     * @return integer
     */
    public function getZoneIPCount()
    {
        $value = $this->get(self::ZONEIPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneIPCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneIPCount()
    {
        return $this->get(self::ZONEIPCOUNT) !== null;
    }

    /**
     * Appends value to 'zoneIPList' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendZoneIPList(\SKBuiltinString $value)
    {
        return $this->append(self::ZONEIPLIST, $value);
    }

    /**
     * Clears 'zoneIPList' list
     *
     * @return null
     */
    public function clearZoneIPList()
    {
        return $this->clear(self::ZONEIPLIST);
    }

    /**
     * Returns 'zoneIPList' list
     *
     * @return \SKBuiltinString[]
     */
    public function getZoneIPList()
    {
        return $this->get(self::ZONEIPLIST);
    }

    /**
     * Returns true if 'zoneIPList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneIPList()
    {
        return count($this->get(self::ZONEIPLIST)) !== 0;
    }

    /**
     * Returns 'zoneIPList' iterator
     *
     * @return \ArrayIterator
     */
    public function getZoneIPListIterator()
    {
        return new \ArrayIterator($this->get(self::ZONEIPLIST));
    }

    /**
     * Returns element from 'zoneIPList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getZoneIPListAt($offset)
    {
        return $this->get(self::ZONEIPLIST, $offset);
    }

    /**
     * Returns count of 'zoneIPList' list
     *
     * @return int
     */
    public function getZoneIPListCount()
    {
        return $this->count(self::ZONEIPLIST);
    }

    /**
     * Appends value to 'frontIPPortList' list
     *
     * @param \CDNDnsPortInfo $value Value to append
     *
     * @return null
     */
    public function appendFrontIPPortList(\CDNDnsPortInfo $value)
    {
        return $this->append(self::FRONTIPPORTLIST, $value);
    }

    /**
     * Clears 'frontIPPortList' list
     *
     * @return null
     */
    public function clearFrontIPPortList()
    {
        return $this->clear(self::FRONTIPPORTLIST);
    }

    /**
     * Returns 'frontIPPortList' list
     *
     * @return \CDNDnsPortInfo[]
     */
    public function getFrontIPPortList()
    {
        return $this->get(self::FRONTIPPORTLIST);
    }

    /**
     * Returns true if 'frontIPPortList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrontIPPortList()
    {
        return count($this->get(self::FRONTIPPORTLIST)) !== 0;
    }

    /**
     * Returns 'frontIPPortList' iterator
     *
     * @return \ArrayIterator
     */
    public function getFrontIPPortListIterator()
    {
        return new \ArrayIterator($this->get(self::FRONTIPPORTLIST));
    }

    /**
     * Returns element from 'frontIPPortList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CDNDnsPortInfo
     */
    public function getFrontIPPortListAt($offset)
    {
        return $this->get(self::FRONTIPPORTLIST, $offset);
    }

    /**
     * Returns count of 'frontIPPortList' list
     *
     * @return int
     */
    public function getFrontIPPortListCount()
    {
        return $this->count(self::FRONTIPPORTLIST);
    }

    /**
     * Appends value to 'zoneIPPortList' list
     *
     * @param \CDNDnsPortInfo $value Value to append
     *
     * @return null
     */
    public function appendZoneIPPortList(\CDNDnsPortInfo $value)
    {
        return $this->append(self::ZONEIPPORTLIST, $value);
    }

    /**
     * Clears 'zoneIPPortList' list
     *
     * @return null
     */
    public function clearZoneIPPortList()
    {
        return $this->clear(self::ZONEIPPORTLIST);
    }

    /**
     * Returns 'zoneIPPortList' list
     *
     * @return \CDNDnsPortInfo[]
     */
    public function getZoneIPPortList()
    {
        return $this->get(self::ZONEIPPORTLIST);
    }

    /**
     * Returns true if 'zoneIPPortList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneIPPortList()
    {
        return count($this->get(self::ZONEIPPORTLIST)) !== 0;
    }

    /**
     * Returns 'zoneIPPortList' iterator
     *
     * @return \ArrayIterator
     */
    public function getZoneIPPortListIterator()
    {
        return new \ArrayIterator($this->get(self::ZONEIPPORTLIST));
    }

    /**
     * Returns element from 'zoneIPPortList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CDNDnsPortInfo
     */
    public function getZoneIPPortListAt($offset)
    {
        return $this->get(self::ZONEIPPORTLIST, $offset);
    }

    /**
     * Returns count of 'zoneIPPortList' list
     *
     * @return int
     */
    public function getZoneIPPortListCount()
    {
        return $this->count(self::ZONEIPPORTLIST);
    }

    /**
     * Sets value of 'frontIPPortCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFrontIPPortCount($value)
    {
        return $this->set(self::FRONTIPPORTCOUNT, $value);
    }

    /**
     * Returns value of 'frontIPPortCount' property
     *
     * @return integer
     */
    public function getFrontIPPortCount()
    {
        $value = $this->get(self::FRONTIPPORTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'frontIPPortCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrontIPPortCount()
    {
        return $this->get(self::FRONTIPPORTCOUNT) !== null;
    }

    /**
     * Sets value of 'zoneIPPortCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setZoneIPPortCount($value)
    {
        return $this->set(self::ZONEIPPORTCOUNT, $value);
    }

    /**
     * Returns value of 'zoneIPPortCount' property
     *
     * @return integer
     */
    public function getZoneIPPortCount()
    {
        $value = $this->get(self::ZONEIPPORTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'zoneIPPortCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasZoneIPPortCount()
    {
        return $this->get(self::ZONEIPPORTCOUNT) !== null;
    }

    /**
     * Sets value of 'fakeUin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFakeUin($value)
    {
        return $this->set(self::FAKEUIN, $value);
    }

    /**
     * Returns value of 'fakeUin' property
     *
     * @return integer
     */
    public function getFakeUin()
    {
        $value = $this->get(self::FAKEUIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fakeUin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFakeUin()
    {
        return $this->get(self::FAKEUIN) !== null;
    }

    /**
     * Sets value of 'newAuthkey' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setNewAuthkey(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::NEWAUTHKEY, $value);
    }

    /**
     * Returns value of 'newAuthkey' property
     *
     * @return \SKBuiltinString_
     */
    public function getNewAuthkey()
    {
        return $this->get(self::NEWAUTHKEY);
    }

    /**
     * Returns true if 'newAuthkey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewAuthkey()
    {
        return $this->get(self::NEWAUTHKEY) !== null;
    }
}
}