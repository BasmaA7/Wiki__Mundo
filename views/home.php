<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <title>Wiki__Mundo</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

</head>
<body class="bg-gray-100">
    <!-- Navbar section -->
<?php include "includes/nav.php";?>
     <!-- Navbar section -->

     <!-- ********** Start Hero section *************-->
     <section class=" container px-5 py-24 mx-auto bg-center  " style="background-image: url('assets/images/heropic.png')" >
     <div class="py-8 px-4  lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16 " >

        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-orange-500 md:text-5xl lg:text-5xl dark:text-white">" let's Exploring Together  with Wiki_Mundo!"</h1>
            <p class="mb-6 text-lg font-normal text-white lg:text-xl dark:text-gray-100">Discover, create, share. Dive into our knowledge community where every idea matters. Join us now!</p>
            <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read more about our app 
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
          <!--Bar de recherche-->
        <div class="flex flex-col justify-center">
        <?php include "includes/searchInput.php";?>
          </div>           
   </div>
  </section>
     <!-- ******** End Hero section  ******************-->

<!-- les derniere wikis -->

 <section class=" " >
  <div class="container px-5 py-24 mx-auto">
 <div class="text-center mb-12">
                <h5 class="text-base md:text-lg text-indigo-700 mb-1">See Our Recent News</h5>
                <h1 class="text-4xl md:text-6xl text-gray-700 font-semibold">**** The Wiki Articles **** </h1>
            </div>  
            <div class="flex space-x-4 my-8">  


            <?php foreach ($wikis as $w): ?>

<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-72 md:h-48 w-full object-cover object-center"
                            src="assets/images/herofinal.png" alt="blog">
                        <div class="p-6 hover:bg-red-700 hover:text-white transition duration-300 ease-in">
                            
                            <h1 class="text-2xl font-semibold mb-3"><?=$w['titre_wiki']?> </h1>

                            <p class="leading-relaxed mb-3"><?=$w['contenu']?></p>
                            <h4 class="text-green-600 font-semibold mb-3">Categorie : <?=$w['nom']?> </h4>
                            <h3 class="text-2xl font-semibold mb-3">l'autheur :<?=$w['name']?> </h3>

                                <a href="SingleP.php" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
                        </div>
                   
                </div>
</div>
<?php endforeach; ?>

</div>
</section>





 
 <!--  footer section -->
 <?php include "includes/footer.php";?>
 <!--  footer section -->
 
</body>
</html>



