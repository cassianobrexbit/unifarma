<!DOCTYPE html>
<html>
<head>
    <title>Import data from xslx</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
            Importar dados de material
        </div>
        <div class="card-body">
            <form action="{{ route('insertMaterialExcel') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <input type="file" name="fileExcel" class="form-control" placeholder="Arquivo Excel">
                <br>
                <button class="btn btn-success">Importar Excel</button>
            </form>
            <br>
        </div>
    </div>
</div>

</body>
</html>
