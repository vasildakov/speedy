<?php

// Active Record Pattern
namespace ActiveRecord
{
    class ActiveRecord {

        public function __construct() {
            $pdo = new \PDO('mysql_server', 'mysql_username', 'mysql_password', []);
        }

        public function save() {}

        public function delete() {}
    }

    class User extends ActiveRecord
    {
        public function __construct($username, $password)
        {
        }
    }

    $user = new User('vasildakov', '12345678');
    $user->save();
}

// Object Manager Pattern
namespace ObjectManager
{
    class ObjectManager {
        public function save($object) {}
    }


    class User
    {
        public function __construct($id, $username, $password)
        {
        }
    }

    $user = new User('1', 'vasildakov', '12345678');

    $objectManager = new ObjectManager();
    $objectManager->save($user);
}



































namespace Example {


    class Email
    {
        private string $value;

        public function __construct(string $value)
        {
            $this->value = $value;
        }
    }

    class Phone
    {
        private string $number;

        public function __construct(string $number)
        {
            $this->number = $number;
        }
    }

    class Address
    {
        private Phone $phone;

        private Email $email;

        public function __construct(Phone $phone, Email $email)
        {
            $this->setPhone($phone);
            $this->setEmail($email);
        }

        private function setPhone(Phone $phone): self
        {
            $this->phone = $phone;

            return $this;
        }

        public function getPhone(): Phone
        {
            return $this->phone;
        }


        private function setEmail(Email $email): self
        {
            $this->email = $email;

            return $this;
        }

        public function getEmail(): Email
        {
            return $this->email;
        }

    }


    $address = new Address(
        new Phone('0888223344'),
        new Email('john.doe@example.com')
    );
}





