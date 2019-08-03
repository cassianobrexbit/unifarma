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
            Importar dados de medicamento
        </div>
        <div class="card-body">
            <form action="{{ route('insertExcel') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <input type="file" name="fileExcel" class="form-control" placeholder="Arquivo Excel">
                <br>
                <button class="btn btn-success">Importar Excel</button>
            </form>
            <br>
            <form action="{{ route('insertXML') }}" method="POST" enctype="multipart/form-data">
                
                @csrf
                <input type="file" name="fileXML" class="form-control"  placeholder="Arquivo XML">
                <br>
                <button class="btn btn-success">Importar XML</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
