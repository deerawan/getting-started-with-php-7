<?php

/** @Entity */
class Student
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /** @Column(type="string") */
    private $name;

    /** @Column(type="integer") */
    private $age;

    /** @Column(type="string", length=1) */
    private $gender;

    /** @Column(type="string") */
    private $email;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}