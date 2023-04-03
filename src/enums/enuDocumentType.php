<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace iranhmusic\shopack\mha\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuDocumentType extends BaseEnum
{
  const IDCARD   = 'I'; //کارت ملی / رو
  // const IDCARD_BACK    = 'N'; //کارت ملی / پشت
  const BIRTHCERT   = 'B'; //شناسنامه / ص اول
  // const BIRTHCERT_P2   = 'B'; //شناسنامه / ص دوم
  const MUSIC_LICENSE  = 'X'; //مدرک موسیقی

	public static $messageCategory = 'mha';

	public static $list = [
		self::IDCARD   => 'کارت ملی',
		// self::IDCARD_BACK    => 'کارت ملی / پشت',
		self::BIRTHCERT   => 'شناسنامه',
		// self::BIRTHCERT_P2   => 'شناسنامه / ص دوم',
		self::MUSIC_LICENSE  => 'مدرک موسیقی',
	];

};
