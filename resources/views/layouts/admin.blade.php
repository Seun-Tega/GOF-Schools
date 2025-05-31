 <!DOCTYPE html>
<html lang="en">
<head>
@include('admin.includes.head')

</head>
<body>

  <div class="container-scroller">
    @include('admin.includes.nav')

    <div  class="container-fluid page-body-wrapper">
      @include('admin.includes.theme')
      @include('admin.includes.side-nav')

      <div class="main-panel">
        <div  class="content-wrapper">
           <div class="page-header">
            <h3 class="page-title">
              @yield('page-title')
            </h3>
           </div>

          @yield('content')

        </div>




        @include('admin.includes.footer')
      </div>


    </div>

  </div>
  

  @include('admin.includes.scripts')
</body>
</html>