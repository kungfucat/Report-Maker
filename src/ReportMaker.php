<?php
// src/ReportMaker.php
namespace vendor\Module\ReportMaker;
class ReportMaker
{
    private $repo;
    private $formatter;
    function __construct(
        DocumentRepository $repo,
        DocumentFormatter $formatter)
    {
        $this->repo = $repo;
        $this->formatter = $formatter;
    }
    function newDocument(string $text): int
    {
        return $this->repo->newDocument($text);
    }
    function format(int $id, string $path)
    {
        $this->formatter->format($id, $path);
    }
}