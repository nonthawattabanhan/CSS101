@extends('layouts.default')
@section('title','Homepage')

@section('content')



<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Starter Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">




                <div class="card ">
                    <div class="card-name">
                      <h3 class="card-title"></h3>
                    </div>
                
                    <form class="form-fname">
                      <div class="card-body">

                        <div class="form-group row">
                          <label for="inputfname" class="fname">First Name</label>
                          <div class="col-sm-10">
                            <input type="First name" class="form-control"  >
                          </div>
                        </div>
                        

                        <div class="form-group row">
                          <label for="inputlname" class="lname">Last Name</label>
                          <div class="col-sm-10">
                            <input type="Last name" class="form-control"  >
                          </div>
                        </div>


                        <div class="card-body">

                            <div class="form-group">
                            <label>Date:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="inputold" class="lname">Old &nbsp; &nbsp;
                                </label>
                                    <div class="Old">
                                        <input type="Old" class="form-control" id="inputOld"">
                                    </div>

                            </div>
                        </div>
                
                        
                        

                        <div class="form-group">
                            <div class="checkMan">
                                &nbsp; &nbsp;&nbsp; &nbsp;<input class="form-check-input" type="radio" name="radio1">
                              <label class="form-check-label">Man</label>
                            </div>
                            <div class="checkWomen">
                                &nbsp; &nbsp;&nbsp; &nbsp;<input class="form-check-input" type="radio" name="radio1" checked>
                              <label class="form-check-label">Women</label>
                            </div>
                          </div>



                    </div>
                </div><!-- /.card -->
            </div>




            <!-- /.col-md-6 -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="m-0"></h5>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">&nbsp; &nbsp;Photo</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                        
                        </div>
                      </div>

                    <div class="card-body">
                        <label>Address </label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                    </div>
                </div>




                <div class="card card-primary card-outline">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Coler </label>
                                <select class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option>Red</option>
                                    <option>Green</option>
                                    <option>Other</option>
                                </select>
                        </div>


                        <div class="form-song">
                            <label>Song</label>
                            <div class="checkmusic">
                                &nbsp; &nbsp;&nbsp; &nbsp;<input class="form-check-input" type="radio" name="radio1">
                              <label class="form-check-label">เพื่อชีวิต</label>
                            </div>
                            <div class="checkmusic2">
                                &nbsp; &nbsp;&nbsp; &nbsp;<input class="form-check-input" type="radio" name="radio1" checked>
                              <label class="form-check-label">ลูกทุ้ง</label>
                            </div>
                            <div class="checkmusic3">
                                &nbsp; &nbsp;&nbsp; &nbsp;<input class="form-check-input" type="radio" name="radio1" checked>
                              <label class="form-check-label">อื่นๆ</label>
                            </div>
                          </div>

                          


                    </div>

                    <div class="card-body">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">ยินยอมให้เก็บข้อมูล</label>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>



            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>






@endsection