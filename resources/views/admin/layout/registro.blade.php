<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.head')
    @yield('css_custom')
  </head>
  <body>
    <div class="container-scroller">
        @yield('contenido')
          </div>
    @include('admin.includes.script')
    @yield('js_custom')
  </body>
</html>