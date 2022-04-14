
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css" type="text/css">
    <link rel="stylesheet" href="../../extensions/Editor/css/editor.dataTables.min.css" type="text/css">
    </head>
    <body>
    <table id="example" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th></th>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th width="18%">Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
    </table>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        var editor; // use a global for the submit and return data rendering in the examples
 $(document).ready(function() {
     alert("helo");
      editor = new $.fn.dataTable.Editor( {
         ajax: "../preawebsite/staff.php",
         table: "#example",
         fields: [ {
                 label: "First name:",
                 name: "first_name"
             }, {
                 label: "Last name:",
                 name: "last_name"
             }, {
                 label: "Position:",
                 name: "position"
             }, {
                 label: "Office:",
                 name: "office"
             }, {
                 label: "Extension:",
                 name: "extn"
             }, {
                 label: "Start date:",
                 name: "start_date",
                 type: "datetime"
             }, {
                 label: "Salary:",
                 name: "salary"
             }
         ]
     } );
  
     // Activate an inline edit on click of a table cell
     $('#example').on( 'click', 'tbody td:not(:first-child)', function (e) {
         editor.inline( this );
     } );
  
     $('#example').DataTable( {
         dom: "Bfrtip",
         ajax: "../preawebsite/staff.php",
         order: [[ 1, 'asc' ]],
         columns: [
             {
                 data: null,
                 defaultContent: '',
                 className: 'select-checkbox',
                 orderable: false
             },
             { data: "first_name" },
             { data: "last_name" },
             { data: "position" },
             { data: "office" },
             { data: "start_date" },
             { data: "salary", render: $.fn.dataTable.render.number( ',', '.', 0, '$' ) }
         ],
         select: {
             style:    'os',
             selector: 'td:first-child'
         },
         buttons: [
             { extend: "create", editor: editor },
             { extend: "edit",   editor: editor },
             { extend: "remove", editor: editor }
         ]
    });
 });
    </script>
    </body>

</html>