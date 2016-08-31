<?php

// use Acme\Users\Person;
// use Acme\Staff;
// use Acme\Business;
//
//
// $sadik = new Person('shams sadek');
//
// $staff = new Staff([$sadik]);
//
// $laracasts = new Business($staff);
//
// $laracasts->hire(new Person('Talha Ekhlas'));

// var_dump($laracasts->getStaffMembers());

// class Math{
//
//   public static function add(...$nums)
//   {
//     return array_sum($nums);
//   }
// }
//
//
// echo Math::add(1,2,3,4);

interface Animal {
  public function communicate();
}

class Dog implements Animal {

    public function communicate()
    {
      return 'bark';
    }
}

class Cat implements Animal {

    public function communicate()
    {
      return 'meow';
    }
}
