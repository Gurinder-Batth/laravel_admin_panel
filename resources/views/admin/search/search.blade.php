<div class="card">
    <div class="card-body">
            <div class="row">
                    <div class="col-md-12">
                        <form action="">
                            <div class="input-group ">
                                <input type="text" name="str" required value="{{request()->get('str')}}" class="form-control" placeholder="Search ">
                                <div class="input-group-append ">
                                    <button class="btn btn-success" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                
                    <div class="col-md-12">
                        <div class="form-group">
                            @if(request()->has("str"))
                            <a href="{{route('admin.order.list')}}" class="text-danger"><b>Clear Search Records</b></a>
                            @endif
                        </div>
                    </div>
                </div>
                
    </div>
</div>