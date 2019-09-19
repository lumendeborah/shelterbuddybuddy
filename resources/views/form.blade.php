@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="form-container">
                <form action="index.php">
                    <div class="form-group row">
                        <label>XLS 1</label>
                        <input class="form-control-file" type="file" name="xls-1">
                    </div>
                    <div class="form-group row">
                        <label>XLS 2</label>
                        <input class="form-control-file" type="file" name="xls-2">
                    </div>
                    <div class="form-group row">
                        <label>XLS 3</label>
                        <input class="form-control-file" type="file" name="xls-3">
                    </div>
                    <div class="form-group row">
                        <label>XLS 4</label>
                        <input class="form-control-file" type="file" name="xls-4">
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">Submit!</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
