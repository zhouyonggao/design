<?php
namespace app\service\simplefactory;

use think\Exception;

//课程抽象
interface Course {
    public function study(): void;
}


//具体课程
class JavaCourse implements Course
{
    public function study(): void
    {
        // TODO: Implement study() method.
    }
}


//具体课程
class PythonCourse implements Course
{
    public function study(): void
    {
       // to do something ...
    }
}

//课程工厂
class CourseFactory {

    public static function create(string $course_name): Course
    {
        #这里已经违背了开闭原则, 如果课程较多且修改频率较大 建议利用反射来优化创建的逻辑..
        switch ($course_name) {
            case 'java':
                return new JavaCourse();
            case 'python':
                return new PythonCourse();
        }

        throw new Exception('课程不存在');
    }

}


//客户端
class client {
     public function test()
     {
         $course_factory = CourseFactory::create('java');
         $course_factory->study();
     }
}