<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-screen h-screen bg-slate-50 flex justify-center items-center">
        <div class="w-96 h-auto p-10 bg-slate-100 shadow flex flex-col justify-center rounded">
            <h1 class="text-2xl font-bold mb-3">Order Form</h1>
            <form action="">
                <div class="mb-3">
                    <label for="name" class="block mb-2">Name</label>
                    <input type="text" id="name" name="name" class="rounded px-2 py-1 w-full border-2">
                </div>

                <div class="mb-3">
                    <label for="number" class="block mb-2">Phone Number</label>
                    <input type="text" id="number" name="number" class="rounded px-2 py-1 w-full border-2">
                </div>

                <div class="mb-3">
                    <label for="email" class="block mb-2">Email</label>
                    <input type="text" id="email" name="email" class="rounded px-2 py-1 w-full border-2">
                </div>

                <div class="mb-3">
                    <label for="password" class="block mb-2">Password</label>
                    <input type="text" id="password" name="password" class="rounded px-2 py-1 w-full border-2">
                </div>

                <div class="w-full flex">
                    <button class="px-4 py-2 mb-3 bg-blue-500 text-white font-bold rounded">Order Now</button>
                </div>

            </form>
            
        </div>
        
    </div>
    
</body>
</html>