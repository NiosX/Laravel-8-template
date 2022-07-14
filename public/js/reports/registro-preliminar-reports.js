$('.tabla-sexo').DataTable( {

    "footerCallback": function ( row, data, start, end, display ) {
        var api = this.api();

        // Remove the formatting to get integer data for summation
        var intVal = function ( i ) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '')*1 :
                typeof i === 'number' ?
                    i : 0;
        };

        // Total over all pages
        masculinoTotal = api
            .column( 1 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        femeninoTotal = api
            .column( 2 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        casoTotal = api
            .column( 3 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        // Update footer
        $( api.column( 1 ).footer() ).html(
            masculinoTotal
        );
        $( api.column( 2 ).footer() ).html(
            femeninoTotal
        );
        $( api.column( 3 ).footer() ).html(
            casoTotal
        );
    },

    "language": {
        "processing": "Procesando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "infoThousands": ",",
        "loadingRecords": "Cargando...",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    },
    "order": [[ 0, "asc" ]],
    scrollResize: true,
    scrollX: true,
    scrollY: '400px',
    scrollCollapse: true,
    paging: false,
    info: false
} )

/**
 * 
 * tabla por edad
 */

 $('.tabla-edad').DataTable( {

    "footerCallback": function ( row, data, start, end, display ) {
        var api = this.api();

        // Remove the formatting to get integer data for summation
        var intVal = function ( i ) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '')*1 :
                typeof i === 'number' ?
                    i : 0;
        };

        // Total over all pages
        bebeTotal = api
            .column( 1 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        infanciaTotal = api
            .column( 2 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        ninezTotal = api
            .column( 3 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        adolescenciaTotal = api
            .column( 4 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        mayorTotal = api
            .column( 5 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        casoTotal = api
            .column( 6 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        // Update footer
        $( api.column( 1 ).footer() ).html(
            bebeTotal
        );
        $( api.column( 2 ).footer() ).html(
            infanciaTotal
        );
        $( api.column( 3 ).footer() ).html(
            ninezTotal
        );
        $( api.column( 4 ).footer() ).html(
            adolescenciaTotal
        );
        $( api.column( 5 ).footer() ).html(
            mayorTotal
        );
        $( api.column( 6 ).footer() ).html(
            casoTotal
        );
    },

    "language": {
        "processing": "Procesando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "infoThousands": ",",
        "loadingRecords": "Cargando...",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    },
    "order": [[ 0, "asc" ]],
    scrollResize: true,
    scrollX: true,
    scrollY: '400px',
    scrollCollapse: true,
    paging: false,
    info: false
} )

/**
 * 
 * INDICADORES POR NACIONALIDAD
 */

 $('.tabla-nacionalidad').DataTable( {

    "footerCallback": function ( row, data, start, end, display ) {
        var api = this.api();

        // Remove the formatting to get integer data for summation
        var intVal = function ( i ) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '')*1 :
                typeof i === 'number' ?
                    i : 0;
        };

        // Total over all pages
        dominicanoTotal = api
            .column( 1 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        haitianoTotal = api
            .column( 2 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        dominicoTotal = api
            .column( 3 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        venecoTotal = api
            .column( 4 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        otrosTotal = api
            .column( 5 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        casoTotal = api
            .column( 6 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        // Update footer
        $( api.column( 1 ).footer() ).html(
            dominicanoTotal
        );
        $( api.column( 2 ).footer() ).html(
            haitianoTotal
        );
        $( api.column( 3 ).footer() ).html(
            dominicoTotal
        );
        $( api.column( 4 ).footer() ).html(
            venecoTotal
        );
        $( api.column( 5 ).footer() ).html(
            otrosTotal
        );
        $( api.column( 6 ).footer() ).html(
            casoTotal
        );
    },

    "language": {
        "processing": "Procesando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "infoThousands": ",",
        "loadingRecords": "Cargando...",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    },
    "order": [[ 0, "asc" ]],
    scrollResize: true,
    scrollX: true,
    scrollY: '400px',
    scrollCollapse: true,
    paging: false,
    info: false
} )

/***
 * 
 * tabla de 2 columnas, text y total
 * 
 */

 $('.tabla-tiny').DataTable( {

    "footerCallback": function ( row, data, start, end, display ) {
        var api = this.api();

        // Remove the formatting to get integer data for summation
        var intVal = function ( i ) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '')*1 :
                typeof i === 'number' ?
                    i : 0;
        };

        // Total over all pages
        total = api
            .column( 1 )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );

        // Update footer
        $( api.column( 1 ).footer() ).html(
            total
        );
    },

    "language": {
        "processing": "Procesando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "infoThousands": ",",
        "loadingRecords": "Cargando...",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    },
    "order": [[ 0, "asc" ]],
    scrollResize: true,
    scrollX: true,
    scrollY: '400px',
    scrollCollapse: true,
    paging: false,
    info: false
} )





/***
 * 
 * tabla nna info (select de nna )
 */

 $('.tabla-nna-info').DataTable( {

    "language": {
        "processing": "Procesando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "search": "Buscar:",
        "infoThousands": ",",
        "loadingRecords": "Cargando...",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    },
    "order": [[ 0, "asc" ]],
    scrollResize: true,
    scrollX: true,
    scrollY: '500px',
    scrollCollapse: true,
    paging: true,
    info: true
} )