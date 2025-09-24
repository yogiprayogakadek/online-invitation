<div class="col-4">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center"><strong>Jumlah Hadir</strong></h5>
        </div>
        <div class="card-body">
            <h1 class="text-center"><strong>{{ $hadir }}</strong></h1>
        </div>
    </div>
</div>
<div class="col-4">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center"><strong>Jumlah Tidak Hadir</strong></h5>
        </div>
        <div class="card-body">
            <h1 class="text-center"><strong>{{ $tidakHadir }}</strong></h1>
        </div>
    </div>
</div>
<div class="col-4">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center"><strong>Jumlah Undangan</strong></h5>
        </div>
        <div class="card-body">
            <h1 class="text-center"><strong>{{ $noOfGuest }}</strong></h1>
        </div>
    </div>
</div>

<div class="col-12 py-4">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <table id="style-3" class="table style-3 dt-table-hover">
                <thead>
                    <tr>
                        <th class="checkbox-column text-center"> No </th>
                        <th class="text-center">Guest Name</th>
                        <th>Attendance</th>
                        <th>Number of Guest</th>
                        <th>Message</th>
                        <th class="text-center dt-no-sorting">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comments as $key => $comment)
                        <tr>
                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                            <td>{{ $comment->guest_name }}</td>
                            <td class="text-center"><span
                                    class="shadow-none badge {{ $comment->attendance == 'Tidak Hadir' ? 'badge-danger' : 'badge-primary' }}">{{ ucwords($comment->attendance) }}</span>
                            </td>
                            <td>{{ $comment->no_of_guest }}</td>
                            <td>{{ $comment->message }}</td>
                            <td class="text-center">
                                <ul class="table-controls">
                                    <li><a href="javascript:void(0);" class="bs-tooltip btn-remove"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"
                                            data-original-title="Delete" data-id="{{ $comment->id }}"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash p-1 br-8 mb-1">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                            </svg></a></li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    c3 = $('#style-3').DataTable({
        "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
            "<'table-responsive'tr>" +
            "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [5, 10, 20, 50],
        "pageLength": 10
    });

    // multiCheck(c3);
</script>
