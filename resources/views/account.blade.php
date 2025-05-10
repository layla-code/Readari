@extends('layouts.app')
@section('title','account page')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- 8 من 12 عمود -->
            <div class="card p-4 shadow rounded-4" style="background-color: #d0e6c7;">

                <!-- ✅ 1. معلومات المستخدم وزر تعديل -->
                <div class="position-relative text-center mb-4">
                    <a href="#" class="btn btn-light btn-sm position-absolute top-0 end-0 m-2">Edit Profile</a>
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                         class="rounded-circle mb-3" width="100" height="100" alt="User Avatar">
                    <h4 class="mb-0 fw-bold">{{ $user->name }}</h4>
                    <small class="text-muted">{{ $user->email }}</small>
                </div>

                <!-- ✅ 2. إحصائيات القراءة -->
                <div class="row text-center mb-4">
                    <div class="col-md-4">
                        <h5 class="fw-bold">48</h5>
                        <p class="text-muted mb-0">Articles Read</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-bold">12</h5>
                        <p class="text-muted mb-0">Articles Saved</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="fw-bold">4h 20m</h5>
                        <p class="text-muted mb-0">Reading Time</p>
                    </div>
                </div>

                <!-- ✅ 3. مستوى التقدم -->
                <div class="mb-4">
                    <h5 class="fw-bold">Progress</h5>
                    <p class="mb-1">Beginner</p>
                    <div class="progress mb-2" style="height: 10px;">
                        <div class="progress-bar bg-success" style="width: 80%"></div>
                    </div>
                    <p class="mb-1">Intermediate</p>
                    <div class="progress mb-2" style="height: 10px;">
                        <div class="progress-bar bg-info" style="width: 40%"></div>
                    </div>
                    <p class="mb-1">Advanced</p>
                    <div class="progress mb-2" style="height: 10px;">
                        <div class="progress-bar bg-warning" style="width: 10%"></div>
                    </div>
                </div>

                <!-- ✅ 4. المقالات المفضلة -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="fw-bold">Favorite Articles</h5>
                    <a href="{{ route('favorites.index') }}" class="text-muted text-decoration-none">See All</a>
                </div>

                @forelse($favorites as $article)
                    <div class="bg-light p-3 rounded mb-2">
                        <strong>{{ $article->Title }}</strong>
                        <p class="text-muted small mb-0">{{ $article->Description }}</p>
                    </div>
                @empty
                    <p class="text-muted">You have no favorites yet.</p>
                @endforelse

                <!-- ✅ 5. إعدادات الحساب -->
                <h5 class="fw-bold mt-4">Account Settings</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                        Language <i class="bi bi-chevron-right"></i>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                        Change Password <i class="bi bi-chevron-right"></i>
                    </li>
                    <li class="list-group-item bg-transparent d-flex justify-content-between align-items-center">
                        Notification <i class="bi bi-chevron-right"></i>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
  <script src="{{ asset('js/script.js') }}"></script>
@endsection