<?php
class Picture
{
    public $id;
    public $name;
    public $path;
    public $size;

    function __construct($id, $name, $path, $size)
    {
        $this->id = $id;
        $this->name = $name;
        $this->path = $path;
        $this->size = $size;
    }

    function Show()
    {
        echo "Id = " . $this->id . "<br>";
        echo "name = " . $this->name . "<br>";
        echo "path = " . $this->path . "<br>";
        echo "size = " . $this->size . "<br>";
    }
}