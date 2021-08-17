
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('backend.includes.header')
    @include('backend.includes.info')
    @include('backend.includes.css')


  </head>

  <body>

    @include('backend.includes.menubar')
    @include('backend.includes.topbar')
    @include('backend.includes.options')




    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      @yield('body')
      @include('backend.includes.footer')
    </div><!-- br-mainpanel -->
    <!-- ########## Body content end ########## -->
    @include('backend.includes.scripts')
  </body>
</html>
