<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{url('css/select2.min.css')}}" rel="stylesheet">

    <title>Ubigeo</title>
  </head>
  <body>
    
    <div class="container"> 
      <div class="row">
        <div class="col-12 mt-5">
          <div class="card">
            <h5 class="card-header">Ubigeo</h5>
            <div class="card-body">
                <div class="row">
                  <div class="col-4">
                    <label>Departamento</label>
                    <select class="js-example-basic-single js-states form-control" name="txtdepartamento" id="txtdepartamento">
                       
                    </select>
                  </div>
                  <div class="col-4">
                    <label>Provincia</label>
                    <select class="js-example-basic-single js-states form-control" name="txtprovincia" id="txtprovincia">
                    </select>
                  </div>
                  <div class="col-4">
                    <label>Distrito</label>
                    <select class="js-example-basic-single js-states form-control" name="txtdistrito" id="txtdistrito">
                     
                    </select>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    <div> 
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ url('js/jquery-3.6.0.min.js') }} "></script>
    <script src="{{ url('js/select2.min.js') }} "></script>
    <script>
      $(document).ready(function() {
          $('.js-example-basic-single').select2();
      });
    </script>
    <script src="{{ url('js/ubigeo.js') }} "></script>
  </body>
</html>