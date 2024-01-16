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

<h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
       Categories
        </h1>

        <div class="   mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class=" dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

            <div class="flex justify-end items-center w-full md:w-full">
                

                    <!-- Div avec le bouton aligné à droite -->
            
                    <div class="flex justify-end items-center">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Add Categorie
  </button>

<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Ajouter categorie
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="AddCategorie" method='post'>
                    <div>
                        <label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categorie</label>
                        <input type="text" name="nom"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
                    </div>
                   
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer</button>
                    
                </form>
            </div>
        </div>
    </div>
</div> 

                
                        
                    </div>
                </div>


                <div class="overflow-x-auto">

                    <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                            <th scope="col" class="px-4 py-3">ID</th>
                                <th scope="col" class="px-4 py-4">Categorie_Name</th>
                                <th scope="col" class="px-4 py-3  text-gray-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
               
    <?php foreach ($category as $c) : ?>
                                       <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center"> <?=$c['id']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$c['nom']?> </td>


                                    <td class="px-6 py-4">
                                    <form action="updeateCat" class="text-green-600 font-medium hover:underline" method="post">
                                        <input type="hidden" name="nom" value="<?= $c['nom'] ?>">
                                        <a href="ModifierCat.php"></a>
                                        <button type="submit">Modifier</button>
                              
                                      </td>

                                    <td class="px-6 py-4">
                                    <form action="deleteCa" class="text-red-600 font-medium hover:underline" method="post">
                                        <input type="hidden" name="id" value="<?= $c['id'] ?>">

                                        <button type="submit">supprimer</button>
                                        
                                    </form>               
                                           </td>
                                       
                                            
                                    </div>
                                                

                            
                                               
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                       </tbody>
                    </table>
                </div>
  <!--End Categories-->




            </div>
        </div>
        </div>
        </main>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>
</html>