@if (Session::has('success'))
  <div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>
      <i class="fa fa-check-circle fa-lg fa-fw"></i> Success.
    </strong>
    {{ Session::get('success') }}
  </div>
  <script>
    setTimeout(function() {
      var el = document.getElementById('success-alert');
      el.parentNode.removeChild(el);
    }, 5000);
  </script>
@endif
