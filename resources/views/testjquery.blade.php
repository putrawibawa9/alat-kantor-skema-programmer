<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</head>
<body>
    
          <table class="table table-bordered" id="pengaduanTable">
            <thead>
              <tr>
                <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Bagian</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Aksi</th>
                  </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Nama</td>
                    <td class="text-center">Bagian</td>
                    <td class="text-center">Jabatan</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="text-center">Nama</td>
                    <td class="text-center">Bagian</td>
                    <td class="text-center">muklis</td>
                    <td class="text-center">
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                </tbody>
        </table>


    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable();
        });
    </script>
</body>
</html>