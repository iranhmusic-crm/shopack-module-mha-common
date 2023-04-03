<?php
/**
 * @author Kambiz Zandi <kambizzandi@gmail.com>
 */

namespace iranhmusic\shopack\mha\common\models;

use shopack\base\common\rest\enuColumnInfo;
use iranhmusic\shopack\mha\common\enums\enuInsurerDocStatus;

/*
'mbrminsdochstID',
'mbrminsdochstMasterInsDocID',
'mbrminsdochstAction',
'mbrminsdochstCreatedAt',
'mbrminsdochstCreatedBy',
*/
trait MemberMasterInsDocHistoryModelTrait
{
	public function primaryKeyValue() {
		return $this->mbrminsdochstID;
	}

	public static function columnsInfo()
	{
		return [
			'mbrminsdochstID' => [
				enuColumnInfo::type       => 'integer',
				enuColumnInfo::validator  => null,
				enuColumnInfo::default    => null,
				enuColumnInfo::required   => false,
				enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'mbrminsdochstMasterInsDocID' => [
				enuColumnInfo::type       => 'integer',
				enuColumnInfo::validator  => null,
				enuColumnInfo::default    => null,
				enuColumnInfo::required   => true,
				enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
			'mbrminsdochstAction' => [
				enuColumnInfo::type       => ['string', 'max' => 1],
				enuColumnInfo::validator  => null,
				enuColumnInfo::default    => enuInsurerDocStatus::WaitForSurvey,
				enuColumnInfo::required   => true,
				enuColumnInfo::selectable => true,
        enuColumnInfo::search     => true,
			],
      'mbrminsdochstCreatedAt' => [
				enuColumnInfo::type       => 'safe',
				enuColumnInfo::validator  => null,
				enuColumnInfo::default    => null,
				enuColumnInfo::required   => false,
				enuColumnInfo::selectable => true,
			],
      'mbrminsdochstCreatedBy' => [
				enuColumnInfo::type       => 'integer',
				enuColumnInfo::validator  => null,
				enuColumnInfo::default    => null,
				enuColumnInfo::required   => false,
				enuColumnInfo::selectable => true,
			],

		];
	}

	public function getMemberMasterInsDoc() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\iranhmusic\shopack\mha\backend\models\MemberMasterInsDocModel';
		else
			$className = '\iranhmusic\shopack\mha\frontend\common\models\MemberMasterInsDocModel';

		return $this->hasOne($className, ['mbrminsdocID' => 'mbrminsdochstMasterInsDocID']);
	}

	public function getCreatedByUser() {
		$className = get_called_class();

		if (str_contains($className, '\\backend\\'))
			$className = '\shopack\aaa\backend\models\UserModel';
		else
			$className = '\shopack\aaa\frontend\common\models\UserModel';

		return $this->hasOne($className, ['usrID' => 'mbrminsdochstCreatedBy']);
	}

}
