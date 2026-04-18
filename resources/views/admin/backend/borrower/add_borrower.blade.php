@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Add Borrower</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Add Borrower</a></li>
                </ol>
            </div>
        </div>

        <!-- Form Validation -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add Borrower</h5>
                    </div><!-- end card header -->

<div class="card-body">
    <form id="myForm" action="{{ route('store.borrower') }}" method="POST" class="row g-3" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-md-6">
            <label for="validationDefault01" class="form-label">Item Name</label>
            <input type="text" class="form-control" name="item_name">
        </div>

        <div class="form-group col-md-6">
            <label for="validationDefault01" class="form-label">Borrower Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group col-md-6">
            <label for="validationDefault01" class="form-label">Borrower Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="form-group col-md-6">
            <label for="validationDefault01" class="form-label">Borrower Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>

        <div class="form-group col-md-12">
            <label for="validationDefault01" class="form-label">Borrower Address</label>
            <textarea class="form-control" name="location"></textarea>

        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Save Changes</button>
        </div>
    </form>
</div> <!-- end card-body -->

                </div> <!-- end card-->
            </div> <!-- end col -->

        </div>

    </div> <!-- container-fluid -->

</div>  <!-- End Content -->


<script> type="text/javascript"
$(document).ready(function(){
    $('#image').change(function(e){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});

</script>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                item_name: {
                    required : true,
                },
                name: {
                    required : true,
                },
                email: {
                    required : true,
                },
                phone: {
                    required : true,
                }
                location: {
                    required : true,
                }

            },
            messages :{
                item_name: {
                    required : 'Please Enter Item Name',
                },
                name: {
                    required : 'Please Enter Borrower Name',
                },
                email: {
                    required : 'Please Enter Borrower Email',
                },
                phone: {
                    required : 'Please Enter Borrower Phone',
                }
                location: {
                    required : 'Please Enter Borrower Address',
                }

            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>



@endsection
