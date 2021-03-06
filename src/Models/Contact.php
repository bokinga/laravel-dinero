<?php namespace LasseRafn\Dinero\Models;

use LasseRafn\Dinero\Utils\Model;

class Contact extends Model
{
	protected $entity     = 'contacts';
	protected $primaryKey = 'ContactGuid';
	protected $fillable   = [
		'ContactGuid',
		'CreatedAt',
		'UpdatedAt',
		'DeletedAt',
		'IsDebitor',
		'IsCreditor',
		'ExternalReference',
		'Name',
		'Street',
		'ZipCode',
		'City',
		'CountryKey',
		'Phone',
		'Email',
		'Webpage',
		'AttPerson',
		'VatNumber',
		'EanNumber',
		'PaymentConditionType',
		'PaymentConditionNumberOfDays',
		'IsPerson',
	];

	public $ContactGuid;
	public $CreatedAt;
	public $UpdatedAt;
	public $DeletedAt;

	/** @var boolean */
	public $IsDebitor;

	/** @var boolean */
	public $IsCreditor;
	public $ExternalReference;
	public $Name;
	public $Street;
	public $ZipCode;
	public $City;
	public $CountryKey;
	public $Phone;
	public $Email;
	public $Webpage;
	public $AttPerson;
	public $VatNumber;
	public $EanNumber;
	public $PaymentConditionType;
	public $PaymentConditionNumberOfDays;

	/** @var boolean */
	public $IsPerson;
}