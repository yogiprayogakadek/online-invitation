<div class="col-4">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center"><strong>Total Hadiah</strong></h5>
        </div>
        <div class="card-body">
            <h1 class="text-center"><strong>{{ 'Rp.' . number_format($amount, 0, '.', '.') }}</strong></h1>
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
                        <th>Amount</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($gifts as $key => $gift)
                        <tr>
                            <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                            <td>{{ $gift->confirm_guest_name }}</td>
                            <td>{{ 'Rp.' . number_format($gift->confirm_amount, 0, '.', '.') }}</td>
                            <td>{{ $gift->confirm_note }}</td>
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
