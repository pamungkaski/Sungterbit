<?php $active="p"; include ('header.php');?>
<script>
$(document).ready(function() {
   var tab = $('#ezpa').DataTable({
		 //"ordering": false,
		 "order":[[ 0,"dsc"]],
		 "orderCellsTop": true,
		 "ajax": './getonly.json',
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
	if(y == 0){
		console.log("y jadi 1");
		
		$(this).parents('tr').children('td').eq(1).html("<textarea>"+c+"</textarea><button class='sub btn btn-primary'>save</button>");
		y=1;
	}else{
		console.log("y jadi 0");
		$(this).parents('tr').children('td').eq(1).html("<div class='kont'>"+c+"</div>");
		y=0;
	}
		/*
    tab
        .row( $(this).parents('tr') )
        .remove()
        .draw();*/
} );


$('#ezpa tbody').on( 'click', '.sub', function () {
	var d=tab.row(tab.row( $(this).parents('tr') ).index()).data();
	tab.row.add( [
		d[0],
        d[1],
        $(this).parents('tr').children('td').eq(1).children('textarea').val(),
        d[3],
        d[4]
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
    url: './getonly.json',
    async: false,
    dataType: 'json'
}).responseJSON;
var k = bb.data;
var maxid = 0;
k.map(function(obj){     
    if (parseInt(obj[0]) > maxid) maxid = parseInt(obj[0]);    
});
	
	
	
	});
</script>
</head>
<body>
<?php include ('navbar.php');?>
<div class='con'>
<div class='container'>

<div class="row">
  <div class="col-md-auto">
  <div class='sideba'>
  <img class='rounded-circle' src='<?php echo base_url('img/dondo.jpg');?>'>
  <h1><?php echo $user['username']?></h1>
  <h4><?php echo $profile['name']?></h4>
  <div class='about'>
      <?php echo $profile['bio']?>
  </div>
  </div>
  </div>
  <div class="col"><table id="ezpa" class="table" style="width:100%">
        <thead style='display:none;'>
            <tr>
			<th>id</th>
                <th>Name</th>
                <th>Post</th>
            </tr>
        </thead>
        <tbody>
            <!--<tr>
                <td>Kappogchamp</td>
                <td>Waduh hari ini saya mao bundir</td>
                <td>#bundir #nangid</td>
                <td>1/2/2026</td>
            </tr>
            <tr>
                <td>Bangas Bringas</td>
                <td>Galau nich bang, temenin aqu donk</td>
                <td>#bundir #sedih</td>
                <td>3/2/2048</td>
            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>Hahah hari ini terbaek lah seneng saya</td>
                <td>#senang #mood</td>
                <td>1/1/2126</td>
            </tr>
			<tr>
                <td>Lorem Ingsum</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                <td>#lorem #ipsum</td>
                <td>1/1/2126</td>
            </tr>-->
        </tbody>

    </table>
</div>

</div>
</div>
</div>

<?php include ('footer.php'); ?>