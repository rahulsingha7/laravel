<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Create Employee</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="{{url('store-employee')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="" class="cols-sm-2 control-label">Employee Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name" id="name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="cols-sm-2 control-label">Date of joining</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="date" class="form-control" name="doj" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="cols-sm-2 control-label">Salary</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="salary"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Department</label>
                                        <select name="department" id="" class="form-control">
                                            <option value="Cse">CSE</option>
                                            <option value="Eee">EEE</option>
                                            <option value="Law">LAW</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                       <label for="">Skills</label>
                                       <br>
                                       <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="skills[]" class="form-check-input" value="Python">Python
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox" name="skills[]" class="form-check-input" value="Js">Js
                                        </label>
                                        </div>
                                        <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="checkbox"  name="skills[]" class="form-check-input" value="Php">Php
                                        </label>
                                      </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-primary ">Save</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</div>
</body>
</html>