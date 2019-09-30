<?php namespace repository;

interface IRepository {

    function Add($value);
    function GetAll();
    function Delete($value);

}