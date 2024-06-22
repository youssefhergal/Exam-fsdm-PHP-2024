<?php


include ('data/data.php');

function findAll($table)
{
    global $$table;
    return $$table;
}

function findOne($table, $id)
{
    global $$table;
    foreach ($$table as $element) {
        if ($element['id'] == $id) {
            return $element;
        }
    }
    return null;
}

function del($table, $id)
{
    global $$table;
    foreach ($$table as $key => $element) {
        if ($element['id'] == $id) {
            unset($$table[$key]);
            return true;
        }
    }
    return false;
}

function save($table, $data)
{
    global $$table;
    if (isset($data['id'])) {
        foreach ($$table as &$element) {
            if ($element['id'] == $data['id']) {
                $element = $data;
                return true;
            }
        }
    }
    $$table[] = $data;
    return true;
}




