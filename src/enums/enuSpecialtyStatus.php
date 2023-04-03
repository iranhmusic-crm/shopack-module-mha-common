<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace iranhmusic\shopack\mha\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuSpecialtyStatus extends BaseEnum
{
  const ACTIVE            = 'A';
  const INACTIVE          = 'D';
  const REMOVED           = 'R';

	public static $messageCategory = 'mha';

	public static $list = [
		// [
			self::ACTIVE            => 'Active',
			self::INACTIVE          => 'Inactive',
			self::REMOVED           => 'Removed',
		// ],
		// 'create-form' => [
		// 	self::ACTIVE,
		// 	self::INACTIVE,
		// ],
		// 'update-form' => [
		// 	self::ACTIVE,
		// 	self::INACTIVE,
		// ],
	];

};
