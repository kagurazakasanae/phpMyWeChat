<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsRedEnvelops message
 */
class SnsRedEnvelops extends \ProtobufMessage
{
    /* Field index constants */
    const REWARDCOUNT = 1;
    const REWARDUSERLIST = 2;
    const RESOURCEID = 3;
    const REPORTID = 4;
    const REPORTKEY = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REWARDCOUNT => array(
            'name' => 'rewardCount',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REWARDUSERLIST => array(
            'name' => 'rewardUserList',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RESOURCEID => array(
            'name' => 'resourceId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REPORTID => array(
            'name' => 'reportId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REPORTKEY => array(
            'name' => 'reportKey',
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
        $this->values[self::REWARDCOUNT] = null;
        $this->values[self::REWARDUSERLIST] = null;
        $this->values[self::RESOURCEID] = null;
        $this->values[self::REPORTID] = null;
        $this->values[self::REPORTKEY] = null;
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
     * Sets value of 'rewardCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRewardCount($value)
    {
        return $this->set(self::REWARDCOUNT, $value);
    }

    /**
     * Returns value of 'rewardCount' property
     *
     * @return integer
     */
    public function getRewardCount()
    {
        $value = $this->get(self::REWARDCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'rewardCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRewardCount()
    {
        return $this->get(self::REWARDCOUNT) !== null;
    }

    /**
     * Sets value of 'rewardUserList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRewardUserList($value)
    {
        return $this->set(self::REWARDUSERLIST, $value);
    }

    /**
     * Returns value of 'rewardUserList' property
     *
     * @return string
     */
    public function getRewardUserList()
    {
        $value = $this->get(self::REWARDUSERLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'rewardUserList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRewardUserList()
    {
        return $this->get(self::REWARDUSERLIST) !== null;
    }

    /**
     * Sets value of 'resourceId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setResourceId($value)
    {
        return $this->set(self::RESOURCEID, $value);
    }

    /**
     * Returns value of 'resourceId' property
     *
     * @return integer
     */
    public function getResourceId()
    {
        $value = $this->get(self::RESOURCEID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'resourceId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasResourceId()
    {
        return $this->get(self::RESOURCEID) !== null;
    }

    /**
     * Sets value of 'reportId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReportId($value)
    {
        return $this->set(self::REPORTID, $value);
    }

    /**
     * Returns value of 'reportId' property
     *
     * @return integer
     */
    public function getReportId()
    {
        $value = $this->get(self::REPORTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reportId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReportId()
    {
        return $this->get(self::REPORTID) !== null;
    }

    /**
     * Sets value of 'reportKey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReportKey($value)
    {
        return $this->set(self::REPORTKEY, $value);
    }

    /**
     * Returns value of 'reportKey' property
     *
     * @return integer
     */
    public function getReportKey()
    {
        $value = $this->get(self::REPORTKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reportKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReportKey()
    {
        return $this->get(self::REPORTKEY) !== null;
    }
}
}