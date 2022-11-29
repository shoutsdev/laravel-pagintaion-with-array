<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pagination with Array - shouts.dev</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div class="container mt-5">
    <h4 class="text-center mb-3">Popular PHP Frameworks</h4>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
        </tr>
        @foreach($stacks as $stack)
            <tr>
                <td>{{ $stack['id'] }}</td>
                <td>{{ $stack['title'] }}</td>
            </tr>
        @endforeach
    </table>
    <div class="text-center">
        {{ $stacks->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

</body>
</html>
