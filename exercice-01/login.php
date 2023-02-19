<?php
// Retrieve the input values from the login form
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Perform input validation
if (empty($username) || empty($password)) {
    die('Please enter both a username and password.');
}

// Retrieve the user record from the database
$users = [
    [
        'id' => 1,
        'username' => 'john',
        'password_hash' => '$2y$10$JtvZldz1Z90XBluhpH0DROlwb8oOgSQfyz1rK2/qwtyGz7SE2Qny6', // 'secret'
    ],
    [
        'id' => 2,
        'username' => 'jane',
        'password_hash' => '$2y$10$zTr92PK8aQd50Kcg32/XqufYq3tW8zvD4vg4zz4GtHs4hK/jTgTlu', // 'password'
    ],
];

$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

// Check if a user with the provided username was found
if (!$user) {
    die('Invalid username or password.');
}

// Verify the password against the stored password hash
if (!password_verify($password, $user['password_hash'])) {
    die('Invalid username or password.');
}

// Redirect the user to the logged in page
//retur me on the safe.php
header('Location: safe.php');
exit();
?>