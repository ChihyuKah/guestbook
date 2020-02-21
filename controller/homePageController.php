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
        $email = ($_POST["email"]);
        $comment = ($_POST["comment"]);

        $dataObject = new post($name, $date, $email,$comment);

        var_dump($dataObject);
    }

}
