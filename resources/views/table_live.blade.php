@extends('layouts.app')
@section('css')

<meta name="csrf-token" content="{{ csrf_token() }}">
    <style type="text/css">
    .text_right{
      text-align: right;
    }
    </style>
@endsection

@section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
    <script >
        $(document).ready(function () {


  ////////////////test///

  $.get( "https://api.thingspeak.com/apps/thinghttp/send_request?api_key=A3XTY1S7IYDB2V4U", function( data ) {

$(".testTable").hide();
    $(".testTable").append(data);

    console.log(  $(".testTable").find(".text_right a").text());

      $(".testTable").find("a").removeAttr("href");


      $(".testTable").show();
  });










          ////////////////test///
          var page = 1;
          var current_page = 1;
          var total_page = 0;
          var is_ajax_fire = 0;
          manageData();

                    /* manage data list */
          function manageData() {
              $.ajax({
                  dataType: 'json',
                  url:"{{ url('admin/item-ajax') }}",
                  data: {page:page}
              }).done(function(data){

              	total_page = data.last_page;
              	current_page = data.current_page;

              	$('#pagination').twbsPagination({
          	        totalPages: total_page,
          	        visiblePages: current_page,
          	        onPageClick: function (event, pageL) {
          	        	page = pageL;
                          if(is_ajax_fire != 0){
          	        	  getPageData();
                          }
          	        }
          	    });

              	manageRow(data.data);
                  is_ajax_fire = 1;
              });
          }


                    /* Get Page Data*/
          function getPageData() {
          	$.ajax({
              	dataType: 'json',
              	  url:"{{ url('admin/item-ajax') }}",
              	data: {page:page}
          	}).done(function(data){
          		manageRow(data.data);
          	});
          }


                      /* Add new Item table row */
            function manageRow(data) {
            	var	rows = '';
            	$.each( data, function( key, value ) {
            	  	rows = rows + '<tr>';
            	  	rows = rows + '<td>'+value.home+'</td>';
            	  	rows = rows + '<td>VS</td>';
                  rows = rows + '<td>'+value.away+'</td>';
                  rows = rows + '<td>'+value.time+'</td>';
                  rows = rows + '<td>'+value.result+'</td>';
            	  	rows = rows + '<td data-id="">';
                            rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
                            rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
                            rows = rows + '</td>';
            	  	rows = rows + '</tr>';
            	});

            	$("#viewLive tbody").html(rows);
            }




            $.ajaxSetup({
                          headers: {
                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }
            });


                        /* Create new Item */
              $(".crud-submit").click(function(e){
                  e.preventDefault();
                  var form_action = $("#create-item").find("form").attr("action");
                  var home = $("#create-item").find("input[name='home']").val();
                  var away = $("#create-item").find("input[name='away']").val();
                  var time = $("#create-item").find("input[name='time']").val();
                  var result = $("#create-item").find("input[name='result']").val();

                  $.ajax({
                      dataType: 'json',
                      type:'POST',
                      url: "{{ url('admin/item-ajax') }}",

                      data:{"home":home, "away":away,"time":time, "result":result}
                  }).done(function(data){
                      console.log("success");
                  });

              });

        });
    </script>
@endsection
@section('content')
    <div class="container">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
					  Create Items
				</button>

      <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      		  <div class="modal-dialog" role="document">
      		    <div class="modal-content">
      		      <div class="modal-header">
      		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      		        <h4 class="modal-title" id="myModalLabel">Create Item</h4>
      		      </div>
      		      <div class="modal-body">


                  <form class="form-horizontal" role="form" method="POST"
                        action=""{{ route('item-ajax.store') }}"">
                      <div class="form-group">
                          <label for="home" class="col-md-4 control-label">Homes</label>

                          <div class="col-md-6">
                              <input id="home" type="text" class="form-control" name="home"
                                     value="">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="away" class="col-md-4 control-label">Away</label>

                          <div class="col-md-6">
                              <input id="away" type="text" class="form-control" name="away"
                                     value="">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="time" class="col-md-4 control-label">Time</label>

                          <div class="col-md-6">
                              <input id="time" type="datetime-local" class="form-control" name="time"
                                     value="">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="result" class="col-md-4 control-label">Result</label>

                          <div class="col-md-6">
                              <input id="result" type="text" class="form-control" name="result"
                                     value="">
                          </div>
                      </div>


                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-primary crud-submit">
                                  Submit
                              </button>

                          </div>
                      </div>
                  </form>




      		      </div>
      		    </div>
      		  </div>.
      		</div>


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Table Edits</div>
                    <div class="panel-body">
                      <table class="table table-bordered table-hover" id="viewLive">
                        <thead>
                            <tr>
                          <th>Home</th>
                          <th>Vs</th>
                          <th>Away</th>
                          <th>Time</th>
                          <th>Result</th>
                          <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                      <ul id="pagination" class="pagination-sm"></ul>

                    </div>
                </div>
            </div>
        </div>


        <div class="row" id="test">
          <div class="panel panel-default">
              <div class="panel-heading">Table Edit</div>
              <div class="panel-body">
<table class="table table-hover">
  <thead>
    <tr>
      <th>a</th>
      <th>a</th>
      <th>a</th>
      <th>a</th>
      <th>a</th>
      <th>a</th>
    </tr>
  </thead>
  <tbody class="testTable">

  </tbody>

</table>



  </div>
    </div>

        </div>
    </div>
@endsection
