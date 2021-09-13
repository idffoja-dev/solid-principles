<?php

error_reporting(E_ALL & ~E_WARNING);

class User
{
    public $email;
    public $name;

    public function __construct($data)
    {
        $this->email = $data['email'];
        $this->name = $data['name'];
    }
}

class UserRequest
{
    protected static $rules = [
        'email' => 'string',
        'name' => 'string',
    ];

    public static function validate($data)
    {
        foreach (static::$rules as $property => $type) {
            if (gettype($data[$property]) !== $type) {
                throw new \Exception("User Property {$property} must be of type {$type}");
            }
        }
    }
}

class Json
{
    public static function encode($data)
    {
        return json_encode($data);
    }
}

$data = [];
parse_str($_SERVER['QUERY_STRING'], $data);
UserRequest::validate($data);
$user = new User($data);
echo Json::encode($data);
