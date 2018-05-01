<?php $active="b"; include ('header.php');?>
<style>

</style>
<script>

$(document).ready(function() {
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 
var today = dd+'/'+mm+'/'+yyyy;
	
	//var editor = new $.fn.dataTable.Editor( {} );
    var tab = $('#ezpa').DataTable({
		 //"ordering": false,
		 "order":[[ 0,"dsc"]],
		 "orderCellsTop": true,
		 "ajax": './getall.json',
		 "searching": false,
		 "lengthChange": false,
		 "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
				"class": "s","orderable": false
            },{
                "targets": [ 1 ],"data": null,"orderable": false,"render": function(data, type, full, meta){
				var e = '<div class="neym">'+data[1]+'</div><div class="d8">'+data[3]+'</div>';

               if(full[1] === 'dendi'){
                  e += '<div class="bgr"><a href="javascript:;" class="button">delete</a> <a href="javascript:;" class="sbutton">edit</a></div>';
               }

              
               

               return e;
            }
            },{
                "targets": [ 2 ],"orderable": false,"render": function(data, type, full, meta){
				var e;
               
                  e = '<div class="kont">'+data+'</div>';
               

               return e;
            }
            }/*,{
            "targets": -1,
            "data": null,
			"render": function(data, type, full, meta){
				var e;
               if(full[1] === 'damzaky'){
                  e = data[3]+'<button class="button">x</button><button class="sbutton">edit</button>';
               }else{
				   e = data[3];
			   }

               return e;
            },"orderable": false
			}*/
        ]
		
		
	});
	
	
	
var y=0;
	$('#ezpa tbody').on( 'click', '.sbutton', function () {
			
			var c = tab
        .row(tab.row( $(this).parents('tr') ).index()).data()[2];
	if(y==0){
		console.log("y jadi 1");
		
		$(this).parents('tr').children('td').eq(1).html("<textarea>"+c+"</textarea><button class='sub btn prima'>save</button>");
		y=1;
	}else{
		console.log("y jadi 0");
		console.log(c);
		$(this).parents('tr').children('td').eq(1).html("<div class='kont'>"+c+"</div>");
		y=0;
	}

} );


$('#ezpa tbody').on( 'click', '.sub', function () {
	var d=tab.row(tab.row( $(this).parents('tr') ).index()).data();
	tab.row.add( [
		d[0],
        d[1],
        $(this).parents('tr').children('td').eq(1).children('textarea').val(),
        d[3]
    ] ).draw();
	    tab
        .row( $(this).parents('tr') )
        .remove()
        .draw();
	y=0;
});



	$('#ezpa tbody').on( 'click', '.button', function () {

    tab
        .row( $(this).parents('tr') )
        .remove()
        .draw();
} );
	
	
var bb = $.ajax({
    url: './getall.json',
    async: false,
    dataType: 'json'
}).responseJSON;
var k = bb.data;
var maxid = 0;
k.map(function(obj){     
    if (parseInt(obj[0]) > maxid) maxid = parseInt(obj[0]);    
});
	console.log(maxid);

	
	
	
	
	$( "#kap" ).submit(function( event ) {
maxid++;
  tab.row.add( [
		maxid,
        $("input[name='name']").val(),
        $("textarea[name='statz']").val(),
        $("input[name='date']").val()
    ] ).draw();
var data = tab
    .column( 0 )
    .data()
    .sort()
    .reverse();
  event.preventDefault();
});


$("input[name='date']").val(today);

});
</script>
</head>
<body>
<?php include ('navbar.php');?>

<div class='con'>
<div class="row">
    <div class="col-md-auto">
<form id='kap'>
<textarea name='statz' autofocus placeholder="write something to let the world knows what's inside your mind"></textarea>
<div class='statset'>
<input type='text' name='name' value='dendi'><input name='date' type='text'>
</div>
<button class='btn prima'>Sung!</button>
</form>
    </div>
    <div class="col">
<table id="ezpa" class="table" style="width:100%">
        <thead style='display:none;'>
            <tr>
			<th>id</th>
                <th>Name</th>
                <th>Post</th>
            </tr>
        </thead>
        <tbody>
          
        </tbody>

    </table>
    </div>

  </div>



</div>

<?php include ('/footer.php'); ?>