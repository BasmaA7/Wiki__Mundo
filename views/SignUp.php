<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

  <title>Document</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
 


</head>

<body>
  <section class="bg-gray-100 dark:bg-gray-900">
    <div class="py-8 px-4  lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16 "
      style="background-image:url(assets/images/signPic.png)">
      <div class="flex flex-col justify-center">
        <h1
          class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl dark:text-white">
          We invest in the world’s potential</h1>
        <p class="mb-6 text-lg font-normal text-gray-300 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on
          markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        <a href="#"
          class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
          more about our app
          <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 5h12m0 0L9 1m4 4L9 9" />
          </svg>
        </a>
      </div>
      <div>
        <div class=" lg:max-w-xl p-6 space-y-8 sm:p-8 bg-white  rounded-lg shadow-xl dark:bg-gray-800 ">

          <h1 class="text-3xl font-semibold mb-6  text-gray-900 text-center">Sign <span class="text-orange-500">
              Up</span></h1>
          <h1 class="text-sm font-semibold mb-6 text-gray-500 text-center">Join to Our Community with all time access
            and free </h1>
  

        <form id="form" method="POST" action="addusers" class="space-y-4 ">
    <div>
      <label for="name" class="block text-sm font-medium  text-gray-900">Username</label>
      <input id="name" type="text" name="name"
        class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
        <div class='bg-red-100  border-red-600 mt-3  '>
      <span class="text-red-600 hidden " id="name-error">Invalid username</span>
      </div>
    </div>

    <div>
      <label for="email" class="block text-sm font-medium  text-gray-900">Email</label>
      <input id="email" type="email" name="email"
        class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
        <div class='bg-red-100  border-red-600 mt-3  '>
      <span class="text-red-600 hidden " id="email-error">Invalid email</span>
      </div>
    </div>

    <div>
      <label for="password" class="block text-sm font-medium  text-gray-900">Password</label>
      <input id="password" type="password" name="password"
        class="mt-1 p-2 w-full border rounded-md focus:border-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
        <div class='bg-red-100  border-red-600 mt-3  '>
      <span class="text-red-600 hidden " id="password-error">Invalid password</span>
      </div>
    </div>

    <button type="submit" id="submit" name="signup"
      class="w-full text-white  text-gray-900p-2 rounded-md bg-orange-500 hover:bg-gray-800  focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 transition-colors duration-300">Sign Up</button>
  </form>



      </div>
    </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="assets/js/signUp.js"></script>
</body>

</html>