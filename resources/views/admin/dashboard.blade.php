<?php $pageTitle = 'Admin Dashboard - DSC Registration Portal'; ?>
@include('layouts/admin_header_css')
 <!-- Data Table CSS -->
    <link href="{{ asset('vendors/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@include('layouts/admin_header') 
 
 
    <!-- Main Content -->
    <div class="hk-pg-wrapper">
        <!-- Breadcrumb -->
        <nav class="hk-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light bg-transparent">
                <li class="breadcrumb-item active" aria-current="page"><a href="#">User Data</a></li> 
            </ol>
        </nav>
            @if(Session::has('success'))
                <div class="alert alert-success success-alert alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <span class="success-message">{{Session::get('success')}}</span>
                    {{ Session::forget('success') }}
                </div>
            @endif
            <!-- Row -->
            <div class="row pl-10 pr-10">
                <div class="col-xl-12">
                    <section class="hk-sec-wrapper"> 
                        <div class="row">
                            <div class="col-md-3 mb-20">
                                <label for="client_status" class="mb-0">Client Status</label>
                                <select class="form-control custom-select d-block w-100" id="client_status" name="client_status" required>
                                    <option value="">Select Status</option>
                                    <option value="processing" @if(!empty($_GET['client_status']) ) @if($_GET['client_status'] == 'processing') selected @endif @endif>Processing</option>
                                    <option value="pending" @if(!empty($_GET['client_status']) ) @if($_GET['client_status'] == 'pending') selected @endif @endif>Pending</option>
                                    <option value="on_hold" @if(!empty($_GET['client_status']) ) @if($_GET['client_status'] == 'on_hold') selected @endif @endif>On Hold</option>
                                    <option value="completed" @if(!empty($_GET['client_status']) ) @if($_GET['client_status'] == 'completed') selected @endif @endif>Completed</option>
                                    <option value="cancelled" @if(!empty($_GET['client_status']) ) @if($_GET['client_status'] == 'cancelled') selected @endif @endif>Cancelled</option>
                                    <option value="refund" @if(!empty($_GET['client_status']) ) @if($_GET['client_status'] == 'refund') selected @endif @endif>Refund</option>
                                    <option value="refund_completed" @if(!empty($_GET['client_status']) ) @if($_GET['client_status'] == 'refund_completed') selected @endif @endif>Refund Completed</option>
                                </select>
                                <div class="invalid-feedback">
                                            Please select client status.
                                        </div> 
                            </div>
                            <div class="col-md-3 mt-25">
                                <button class="btn btn-sm btn-purple" onclick="searchByStatus()">Search</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="table-wrap">
                                    <table  class="table table-hover w-100 pb-20 font-12 data-table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name of Person</th>
                                                <th>Mobile</th> 
                                                <th>Email</th> 
                                                <th>Created</th>
                                                <th>Payment</th>
                                                <th>Status</th>
                                                <th>Remark</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <!-- </div> -->
        <!-- Container -->
    </div>
    <!-- /Main Content -->
@include('layouts/footer_script')
</body> 
</html>
  <!-- Data Table JavaScript -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-dt/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables-data.js') }}"></script>   
    <script type="text/javascript">
    var status = "";
    function delete_user(uid)
    { 
        if (confirm('Are You Sure to Delete this Record?'))
        {
            // window.location.href = 'index.php?id=' + uid;   
            var deleteUser = "{{route('admin.delete-user', '')}}"+"/"+uid;
            document.location.href = deleteUser; 
        }
    }
    function callDatatable(){
        var url = "{{ route('dashboard') }}?";
        if(status != ""){
            url += "client_status="+status; 
        }
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: url,
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'name_of_person', name: 'name_of_person'},
                {data: 'mobile', name: 'mobile'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'payment_status', name: 'payment_status'},
                {data: 'client_status', name: 'client_status'},
                {data: 'remarks', name: 'remarks', orderable: false,searchable: false},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            "bDestroy": true
        });
    }
    
    $(function () {
            callDatatable();        
    });
    function searchByStatus(){
        var client_status = $('#client_status').val();
        status = client_status;
        callDatatable();
    }
    </script>