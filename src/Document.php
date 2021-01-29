<?php
// src/Document.php
namespace vendor\Module\ReportMaker;
class Document
{
    private $id;
    private $text;
    private $name;

    public function getText(): string
    {
        return $this->name;
    }
    public function setText(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}