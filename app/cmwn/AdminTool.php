<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class AdminTool extends Model
{
	public static $uploadCsvRules = array(
		'yourcsv'=>'required|mimes:csv,txt',
	);

	public static $uploadImageRules = array(
		'yourfile'=>'required|image',
	);
}
