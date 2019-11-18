<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * AppMsg message
 */
class AppMsg extends \ProtobufMessage
{
    /* Field index constants */
    const FROM = 1;
    const APPID = 2;
    const SDKVERSION = 3;
    const TO = 4;
    const TYPE = 5;
    const CONTENT = 6;
    const CREATETIME = 7;
    const CLIENTMSGID = 8;
    const THUMB = 9;
    const SOURCE = 10;
    const REMINDID = 11;
    const MSGSOURCE = 12;
    const SHAREURLORIGINAL = 13;
    const SHAREURLOPEN = 14;
    const JSAPPID = 15;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FROM => array(
            'name' => 'from',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::APPID => array(
            'name' => 'appId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SDKVERSION => array(
            'name' => 'sdkVersion',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TO => array(
            'name' => 'to',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CREATETIME => array(
            'name' => 'createTime',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTMSGID => array(
            'name' => 'clientMsgId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::THUMB => array(
            'name' => 'thumb',
            'required' => true,
            'type' => '\SKBuiltinString'
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REMINDID => array(
            'name' => 'remindId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGSOURCE => array(
            'name' => 'msgSource',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHAREURLORIGINAL => array(
            'name' => 'shareUrlOriginal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHAREURLOPEN => array(
            'name' => 'shareUrlOpen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::JSAPPID => array(
            'name' => 'jsAppId',
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
        $this->values[self::FROM] = null;
        $this->values[self::APPID] = null;
        $this->values[self::SDKVERSION] = null;
        $this->values[self::TO] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::THUMB] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::REMINDID] = null;
        $this->values[self::MSGSOURCE] = null;
        $this->values[self::SHAREURLORIGINAL] = null;
        $this->values[self::SHAREURLOPEN] = null;
        $this->values[self::JSAPPID] = null;
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
     * Sets value of 'sdkVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSdkVersion($value)
    {
        return $this->set(self::SDKVERSION, $value);
    }

    /**
     * Returns value of 'sdkVersion' property
     *
     * @return integer
     */
    public function getSdkVersion()
    {
        $value = $this->get(self::SDKVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sdkVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSdkVersion()
    {
        return $this->get(self::SDKVERSION) !== null;
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
     * Sets value of 'createTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createTime' property
     *
     * @return integer
     */
    public function getCreateTime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreateTime()
    {
        return $this->get(self::CREATETIME) !== null;
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
     * Sets value of 'thumb' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setThumb(\SKBuiltinString $value=null)
    {
        return $this->set(self::THUMB, $value);
    }

    /**
     * Returns value of 'thumb' property
     *
     * @return \SKBuiltinString
     */
    public function getThumb()
    {
        return $this->get(self::THUMB);
    }

    /**
     * Returns true if 'thumb' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasThumb()
    {
        return $this->get(self::THUMB) !== null;
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
     * Sets value of 'remindId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRemindId($value)
    {
        return $this->set(self::REMINDID, $value);
    }

    /**
     * Returns value of 'remindId' property
     *
     * @return integer
     */
    public function getRemindId()
    {
        $value = $this->get(self::REMINDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'remindId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemindId()
    {
        return $this->get(self::REMINDID) !== null;
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
     * Sets value of 'shareUrlOriginal' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShareUrlOriginal($value)
    {
        return $this->set(self::SHAREURLORIGINAL, $value);
    }

    /**
     * Returns value of 'shareUrlOriginal' property
     *
     * @return string
     */
    public function getShareUrlOriginal()
    {
        $value = $this->get(self::SHAREURLORIGINAL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'shareUrlOriginal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShareUrlOriginal()
    {
        return $this->get(self::SHAREURLORIGINAL) !== null;
    }

    /**
     * Sets value of 'shareUrlOpen' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setShareUrlOpen($value)
    {
        return $this->set(self::SHAREURLOPEN, $value);
    }

    /**
     * Returns value of 'shareUrlOpen' property
     *
     * @return string
     */
    public function getShareUrlOpen()
    {
        $value = $this->get(self::SHAREURLOPEN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'shareUrlOpen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShareUrlOpen()
    {
        return $this->get(self::SHAREURLOPEN) !== null;
    }

    /**
     * Sets value of 'jsAppId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJsAppId($value)
    {
        return $this->set(self::JSAPPID, $value);
    }

    /**
     * Returns value of 'jsAppId' property
     *
     * @return string
     */
    public function getJsAppId()
    {
        $value = $this->get(self::JSAPPID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'jsAppId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasJsAppId()
    {
        return $this->get(self::JSAPPID) !== null;
    }
}
}