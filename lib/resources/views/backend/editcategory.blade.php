@extends('backend.master')
@section('title','Danh mục')
@section('main')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Danh mục</a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Sửa danh mục</h5>
          </div>
          <div class="widget-content nopadding">
            @include('errors.note')
            <form class="form-horizontal" method="post" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
                <label class="control-label">Danh mục</label>
                <div class="controls">
                  <input type="text" name="name" id="required" value="{{$category->cate_name}}">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Cập nhật" class="btn btn-success">
                <a href="{{asset('admin/category')}}" class="btn btn-danger">Hủy bỏ</a>
              </div>
              {{csrf_field()}}
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="js/matrix.tables.js"></script>
@stop