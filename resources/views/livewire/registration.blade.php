
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"  />

        <title>Live wire Test</title>
        @livewireStyles
    </head>
    
    <body>

        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="card col-md-5">
                    <div class="card-header">
                        <h1>Add student</h1>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="submit">
                            <div class="form-group">
                                <label for="roll_id">Roll Id</label>
                                <input type="number" class="form-control" wire:model="roll_id" placeholder="Enter Id number">
                                {{-- for validation --}}
                                @error('roll_id')
                                    <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" wire:model="name" placeholder="Enter name number">
                                {{-- for validation --}}
                                @error('name')
                                    <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" wire:model="email" placeholder="Enter email number">
                                {{-- for validation --}}
                                @error('email')
                                    <span class="text-danger" style="font-size: 12px;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary mt-3 w-50">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>




        @livewireScripts
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
