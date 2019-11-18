<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * GetFavInfoResponse message
 */
class GetFavInfoResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const USEDSIZE = 2;
    const TOTALSIZE = 3;
    const MXFAVFILESIZE = 4;
    const MXAUTOUPLOADSIZE = 5;
    const MXAUTODOWNLOADSIZE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::USEDSIZE => array(
            'name' => 'usedSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOTALSIZE => array(
            'name' => 'totalSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MXFAVFILESIZE => array(
            'name' => 'mxFavFileSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MXAUTOUPLOADSIZE => array(
            'name' => 'mxAutoUploadSize',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MXAUTODOWNLOADSIZE => array(
            'name' => 'mxAutoDownloadSize',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::USEDSIZE] = null;
        $this->values[self::TOTALSIZE] = null;
        $this->values[self::MXFAVFILESIZE] = null;
        $this->values[self::MXAUTOUPLOADSIZE] = null;
        $this->values[self::MXAUTODOWNLOADSIZE] = null;
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
     * Sets value of 'usedSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUsedSize($value)
    {
        return $this->set(self::USEDSIZE, $value);
    }

    /**
     * Returns value of 'usedSize' property
     *
     * @return integer
     */
    public function getUsedSize()
    {
        $value = $this->get(self::USEDSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'usedSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsedSize()
    {
        return $this->get(self::USEDSIZE) !== null;
    }

    /**
     * Sets value of 'totalSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalSize($value)
    {
        return $this->set(self::TOTALSIZE, $value);
    }

    /**
     * Returns value of 'totalSize' property
     *
     * @return integer
     */
    public function getTotalSize()
    {
        $value = $this->get(self::TOTALSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalSize()
    {
        return $this->get(self::TOTALSIZE) !== null;
    }

    /**
     * Sets value of 'mxFavFileSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMxFavFileSize($value)
    {
        return $this->set(self::MXFAVFILESIZE, $value);
    }

    /**
     * Returns value of 'mxFavFileSize' property
     *
     * @return integer
     */
    public function getMxFavFileSize()
    {
        $value = $this->get(self::MXFAVFILESIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mxFavFileSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMxFavFileSize()
    {
        return $this->get(self::MXFAVFILESIZE) !== null;
    }

    /**
     * Sets value of 'mxAutoUploadSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMxAutoUploadSize($value)
    {
        return $this->set(self::MXAUTOUPLOADSIZE, $value);
    }

    /**
     * Returns value of 'mxAutoUploadSize' property
     *
     * @return integer
     */
    public function getMxAutoUploadSize()
    {
        $value = $this->get(self::MXAUTOUPLOADSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mxAutoUploadSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMxAutoUploadSize()
    {
        return $this->get(self::MXAUTOUPLOADSIZE) !== null;
    }

    /**
     * Sets value of 'mxAutoDownloadSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMxAutoDownloadSize($value)
    {
        return $this->set(self::MXAUTODOWNLOADSIZE, $value);
    }

    /**
     * Returns value of 'mxAutoDownloadSize' property
     *
     * @return integer
     */
    public function getMxAutoDownloadSize()
    {
        $value = $this->get(self::MXAUTODOWNLOADSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mxAutoDownloadSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMxAutoDownloadSize()
    {
        return $this->get(self::MXAUTODOWNLOADSIZE) !== null;
    }
}
}