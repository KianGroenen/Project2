<div class="container-fluid">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<form class="form-horizontal" action="/students/store" method="post">
<fieldset>

  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif


    @foreach ($students as $student)
    {{ $student->email }}
    @endforeach

<!-- Form Name -->
<legend>Add students</legend>
{{ csrf_field() }}
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">First name</label>
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Last name</label>
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="save">&nbsp;</label>
  <div class="col-md-4">
    <button id="save" name="save" class="btn btn-success">Save</button>
  </div>
</div>

</fieldset>
</form>

</div>