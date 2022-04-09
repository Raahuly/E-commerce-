<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body{
        
        background-color: #29539b;
background-image: linear-gradient(315deg, #29539b 0%, #1e3b70 74%);
};
</style>
<body class="min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class=" max-w-lg mx-auto">
       <a href="">
        <h1 class="text-4xl font-bold text-white text-center">Rahul-Shop</h1> 
       </a>
    </header>
    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
    <section class=" ">
        <h3 class="font-bold text-2xl">Welcome To Rahul-Shop</h3>
        <p class="text-gray-600 pt-2">Sign Up to your account</p>
        
    </section>
    <section class="mt-10">
    <form class="flex flex-col" action="Login.php" method="get" action="#">
       <div class="mb-6 pt-3 rounded bg-gray-200">
        <label for="text" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
        <input type="text" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" name="t1" id="t1" required ><br>
</div>
<div class="mb-6 pt-3 rounded bg-gray-200">
        <label for="email" class="block  text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
        <input type="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" name="t2" id="t2"  required ><br>
    </div>
    <div class="mb-6 pt-3 rounded bg-gray-200">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
        <input type="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" name="t3" id="t3"  required ><br>
    </div>
    <div class="mb-6 pt-3 rounded bg-gray-200">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Confirm Password</label>
        <input type="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3" name="t4" id="t4"  required ><br>
    </div>
   
        <button type="submit" class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-cyan-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200">Sign Up</button>
       
    </form>
   
    </section>
</main>
    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Don't have an account? <a href="#" class="font-bold hover:underline"> Sign Up</a></p>
    </div>
    
    <footer class="max-w-lg mx-auto flex justify-center text-white">
        <a href="#" class="hover:underline">Contact</a>
        <span class="#">.</span>
        <a href="#" class="hover:underline">Privacy</a>
    </footer>
</body>
</html>