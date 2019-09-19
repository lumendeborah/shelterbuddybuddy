@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center" style="margin:0 auto;">
                <section class="logo">
                    <img src="/images/logo.png" />
                </section>

                <section class="status-container">
                    <div id="file1" class="file-status">
                        <i class="fas fa-square"></i>
                        <span class="status-msg">File 1 / Pending</span>
                    </div>
                    <div id="file2" class="file-status">
                        <i class="fas fa-square"></i>
                        <span class="status-msg">File 2 / Pending</span>
                    </div>
                    <div id="file2" class="file-status">
                        <i class="fas fa-square"></i>
                        <span class="status-msg">File 3 / Pending</span>
                    </div>
                    <div id="file2" class="file-status">
                        <i class="fas fa-square"></i>
                        <span class="status-msg">File 4 / Pending</span>
                    </div>
                    
                </section>

                <section class="form-container">
                    
                </section>


                <div class="form-container">
                    <form action="/" method="post">
                        @csrf
                        <div class="form-group row">
                            <label>XLS 1</label>
                            <input class="form-control-file" type="file" name="xls-1">
                        </div>
                    
                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary">Submit!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
