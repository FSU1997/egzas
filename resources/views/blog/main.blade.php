<!DOCTYPE html>
<html lang="en">
@include('blog/_partials/head')
<body>
<!-- Navigation-->
@include('blog/_partials/nav')
<!-- Page Header-->
@include('blog/_partials/header')
<!-- Main Content-->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @yield('content')
             </div>
    </div>
</div>
<hr />
<!-- Footer-->
@include('blog/_partials/footer')
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{URL::asset('js/scripts.js')}}"></script>
</body>
</html>
