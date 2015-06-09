<?php
 /*
* Copyright (C) 2013 Gigya, Inc.
* Version 2.15.6
*
*
* Gigya PHP SDK
* @author Guy schaller
*/

namespace Gigya;

/**
 * Gigya Socialize Key Not Found Exception
 *
 */
class GSKeyNotFoundException extends GSException{

	public function __construct($key){
		$this->errorMessage = "GSObject does not contain a value for key ".$key;
	}
}
