<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];

    if($page == 'dashboard'){
        include_once('views/pages/dashboard.php');
    } 
    elseif($page == 'projects'){
        include_once('views/pages/projects.php');
    }
    elseif($page == 'noticeboard'){
        include_once('views/pages/noticeboard.php');
    }

    //users
    elseif($page == 'manage'){
        include_once('views/pages/users/manage.php');
    }
    elseif($page == 'create'){
        include_once('views/pages/users/create.php');
    }
    elseif($page == 'edit-user'){
        include_once('views/pages/users/edit.php');
    }
    //projects

    elseif($page == 'manage_project'){
        include_once('views/pages/projects/manage.php');
    }

    elseif($page == 'create_project'){
        include_once('views/pages/projects/create.php');
    }

    elseif($page == 'edit_project'){
        include_once('views/pages/projects/edit.php');
    }

    elseif($page == 'project_detail'){
        include_once('views/pages/projects/project.detailed.php');
    }



    //phases

    elseif($page == 'manage_phases'){
        include_once('views/pages/phases/manage.php');
    }
    elseif($page == 'create_phases'){
        include_once('views/pages/phases/create.php');
    }

    elseif($page == 'edit_phases'){
        include_once('views/pages/phases/edit.php');
    }

    // teams

    elseif($page == 'manage_teams'){
        include_once('views/pages/teams/manage.php');
    }
    elseif($page == 'create_teams'){
        include_once('views/pages/teams/create.php');
    }
    elseif($page == 'edit_teams'){
        include_once('views/pages/teams/edit.php');
    }

    //project_teams

    elseif($page == 'manage_project_teams'){
        include_once('views/pages/projectteams/manage.php');
    }
    elseif($page == 'create_project_teams'){
        include_once('views/pages/projectteams/create.php');
    }
    elseif($page == 'edit_project_teams'){
        include_once('views/pages/projectteams/edit.php');
    }

    //tasks

    elseif($page == 'manage_tasks'){
        include_once('views/pages/tasks/manage.php');
    }

    elseif($page == 'create_tasks'){
        include_once('views/pages/tasks/create.php');
    }
    elseif($page == 'edit_tasks'){
        include_once('views/pages/tasks/edit.php');
    }

    //phases.cost.timing

    elseif($page == 'manage_phases_cost'){
        include_once('views/pages/phases.cost.timing/manage.php');
    }
     elseif($page == 'create_phases_cost'){
        include_once('views/pages/phases.cost.timing/create.php');
    }

     elseif($page == 'edit_phases_cost'){
        include_once('views/pages/phases.cost.timing/edit.php');
    }


    else{
        include_once('views/pages/dashboard.php');
    }
}
else{
        include_once('views/pages/dashboard.php');
    }
?>