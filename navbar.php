<?php
session_start();
session_regenerate_id(); 
require("Connection.php");
?>



<!doctype html >
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nyautaa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    

  </head>
  <body onload="loading()" style="overflow-x:hidden;">


    <div class="loading">

    </div>

<!--Navbar -->



<nav class="navbar navbar-expand-lg  bg-dark " data-bs-theme="dark" id="home">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Nyautaa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#home">Home</a>
        <a class="nav-link active" href="#category">Categories</a>
        <a class="nav-link active" href="#s">Services</a>
        <a class="nav-link active" href="#about">About</a>  
      </div>
    </div>
  </div>
</nav>

