<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];


    protected $_hidden = [
        'password'
    ];
}
