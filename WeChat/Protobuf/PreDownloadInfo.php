<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * PreDownloadInfo message
 */
class PreDownloadInfo extends \ProtobufMessage
{
    /* Field index constants */
    const PREDOWNLOADPERCENT = 1;
    const PREDOWNLOADNETTYPE = 2;
    const NOPREDOWNLOADRANGE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PREDOWNLOADPERCENT => array(
            'name' => 'preDownloadPercent',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PREDOWNLOADNETTYPE => array(
            'name' => 'preDownloadNetType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOPREDOWNLOADRANGE => array(
            'name' => 'noPreDownloadRange',
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
        $this->values[self::PREDOWNLOADPERCENT] = null;
        $this->values[self::PREDOWNLOADNETTYPE] = null;
        $this->values[self::NOPREDOWNLOADRANGE] = null;
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
     * Sets value of 'preDownloadPercent' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPreDownloadPercent($value)
    {
        return $this->set(self::PREDOWNLOADPERCENT, $value);
    }

    /**
     * Returns value of 'preDownloadPercent' property
     *
     * @return integer
     */
    public function getPreDownloadPercent()
    {
        $value = $this->get(self::PREDOWNLOADPERCENT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'preDownloadPercent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPreDownloadPercent()
    {
        return $this->get(self::PREDOWNLOADPERCENT) !== null;
    }

    /**
     * Sets value of 'preDownloadNetType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPreDownloadNetType($value)
    {
        return $this->set(self::PREDOWNLOADNETTYPE, $value);
    }

    /**
     * Returns value of 'preDownloadNetType' property
     *
     * @return integer
     */
    public function getPreDownloadNetType()
    {
        $value = $this->get(self::PREDOWNLOADNETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'preDownloadNetType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPreDownloadNetType()
    {
        return $this->get(self::PREDOWNLOADNETTYPE) !== null;
    }

    /**
     * Sets value of 'noPreDownloadRange' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNoPreDownloadRange($value)
    {
        return $this->set(self::NOPREDOWNLOADRANGE, $value);
    }

    /**
     * Returns value of 'noPreDownloadRange' property
     *
     * @return string
     */
    public function getNoPreDownloadRange()
    {
        $value = $this->get(self::NOPREDOWNLOADRANGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'noPreDownloadRange' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNoPreDownloadRange()
    {
        return $this->get(self::NOPREDOWNLOADRANGE) !== null;
    }
}
}