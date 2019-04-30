
    @include('admin.layouts.partials.header')

    @include('admin.layouts.partials.navbar')

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->

    @include('admin.layouts.partials.sidebar')

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    @yield('content_header')


    <!-- Main content -->
    @include('admin.layouts.partials.errors')
    @yield('content')

    <!-- /.Main content -->

    <!-- Sessions -->
    @include('admin.layouts.partials.sessions')
    <!-- Sessions -->

    <!--Footer START-->
      @include('admin.layouts.partials.footer')
    <!--Footer end-->