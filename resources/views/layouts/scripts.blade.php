  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/addons/datatables2.min.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
      function salir() {
          Swal.fire({
              title: "¿Está seguro en salir?",
              text: "Presione 'Continuar' para salir.",
              icon: "info",
              showCancelButton: true,
              confirmButtonColor: "#3085d6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Salir"
          }).then((result) => {
              if (result.isConfirmed) {
                  $('#frm-salir').submit();
              }
          });
      }
  </script>
  @yield('custom-scripts')
