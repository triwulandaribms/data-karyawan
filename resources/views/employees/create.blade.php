<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        h3 {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body class="bg-light"> 
    
 <h3>FORMULIR TAMBAH KARYAWAN</h3>

  <main class="container">
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <form action="{{ route('employees.store') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="id" class="col-sm-2 col-form-label">ID KARYAWAN</label>
                    <div class="col-sm-10">
                        <input type="number" name="id" class="form-control bg-light text-dark" id="id">
                    </div>
                </div>
    
               <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">NAME</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control bg-light text-dark" id="name">
                    </div>
                </div>
                    
                <div class="mb-3 row">
                    <label for="dob" class="col-sm-2 col-form-label">DOB</label>
                    <div class="col-sm-10">
                        <input type="text" name="dob" class="form-control bg-light text-dark" id="dob">
                    </div>
                </div>
        
                <div class="mb-3 row">
                    <label for="status" class="col-sm-2 col-form-label">STATUS</label>
                    <div class="col-sm-10">
                        <input type="text" name="status" class="form-control bg-light text-dark" id="status">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="join" class="col-sm-2 col-form-label">JOIN DATE</label>
                    <div class="col-sm-10">
                        <input type="date" name="join" class="form-control bg-light text-dark" id="join">
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
    
       

   



    