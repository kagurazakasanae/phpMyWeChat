<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetCDNDnsResponse message
 */
class GetCDNDnsResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const DNSINFO = 2;
    const SNSDNSINFO = 3;
    const APPDNSINFO = 4;
    const CDNDNSRULEBUF = 5;
    const FAKECDNDNSRULEBUF = 6;
    const FAKEDNSINFO = 7;
    const GETCDNDNSINTERVALMS = 8;
    const DEFAULTCONFIG = 9;
    const DISASTERCONFIG = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::DNSINFO => array(
            'name' => 'dnsinfo',
            'required' => true,
            'type' => '\CDNDnsInfo'
        ),
        self::SNSDNSINFO => array(
            'name' => 'snsDnsInfo',
            'required' => true,
            'type' => '\CDNDnsInfo'
        ),
        self::APPDNSINFO => array(
            'name' => 'appDnsInfo',
            'required' => true,
            'type' => '\CDNDnsInfo'
        ),
        self::CDNDNSRULEBUF => array(
            'name' => 'cdndnsRuleBuf',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FAKECDNDNSRULEBUF => array(
            'name' => 'fakeCdndnsRulebuf',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FAKEDNSINFO => array(
            'name' => 'fakeDnsInfo',
            'required' => true,
            'type' => '\CDNDnsInfo'
        ),
        self::GETCDNDNSINTERVALMS => array(
            'name' => 'getCdnDnsIntervalMs',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEFAULTCONFIG => array(
            'name' => 'defaultConfig',
            'required' => true,
            'type' => '\CDNClientConfig'
        ),
        self::DISASTERCONFIG => array(
            'name' => 'disasterConfig',
            'required' => true,
            'type' => '\CDNClientConfig'
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
        $this->values[self::DNSINFO] = null;
        $this->values[self::SNSDNSINFO] = null;
        $this->values[self::APPDNSINFO] = null;
        $this->values[self::CDNDNSRULEBUF] = null;
        $this->values[self::FAKECDNDNSRULEBUF] = null;
        $this->values[self::FAKEDNSINFO] = null;
        $this->values[self::GETCDNDNSINTERVALMS] = null;
        $this->values[self::DEFAULTCONFIG] = null;
        $this->values[self::DISASTERCONFIG] = null;
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
     * Sets value of 'dnsinfo' property
     *
     * @param \CDNDnsInfo $value Property value
     *
     * @return null
     */
    public function setDnsinfo(\CDNDnsInfo $value=null)
    {
        return $this->set(self::DNSINFO, $value);
    }

    /**
     * Returns value of 'dnsinfo' property
     *
     * @return \CDNDnsInfo
     */
    public function getDnsinfo()
    {
        return $this->get(self::DNSINFO);
    }

    /**
     * Returns true if 'dnsinfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDnsinfo()
    {
        return $this->get(self::DNSINFO) !== null;
    }

    /**
     * Sets value of 'snsDnsInfo' property
     *
     * @param \CDNDnsInfo $value Property value
     *
     * @return null
     */
    public function setSnsDnsInfo(\CDNDnsInfo $value=null)
    {
        return $this->set(self::SNSDNSINFO, $value);
    }

    /**
     * Returns value of 'snsDnsInfo' property
     *
     * @return \CDNDnsInfo
     */
    public function getSnsDnsInfo()
    {
        return $this->get(self::SNSDNSINFO);
    }

    /**
     * Returns true if 'snsDnsInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsDnsInfo()
    {
        return $this->get(self::SNSDNSINFO) !== null;
    }

    /**
     * Sets value of 'appDnsInfo' property
     *
     * @param \CDNDnsInfo $value Property value
     *
     * @return null
     */
    public function setAppDnsInfo(\CDNDnsInfo $value=null)
    {
        return $this->set(self::APPDNSINFO, $value);
    }

    /**
     * Returns value of 'appDnsInfo' property
     *
     * @return \CDNDnsInfo
     */
    public function getAppDnsInfo()
    {
        return $this->get(self::APPDNSINFO);
    }

    /**
     * Returns true if 'appDnsInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppDnsInfo()
    {
        return $this->get(self::APPDNSINFO) !== null;
    }

    /**
     * Sets value of 'cdndnsRuleBuf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCdndnsRuleBuf($value)
    {
        return $this->set(self::CDNDNSRULEBUF, $value);
    }

    /**
     * Returns value of 'cdndnsRuleBuf' property
     *
     * @return string
     */
    public function getCdndnsRuleBuf()
    {
        $value = $this->get(self::CDNDNSRULEBUF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cdndnsRuleBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCdndnsRuleBuf()
    {
        return $this->get(self::CDNDNSRULEBUF) !== null;
    }

    /**
     * Sets value of 'fakeCdndnsRulebuf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFakeCdndnsRulebuf($value)
    {
        return $this->set(self::FAKECDNDNSRULEBUF, $value);
    }

    /**
     * Returns value of 'fakeCdndnsRulebuf' property
     *
     * @return string
     */
    public function getFakeCdndnsRulebuf()
    {
        $value = $this->get(self::FAKECDNDNSRULEBUF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fakeCdndnsRulebuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFakeCdndnsRulebuf()
    {
        return $this->get(self::FAKECDNDNSRULEBUF) !== null;
    }

    /**
     * Sets value of 'fakeDnsInfo' property
     *
     * @param \CDNDnsInfo $value Property value
     *
     * @return null
     */
    public function setFakeDnsInfo(\CDNDnsInfo $value=null)
    {
        return $this->set(self::FAKEDNSINFO, $value);
    }

    /**
     * Returns value of 'fakeDnsInfo' property
     *
     * @return \CDNDnsInfo
     */
    public function getFakeDnsInfo()
    {
        return $this->get(self::FAKEDNSINFO);
    }

    /**
     * Returns true if 'fakeDnsInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFakeDnsInfo()
    {
        return $this->get(self::FAKEDNSINFO) !== null;
    }

    /**
     * Sets value of 'getCdnDnsIntervalMs' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGetCdnDnsIntervalMs($value)
    {
        return $this->set(self::GETCDNDNSINTERVALMS, $value);
    }

    /**
     * Returns value of 'getCdnDnsIntervalMs' property
     *
     * @return integer
     */
    public function getGetCdnDnsIntervalMs()
    {
        $value = $this->get(self::GETCDNDNSINTERVALMS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'getCdnDnsIntervalMs' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetCdnDnsIntervalMs()
    {
        return $this->get(self::GETCDNDNSINTERVALMS) !== null;
    }

    /**
     * Sets value of 'defaultConfig' property
     *
     * @param \CDNClientConfig $value Property value
     *
     * @return null
     */
    public function setDefaultConfig(\CDNClientConfig $value=null)
    {
        return $this->set(self::DEFAULTCONFIG, $value);
    }

    /**
     * Returns value of 'defaultConfig' property
     *
     * @return \CDNClientConfig
     */
    public function getDefaultConfig()
    {
        return $this->get(self::DEFAULTCONFIG);
    }

    /**
     * Returns true if 'defaultConfig' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDefaultConfig()
    {
        return $this->get(self::DEFAULTCONFIG) !== null;
    }

    /**
     * Sets value of 'disasterConfig' property
     *
     * @param \CDNClientConfig $value Property value
     *
     * @return null
     */
    public function setDisasterConfig(\CDNClientConfig $value=null)
    {
        return $this->set(self::DISASTERCONFIG, $value);
    }

    /**
     * Returns value of 'disasterConfig' property
     *
     * @return \CDNClientConfig
     */
    public function getDisasterConfig()
    {
        return $this->get(self::DISASTERCONFIG);
    }

    /**
     * Returns true if 'disasterConfig' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisasterConfig()
    {
        return $this->get(self::DISASTERCONFIG) !== null;
    }
}
}