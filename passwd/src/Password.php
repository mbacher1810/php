<?php
namespace Mbacher\Passwd;
class Password
{
    private string $password;
    public function __construct()
    {
        $this->password = 'geheim';
    }
    public function getValue(): string
    {
        return $this->password;
    }
    public function addRandomNumber(){
        $rand = mt_rand(1,10);
        $this->password = $this->password . $rand;
    }
}