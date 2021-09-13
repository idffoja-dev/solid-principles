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

    public function validate($data)
    {
        if (!isset($data['name'])) {
            throw new \Exception('Invalid Request. Name not found');
        }
        if (!isset($data['email'])) {
            throw new \Exception('Invalid Request. Email not found');
        }
    }

    public function formatJson()
    {
        return json_encode(['name' => $this->name, 'email' => $this->email]);
    }
}

$data = [];
parse_str($_SERVER['QUERY_STRING'], $data);
$user = new User($data);
$user->validate($data);
echo $user->formatJson();
