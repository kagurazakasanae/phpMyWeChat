<?php
/**
 * Auto generated from WeChat.proto at 2019-11-11 02:28:27
 */

namespace {
/**
 * SnsObjectOpType enum
 */
final class SnsObjectOpType
{
    const MMSNS_OBJECTOP_DEL = 1;
    const MMSNS_OBJECTOP_SET_PRIVACY = 2;
    const MMSNS_OBJECTOP_SET_OPEN = 3;
    const MMSNS_OBJECTOP_DELETE_COMMENT = 4;
    const MMSNS_OBJECTOP_CANCEL_LIKE = 5;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'MMSNS_OBJECTOP_DEL' => self::MMSNS_OBJECTOP_DEL,
            'MMSNS_OBJECTOP_SET_PRIVACY' => self::MMSNS_OBJECTOP_SET_PRIVACY,
            'MMSNS_OBJECTOP_SET_OPEN' => self::MMSNS_OBJECTOP_SET_OPEN,
            'MMSNS_OBJECTOP_DELETE_COMMENT' => self::MMSNS_OBJECTOP_DELETE_COMMENT,
            'MMSNS_OBJECTOP_CANCEL_LIKE' => self::MMSNS_OBJECTOP_CANCEL_LIKE,
        );
    }
}
}