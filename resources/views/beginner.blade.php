@extends('layouts.app')
@section('title','beginner level page')
@section('content')

<head>
  <style>
    .level-title {
      background-color: #9cc483;
      color: #fff;
      font-weight: bold;
      font-size: 1.5rem;
      padding: 10px 40px;
      border-radius: 30px;
      text-align: center;
      width: fit-content;
      margin: 0 auto;
    }
    .search-bar {
      max-width: 600px;
      margin: 0 auto;
      display: flex;
      background-color: #ffffff;
      border-radius: 30px;
      overflow: hidden;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .search-bar input {
      border: none;
      padding: 10px 20px;
      flex: 1;
      font-family: 'Poppins';
    }
    .search-bar button {
      background-color: #7a9569;
      border: none;
      color: white;
      padding: 10px 25px;
      font-weight: bold;
    }
    .section-title {
      font-size: 1.1rem;
      font-weight: 500;
      margin-bottom: 15px;
      color: #fff;
    }
    .article-card {
      background-color: #f9f9f9;
      color: #333;
      border-radius: 20px;
      padding: 20px;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .article-card h5 {
      font-weight: 600;
      font-size: 1rem;
    }
    .article-card p {
      font-size: 0.9rem;
      margin-bottom: 0.5rem;
    }
    .btn-more {
      background-color: #7fae5e;
      color: white;
      font-size: 0.75rem;
      padding: 4px 12px;
      border-radius: 8px;
      text-decoration: none;
      align-self: end;
      margin-top: 10px;
    }
    /* Flex wrapper لعرض بطاقتين في كل صف */
    .cards-wrapper {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem; /* مسافة بين البطاقات */
    }
    .cards-wrapper .card-item {
      width: 48%; /* تقريبًا بطاقتان في الصف */
    }
    @media (max-width: 576px) {
      .cards-wrapper .card-item {
        width: 100%; /* بطاقة واحدة في الصف على الشاشات الصغيرة */
      }
    }
  </style>
</head>

<body>

  <nav class="navbar py-2">
    <div class="container">
      <div class="row align-items-center w-100">
        <div class="col-2">
          <a href="{{ route('index') }}" class="text-white fs-4">
            <i class="bi bi-arrow-left-circle-fill"></i>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container my-4">
    <div class="row">
      <div class="col-12">
        <div class="level-title">Beginner</div>
      </div>
    </div>
  </div>

  <!-- Search Bar -->
  <div class="container mb-4">
    <div class="row">
      <div class="col-12 col-md-8 offset-md-2">
        <div class="search-bar">
          <input type="text" placeholder="Find articles by title or topic" />
          <button>Search</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Recent Articles Header -->
  <div class="container mb-3">
    <div class="row px-1">
      <div class="col-6">
        <p class="section-title">Recent Articles</p>
      </div>
      <div class="col-6 text-end">
        <a href="#" class="text-white text-decoration-underline">View all</a>
      </div>
    </div>
  </div>

  <!-- Article Cards Flex -->
  <div class="container">
    <div class="cards-wrapper">
      @foreach ($add as $Field)
        <div class="card-item">
          <div class="article-card">
            <div>
              <h5>{{ $Field->Title }}</h5>
              <p class="text-muted">
                {{ $Field->created_at->format('M d, Y') }}
                &nbsp;|&nbsp;
                {{ $Field->Categorie }}
              </p>
              <p>{{ Str::limit($Field->Description, 100, '...') }}</p>
            </div>
            <a href="#" class="btn-more">more</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</body>
@endsection