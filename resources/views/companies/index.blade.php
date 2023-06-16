<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD Index</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container" mt-2>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2> Laravel 10 CRUD </h2>
            </div>

            <div class="text-center mb-3">
                <a href="{{ route('companies.create') }}" class="btn btn-success">Create Company</a>
            </div>

            <div>

            </div>

            @if ($message = Session::get('success'))
                <div class="mt-2 text-center">
                    <div class="alert alert-success">
                        <p> {{ $message }} </p>
                    </div>
                </div>


        </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Company Name</th>
                <th>Company Email</th>
                <th>Company Address</th>
                <th width="280px">Action</th>
            </tr>

            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->address }}</td>
                    <td>
                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST"
                            onSubmit="if(!confirm('Are you sure?')){return false;}">
                            <a href=" {{ route('companies.edit', $company->id) }}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button onclick="ConfirmDel()" type="submit" class="btn btn-danger">Delete</button>
                            </button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            {!! $companies->links() !!}
        </div>

    </div>
    </div>
</body>

</html>
