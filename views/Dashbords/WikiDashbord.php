<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <title>Document</title>
  <link rel="stylesheet" href="../public/style/dist/output.css">

</head>
<body>
  <!-- Navbar  -->
 <?php include '../views/includes/navDash.php'; ?>
    <!-- Navbar  -->
<?php include "../views/includes/asideDash.php"; ?>
<main class="mt-14 p-12 ml-0 smXl:ml-64 dark:border-gray-700">
<div class="bg-white dark:bg-gray-800 border border-[#D9D9DE] dark:border-gray-700 rounded-xl p-8 mb-12">

<section class=" dark:bg-gray-900 p-3 sm:p-5 antialiased">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
          Wiki Table
        </h1>

        <div class="   mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class=" dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

            <div class="flex justify-end items-center w-full md:w-full">
                
                    <!-- / Search -->

                    <!-- Div avec le bouton aligné à droite -->
            
                    <div class="flex justify-end items-center">

                   
                        
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-4">titre_wiki</th>
                                <th scope="col" class="px-4 py-3">User_Name</th>
                                <th scope="col" class="px-4 py-3">Categorie_Name</th>
                                <th scope="col" class=" text-center px-4 py-3">Contenu</th>
                                <th scope="col" class=" text-center px-4 py-3">Status</th>
                            
                                <th scope="col" class="px-4 py-3  text-gray-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
               
    <?php foreach ($wikis as $w) : ?>
                                       <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center"> <?=$w['titre_wiki']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$w['name']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$w['nom']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$w['contenu']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$w['status']?> </td>

                                    <td class="px-4 py-3 text-center  ">
                                        <button id="apple-imac-27-dropdown-button" data-dropdown-toggle="apple-imac-27-dropdown" class=" inline-flex items-center text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 p-1.5 dark:hover-bg-gray-800 text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div id="apple-imac-27-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm" aria-labelledby="apple-imac-27-dropdown-button">
                                                <li>
                                                    <button type="button" data-modal-target="updateProductModal" data-modal-toggle="updateProductModal" class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-gray-700 dark:text-gray-200">
                                                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                        </svg>
                                                        Edit
                                                    </button>
                                                </li>

                                                <li>
                                                    <button type="button" data-modal-target="deleteModal" data-modal-toggle="deleteModal" class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-red-500 dark:hover:text-red-400">
                                                        <svg class="w-4 h-4 mr-2" viewbox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M6.09922 0.300781C5.93212 0.30087 5.76835 0.347476 5.62625 0.435378C5.48414 0.523281 5.36931 0.649009 5.29462 0.798481L4.64302 2.10078H1.59922C1.36052 2.10078 1.13161 2.1956 0.962823 2.36439C0.79404 2.53317 0.699219 2.76209 0.699219 3.00078C0.699219 3.23948 0.79404 3.46839 0.962823 3.63718C1.13161 3.80596 1.36052 3.90078 1.59922 3.90078V12.9008C1.59922 13.3782 1.78886 13.836 2.12643 14.1736C2.46399 14.5111 2.92183 14.7008 3.39922 14.7008H10.5992C11.0766 14.7008 11.5344 14.5111 11.872 14.1736C12.2096 13.836 12.3992 13.3782 12.3992 12.9008V3.90078C12.6379 3.90078 12.8668 3.80596 13.0356 3.63718C13.2044 3.46839 13.2992 3.23948 13.2992 3.00078C13.2992 2.76209 13.2044 2.53317 13.0356 2.36439C12.8668 2.1956 12.6379 2.10078 12.3992 2.10078H9.35542L8.70382 0.798481C8.62913 0.649009 8.5143 0.523281 8.37219 0.435378C8.23009 0.347476 8.06631 0.30087 7.89922 0.300781H6.09922ZM4.29922 5.70078C4.29922 5.46209 4.39404 5.23317 4.56282 5.06439C4.73161 4.8956 4.96052 4.80078 5.19922 4.80078C5.43791 4.80078 5.66683 4.8956 5.83561 5.06439C6.0044 5.23317 6.09922 5.46209 6.09922 5.70078V11.1008C6.09922 11.3395 6.0044 11.5684 5.83561 11.7372C5.66683 11.906 5.43791 12.0008 5.19922 12.0008C4.96052 12.0008 4.73161 11.906 4.56282 11.7372C4.39404 11.5684 4.29922 11.3395 4.29922 11.1008V5.70078ZM8.79922 4.80078C8.56052 4.80078 8.33161 4.8956 8.16282 5.06439C7.99404 5.23317 7.89922 5.46209 7.89922 5.70078V11.1008C7.89922 11.3395 7.99404 11.5684 8.16282 11.7372C8.33161 11.906 8.56052 12.0008 8.79922 12.0008C9.03791 12.0008 9.26683 11.906 9.43561 11.7372C9.6044 11.5684 9.69922 11.3395 9.69922 11.1008V5.70078C9.69922 5.46209 9.6044 5.23317 9.43561 5.06439C9.26683 4.8956 9.03791 4.80078 8.79922 4.80078Z" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                       </tbody>
                    </table>
                </div>


            </div>
        </div>
    </section>
<section class=" dark:bg-gray-900 p-3 sm:p-5 antialiased">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
          Wiki Table Reserver
        </h1>

        <div class="  mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class=" dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

            <div class="flex justify-end items-center w-full md:w-full">
                
                    <!-- / Search -->

                    <!-- Div avec le bouton aligné à droite -->
            
                    <div class="flex justify-end items-center">

                   
                        
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-4">titre_wiki</th>
                                <th scope="col" class="px-4 py-3">User_Name</th>
                                <th scope="col" class="px-4 py-3">Categorie_Name</th>
                                <th scope="col" class=" text-center px-4 py-3">Contenu</th>
                                <th scope="col" class=" text-center px-4 py-3">Status</th>
                            
                                <th scope="col" class="px-4 py-3  text-gray-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
               
    <?php foreach ($ReservWeki as $Rw) : ?>
                                       <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center"> <?=$Rw['titre_wiki']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$Rw['name']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$Rw['nom']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$Rw['contenu']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$Rw['status']?> </td>

                                    <td class="px-6 py-4">
                                    <form action="" class="text-green-600 font-medium hover:underline" method="post">
                                        <input type="hidden" name="nom" value="<?= $c['nom'] ?>">
                                       
<button type="button"data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center 
  dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
  Show
                                        </button>

<div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
               
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">   
                   <?= $ReservWeki ['titre'] ?>
                 </h3>
                <p> <?= $ReservWeki ['contenu'] ?></p>

                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Refuser
                </button>
                <form action="wikiaccept" method="post">
                 <input type="hidden" name="id" value="<?= $ReservWeki ['id'] ?>"></br>
                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100
                 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Accepter</button>
                 </form>
            </div>
        </div>
    </div>
</div>

                              
                                      </td>
                                       
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                       </tbody>
                    </table>
                </div>


            </div>
        </div>
    </section>
    </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>
</html>