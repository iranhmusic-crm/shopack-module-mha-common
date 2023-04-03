<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace iranhmusic\shopack\mha\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuMemberStatus extends BaseEnum
{
  const ACTIVE            = 'A';
  const INACTIVE          = 'D';
  const WAIT_FOR_APPROVE  = 'W';
  const REMOVED           = 'R';

	public static $messageCategory = 'mha';

	public static $list = [
		// [
			self::ACTIVE            => 'Active',
			self::INACTIVE          => 'Inactive',
			self::WAIT_FOR_APPROVE  => 'Wait For Approval',
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
