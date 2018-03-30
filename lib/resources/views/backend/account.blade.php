@extends('backend.master')
@section('title','Tài khoản')
@section('main')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tài khoản</a> </div>
  </div>
  <div class="container-fluid">
    
    <div class="row-fluid">
      <div class="span12">
        <a href="{{asset('admin/account/add')}}" class="btn btn-success">Thêm tài khoản</a>
        <div class="widget-box">

          <div class="widget-content nopadding">

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th><h5>ID</h5></th>
                  <th><h5>Email</h5></th>
                  <th><h5>Password</h5></th>
                  <th><h5>Level</h5></th>
                  <th><h5>Sửa</h5></th>
                  <th><h5>Xóa</h5></th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td style="text-align: center;">Trident</td>
                  <td style="text-align: center;">Internet
                    Explorer 4.0</td>
                  <td style="text-align: center;">Win 95+</td>
                  <td style="text-align: center;" class="center"> 4</td>
                  <td style="text-align: center;" class="center"><a class="btn btn-primary">Sửa</a></td>
                  <td style="text-align: center;" class="center"><a class="btn btn-warning ">Xóa</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/matrix.tables.js"></script>
@stop