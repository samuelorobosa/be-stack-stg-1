<?php
class Person{
    public $slackUsername;
    public $backend;
    public $age;
    public $bio;

    //Methods
    function setAttributes($slackUsername, $backend, $age, $bio){
        $this->slackUsername = $slackUsername;
        $this->backend = $backend;
        $this->age = $age;
        $this->bio = $bio;
    }
}

$tall_dev = new Person();
$tall_dev->setAttributes("tall_dev", true, 22, "A frontend developer developing and maintaining applications on the web. I help companies translate their business ideas into technical specifications using modern web technologies." );

##Return JSON response
$tall_dev_encoded = json_encode($tall_dev);
echo $tall_dev_encoded;