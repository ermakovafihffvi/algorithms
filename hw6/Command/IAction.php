<?php

interface IAction{
    abstract function action();
    abstract function unaction();
    abstract function reaction();
}