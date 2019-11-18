<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsObjectType enum
 */
final class SnsObjectType
{
    const MMSNS_OBJECT_UNKNOWN = 0;
    const MMSNS_OBJECT_PHOTO = 1;
    const MMSNS_OBJECT_TEXT = 2;
    const MMSNS_OBJECT_FEED = 3;
    const MMSNS_OBJECT_MUSIC = 4;
    const MMSNS_OBJECT_VIDEO = 5;
    const MMSNS_OBJECT_LOCATION = 6;
    const MMSNS_OBJECT_BACKGROUND = 7;
    const MMSNS_OBJECT_WXSIGN = 8;
    const MMSNS_OBJECT_PRODUCT = 9;
    const MMSNS_OBJECT_EMOTION = 10;
    const MMSNS_OBJECT_OLD_TV = 11;
    const MMSNS_OBJECT_GENERAL_PRODUCT = 12;
    const MMSNS_OBJECT_GENERAL_CARD = 13;
    const MMSNS_OBJECT_TV = 14;
    const MMSNS_OBJECT_SIGHT = 15;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MMSNS_OBJECT_UNKNOWN' => self::MMSNS_OBJECT_UNKNOWN,
            'MMSNS_OBJECT_PHOTO' => self::MMSNS_OBJECT_PHOTO,
            'MMSNS_OBJECT_TEXT' => self::MMSNS_OBJECT_TEXT,
            'MMSNS_OBJECT_FEED' => self::MMSNS_OBJECT_FEED,
            'MMSNS_OBJECT_MUSIC' => self::MMSNS_OBJECT_MUSIC,
            'MMSNS_OBJECT_VIDEO' => self::MMSNS_OBJECT_VIDEO,
            'MMSNS_OBJECT_LOCATION' => self::MMSNS_OBJECT_LOCATION,
            'MMSNS_OBJECT_BACKGROUND' => self::MMSNS_OBJECT_BACKGROUND,
            'MMSNS_OBJECT_WXSIGN' => self::MMSNS_OBJECT_WXSIGN,
            'MMSNS_OBJECT_PRODUCT' => self::MMSNS_OBJECT_PRODUCT,
            'MMSNS_OBJECT_EMOTION' => self::MMSNS_OBJECT_EMOTION,
            'MMSNS_OBJECT_OLD_TV' => self::MMSNS_OBJECT_OLD_TV,
            'MMSNS_OBJECT_GENERAL_PRODUCT' => self::MMSNS_OBJECT_GENERAL_PRODUCT,
            'MMSNS_OBJECT_GENERAL_CARD' => self::MMSNS_OBJECT_GENERAL_CARD,
            'MMSNS_OBJECT_TV' => self::MMSNS_OBJECT_TV,
            'MMSNS_OBJECT_SIGHT' => self::MMSNS_OBJECT_SIGHT,
        );
    }
}
}