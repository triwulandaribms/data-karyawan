
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        h3 {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body class="bg-light">

     
 <h3>FORMULIR UPDATE KARYAWAN</h3>

  <main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('employees.update', $data_employees->id) }}" method="post">
            @csrf
            @method('PUT')
        
            <div class="mb-3 row">
                <label for=""  class="col-sm-2 col-form-label">ID</label> 
                 <div class="col-sm-10">
                    <input type="text" name="id" value="{{ $data_employees->id }}"class="form-control bg-light text-dark" id="id">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">NAME</label>
                <div class="col-sm-10">
                    <input type="text" name="name" value="{{ $data_employees->name }}" class="form-control bg-light text-dark" id="name">
                </div>
            </div>
                
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">DOB</label>
                <div class="col-sm-10">
                    <input type="date" name="dob" value="{{ $data_employees->dob }}" class="form-control bg-light text-dark" id="dob">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <input type="text" name="status" value="{{ $data_employees->status }}" class="form-control bg-light text-dark" id="status">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">JOIN DATE</label>
                <div class="col-sm-10">
                    <input type="date" name="join_date" value="{{ $data_employees->join_date }}" class="form-control bg-light text-dark" id="join_date">
                </div>
            </div>

            <div class="mb-3 row text-center">
                <div class="col-sm-12">
                    <input type="submit" class="btn btn-primary mx-auto" value="SIMPAN">
                </div>
            </div>
        </form>

    </div>
  </main>
</body>
</html>