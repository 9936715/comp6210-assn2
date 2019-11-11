<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css">
    <link id="light-css" rel="stylesheet" href="css/light.css">
    <link id="dark-css" rel="stylesheet" href="css/dark.css">  
    <title><?php echo $title; ?> - Profiles</title>
</head>
<body>
  <div class="navigation">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Profiles</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="nav-menu">
          <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="theme-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Theme</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          <a id="theme-light" class="dropdown-item" href="#">Light</a>
                          <a id="theme-dark" class="dropdown-item" href="#">Dark</a>
                                                 </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="account-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown02">
                        <a id="name-menu" class="dropdown-item disabled"><strong>Name</strong></a>
                        <div class="dropdown-divider"></div>
                          <a id="profile-menu" class="dropdown-item" href="profile.php">Profile</a>
                          <a id="edit-profile" class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                          <div class="dropdown-divider"></div>
                          <a onclick="logout()" class="dropdown-item" href="#">Logout</a>
                                                 </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="admin-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown02">
                          <a id="edit-profiles" class="dropdown-item" href="index.php">Edit Profiles</a>
                          <div class="dropdown-divider"></div>
                          <a onclick="logout()" class="dropdown-item" href="#">Logout</a>
                                                 </div>
                      </li>
                  <li id="sign-up" class="nav-item">
                        <a class="nav-link" href="sign-up.php">Sign up</a>
                      </li>
                      <li id="login" class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                          </li>
          </ul>
      </nav>
    </div>
<div class="container">
<br>