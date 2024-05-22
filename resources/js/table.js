import DataTable from 'datatables.net-dt';

let query_params = window.location.search;

let table = new DataTable('#employeeTable', {
    "ajax": {
        url: '/data' + query_params
    },
    "columns": [
        { "data" : "id"},
        { "data" : "first_name"},
        { "data": "last_name" },
        { "data": "age" },
        { "data": "phone" },
        { "data": "city" },
        { "data": "email" },
        { "data": "company" }
    ]
});
