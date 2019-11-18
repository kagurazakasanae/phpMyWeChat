<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * LabelPair message
 */
class LabelPair extends \ProtobufMessage
{
    /* Field index constants */
    const LABELNAME = 1;
    const LABELID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LABELNAME => array(
            'name' => 'labelName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LABELID => array(
            'name' => 'labelID',
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
        $this->values[self::LABELNAME] = null;
        $this->values[self::LABELID] = null;
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
     * Sets value of 'labelName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLabelName($value)
    {
        return $this->set(self::LABELNAME, $value);
    }

    /**
     * Returns value of 'labelName' property
     *
     * @return string
     */
    public function getLabelName()
    {
        $value = $this->get(self::LABELNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'labelName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLabelName()
    {
        return $this->get(self::LABELNAME) !== null;
    }

    /**
     * Sets value of 'labelID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLabelID($value)
    {
        return $this->set(self::LABELID, $value);
    }

    /**
     * Returns value of 'labelID' property
     *
     * @return integer
     */
    public function getLabelID()
    {
        $value = $this->get(self::LABELID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'labelID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLabelID()
    {
        return $this->get(self::LABELID) !== null;
    }
}
}