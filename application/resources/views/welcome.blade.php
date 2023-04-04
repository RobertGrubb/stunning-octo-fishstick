@include('globals/header')

<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto p-4 py-md-5">
            <header class="pb-3 mb-5 border-bottom">
                <div class="row">
                    <div class="col">
                        <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                            <span class="fs-4">Subscriber Management</span>
                        </a>
                    </div>
                    <div class="col text-end">
                        <a href="/change-key" class="btn btn-light">
                            Update Key
                        </a>
                        <a href="/create" class="btn btn-primary ml-3">Create Subscriber</a>
                    </div>
                </div>
            </header>

            @if (Session::get('message'))
            <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif

            @if (Session::get('error'))
            <div class="alert alert-danger">{{Session::get('error')}}</div>
            @endif

            <div class="row pb-5 mb-5 border-bottom">
                <div class="col-lg-12">
                    <div class="table-responsive-md">
                        <table class="table table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="text-center">Country</th>
                                    <th class="text-center">Subscribed Date</th>
                                    <th class="text-center">Subscribed Time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var table;



window.onload = function() {
    $.fn.dataTable.ext.errMode = 'throw';

    table = $('#datatable').DataTable({
        responsive: true,
        ajax: '/',
        error: function(jqXHR, ajaxOptions, thrownError) {
            setTimeout(function() {
                table.ajax.reload();
            }, 1000);
        }
    });
}

const deleteSubscriber = async (id) => {

    try {
        const res = await api(`/delete/${id}`);

        if (res.success !== true) {
            return showToast('danger', 'Error', res.message, 2);
        }

        table.ajax.reload();
        return showToast('success', 'Success', res.message, 2);
    } catch (error) {
        return showToast('danger', 'Error', error.responseJSON.message, 2);
    }
}
</script>

@include('globals/footer')