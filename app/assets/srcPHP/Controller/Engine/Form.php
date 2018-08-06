<?php
/*
-fill out a form
-Post to PHP
-Sanitize
-Validata
-Return Data
-Write to Database
*/
require 'Form/Val.php';
class Form {
	/* @var array $_currentItem - The immediately posted item*/
	private $_currentItem = null;
	 /* @var array $_postData - Stores the Posted Data*/
	private $_postData = array();
	 /* @var array $_val - The validator object*/
	private $_val = array();
		 /* @var array $_error - Holds the current forms errors */
	private $_error = array();
	/*
		__construct - Instantiates validator class
	*/
	public function __construct() {
		$this->_val = new Val();
	}

	/*
		Post - This is to run $_POST
		@param string $field - The HTML filedname to post
	*/
	public function post($field) {
		$this->_postData[$field] = $_POST[$field];
		$this->_currentItem = $field;
		echo '-----------'.$this->_currentItem.'------------';
		return $this;
	}

	/*
		get - Return the posted data

		mixed $fieldName 
		Return mixed String or array 
	*/
	public function get($fieldName = false) {
		if ($fieldName) {
			if ($this->_postData[$fieldName]) {
				return $this->_postData[$fieldName];
			} else {
				return false;
			}		
		} else {
			return $this->_postData;
		}	
	}

	/*
		Val - This is to validate

		string $typeOfValidator  - A method from the Form/Val class
		string $arg - A property to validate against
	*/
	public function val($typOfValidator, $arg = null) {
		if ($arg == null) {
			$error = $this->_val->{$typOfValidator}(
			$this->_postData[$this->_currentItem]
			);
		} else {
			$error = $this->_val->{$typOfValidator}(
			$this->_postData[$this->_currentItem],
			$arg
			);
		}
		
		if ($error) $this->_error[$this->_currentItem] = $error;

		return $this;
	}
    /*
		submit - Handles the form, and throws an exception upon error.
    */
	public function submit() {
		if (empty($this->_error)) {
			return true;
		} else {
			$str = '';
			foreach ($this->_error as $key => $value) {
				$str .= $key . '=> ' . $value ."\n";
			}

			throw new Exception($str);
		}	
	}
}