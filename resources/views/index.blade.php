@extends('layouts.app')
@section('title','home page')

@section('content')
<style>
    .hero-text {
      margin-top: 60px;
      text-align: center;
      font-size: 1.2rem;
    }
    .level-button {
      background-color: #b9d3ab;
      color: #fff;
      font-weight: 600;
      font-size: 1.6rem;
      padding: 20px 40px;
      border-radius: 25px;
      box-shadow: 4px 4px 0 #00000060;
      margin-bottom: 20px;
      width: 350px;
      transition: 0.3s;
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
    }
    .level-button i {
      margin-right: 12px;
      font-size: 1.5rem;
      color: #fff;
      cursor: pointer;
    }
    .level-button:nth-child(2) { background-color: #9cc483; }
    .level-button:nth-child(3) { background-color: #7fae5e; }
    .level-button:hover { transform: scale(1.05); }
</style>
<!-- Main Content -->
<div class="container text-center">
    <p class="hero-text">select your level to start reading</p>
    <div class="d-flex flex-column align-items-center mt-4">
      <a href="{{route('beginner')}}" class="level-button">
        <i class="bi bi-info"></i> Beginner
      </a>
      <a href="#" class="level-button">
        <i class="bi bi-info"></i> Intermediate
      </a>
      <a href="#" class="level-button">
        <i class="bi bi-info"></i> Advanced
      </a>
    </div>
  </div>
@endsection