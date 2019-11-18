<?php
/**
 * Auto generated from x.proto at 2019-11-12 23:16:53
 */

namespace {
/**
 * ModBottleContact message
 */
class ModBottleContact extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const TYPE = 2;
    const SEX = 3;
    const CITY = 4;
    const PROVINCE = 5;
    const SIGNATURE = 6;
    const IMGFLAG = 7;
    const HDIMGFLAG = 8;
    const COUNTRY = 9;
    const BIGHEADIMGURL = 10;
    const SMALLHEADIMGURL = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'default' => '',
            'name' => 'UserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'Type',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEX => array(
            'name' => 'Sex',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CITY => array(
            'default' => '',
            'name' => 'City',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PROVINCE => array(
            'default' => '',
            'name' => 'Province',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'default' => '',
            'name' => 'Signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMGFLAG => array(
            'name' => 'ImgFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HDIMGFLAG => array(
            'name' => 'HDImgFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::COUNTRY => array(
            'default' => '',
            'name' => 'Country',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BIGHEADIMGURL => array(
            'default' => '',
            'name' => 'BigHeadImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SMALLHEADIMGURL => array(
            'default' => '',
            'name' => 'SmallHeadImgUrl',
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
        $this->values[self::USERNAME] = self::$fields[self::USERNAME]['default'];
        $this->values[self::TYPE] = null;
        $this->values[self::SEX] = null;
        $this->values[self::CITY] = self::$fields[self::CITY]['default'];
        $this->values[self::PROVINCE] = self::$fields[self::PROVINCE]['default'];
        $this->values[self::SIGNATURE] = self::$fields[self::SIGNATURE]['default'];
        $this->values[self::IMGFLAG] = null;
        $this->values[self::HDIMGFLAG] = null;
        $this->values[self::COUNTRY] = self::$fields[self::COUNTRY]['default'];
        $this->values[self::BIGHEADIMGURL] = self::$fields[self::BIGHEADIMGURL]['default'];
        $this->values[self::SMALLHEADIMGURL] = self::$fields[self::SMALLHEADIMGURL]['default'];
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
     * Sets value of 'UserName' property
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
     * Returns value of 'UserName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'UserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'Type' property
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
     * Returns value of 'Type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'Sex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSex($value)
    {
        return $this->set(self::SEX, $value);
    }

    /**
     * Returns value of 'Sex' property
     *
     * @return integer
     */
    public function getSex()
    {
        $value = $this->get(self::SEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Sex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSex()
    {
        return $this->get(self::SEX) !== null;
    }

    /**
     * Sets value of 'City' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'City' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::CITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'City' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCity()
    {
        return $this->get(self::CITY) !== null;
    }

    /**
     * Sets value of 'Province' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProvince($value)
    {
        return $this->set(self::PROVINCE, $value);
    }

    /**
     * Returns value of 'Province' property
     *
     * @return string
     */
    public function getProvince()
    {
        $value = $this->get(self::PROVINCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Province' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProvince()
    {
        return $this->get(self::PROVINCE) !== null;
    }

    /**
     * Sets value of 'Signature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignature($value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'Signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Signature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignature()
    {
        return $this->get(self::SIGNATURE) !== null;
    }

    /**
     * Sets value of 'ImgFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgFlag($value)
    {
        return $this->set(self::IMGFLAG, $value);
    }

    /**
     * Returns value of 'ImgFlag' property
     *
     * @return integer
     */
    public function getImgFlag()
    {
        $value = $this->get(self::IMGFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ImgFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgFlag()
    {
        return $this->get(self::IMGFLAG) !== null;
    }

    /**
     * Sets value of 'HDImgFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHDImgFlag($value)
    {
        return $this->set(self::HDIMGFLAG, $value);
    }

    /**
     * Returns value of 'HDImgFlag' property
     *
     * @return integer
     */
    public function getHDImgFlag()
    {
        $value = $this->get(self::HDIMGFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'HDImgFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHDImgFlag()
    {
        return $this->get(self::HDIMGFLAG) !== null;
    }

    /**
     * Sets value of 'Country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'Country' property
     *
     * @return string
     */
    public function getCountry()
    {
        $value = $this->get(self::COUNTRY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Country' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCountry()
    {
        return $this->get(self::COUNTRY) !== null;
    }

    /**
     * Sets value of 'BigHeadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBigHeadImgUrl($value)
    {
        return $this->set(self::BIGHEADIMGURL, $value);
    }

    /**
     * Returns value of 'BigHeadImgUrl' property
     *
     * @return string
     */
    public function getBigHeadImgUrl()
    {
        $value = $this->get(self::BIGHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'BigHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigHeadImgUrl()
    {
        return $this->get(self::BIGHEADIMGURL) !== null;
    }

    /**
     * Sets value of 'SmallHeadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSmallHeadImgUrl($value)
    {
        return $this->set(self::SMALLHEADIMGURL, $value);
    }

    /**
     * Returns value of 'SmallHeadImgUrl' property
     *
     * @return string
     */
    public function getSmallHeadImgUrl()
    {
        $value = $this->get(self::SMALLHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'SmallHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmallHeadImgUrl()
    {
        return $this->get(self::SMALLHEADIMGURL) !== null;
    }
}
}