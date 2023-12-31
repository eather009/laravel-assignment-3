@include('components.auth.header')

<div class="container">
    @yield('content')
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('auth/vendor') }}/jquery/jquery.min.js"></script>
<script src="{{ asset('auth/vendor') }}/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('auth/vendor') }}/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('auth/js') }}/sb-admin-2.min.js"></script>

</body>

</html>
