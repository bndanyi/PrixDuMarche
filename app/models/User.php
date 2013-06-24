<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier() {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword() {
        return $this->password;
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail() {
        return $this->email;
    }

    public function register($input) {
        $input = Input::all();

        $rules = array(
            'name' => 'Required|Min:6|Max:64|alpha',
            'email' => 'Required|min:3,64|Email|unique:users',
            'password' => 'Required|alpha_num|Between:6,12|Confirmed',
            'confirm_password' => 'Required|alpha_num|Between:6,12'
        );

        return Validator::make($input, $rules);
    }

}

