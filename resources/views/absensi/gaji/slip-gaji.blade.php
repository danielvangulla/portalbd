@extends('layouts.schedule')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>
    <div class="page-title">
        BitPayroll
    </div>    
</div>

<div class="content-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Slip Gaji</h4>
            <div class="row">
                <div class="col col-md-6">
                    <table>
                        <tr>
                            <td>Karyawan</td>
                            <td>: Frangky Tumiwan</td>
                        </tr>
                        <tr>
                            <td>Departemen</td>
                            <td>: Operational</td>
                        </tr>
                    </table>
                </div>
                <div class="col col-md-6">
                    <h4>25 September 2014 s.d 25 Oktober 2014</h4>
                </div>
            </div>
        </div>
        
        <div class="panel-body">            
            
            
            <div class="row">
                <div class="col-md-6">
                    <h4>Penerimaan</h4>
                    <table class="table">
                        <tr>
                            <td>Gaji Pokok</td>
                            <td class="text-right">2.500.000</td>
                        </tr>
                        <tr>
                            <td>Uang Makan</td>
                            <td class="text-right">250.000</td>
                        </tr>
                    </table>
                </div>
                
                <div class="col-md-6">
                    <h4>Potongan</h4>
                    <table class="table">
                        <tr>
                            <td>Potongan Alpa</td>
                            <td class="text-right">500.000</td>
                        </tr>
                        <tr>
                            <td>Potongan Keterlambatan</td>
                            <td class="text-right">350.000</td>
                        </tr>
                        <tr>
                            <td>Potongan Bolos</td>
                            <td class="text-right">350.000</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <td class="text-right">Total Rp.</td>
                            <td class="text-right">2.300.000</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <td class="text-right">Total Rp.</td>
                            <td class="text-right">2.300.000</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <h4>Take Home Pay Rp. 3.200.000</h4>
        </div>
    </div>
</div>
@stop
