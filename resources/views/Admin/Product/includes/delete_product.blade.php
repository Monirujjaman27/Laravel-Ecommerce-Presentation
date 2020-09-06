<div class="modal fade" id="small-Modal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Are You Sure To Delete</h6>
                
                </button>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Cancle</button>
                <a class="btn btn-danger" href="{{ route('delete_product', $sowproduct->id) }}"> Yes</a>
            </div>
        </div>
    </div>
</div>
