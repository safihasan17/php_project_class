<?php


function getProject($id)
{

    if ($id == 0) {
        echo json_encode(Project::readALL());
    } else {
        echo  json_encode(Project::readAllFilter($id));
    }
}

function getProjectById() {}
