<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            h4{
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif
            };
        </style>
  </head>
  <body>
        @include('layouts.part.navbar')

    <div class="content">
          <div class="container">
              <div class="row mt-5">
                  <div class="col-6">
                      <img src="img/backround.jpeg" style="width: 100%; height: 70%;" class="rounded me-auto d-block" alt="...">
                  </div>
                  <div class="col-6">
                  <p class="ms-auto">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum fuga modi esse laborum minus ratione dolore dignissimos? Iste voluptate tenetur ipsa minus molestiae suscipit provident quis molestias voluptatem vel commodi inventore repellendus cupiditate esse debitis, dolorum est in cum alias quaerat, aliquid adipisci eligendi. Itaque adipisci quibusdam nesciunt alias, ex in natus cupiditate maiores nobis fuga nostrum, ipsa dolore sequi, quas voluptatibus temporibus neque cumque beatae! Unde, fugiat voluptatum deleniti autem mollitia adipisci modi tenetur nostrum et, itaque cumque blanditiis perspiciatis quibusdam eligendi ad! Eos saepe in quae quisquam placeat assumenda nostrum impedit reprehenderit excepturi itaque. Architecto libero cumque blanditiis?</p>
                    <a href="" class="mb-5"><button type="button" class="btn btn-primary">Primary</button></a>
                </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>