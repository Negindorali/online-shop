<!DOCTYPE html>
<html lang="fa" dir="rtl">

@include("layouts.dashboard.header")

<body>

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
</div>
<!-- end::page loader -->

@include("layouts.dashboard.sidebar")


<!-- begin::main content -->
<main class="main-content">
    <div class="card">
        <div class="card-body">
            @yield("content")
        </div>
    </div>
</main>
<!-- end::main content -->

<!-- Plugin scripts -->
@include("layouts.dashboard.footer")
</body>

</html>