<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace iranhmusic\shopack\mha\common\enums;

use shopack\base\common\base\BaseEnum;

abstract class enuMemberKanoonStatus extends BaseEnum
{
	// const None             = 'N'; //0
	const WaitForSend      = 'S'; //1 منتظر ارسال به کانون جهت تاييد/رد
	const WaitForSurvey    = 'W'; //2 ارسال شده به کانون. منتظر بررسي
	const WaitForResurvey  = 'E'; //3 ارسال شده به کانون. منتظر بررسي
	const Azmoon           = 'Z'; //4 آزمون
	const Accepted         = 'A'; //5 قبول
	const Rejected         = 'R'; //6 رد

	public static $messageCategory = 'mha';

	public static $list = [
		// self::None               => 'None',
		self::WaitForSend        => 'Wait For Send',
		self::WaitForSurvey      => 'Wait For Survey',
		self::WaitForResurvey    => 'Wait For Resurvey',
		self::Azmoon             => 'Azmoon',
		self::Accepted           => 'Accepted',
		self::Rejected           => 'Rejected',
	];

};
