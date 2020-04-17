<?php
include "class/Queue.php";
include "class/Ticket.php";

$ticket = new Ticket();

$ticket->enqueue("Nam");
$ticket->enqueue("Bach");

$ticket->dequeue();

var_dump($ticket);