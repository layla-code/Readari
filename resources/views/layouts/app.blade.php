<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csfr-token" content="{{csrf_token()}}">
  <title>@yield('title') | Aricle reading website </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #6b8b63;
      font-family: 'Poppins', sans-serif;
      color: #fff;
    }
    .navbar {
      background-color: #c1d9b1;
    }
    .navbar-brand {
      font-weight: 600;
      color: #fff;
      font-size: 1.5rem;
    }
    .navbar-brand i {
      font-size: 1.8rem;
      color: white;
    }
    .nav-link {
      background-color: #7a9569;
      color: #fff !important;
      margin-left: 10px;
      border-radius: 40px;
      padding: 8px 20px;
      font-size: 0.95rem;
      text-transform: uppercase;
      font-weight: 600;
    }
    
    footer {
    text-align: center;
    padding: 1rem;
    font-size: 0.6rem;
    color: white;
   }

   body, html {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
   }

   main {
    flex: 1;
   }

   .navbar-link {
    padding: 10px 20px;
    margin: 0 5px;
    text-decoration: none;
    color: white;
    font-weight: bold;
    border-radius: 25px;
    transition: background-color 0.3s;
   }

   .navbar-link:hover {
    background-color: #6d8c6d;
    }


   .navbar-link.add-article {
    background-color: #3c6a3c; 
    padding: 7px 14px;
    margin-left: 20px; 
    }

   .navbar-link.add-article:hover {
    background-color: #345a34;
    }


  </style>
</head>
<body>
<header>
<!-- Header -->
<nav class="navbar navbar-expand-lg">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <i class="bi bi-journal-bookmark-fill me-2"></i>
      <span class="text-white">READARI</span>
    </a>
    <div class="d-flex">
      <a class="nav-link" href="{{route('index')}}">HOME</a>
      <a class="nav-link" href="{{route('account')}}">ACCOUNT</a>
      <a class="nav-link" href="{{route('aboutus')}}">ABOUT US</a>
      <a class="navbar-link add-article" href="{{route('addarticle')}}">ADD ARTICLE</a>
    </div>
  </div>
</nav>
</header>

<main>
@yield('content')
</main>

<footer>
  <p>Copyright ©2025 All rights reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>