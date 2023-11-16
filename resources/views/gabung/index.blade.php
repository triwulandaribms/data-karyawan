<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
      h4 {
          text-align: center;
          margin-top: 20px;
      }
  </style>
  </head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg bg-secondary" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#">QLOK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/employees">Karyawan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/employeesDetails">Detail Karyawan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Show Detail</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

<h4>DATA DETAIL KARYAWAN</h4>

<div class="my-3 p-3 bg-body rounded shadow-sm">

<table class="table table-success table-striped">
  <thead>
      <tr class="table-success">
          <th>ID KARYAWAN</th>
          <th>NAME</th>
          <th>DOB</th>
          <th>STATUS</th>
          <th>EXPERIENCE</th>
          <th>JOB TITTLE</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($data_tampil as $data)
      <tr class="table-success">
          <td>{{ $data->id_karyawan }}</td>
          <td>{{ $data->name }}</td>
          <td>{{ $data->dob }}</td>
          <td>{{ $data->status }}</td>
          <td>{{ $data->experience }}</td>
          <td>{{ $data->job_tittle }}</td>
      </tr>
      @endforeach
  </tbody>
</table> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
  
</body>
</html>