<script src="{{asset("adminassets/vendors/bundle.js")}}"></script>

<!-- Circle progress -->
<script src="{{asset("adminassets/vendors/circle-progress/circle-progress.min.js")}}"></script>

<!-- Peity -->
<script src="{{asset("adminassets/vendors/charts/peity/jquery.peity.min.js")}}"></script>
<script src="assets/js/examples/charts/peity.js"></script>

<!-- Datepicker -->
<script src="{{asset("adminassets/vendors/datepicker/daterangepicker.js")}}"></script>

<!-- Slick -->
<script src="{{asset("adminassets/vendors/slick/slick.min.js")}}"></script>

<!-- Vamp -->

<!-- Dashboard scripts -->
<script src="{{asset("adminassets/js/examples/dashboard.js")}}"></script>
<div class="colors">
    <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>

<!-- App scripts -->
<script src="{{asset("adminassets/js/app.js")}}"></script>
{{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}

<script>
    $(document).ready(function () {
        $('.page-loader').fadeOut(700, function () {
            setTimeout(function () {
                toastr.options = {
                    timeOut: 3000,
                    progressBar: true,
                    showMethod: "slideDown",
                    hideMethod: "slideUp",
                    showDuration: 200,
                    hideDuration: 200
                };
                toastr.success('خوش آمدید! {{auth()->user()->name}}.');
            }, 1000);
        });
    })

    // swal.fire({
    //     toast: true,
    //     background:"rgba(255,0,59,0.75)",
    //     html:"chetori <b>reza</b>?",
    //     icon:"success",
    //     showConfirmButton:false,
    //     timer:3000,
    //     timerProgressBar: true,
    //
    // })
   $(document).ready(function (){
       const msg= "{{session()->has("msg")}}";
       if (msg!== ""){
           setTimeout(function () {

               swal("success", "{{session()->get("msg")}}","success");
           }, 250);

       }
       const erorr= "{{$errors ->any()}}";
       if (erorr!== ""){
           setTimeout(function () {

               swal("failed", "validation failed!","error");
           }, 250);

       }
   })
</script>


@yield("ex-js")