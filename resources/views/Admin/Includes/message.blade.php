@if(Session::get('message'))
    <div class="alert alert-success background-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ti-close text-white"></i>
        </button>
        <strong>{{ Session::get('message') }}</strong> 
    </div>
@endif
@error('categoryName')
    <div class="alert alert-success background-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ti-close text-white"></i>
        </button>
        <strong>{{ $message }}</strong> 
    </div>
@enderror
@error('brandName')
    <div class="alert alert-success background-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="ti-close text-white"></i>
        </button>
        <strong>{{ $message }}</strong> 
    </div>
@enderror