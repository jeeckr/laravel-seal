@include('template.AdminHeader')

      <!-- Main Content -->
      <div id="content">

        @include('template.AdminTopbar')
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

        @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
@include('template.AdminFooter')