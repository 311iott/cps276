<?php
$admin = new Admin();


$path = "index.php?page=welcome";
session_start();
if(isset($_SESSION['status'])){


if($_SESSION['status'] === 'admin'){

$nav=<<<HTML
    <nav class="navbar navbar-expand-sm col-7">
        <div class="container-fluid">
            
                
                <a href="index.php?page=addContact">Add Contact</a>
                <a href="index.php?page=deleteContacts">Delete contact(s)</a>
                <a href="index.php?page=addAdmin">Add Admin</a>
                <a href="index.php?page=deleteAdmin">Delete Admin</a>
                <a href="index.php?page=logout">Logout</a>
        </div>
    </nav>
HTML;
}else {
    $nav=<<<HTML
    <nav class="navbar navbar-expand-sm col-5">
        <div class="container-fluid">
            
                
                <a href="index.php?page=addContact">Add Contact</a>
                <a href="index.php?page=deleteContacts">Delete contact(s)</a>
                <a href="index.php?page=logout">Logout</a>
        </div>
    </nav>
HTML;
}
}else{
    $nav = "";
}
if(isset($_GET)){
    if($_GET['page'] === "addContact"){
      echo $admin->security();
      require_once('pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        
    echo $admin->security();

        require_once('pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        echo $admin->security();
        $username = $_SESSION['name'];
        require_once('pages/welcome.php');
        $result = init($username);
        

    }
    else if($_GET['page'] === "addAdmin"){
        echo $admin->security();
        $status = $_SESSION['status'];
        require_once('pages/addAdmin.php');
        $result = init($status);
    }
    else if($_GET['page'] === "deleteAdmin") {
        echo $admin->security();
        $status = $_SESSION['status'];
        require_once('pages/deleteAdmin.php');
        $result = init($status);
    }
    else if($_GET['page'] === "logout"){
        require_once('pages/logout.php');
        $result = init();
    }
    else if($_GET['page'] === "login"){
        require_once('pages/login.php');
        $result = init();
    }


    else {
        //header('Location: http://russet.php?page=form');
        header('location: '.$path);
    }
}

else {
    //header('Location: http://198.199.80.235/cps276/cps276_assignments/assignment10_final_project/solution/index.php?page=form');
    header('location: '.$path);
}



?>