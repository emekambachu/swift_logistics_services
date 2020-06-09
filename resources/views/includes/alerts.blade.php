@if(Session::has('success'))
    <p align="center" style="padding: 8px 5px 8px 5px; background-color: #5cb85c; color: #fff;" class="col-lg-12">{{session('success')}}</p>
@elseif(Session::has('warning'))
    <p align="center" style="padding: 8px 5px 8px 5px; color: #fff;" class="bg-danger col-lg-12">{{session('warning')}}</p>
@else
@endif
