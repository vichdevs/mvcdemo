<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>Circle</h1>
                    <form class="form-inline" id="circle_form">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="radius" class="sr-only">Radius</label>
                            <input type="number" class="form-control" id="radius" placeholder="Enter Radius" required="">
                        </div>
                        <button type="submit" id="circle_btn" class="btn btn-primary mb-2">Generate</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Result here</h3>
                    <div class="result_circle"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-8">
                    <h1>Tringle</h1>
                    <form class="form-inline" id="tringle_form">
                        <div class="form-group mx-sm-2 mb-2">
                            <label for="a" class="sr-only">A</label>
                            <input type="number" class="form-control" id="a" placeholder="Enter A value" required="">
                        </div>
                        <div class="form-group mx-sm-2 mb-2">
                            <label for="b" class="sr-only">B</label>
                            <input type="number" class="form-control" id="b" placeholder="Enter B value" required="">
                        </div>
                        <div class="form-group mx-sm-2 mb-2">
                            <label for="c" class="sr-only">C</label>
                            <input type="number" class="form-control" id="c" placeholder="Enter C value" required="">
                        </div>
                        <button type="submit" id="tringle_btn" class="btn btn-primary mb-2">Generate</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3>Result here</h3>
                    <div class="result_tringle"></div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            var base_url = "{{URL('/')}}";
            $("#circle_form").submit(function(e){
                e.preventDefault();
                var radius = $('#radius').val();
                $.ajax({url: base_url+"/circle/"+radius, success: function(result){
                    $(".result_circle").html(result);
                }});
            });
            
            $("#tringle_form").submit(function(e){
                e.preventDefault();
                var a = $('#a').val();
                var b = $('#b').val();
                var c = $('#c').val();
                
                $.ajax({url: base_url+"/triangle/"+a+'/'+b+'/'+c, success: function(result){
                    $(".result_tringle").html(result);
                }});
            });
        </script>
    </body>
</html>
