@extends('layouts.master')

@section('content')
    <form action="" method="post">
    <div class="form-group">
        <label for="script">Upload Script</label>

        <input type="file" name="script" id="script" class="form-control-file">
    </div>


    <button type="submit" class="btn btn-primary">create</button>

</form>
@endsection
