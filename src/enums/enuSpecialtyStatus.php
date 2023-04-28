<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace iranhmusic\shopack\mha\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuSpecialtyStatus extends BaseEnum
{
  const Active            = 'A';
  const Inactive          = 'D';
  const Removed           = 'R';

	public static $messageCategory = 'mha';

	public static $list = [
		// [
			self::Active            => 'Active',
			self::Inactive          => 'Inactive',
			self::Removed           => 'Removed',
		// ],
		// 'create-form' => [
		// 	self::Active,
		// 	self::Inactive,
		// ],
		// 'update-form' => [
		// 	self::Active,
		// 	self::Inactive,
		// ],
	];

};
