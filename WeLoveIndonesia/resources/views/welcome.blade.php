<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FORM LOGIN</title>
</head>
<body class="h-screen w-screen flex justify-center items-center text-center bg-[rgb(131,197,219)] bg-contain bg-center bg-no-repeat" style="background-image: url('/TUGAS/aset/indomap.jpg')">
   
    <img src="/TUGAS/aset/WI.png" class="absolute top-5">
    
 
    <form class="w-[600px] bg-black/50 p-10 rounded-3xl shadow-lg" id="formlogin">
        <div class="mb-5">
            <label for="username" class="block mb-1 text-2xl font-bold text-white">
                Username:
            </label>
            <input 
                type="text" 
                name="username" 
                id="username"
                class="w-full py-4 px-5 border border-gray-300 rounded-full font-['Roboto'] mb-2"
            >
        </div>
        
        <div class="mb-5">
            <label for="password" class="block mb-1 text-2xl font-bold text-white">
                Password:
            </label>
            <input 
                type="password" 
                name="password" 
                id="password"
                class="w-full py-4 px-5 border border-gray-300 rounded-full font-['Roboto'] mb-2"
            >
        </div>

        <button 
            type="submit"
            class="w-1/4 py-2 px-4 bg-white text-black text-2xl font-bold rounded-full cursor-pointer transition-colors duration-300 hover:bg-gray-100"
        >
            LOGIN
        </button>
    </form>

    <script src="login.js"></script>
</body>
</html>