@extends('layouts.main_layout')

@section('content')
   <h3>ข้อมูลคนงานต่างด้าว</h3>
   @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <a href="{{route('labour.create')}}" class="btn btn-primary">เพิ่มข้อมูลคนต่างด้าว</a>
    <a href="{{route('labour.importform')}}" class="btn btn-success text-white">เพิ่มข้อมูลจาก Excel</a>
    <a href="{{ URL::asset('../public/file/from-import.xlsx')}}" class="btn btn-info " download="">ดาวน์โหลดฟอร์มกรอกข้อมูล</a>
    <br>
    <br>
    <br>
    <table class="table labour table-striped table-bordered" id="labour">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>ชื่อ-สกุล</th>
                <th>เลขที่หนังสือเดินทาง</th>
                <th>เลขที่วีซ่า</th>
                <th>บริษัท</th>
                <th>เอเจนซี่</th>
                <th>สถานะแรงงาน</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>
    <script>
        $(document).ready(function(){
         $('#labour').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{route('labour.index')}}",
            columns:[
                {data:'DT_RowIndex',name:'DT_RowIndex'},
                {data:'labour_fullname',name:'labour_fullname'},
                {data:'labour_passport_number',name:'labour_passport_number'},
                {data:'labour_visa_number',name:'labour_visa_number'},
                {data:'company_name',name:'company_name'},
                {data:'agency_name',name:'agency_name'},
                {data:'status',name:'status'},
                
                {data:'action',name:'action'},
            ]
         });
        });

       
    </script>
@endsection