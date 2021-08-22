<!DOCTYPE html>
<html lang="en">

@include('layouts.template.header')


@include('layouts.template.sidebar')
<body>
<main class="main-content">

            @yield("content")
</main>




@include('layouts.template.footer')

</body>

</html>