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
        $name = ($_POST["name"]);
        $date = date("d m y");
        $title = ($_POST["title"]);
        $comment = ($_POST["comment"]);

        $dataObject = new post($name, $date, $title,$comment);

        var_dump($dataObject);

        $jsonEncoded = json_encode($dataObject->getDataObject());

        file_put_contents('database/user.json',$jsonEncoded);
        echo $jsonEncoded;
    }


}
