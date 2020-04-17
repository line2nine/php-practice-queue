<?php


interface Queue
{
    function enqueue($data);
    function dequeue();
    function isEmpty();
    function isFull();
}