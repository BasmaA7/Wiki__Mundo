<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

  <title>Document</title>
  <link rel="stylesheet" href="../public/style/dist/output.css">
</head>



<body style="background-image:url(../public/assets/images/signPic.png)">
<section class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md  dark:bg-gray-900 ">
    <div class="py-8 lg:py-16 px-4  w-[50%] bg-white border rounded-lg dark: dark:bg-gray-700 m-80 text-3xl font-semibold ">
      <h2 class=" mb-16 text-5xl tracking-tight font-SemiBold text-center text-gray-900 dark:text-white font-semibold"> Log <span class="text-orange-500 font-semibold">In</span> </h2>

      <p class="m-4 text-dark text-2xl dark:text-white ">Welcome Again</p>
      <!-- Error Message Js-->
      <div>
      <span class= "text-red-600 bg-red-100 text-center border-red-600 my-8  text-lg
 hidden" id="password-error">Please enter Your email and password </span>
      </div>
      <!-- Error Message Js-->

      <!--FORM-->

      <form  method="POST" id="form" action="/Wiki__Mundo/public/index.php?action=logIn" class="space-y-4 flex flex-col justify-evenly" id="form">
        <div>
          <input type="email" name='email' id="email"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light "
            placeholder="Email" >
        </div>
        <div>
          <input type="password" name="password" id="password"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
            placeholder="Password" >
        </div>
        <div class="flex justify-center ">
          <div> <button name='login' type="submit" 
              class="py-3 px-5 text-sm font-medium text-center text-gray-500 rounded-3xl bg-red-600 w-60 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800   ">login</button>
          </div>

        </div>
      </form>
  </div>
</section>
</body>


    
  

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
<script src="../public/assets/js/login.js"></script>


</html>