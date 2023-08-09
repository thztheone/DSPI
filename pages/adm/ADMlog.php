<h1>
  Log
  <br>
</h1>


<div class="shadow-md h-100 w-100" style="font-size: 12px;">
    <table class="display table table-hover table-striped" style="font-size: 12px;" id="datatable_log">
        <thead style="width: 100%">
            <tr>
                <th class="text-center">Hora</th>
                <th class="text-center">Usuário</th>
                <th class="text-center">Evento</th>
            </tr>
        </thead>
        <tbody class="table-group-divider table-light" style="font-size: 12px;"></tbody>
        <tfoot></tfoot>
    </table>
</div>

<style>
  div.dataTables_filter, div.dataTables_length, div.dataTables_info, div.dataTables_paginate {
    padding: 1em; 
  }
</style>

<script>
    $(document).ready(function(){
        $('#datatable_log').DataTable({
            columnDefs: [
                { width: "50px", targets: [0] },
                { className: "text-center", targets: "_all" },
            ],
            ordering: false,
            destroy: true,
            order: [],
            sorting: false,
            lengthMenu: [
              100, 50, 35, 15, 10, 5
            ],
            scrollCollapse: true,
            language: {
              "url": "https://cdn.datatables.net/plug-ins/1.13.5/i18n/pt-BR.json"
            },
            paging: true,
            processing: true,
            serverSide: true,
            ajax: {
              "url": "database/processADM/processLog.php",
              "type": "post"
            },
            columns: [
              {data: 'hora'},
              {data: 'nome'},
              {data: 'evento'},
            ]},
        );
    });
</script>