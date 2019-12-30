@extends('admin.layout.app')

@section('content')

@include('admin.search.search')

<div class="card">
    <div class="card-body quick-med">
        <div class="row">
            <div class="col-md-4">
                <div class="tile text-center text-danger">
                    <div class="tile-body">
                            <h1>Sales <i class="fa fa-shopping-cart"></i> </h1>
                            <h1>
                                {{ordersNum()}}
                            </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tile text-center text-success">
                    <div class="tile-body">
                            <h1>Clients <i class="fa fa-users"></i> </h1>
                            <h1>
                                {{customerNum()}}
                            </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection