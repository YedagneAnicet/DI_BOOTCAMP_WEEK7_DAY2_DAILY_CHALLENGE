<?php
class UserN
{
    private $name;
    private $age;

    public function setName($name)
    {
        // Trim the white spaces
        if ((strlen($name)) <= 3) {
            $exception = new Exception('The name should be at least 3 characters long');
            echo $exception->getMessage();
        }
        $name = trim($name);
        $this->name = $name;
    }

    public function setAge($age)
    {
        if ((strlen($age)) <= 0) {
            $exception = new Exception('The age cannot be zero or less');
            echo $exception->getMessage();
        }
        // Cast into an integer type
        $age = (int)$age;
        $this->age = $age;
    }

    public function getName()
    {
        echo $this->name;
    }

    public function getAge()
    {
        echo $this->age;
    }
}



function test()
{
    $dataForUsers = array(
        array("Ben", 4),
        array("Eva", 28),
        array("li", 29),
        array("Catie", "not yet born"),
        array("Sue", 1.5)
    );

    $user1 = new UserN();

    foreach ($dataForUsers as $key => $value) {
        for ($i = 0; $i < count($value); $i++) {
            if ($i === 0) {
                $user1->setName($value[$i]);
                $user1->getName();
            }
            if ($i === 1) {
                $user1->setAge($value[$i]);
                $user1->getAge();
            }
        }
    }
}

test();
