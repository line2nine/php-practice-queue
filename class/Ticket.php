<?php


class Ticket implements Queue
{
    protected $queue;
    protected $limit;

    public function __construct($limit = 5)
    {
        $this->limit = $limit;
        $this->queue = [];
    }

    function enqueue($data)
    {
        if (!$this->isFull()){
            array_push($this->queue, $data);
        } else {
            echo "Full";
        }
    }

    function dequeue()
    {
        if (!$this->isEmpty()){
            array_shift($this->queue);
        } else {
            echo "Empty";
        }
    }

    function isEmpty()
    {
        return empty($this->queue);
    }

    function isFull()
    {
        return count($this->queue) == $this->limit;
    }
}