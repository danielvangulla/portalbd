@extends('layouts.absensi')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>
    <div class="page-title">
        
    </div>    
</div>

<div class="content-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Pengaturan Group Penghasilan</h4>
        </div>
        
        <div class="panel-body">            
            <div class="row">
                <div class="col-md-3" style="border-right: 1px #ddd solid;">                    
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><h4 style="font-size: 16px; margin-top: 0px; margin-bottom: 0px; color: black; font-weight: 300;">Data Jabatan</h4></a></li>
                    <li><a href="#"><h4 style="font-size: 16px; margin-top: 0px; margin-bottom: 0px; color: black; font-weight: 300;">Departemen</h4></a></li>
                    <li><a href="#"><h4 style="font-size: 16px; margin-top: 0px; margin-bottom: 0px; color: black; font-weight: 300;">Sub Departemen</h4></a></li>
                    </ul>
                    <br/>
                    <a href="#" class="btn btn-default"> + Tambah Group</a>
                </div>
                <div class="col-md-9">
                    <table class="table table-hover">
                        <tr>
                            <td style="width: 80%;"><h4>Manager</h4></td>
                            <td style="width: 20%;"><div class="text-right"><a href="#" class="btn btn-sm btn-danger">Del</a></div></td>
                        </tr>
                        <tr>
                            <td style="width: 80%;"><h4>Supervisor</h4></td>
                            <td style="width: 20%;"><div class="text-right"><a href="#" class="btn btn-sm btn-danger">Del</a></div></td>
                        </tr>
                        <tr>
                            <td style="width: 80%;"><h4>Floor</h4></td>
                            <td style="width: 20%;"><div class="text-right"><a href="#" class="btn btn-sm btn-danger">Del</a></div></td>
                        </tr>
                    </table>
                    <table class="table table-striped">
                        <tr>
                            <td>
                                <a href="#" class="btn btn-primary">+ Tambah Data</a>
                            </td>
                        </tr>
                    </table>
                                        
                    <div class="row">                        
                        <div class="form-group">
                            <label class="col-sm-2 col-md-2 control-label">First name</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" name="customer[first_name]" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</div>
@stop