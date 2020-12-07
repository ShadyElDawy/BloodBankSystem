
var table = $('#tablee').DataTable({
  bFilter: false,
  ordering: true,

  searching: true,
  'columnDefs'        : [
                {
                    'searchable'    : false,
                    'targets'       : [3]
                },
            ],

    paging: true,
  dom: 't'


});


oTable = $('#tablee').DataTable();
$('#myInputTextField').keyup(function(){
oTable.search($(this).val()).draw() ;
})

var btnContainer = document.getElementById("myDIV");


var btns = btnContainer.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
btns[i].addEventListener("click", function() {
var current = document.getElementsByClassName("active");
current[0].className = current[0].className.replace(" active", "");
this.className += " active";
});
}
$('.table').hide();
$('#myInputTextField').keyup(function(e) {
var numRows = $('.table tr').length;
if(numRows >0){
$('.table').show();
}else{
$('.table').show();
}
});
