<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json($filename);


$self = htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES);


$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$action = $_GET['action'] ?? null;

if ($id !== null && !isset($users[$id])) {
    $id = null; 
}



if ($id !== null && $action === "update" && $_SERVER['REQUEST_METHOD'] === "POST") {

    $users[$id]->name  = trim($_POST['user-name']);
    $users[$id]->type  = trim($_POST['user-type']);
    $users[$id]->email = trim($_POST['user-email']);


    $users[$id]->classes = array_values(array_filter(
        array_map("trim", explode(",", $_POST['user-classes']))
    ));

    file_put_contents($filename, json_encode($users, JSON_PRETTY_PRINT));

    header("Location: {$_SERVER['PHP_SELF']}?id=$id");
    exit;
}



function showUserPage($user, $id, $self) {
    $name    = htmlspecialchars($user->name);
    $type    = htmlspecialchars($user->type);
    $email   = htmlspecialchars($user->email);
    $classes = htmlspecialchars(implode(", ", $user->classes));


echo <<<HTML
    <h2>$name</h2>
    <div class="form-control">
        <strong>Type:</strong> <span>$type</span>
    </div>
    <div class="form-control">
        <strong>Email:</strong> <span>$email</span>
    </div>
    <div class="form-control">
        <strong>Classes:</strong> <span>$classes</span>
    </div>
    <div class="form-control">
        <a class="form-button" href="$self?id=$id&action=edit">Edit User</a>
        <a class="form-button" href="$self">Back to List</a>
    </div>
HTML;
}



function showUserForm($user, $id, $self) {
    $name    = htmlspecialchars($user->name, ENT_QUOTES);
    $type    = htmlspecialchars($user->type, ENT_QUOTES);
    $email   = htmlspecialchars($user->email, ENT_QUOTES);
    $classes = htmlspecialchars(implode(", ", $user->classes), ENT_QUOTES);

echo <<<HTML
    <h2>Edit User</h2>
    <form method="post" action="$self?id=$id&action=update">
        <div class="form-control">
            <label class="form-label" for="user-name">Name</label>
            <input class="form-input" type="text" id="user-name" name="user-name" value="$name" required>
        </div>
        <div class="form-control">
            <label class="form-label" for="user-type">Type</label>
            <input class="form-input" type="text" id="user-type" name="user-type" value="$type">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-email">Email</label>
            <input class="form-input" type="email" id="user-email" name="user-email" value="$email">
        </div>
        <div class="form-control">
            <label class="form-label" for="user-classes">Classes</label>
            <input class="form-input" type="text" id="user-classes" name="user-classes" value="$classes" placeholder="e.g. 608, 620">
        </div>
        <div class="form-control">
            <button class="form-button" type="submit">Save</button>
            <a class="form-button" href="$self?id=$id">Cancel</a>
        </div>
    </form>
HTML;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Admin Page</title>
    <?php include "../parts/meta.php"; ?>
</head>
<body>

    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h1>User Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="<?= $self ?>">User List</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="card soft">
        <?php

        if ($id !== null && $action === "edit") {
            showUserForm($users[$id], $id, $self);
        } else if ($id !== null) {
            showUserPage($users[$id], $id, $self);
        } else {
        ?>
            <h2>Users List</h2>
            <nav class="nav">
                <ul>
                <?php
                foreach ($users as $i => $user) {
                    $name = htmlspecialchars($user->name);
                    echo "<li><a href='$self?id=$i'>$name</a></li>";
                }
                ?>
                </ul>
            </nav>
        <?php } ?>
        </div>
    </div>

</body>
</html>

