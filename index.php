<?php

abstract class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() { return $this->name; }
    public function getEmail() { return $this->email; }
    public function setName($name) { $this->name = $name; }
    public function setEmail($email) { $this->email = $email; }

    abstract public function getRole();
}

class Student extends User {
    private $group;

    public function __construct($name, $email, $group) {
        $this->setName($name);   // Set bcs name is private
        $this->setEmail($email);
        $this->group = $group;
    }

    public function getRole() { return "Student"; }

    public function getGroup() { return $this->group; }
    public function setGroup($group) { $this->group = $group; }
}

class Teacher extends User {
    private $subject;

    public function __construct($name, $email, $subject) {
        $this->setName($name);
        $this->setEmail($email);
        $this->subject = $subject;
    }

    public function getRole() { return "Teacher"; }

    public function getSubject() { return $this->subject; }
    public function setSubject($subject) { $this->subject = $subject; }
}

// Creating obj
$student = new Student("Jay", "jay@gmail.com", "Group KN-24");
$teacher = new Teacher("Tim", "tim@mail.com", "MAth");

// Vivid info
echo "Name: " . $student->getName() . "<br>";
echo "Email: " . $student->getEmail() . "<br>";
echo "Role: " . $student->getRole() . "<br>";
echo "Group: " . $student->getGroup() . "<br><br>";

echo "Name: " . $teacher->getName() . "<br>";
echo "Email: " . $teacher->getEmail() . "<br>";
echo "Role: " . $teacher->getRole() . "<br>";
echo "Subject: " . $teacher->getSubject() . "<br>";
