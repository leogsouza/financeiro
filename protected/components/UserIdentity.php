<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identify the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$usuario=Usuario::model()->findByAttributes(array('login' => $this->username));
		if ($usuario === null) {
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		} elseif (!$usuario->validatePassword($this->password)) { // check crypted password against the one provided
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		} else {
			$this->_id = $usuario->id;
			$this->errorCode = self::ERROR_NONE;
		}
		return $this->errorCode == self::ERROR_NONE;
	}

	/**
	 * Will return the ObjectId of the user
	 * @see CUserIdentity::getId()
	 */
	public function getId(){
		return $this->_id;
	}
}