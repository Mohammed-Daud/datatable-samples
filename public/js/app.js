
//Simple Datatable
$('#datatable').DataTable();

//Individual column searching (text inputs)
// ID Based
const columnSearchingDatatable = $('#datatable-column-searching').DataTable();
$('#datatable-column-searching input#search-name').on('keyup change clear', function () {
    columnSearchingDatatable.columns(1).search(this.value).draw();
});
$('#datatable-column-searching input#search-emp-code').on('keyup change clear', function () {
    columnSearchingDatatable.columns(2).search(this.value).draw();
});
$('#datatable-column-searching input#search-designation').on('keyup change clear', function () {
    columnSearchingDatatable.columns(3).search(this.value).draw();
});
$('#datatable-column-searching input#search-salary').on('keyup change clear', function () {
    columnSearchingDatatable.columns(4).search(this.value).draw();
});
$('#datatable-column-searching input#search-department').on('keyup change clear', function () {
    columnSearchingDatatable.columns(5).search(this.value).draw();
});
$('#datatable-column-searching input#search-mobile').on('keyup change clear', function () {
    columnSearchingDatatable.columns(6).search(this.value).draw();
});
$('#datatable-column-searching input#search-email').on('keyup change clear', function () {
    columnSearchingDatatable.columns(7).search(this.value).draw();
});

//to hide default searchbox but search feature is not disabled hence customised searchbox can be made.
const defaultSeartcHiddenDatatable = $('#datatable-hide-default-search-input').DataTable({
    "dom":"lrtip"
});
$('#dt-custom-name-search-input').on('keyup change clear', function () {
    defaultSeartcHiddenDatatable.columns(1).search(this.value).draw();
});
