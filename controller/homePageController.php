<?php


require 'view/homepage.php';

class homePageController
{


    public function render(array $GET, array $POST)
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $this->post();
        }
    }
    public function post()
    {
        $testArray = [];

        $name = ($_POST["name"]);
        $date = date("d m y");
        $title = ($_POST["title"]);
        $comment = ($_POST["comment"]);

//        array_push($testArray, $name,$date,$title,$comment);
//
//        $arrayEncode = json_encode($testArray);
//        var_dump($arrayEncode);
//
//        file_put_contents('database/user.json',$arrayEncode);
        $dataObject = new post($name, $date, $title,$comment);

        var_dump($dataObject);


        $jsonEncoded = json_encode($dataObject->getDataObject());

        file_put_contents('database/user.json',$jsonEncoded);
        echo $jsonEncoded;
    }


}
