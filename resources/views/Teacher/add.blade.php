<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body>
     <div class="h-screen w-full flex justify-center items-center">
        <div class="flex flex-col border w-10/12 gap-5 p-5">
            <h1 class="text-blue-500 text-5xl font-bold text-center">Add Teacher</h1>
            <form action="{{ URL('createteacher') }}" method="post" enctype="multipart/form-data" class="flex flex-col gap-3">
                @csrf
                <input name="name" type="text" placeholder="Name" class="w-full py-2 border focus:outline-0">    
               <input name="phoneNumber" type="text" placeholder="Phone Number" class="w-full py-2 border focus:outline-0">
               <select name="user_id" class="py-2 w-full border" id="">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach    
            </select>    
            <input type="file" name="image" accept="image/*" class="py-2 w-full border">
            <input type="submit" value="Save" class="w-fit py-2 px-5 bg-blue-500 text-white">
            </form> 
        </div>
     </div>
</body>
</html>