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
    
 <h3>FORMULIR TAMBAH DETAIL KARYAWAN</h3>

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
            
            <form action="{{ route('detail.store') }}" method="post">
                @csrf
            
               <div class="mb-3 row">
                    <label for="id_fk" class="col-sm-2 col-form-label">ID KARYAWAN </label>
                    <div class="col-sm-10">
                        <input type="number" name="id_fk" class="form-control bg-light text-dark" id="uuid_fk">
                    </div>
                </div>
                    
                <div class="mb-3 row">
                    <label for="experience" class="col-sm-2 col-form-label">EXPERIENCE</label>
                    <div class="col-sm-10">
                        <input type="number" name="experience" class="form-control bg-light text-dark" id="experience">
                    </div>
                </div>
        
                <div class="mb-3 row">
                    <label for="job_tittle" class="col-sm-2 col-form-label">JOB TITTLE</label>
                    <div class="col-sm-10">
                        <input type="text" name="job_tittle" class="form-control bg-light text-dark" id="job_tittle">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="job_desc" class="col-sm-2 col-form-label">JOB DESC</label>
                    <div class="col-sm-10">
                        <input type="text" name="job_desc" class="form-control bg-light text-dark" id="job_desc">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
  
</body>
</html>
    
       

   



    