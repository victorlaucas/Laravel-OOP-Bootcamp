<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$victor = new Person('Victor Laucas');

$staff = new Staff([$victor]);

$coding = new Business($staff);

$coding->hire(new Person('Jane Doe'));

var_dump($coding->getStaffMembers());