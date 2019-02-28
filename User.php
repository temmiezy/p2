<?php

namespace Filter1;

class User
{

    # Properties
    private $users;

    # Methods
    public function __construct($json)
    {
        # Load Uer Data
        $usersJson = file_get_contents($json);
        $this->users = json_decode($usersJson, true);
    }

    public function getAllUsers()
    {
        return $this->users;
    }

    public function getByFilterItem(String $username, String $filterType = null)
    {

        $results = array();
        # Filter User Data
        $filterParameter = $username;
        if($filterType == null){
            foreach ($this->users as $name => $user) {
                if ($name == $filterParameter) {
                    //unset($this->users[$name]);
                    $results[$name] = $user;
                }
            }
        }
        else{
            if($filterType == 'active' && $username == 'on'){
                $filterParameter = 1;
            }
            foreach ($this->users as $name => $user) {
                $testArray = array($filterType => $filterParameter);
                //dump($testArray); exit();
                if(array_intersect($user, $testArray)){
                    $results[$name] = $user;
                }
            }
        }

        return $results;
    }
}
