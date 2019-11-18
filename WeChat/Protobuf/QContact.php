<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * QContact message
 */
class QContact extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const DISPLAYNAME = 2;
    const EXTINFOSEQ = 3;
    const IMGUPDATESEQ = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DISPLAYNAME => array(
            'name' => 'displayName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXTINFOSEQ => array(
            'default' => 0,
            'name' => 'extInfoSeq',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGUPDATESEQ => array(
            'default' => 0,
            'name' => 'imgUpdateSeq',
            'required' => false,
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
        $this->values[self::USERNAME] = null;
        $this->values[self::DISPLAYNAME] = null;
        $this->values[self::EXTINFOSEQ] = self::$fields[self::EXTINFOSEQ]['default'];
        $this->values[self::IMGUPDATESEQ] = self::$fields[self::IMGUPDATESEQ]['default'];
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
     * Sets value of 'displayName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDisplayName($value)
    {
        return $this->set(self::DISPLAYNAME, $value);
    }

    /**
     * Returns value of 'displayName' property
     *
     * @return string
     */
    public function getDisplayName()
    {
        $value = $this->get(self::DISPLAYNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'displayName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisplayName()
    {
        return $this->get(self::DISPLAYNAME) !== null;
    }

    /**
     * Sets value of 'extInfoSeq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExtInfoSeq($value)
    {
        return $this->set(self::EXTINFOSEQ, $value);
    }

    /**
     * Returns value of 'extInfoSeq' property
     *
     * @return integer
     */
    public function getExtInfoSeq()
    {
        $value = $this->get(self::EXTINFOSEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'extInfoSeq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtInfoSeq()
    {
        return $this->get(self::EXTINFOSEQ) !== null;
    }

    /**
     * Sets value of 'imgUpdateSeq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgUpdateSeq($value)
    {
        return $this->set(self::IMGUPDATESEQ, $value);
    }

    /**
     * Returns value of 'imgUpdateSeq' property
     *
     * @return integer
     */
    public function getImgUpdateSeq()
    {
        $value = $this->get(self::IMGUPDATESEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'imgUpdateSeq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgUpdateSeq()
    {
        return $this->get(self::IMGUPDATESEQ) !== null;
    }
}
}