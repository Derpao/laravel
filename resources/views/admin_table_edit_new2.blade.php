@extends('layouts.app')
@section('css')

<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <style type="text/css">

    </style>
@endsection

@section('js')
    <script >
        $(document).ready(function () {

            console.log("testsrr");
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
                    <div class="panel-heading">Table Edit</div>
                    <div class="panel-body">
                      <table class="table table-bordered">
                        <thead>
                            <tr>
                          <th>Home1</th>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
