<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsTagDefaultId enum
 */
final class SnsTagDefaultId
{
    const MM_SNS_TAG_ID_PRIVATE = 0;
    const MM_SNS_TAG_ID_FRIEND = 1;
    const MM_SNS_TAG_ID_COLLEAGUE = 2;
    const MM_SNS_TAG_ID_CLASSMATE = 3;
    const MM_SNS_TAG_ID_OUTSIDERS = 4;
    const MM_SNS_TAG_ID_BLACKLIST = 5;
    const MM_SNS_TAG_ID_OTHERS = 6;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MM_SNS_TAG_ID_PRIVATE' => self::MM_SNS_TAG_ID_PRIVATE,
            'MM_SNS_TAG_ID_FRIEND' => self::MM_SNS_TAG_ID_FRIEND,
            'MM_SNS_TAG_ID_COLLEAGUE' => self::MM_SNS_TAG_ID_COLLEAGUE,
            'MM_SNS_TAG_ID_CLASSMATE' => self::MM_SNS_TAG_ID_CLASSMATE,
            'MM_SNS_TAG_ID_OUTSIDERS' => self::MM_SNS_TAG_ID_OUTSIDERS,
            'MM_SNS_TAG_ID_BLACKLIST' => self::MM_SNS_TAG_ID_BLACKLIST,
            'MM_SNS_TAG_ID_OTHERS' => self::MM_SNS_TAG_ID_OTHERS,
        );
    }
}
}