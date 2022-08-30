<?php
namespace app\service\principle;

interface Course {
    public function study():void;
}

class JavaCourse implements Course {

    public function study(): void
    {
        // TODO: Implement study() method.
    }

}

class PythonCourse implements Course {

    public function study(): void
    {
        // TODO: Implement study() method.
    }

}

class Tom {

    protected $course;

    public function __construct(Course $course) {
        $this->course = $course;
    }

    public function study()
    {
         $this->course->study();
         //to do something...
    }

}


class client {

    public function index()
    {
        //学习java课程
        (new Tom((new JavaCourse())))->study();

        //学习python课程
        (new Tom((new PythonCourse())))->study();

    }

}




