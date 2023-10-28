@if(!Route::is(['profile']))
<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">{{ $title }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('index')}}">{{ $li_1 }}</a></li>
                @if(Route::is(['add-customer','edit-customer']))
                <li class="breadcrumb-item"><a href="{{url('customers')}}">{{ $li_2 }}</a></li>
                @endif
                @if(Route::is(['add-estimate','edit-estimate']))
                <li class="breadcrumb-item"><a href="{{url('estimates')}}">{{ $li_2 }}</a></li>
                @endif
                @if(Route::is(['add-expenses','edit-expenses']))
                <li class="breadcrumb-item"><a href="{{url('expenses')}}">{{ $li_2 }}</a></li>
                @endif
                @if(Route::is(['add-invoice','edit-invoice']))
                <li class="breadcrumb-item"><a href="{{url('invoices')}}">{{ $li_2 }}</a></li>
                @endif
                @if(Route::is(['add-payments']))
                <li class="breadcrumb-item"><a href="{{url('payments')}}">{{ $li_2 }}</a></li>
                @endif
                <li class="breadcrumb-item active">{{ $li_3 }}</li>
            </ul>
        </div>
         @if(Route::is(['customers','estimates','expenses-report','expenses','payments']))
        <div class="col-auto">
            <a href="add-customer" class="btn btn-primary me-1">
                <i class="fas fa-plus"></i>
            </a>
            <a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
                <i class="fas fa-filter"></i>
            </a>
        </div>
         @endif
         @if(Route::is(['profit-loss-report','sales-report','taxs-report']))
         <div class="col-auto">
            <a href="#"  class="btn btn-primary">
                <i class="fas fa-file-pdf"></i>
            </a>
            <a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
                <i class="fas fa-filter"></i>
            </a>
        </div>
         @endif
        @if(Route::is(['calendar']))
        <div class="col-auto text-right float-right ms-auto">
             <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_event">Create Event</a>
        </div>
        @endif
    </div>
</div>
<!-- /Page Header -->
@endif

@if(Route::is(['profile']))

<div class="row justify-content-lg-center">
    <div class="col-lg-10">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">{{ $title }}</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('index')}}">{{ $li_1 }}</a></li>
                        <li class="breadcrumb-item active">{{ $li_2 }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
@endif