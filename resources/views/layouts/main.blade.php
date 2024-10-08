<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <title>Cool Table</title>
    <style>
        
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #C96868, #FADFA1);
    color: #fff;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 80%;    
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    text-align: center;
}

table thead {
    background-color: #4e54c8;
}

table tbody tr:nth-child(odd) {
    background-color: rgba(255, 255, 255, 0.1);
}

table tbody tr:nth-child(even) {
    background-color: rgba(255, 255, 255, 0.2);
}

.product-img {
    width: 50px;
    height: 50px;
    border-radius: 5px;
}

button {
    padding: 8px 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.edit-btn {
    background-color: #f39c12;
    color: #fff;
}

.delete-btn {
    background-color: #e74c3c;
    color: #fff;
}

.add-btn {
    background-color: #27ae60;
    color: #fff;
    text-decoration: none
    /* margin-bottom: 50px;
    padding: 10px 20px; */
    /* display: flex; */
    /* margin-left: auto; */
}
    /* Basic resets */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #C96868, #FADFA1);
    color: #fff;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-container {
    background-color: rgba(0, 0, 0, 0.7);
    padding: 20px;
    border-radius: 10px;
    width: 400px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-size: 16px;
}

input[type="text"],
input[type="number"],
input[type="file"],
textarea {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    margin-top: 5px;
}

textarea {
    resize: none;
}

a {
    width: 100%;
    padding: 10px;
    background-color: #27ae60;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    margin-top: 10px;
}

button:hover {
    background-color: #219150;
}
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    @yield('content')

      <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable();
        });
    </script>
</body>
</html>
