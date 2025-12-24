<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL TEACHERS</title>
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="w-full">
        <div class="w-11/12 mx-auto">
            <h1>All teachers</h1>
        </div>
        <table class="border">
            <tr>
                <th class="border p2 text-center">ID</th>
                <th class="border p2 text-center">Name</th>
                <th class="border p2 text-center">Phone Number</th>
                <th class="border p2 text-center">Image</th>
            </tr>
            @foreach ($teachers as $teacher)
                <tr>
                    <td class = "border">{{ $teacher->id }}</td>
                    <td class = "border">{{ $teacher->name }}</td>
                    <td class = "border">{{ $teacher->phoneNumber }}</td>
                    @if (count($teacher->images)>0)
                        <td>
                            {{-- {{ $teacher->images->imageable_id }} --}}
                            <img src="{{ 'storage/'. $teacher->images[0]->path }}" class="w-10 h-10" alt="">

                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>