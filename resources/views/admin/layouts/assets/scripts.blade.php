
    <!-- JQuery min js -->
    <script src="{{ asset('assets2/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('assets2/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets2/plugins/moment/moment.js') }}"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('assets2/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets2/js/sticky.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('assets2/js/eva-icons.min.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assets2/plugins/ratings-2/jquery.star-rating.js') }}"></script>
    <script src="{{ asset('assets2/plugins/ratings-2/star-rating.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('assets2/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- Right-sidebar js -->
    <script src="{{ asset('assets2/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('assets2/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('assets2/switcher/js/switcher.js') }}"></script>

    <!--themecolor js-->
    <script src="{{ asset('assets2/js/themecolor.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets2/js/custom-1.js') }}"></script>
    <script>
        setTimeout(() => {
            $('.alert').fadeOut();
        }, 2000);
    </script>



    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>.

    <script src="{{ asset('assets2/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets2/js/table-data.js') }}"></script>

        <!-- error massege code by toastar-->
        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;
                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;
                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;
                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }
            @endif
        </script>
        <script>
            @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif
            toastr.options = {
                "preventDuplicates": true
            }
        </script>
        <!-- hide alert after time-->
    @stack('scripts')
