<?php
$user = (new \App\User())->login($_POST['email'], $_POST['password']);

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    if ($user) {
        $saveemail = $user['email'];
        $savepasssword = $user['password'];

        if ($saveemail === $_POST['email'] && $savepasssword === $_POST['password']) {
            unset($_SESSION['error_message']);
            $_SESSION['user_id'] = $user['id'];
            redirect('/todos');
            exit();
        } else {
            $_SESSION['error_message'] = 'Invalid email or password';
            redirect('/login');
            exit();
        }
    } else {
        $_SESSION['error_message'] = 'Invalid email or password';
        redirect('/login');
        exit();
    }
} else {
    $_SESSION['error_message'] = 'Please fill in all fields';
    redirect('/login');
    exit();
}

?>
