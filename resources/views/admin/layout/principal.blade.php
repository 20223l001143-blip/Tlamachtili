<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('admin.includes.head')
    @yield('css_custom')
  </head>
  <body>
    <div class="container-scroller">
     @include('admin.includes.menulateral')
      <div class="container-fluid page-body-wrapper">
      @include('admin.includes.menu')
        <div class="main-panel">
          <div class="content-wrapper">
        @yield('contenido')
          </div>
          <footer class="footer">
           @include('admin.includes.footer')
          </footer>
        </div>
      </div>
    </div>
    @include('admin.includes.script')
    @yield('js_custom')
  </body>
</html>
