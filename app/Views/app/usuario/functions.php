<script>
    const usuarioFunctions = {
        init: () => {
            usuarioFunctions.dataTable()
        },

        dataTable: () => {
            let $table = '#table-usuarios';
            let $order_col = 0;
            let $order = 'asc';
            let $search = true;
            let $paging = true;

            $DataTableLangCustom = {
                paging: false,
                language: {
                    'sEmptyTable': 'Nenhum registro encontrado',
                    'sInfo': 'Mostrando de _START_ até _END_ de _TOTAL_ registros',
                    'sInfoEmpty': 'Mostrando 0 até 0 de 0 registros',
                    'sInfoFiltered': '(Filtrados de _MAX_ registros)',
                    'sInfoPostFix': '',
                    'sInfoThousands': '.',
                    'sLengthMenu': '_MENU_ resultados por página',
                    'sLoadingRecords': 'Carregando...',
                    'sProcessing': 'Processando...',
                    'sZeroRecords': 'Nenhum registro encontrado',
                    'sSearch': 'Pesquisar',
                    'oPaginate': {
                        'sNext': 'Próximo',
                        'sPrevious': 'Anterior',
                        'sFirst': 'Primeiro',
                        'sLast': 'Último',
                    },
                    'oAria': {
                        'sSortAscending': ': Ordenar colunas de forma ascendente',
                        'sSortDescending': ': Ordenar colunas de forma descendente',
                    },
                },
            };

            $DataTableLangCustom = $.extend({
                searching: false,
                paging: false
            }, $DataTableLangCustom);

            $DataTableLangCustom['searching'] = $search;
            $DataTableLangCustom['paging'] = $paging;

            if (!$.fn.DataTable.isDataTable($table)) {
                let $dt = $($table).DataTable($DataTableLangCustom);

                $dt.order([$order_col, $order]).draw();

                return $dt;
            }
        },
    }

    usuarioFunctions.init()
</script>