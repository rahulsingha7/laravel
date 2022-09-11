<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>All Employee</title>
</head>
<body>
<div class="container">
  <h2>All Employee</h2>            
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Date of Joining</th>
        <th>Salary</th>
        <th>Department</th>
        <th>Skills</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($employee as $e)
      <tr>
        <td>{{$e->name}}</td>
        <td>{{$e->date_of_joining}}</td>
        <td>{{$e->salary}}</td>
        <td>{{$e->department}}</td>
        <td>@php
                        $skills=json_decode($e->skills);
                        @endphp
                        @foreach($skills as $s)
                        <span class="badge badge-primary">{{$s}}</span>
                        @endforeach
        </td>
        <td>
            <a class="btn btn-primary" href="{{url('edit-employee/'.$e->id)}}">Edit</a>
            <a class="btn btn-danger"  data-toggle="modal" data-target="#myModal{{$e->id}}">Delete</a>
        </td>
        <div class="modal" id="myModal{{$e->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Confirmation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Are you sure you want to delete <b>{{$e->name}}</b>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <a class="btn btn-success" href="{{url('delete-employee/'.$e->id)}}">yes</a>
      </div>

    </div>
  </div>
</div>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>
</body>
</html>