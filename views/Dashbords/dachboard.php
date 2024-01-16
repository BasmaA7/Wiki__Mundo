
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
    <!--Statistiques  -->
  <div class="  flex   justify-between p-8 bg-gray-500">

<div>
<a href="#" class="block max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <div class="bg-red-400 text-center">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Users</h5>
</div >
<p class="font-normal text-gray-700 dark:text-gray-400"> 
<?= count($users) ?>

</p>
</a>
</div>

<div>
<a href="#" class="block max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Wikis</h5>

<p class="font-normal text-gray-700 dark:text-gray-400">
</p>
</a>
</div>

<div>
<a href="#" class="block max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Categories</h5>
<p class="font-normal text-gray-700 dark:text-gray-400">

</p>
</a>
</div>

<div>
<a href="#" class="block max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tags</h5>
<p class="font-normal text-gray-700 dark:text-gray-400">

</p>
</a>
</div>

  </div>
  <!--Statistiques  -->

    <!--Wikis Table -->
    
    <!-- end Wikis Table -->

    <!-- user-->
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white">
           Users Table
        </h1>

        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

            <div class="flex justify-end items-center w-full md:w-full">
                
                        
                    </div>
                </div> 

       <!--TABLE USERS-->
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="bg-red-100">
                                <th scope="col" class="text-center px-4 py-3">ID</th>
                                <th scope="col" class=" text-center px-4 py-4">User Name</th>
                                <th scope="col" class=" text-center px-4 py-3">Email</th>
                                <th scope="col" class=" text-center px-4 py-3">Role</th>
                            
                                <th scope="col" class="text-center px-4 py-3 ">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
               
    <?php foreach ($users as $u) : ?>
                                       <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 text-center"><?=$u['id']?></td>
                                    <td class="px-4 py-3 text-center"> <?=$u['name']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$u['email']?> </td>
                                    <td class="px-4 py-3 text-center"><?=$u['role_id']?> </td>

                                    <td class="px-4 py-3 text-center  ">
                                       
                                        <form action="index.php?action=sup" method="post">
                                        <input type="hidden" name="id" value="<?= $u['id'] ?>">
                                        <button type="submit">supprimer</button>
                                    </form>
                                    
                                     
                                      
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
</div> 
       


              <!--TABLE Categories end tags -->
              <!--Categories-->
   

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html> 
