<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * ImgPair message
 */
class ImgPair extends \ProtobufMessage
{
    /* Field index constants */
    const IMGBUF = 1;
    const USERNAME = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IMGBUF => array(
            'name' => 'imgBuf',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::USERNAME => array(
            'name' => 'username',
            'required' => true,
            'type' => '\SKBuiltinString'
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
        $this->values[self::IMGBUF] = null;
        $this->values[self::USERNAME] = null;
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
     * Sets value of 'imgBuf' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setImgBuf(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::IMGBUF, $value);
    }

    /**
     * Returns value of 'imgBuf' property
     *
     * @return \SKBuiltinString_
     */
    public function getImgBuf()
    {
        return $this->get(self::IMGBUF);
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
     * Sets value of 'username' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setUsername(\SKBuiltinString $value=null)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return \SKBuiltinString
     */
    public function getUsername()
    {
        return $this->get(self::USERNAME);
    }

    /**
     * Returns true if 'username' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsername()
    {
        return $this->get(self::USERNAME) !== null;
    }
}
}