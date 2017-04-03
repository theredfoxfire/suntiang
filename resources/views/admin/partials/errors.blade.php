@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong>
    Perhatikan error di bawah ini, mohon periksa kembali. Pastikan data sudah diinput dengan benar.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
