@extends('backend.master')
@section('title','Danh mục')
@section('main')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Danh mục</a> </div>
  </div>
  <div class="container-fluid">
    
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Thêm danh mục</h5>
          </div>
          <div class="widget-content nopadding">
            @include('errors.note')
            <form class="form-horizontal" method="post" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Danh mục</label>
                <div class="controls">
                  <input type="text" name="name" id="required" required>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Thêm mới" class="btn btn-success">
              </div>
              {{csrf_field()}}
            </form>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th><h5>ID</h5></th>
                  <th><h5>Tên</h5></th>
                  <th><h5>Sửa</h5></th>
                  <th><h5>Xóa</h5></th>
                </tr>
              </thead>
              <tbody>
                @foreach($listcate as $cate)
                <tr class="odd gradeX">
                  <td style="text-align: center;">{{$cate->cate_id}}</td>
                  <td style="text-align: center;">{{$cate->cate_name}}</td>
                  <td style="text-align: center;" class="center"><a href="{{asset('admin/category/edit/'.$cate->cate_id)}}" class="btn btn-primary"> <i class="icon-edit"></i> Sửa</a></td>
                  <td style="text-align: center;" class="center"><a href="{{asset('admin/category/delete/'.$cate->cate_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$cate->cate_name}}')" class="btn btn-warning "> <i class=" icon-trash"></i> Xóa</a></td>
                </tr>
                @endforeach
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