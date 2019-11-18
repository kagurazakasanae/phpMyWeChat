<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * MODUSERIMG message
 */
class MODUSERIMG extends \ProtobufMessage
{
    /* Field index constants */
    const IMGTYPE = 1;
    const IMGLEN = 2;
    const IMGBUF = 3;
    const IMGMD5 = 4;
    const BIGHEADIMGURL = 5;
    const SMALLHEADIMGURL = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IMGTYPE => array(
            'name' => 'imgType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGLEN => array(
            'name' => 'imgLen',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGBUF => array(
            'name' => 'imgBuf',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMGMD5 => array(
            'name' => 'imgMd5',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BIGHEADIMGURL => array(
            'name' => 'bigHeadImgUrl',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SMALLHEADIMGURL => array(
            'name' => 'smallHeadImgUrl',
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
        $this->values[self::IMGTYPE] = null;
        $this->values[self::IMGLEN] = null;
        $this->values[self::IMGBUF] = null;
        $this->values[self::IMGMD5] = null;
        $this->values[self::BIGHEADIMGURL] = null;
        $this->values[self::SMALLHEADIMGURL] = null;
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
     * Sets value of 'imgType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgType($value)
    {
        return $this->set(self::IMGTYPE, $value);
    }

    /**
     * Returns value of 'imgType' property
     *
     * @return integer
     */
    public function getImgType()
    {
        $value = $this->get(self::IMGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'imgType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgType()
    {
        return $this->get(self::IMGTYPE) !== null;
    }

    /**
     * Sets value of 'imgLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgLen($value)
    {
        return $this->set(self::IMGLEN, $value);
    }

    /**
     * Returns value of 'imgLen' property
     *
     * @return integer
     */
    public function getImgLen()
    {
        $value = $this->get(self::IMGLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'imgLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgLen()
    {
        return $this->get(self::IMGLEN) !== null;
    }

    /**
     * Sets value of 'imgBuf' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgBuf($value)
    {
        return $this->set(self::IMGBUF, $value);
    }

    /**
     * Returns value of 'imgBuf' property
     *
     * @return string
     */
    public function getImgBuf()
    {
        $value = $this->get(self::IMGBUF);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'imgBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgBuf()
    {
        return $this->get(self::IMGBUF) !== null;
    }

    /**
     * Sets value of 'imgMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgMd5($value)
    {
        return $this->set(self::IMGMD5, $value);
    }

    /**
     * Returns value of 'imgMd5' property
     *
     * @return string
     */
    public function getImgMd5()
    {
        $value = $this->get(self::IMGMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'imgMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgMd5()
    {
        return $this->get(self::IMGMD5) !== null;
    }

    /**
     * Sets value of 'bigHeadImgUrl' property
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
     * Returns value of 'bigHeadImgUrl' property
     *
     * @return string
     */
    public function getBigHeadImgUrl()
    {
        $value = $this->get(self::BIGHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bigHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigHeadImgUrl()
    {
        return $this->get(self::BIGHEADIMGURL) !== null;
    }

    /**
     * Sets value of 'smallHeadImgUrl' property
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
     * Returns value of 'smallHeadImgUrl' property
     *
     * @return string
     */
    public function getSmallHeadImgUrl()
    {
        $value = $this->get(self::SMALLHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'smallHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmallHeadImgUrl()
    {
        return $this->get(self::SMALLHEADIMGURL) !== null;
    }
}
}