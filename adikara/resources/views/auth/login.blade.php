<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @include('Template.partials')

</head>
<body class=" bg-cover bg-center min-h-screen flex justify-center items-center" style="background-image: url({{ asset('img/Bg-login.png') }}">

    <div class="bg-base p-10 md:p-16  lg:p-20 rounded-3xl shadow-2xl min-h-[400px]  min-w-[300px] md:w-[500px] lg:w-[650px] lg:h-auto transition-all duration-300 ease-in-out">
      <h2 class="text-xl md:text-2xl lg:text-3xl font-abyssinica text-center mb-4 lg:mb-6 text-white">LOGIN</h2>
        <div class="relative mb-4">

            <img src="/img/Bunga.png" alt="Flower" class="absolute w-[130px] h-[130px] top-[-145px] right-[-100px] lg:top-[-250px] lg:right-[-200px] md:w-[180px]  lg:h-[230px] md:h-[180px] lg:w-[230px] md:top-[-190px] md:right-[-150px] transition-all duration-300 ease-in-out">
            <form action="#" method="POST">
              <div class=" lg:mb-4">
                <label for="email" class="block text-gray-700 lg:text-xl text-sm transition-all duration-300 ease-in-out">Email Address</label>
                <div class="grid grid-cols-[auto_1fr] items-center gap-2 mb-6 lg:mb-5 transition-all duration-300 ease-in-out mt-2">
                    <i class="fa-solid fa-user text-md lg:text-2xl transition-all duration-300 ease-in-out"></i>
                    <input type="email" id="email" name="email"
                        class="bg-base w-full p-1 lg:p-3 border border-black rounded-sm focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-700 placeholder:text-sm lg:placeholder:text-lg transition-all duration-300 ease-in-out"
                        placeholder="Enter your email">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 lg:text-xl text-sm transition-all duration-300 ease-in-out">Password</label>
                    <div class="grid grid-cols-[auto_1fr] items-center gap-2 mt-2">
                        <i class="fa-solid fa-lock text-md lg:text-2xl transition-all duration-300 ease-in-out"></i>
                        <input type="password" id="password" name="password"
                            class="bg-base w-full p-1 lg:p-3 border border-black rounded-sm focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-700 placeholder:text-sm lg:placeholder:text-lg transition-all duration-300 ease-in-out"
                            placeholder="Enter your password">
                    </div>
                </div>

                <div class="grid grid-cols-[1fr_auto] items-center mb-6 gap-4">
                    <label class="text-[10px] md:text-[15px] lg:text-lg flex items-center font-abyssinica text-white transition-all duration-300 ease-in-out">
                        <input type="checkbox" class="mr-2 ">Remember me
                    </label>
                    <a href="#" class="font-abyssinica text-white hover:text-blue-500 text-[10px] md:text-[15px] lg:text-lg transition-all duration-300 ease-in-out">Forgot password?</a>
                </div>

              <div class="flex justify-center">
                  <button type="submit" class="w-20 lg:w-36 text-sm lg:text-xl font-abyssinica bg-white text-login p-2 rounded-3xl hover:bg-login hover:text-white transition duration-200 shadow-xl">Login</button>
              </div>
            </form>
        </div>

      <p class="mt-4 text-center text-white text-[12px] md:text-[15px] lg:text-sm">Don't have an account? <a href="#" class="text-blue-500">Sign up</a></p>
    </div>

  </body>
</html>
