<?php
declare(strict_types=1);

class post
{

    //properties
    private $title;
    private $date;
    private $name;
    private $comment;


    //methods

    public function __construct(string $title, $date, string $name, string $comment)
    {
        $this->title = $title;
        $this->date = $date;
        $this->name = $name;
        $this->comment = $comment;
    }

    public function getDataObject()
    {

        $dataInJson =
            ['Title' => $this->getTitle() . '<br>',
            'Date' => $this->getDate() . '<br>',
            'Name' => $this->getName() . '<br>',
            'Comment' => $this->getComment() . '<br/>'];
        return $dataInJson;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getComment()
    {
        return $this->comment;
    }


}
