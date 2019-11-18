<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ReportKvRequest message
 */
class ReportKvRequest extends \ProtobufMessage
{
    /* Field index constants */
    const GENSTGVER = 1;
    const SPECSTGVER = 2;
    const UINSTGVER = 3;
    const DATAPKG = 4;
    const ENCRYPTKEY = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::GENSTGVER => array(
            'name' => 'Genstgver',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SPECSTGVER => array(
            'name' => 'Specstgver',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UINSTGVER => array(
            'name' => 'Uinstgver',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATAPKG => array(
            'name' => 'datapkg',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYPTKEY => array(
            'name' => 'encryptkey',
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
        $this->values[self::GENSTGVER] = null;
        $this->values[self::SPECSTGVER] = null;
        $this->values[self::UINSTGVER] = null;
        $this->values[self::DATAPKG] = null;
        $this->values[self::ENCRYPTKEY] = null;
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
     * Sets value of 'Genstgver' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGenstgver($value)
    {
        return $this->set(self::GENSTGVER, $value);
    }

    /**
     * Returns value of 'Genstgver' property
     *
     * @return integer
     */
    public function getGenstgver()
    {
        $value = $this->get(self::GENSTGVER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Genstgver' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGenstgver()
    {
        return $this->get(self::GENSTGVER) !== null;
    }

    /**
     * Sets value of 'Specstgver' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSpecstgver($value)
    {
        return $this->set(self::SPECSTGVER, $value);
    }

    /**
     * Returns value of 'Specstgver' property
     *
     * @return integer
     */
    public function getSpecstgver()
    {
        $value = $this->get(self::SPECSTGVER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Specstgver' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSpecstgver()
    {
        return $this->get(self::SPECSTGVER) !== null;
    }

    /**
     * Sets value of 'Uinstgver' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUinstgver($value)
    {
        return $this->set(self::UINSTGVER, $value);
    }

    /**
     * Returns value of 'Uinstgver' property
     *
     * @return integer
     */
    public function getUinstgver()
    {
        $value = $this->get(self::UINSTGVER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Uinstgver' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUinstgver()
    {
        return $this->get(self::UINSTGVER) !== null;
    }

    /**
     * Sets value of 'datapkg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDatapkg($value)
    {
        return $this->set(self::DATAPKG, $value);
    }

    /**
     * Returns value of 'datapkg' property
     *
     * @return string
     */
    public function getDatapkg()
    {
        $value = $this->get(self::DATAPKG);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'datapkg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDatapkg()
    {
        return $this->get(self::DATAPKG) !== null;
    }

    /**
     * Sets value of 'encryptkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEncryptkey($value)
    {
        return $this->set(self::ENCRYPTKEY, $value);
    }

    /**
     * Returns value of 'encryptkey' property
     *
     * @return string
     */
    public function getEncryptkey()
    {
        $value = $this->get(self::ENCRYPTKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'encryptkey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncryptkey()
    {
        return $this->get(self::ENCRYPTKEY) !== null;
    }
}
}