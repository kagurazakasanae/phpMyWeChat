<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsMediaType enum
 */
final class SnsMediaType
{
    const MMSNS_DATA_TEXT = 1;
    const MMSNS_DATA_PHOTO = 2;
    const MMSNS_DATA_VOICE = 3;
    const MMSNS_DATA_VIDEO = 4;
    const MMSNS_DATA_MUSIC = 5;
    const MMSNS_DATA_SIGHT = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MMSNS_DATA_TEXT' => self::MMSNS_DATA_TEXT,
            'MMSNS_DATA_PHOTO' => self::MMSNS_DATA_PHOTO,
            'MMSNS_DATA_VOICE' => self::MMSNS_DATA_VOICE,
            'MMSNS_DATA_VIDEO' => self::MMSNS_DATA_VIDEO,
            'MMSNS_DATA_MUSIC' => self::MMSNS_DATA_MUSIC,
            'MMSNS_DATA_SIGHT' => self::MMSNS_DATA_SIGHT,
        );
    }
}
}