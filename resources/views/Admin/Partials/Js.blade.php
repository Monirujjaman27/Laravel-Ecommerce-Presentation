<!-- <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script> -->

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="{{asset('assets/admin') }}/bower_components/jquery/js/jquery.min.js"></script> -->
<script type="text/javascript" src="{{asset('assets/admin') }}/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{asset('assets/admin') }}/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="{{asset('assets/admin') }}/bower_components/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('assets/admin') }}/assets/pages/widget/excanvas.js"></script>
<!-- waves js -->
<script src="{{asset('assets/admin') }}/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript"
    src="{{asset('assets/admin') }}/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('assets/admin') }}/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="{{asset('assets/admin') }}/bower_components/modernizr/js/css-scrollbars.js">
</script>


<!-- Chart js -->
<script type="text/javascript" src="{{asset('assets/admin') }}/bower_components/chart.js/js/Chart.js"></script>

<!-- menu js -->
<script src="{{asset('assets/admin') }}/assets/js/pcoded.min.js"></script>
<script src="{{asset('assets/admin') }}/assets/js/dark-light/vertical-layout.min.js"></script>

<!-- data-table js -->
<script src="{{asset('assets/admin') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets/admin') }}/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets/admin') }}/assets/pages/data-table/js/jszip.min.js"></script>
<script src="{{asset('assets/admin') }}/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="{{asset('assets/admin') }}/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="{{asset('assets/admin') }}/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets/admin') }}/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets/admin') }}/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('assets/admin') }}/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js">
</script>
<script src="{{asset('assets/admin') }}/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
</script>
<!-- modalEffects js nifty modal window effects -->
<script type="text/javascript" src="{{asset('assets/admin') }}/assets/js/classie.js"></script>
<script type="text/javascript" src="{{asset('assets/admin') }}/assets/js/modalEffects.js"></script>
<script type="text/javascript" src="{{asset('assets/admin') }}/assets/js/pcoded.min.js"></script>
<!-- slimscroll js -->
<script type="text/javascript" src="{{asset('assets/admin') }}/assets/js/SmoothScroll.js"></script>
<script src="{{asset('assets/admin') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets/admin') }}/assets/pages/data-table/js/data-table-custom.js">
</script>
<!-- animationjs -->
<script type="text/javascript" src="{{asset('assets/admin') }}//assets/js/animation.js"></script>
<!-- jquery sortable js -->
<script type="text/javascript" src="{{asset('assets/admin') }}/bower_components/Sortable/js/Sortable.js"></script>
<script type="text/javascript" src="{{asset('assets/admin') }}/assets/pages/sortable-custom.js"></script>
<script type="text/javascript" src="{{asset('assets/admin') }}/assets/js/script.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- alertify -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


<!-- ajax script -->

<script type="text/javascript">
//meta token setup 
var _modal = $('#modalform');
var btnsave = $('.btnsave');
var btnupdate = $('.btnupdate');
var adminurl = '{{ route("get_data") }}';
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    }
});
// show data on table 
function getRecords() {
    $.ajax({
        type: 'GET',
        url: '{{ route("get_data") }}',
        success: function(data) {
            var html = ' ';
            data.forEach(function(row) {
                html += '<tr>'
                html += '<td>' + row.id + '</td>'
                html += '<td>' + row.categoryName + '</td>'
                html += '<td>' + row.categorySlug + '</td>'
                html += '<td>'
                html += '<button type="button" class="mx-1 btn badge badge-warning btnEdit">Edit</button>'
                html += '<button type="button" class="mx-1 btn badge badge-danger catDelteBtn">Delete</button>'
                html += '</td>'
                html += '</tr>'
            });
            $('#catTbody').html(html)
        }
    })
}
getRecords()
// reset method 
function reset() {
    _modal.find('input').each(function() {
        $(this).val(null)
    })
}
// inset category 
function create() {
    _modal.find('.modal-title').text('New Category');
    reset();
    _modal.modal('show')
    btnsave.show()
    btnupdate.hide()
}

// get input fild data 
function getInputs() {
    var id = $('.catInputFildId').val();
    var categoryName = $('.catInputFild').val();
    var categorySlug = categoryName;
    return {
        id: id,
        categoryName: categoryName,
        categorySlug: categorySlug
    }
}
// save Category
function save() {
    $.ajax({
        method: 'POST',
        url: '{{ route("store") }}',
        data: getInputs(),
        success: function() {
            reset()
            _modal.modal('hide')
            getRecords()
            alertify.set('notifier', 'position', 'top-center');
            alertify.success('Category add successfully');
        }
    })
}


// Category Update 

$('table').on('click', '.btnEdit', function() {
    _modal.find('.modal-title').text('Edit Category')
    _modal.modal('show')
    btnsave.hide()
    btnupdate.show()

    var id = $(this).parent().parent().find('td').eq(0).text()
    var categoryName = $(this).parent().parent().find('td').eq(1).text()
    $('input[name="id"]').val(id);
    $('input[name="categoryName"]').val(categoryName);
})

function update() {
    
    if (!confirm('Are you sure to Update')) return;
    $.ajax({
        method: 'POST',
        url: "{{ route('update') }}",
        data: getInputs(),
        dataType: 'JSON',
        success: function() {
            reset()
            _modal.modal('hide')
            getRecords()
            alertify.set('notifier', 'position', 'top-center');
            alertify.success('Category update successfully');
        }
    })
}




// category delete 
$('table').on('click', '.catDelteBtn', function() {
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover Data!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var dataid = $(this).parent().parent().find('td').eq(0).text()
                var id = $('input[name="id"]').val(dataid);

                $.ajax({
                    method: 'POST',
                    url: "{{ route('delete') }}",
                    data: id,
                    dataType: 'JSON',
                    success: function() {
                        getRecords();
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });

                        alertify.set('notifier', 'position', 'top-center');
                        alertify.success('Category delete successfully');
                    }
                })


            } else {
                swal("Your imaginary file is safe!");
            }
        });


})
</script>