<?php
require_once '../../controllers/wikiController/displayWiki.php';
require_once '../../controllers/tagController/displayTag.php';
require_once '../../controllers/categoryController/displayCategory.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
   <style>
    nav{
        background-color: blueviolet;
        
    }
    main{
        position: absolute;
        top: 0;
        right:  0rem;

    }
   </style>
</head>
<body>

<nav class=" shadow-xl h-screen fixed top-0 left-0 min-w-[250px] py-6 font-[sans-serif] overflow-auto">
      <div class="relative flex flex-col h-full">
        <a href="../visitor/home.php" class="text-center"><img src="../visitor/w.png" alt="logo"  class='w-[60px] inline'/> 
        </a>
        <ul class="space-y-3 my-10 flex-1">
        
          <li>
    <a href="../visitor/wikis.php" class="text-[#333] text-sm flex items-center hover:text-[#007bff] hover:border-r-[5px] border-[#077bff] hover:bg-gray-100 px-8 py-4 transition-all">
        <i class="fas fa-list w-[18px] h-[18px] mr-4"></i>
        <span>home</span>
    </a>
</li>
<li>
    <a href="../wikis.php" class="text-[#333] text-sm flex items-center hover:text-[#007bff] hover:border-r-[5px] border-[#077bff] hover:bg-gray-100 px-8 py-4 transition-all">
        <i class="fas fa-book w-[18px] h-[18px] mr-4"></i>
        <span>Wikis</span>
    </a>
</li>
        </ul>
        <div class="flex flex-wrap items-center cursor-pointer border-t border-gray-200 px-4 py-4">
          <img src='https://readymadeui.com/profile.webp' class="w-9 h-9 rounded-full border-white" />
          <div class="ml-4">
            <p class="text-sm text-[#333]">author</p>
            <p class="text-xs text-gray-400 mt-1">free acount</p>
          </div>
        </div>
      </div>
    </nav>
    <section class="flex items-center relative">
      
    <main class="bg-gray-100 flex-grow h-[100vh] w-[85vw] ">
        
                <div class="md:p-6 bg-white md:m-5">
                    <div class="flex items-center justify-between">
                        <div></div>
                        <div>
                            <button class="bg-purple-700 text-white w-[160px] h-[50px] rounded-md" id="addWikiBtn">
                                Add Wiki
                            </button>
                        </div>
                    </div>

                    <!-- ========== table Banks-desktop ======== -->

                    <div class="hidden md:block rounded-lg overflow-hidden mt-10">
                        <table class="w-full" id="table1">
                            <thead class="sm:w-full">
                                <tr class="bg-purple-700 text-white h-[60px]">
                                    <th class="">ID</th>
                                    <th class="">title</th>
                                    <th class="">summarize</th>
                                    <th class="">content</th>
                                    <th class="">dateCreate</th>
                                    <th class="">dateModifie</th>
                                    <th class="">picture</th>
                                    <th class="">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="sm:w-full">
                                <?php 
                                  foreach($WikiDatas as $WikiData) {
                                ?>
                                <tr class="pt-10 sm:pt-0 w-full ">
                                    <td class="sm:text-center text-right"><?php echo $WikiData['idWiki'] ?></td>
                                    <td class="sm:text-center text-right"><?php echo $WikiData['title'] ?></td>
                                    <td class="sm:text-center text-right"><?php echo $WikiData['summarize'] ?></td>
                                    <td class="sm:text-center text-right"><?php echo $WikiData['content'] ?></td>
                                    <td class="sm:text-center text-right"><?php echo $WikiData['dateCreated'] ?></td>
                                    <td class="sm:text-center text-right"><?php echo $WikiData['dateModified'] ?></td>
                                    <td class="sm:text-center text-right">
                                        <div class="flex items-center justify-center">
                                            <?php
                                              $cheminImage = $WikiData['pictureWiki'] ;
                                              echo "<img class='w-[50px] h-[50px] ' src='$cheminImage' alt='image de categorie'>";
                                            ?>
                                        </div>
                                    </td>
                                    <td class="sm:text-center text-right">
                                        <button class="bg-[#212529] text-white w-[35px] h-[35px] rounded-md">
                                            <a href="updateWiki.php?idWiki=<?= $WikiData['idWiki'];?>">
                                                <i class="fa-solid fa-pen " style="color:#186F65"></i></a>
                                        </button>
                                        <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md">
                                            <a href="../../controllers/wikiController/deleteWiki.php?idWiki=<?= $WikiData['idWiki'];?>">
                                                <i class="fa-solid fa-trash "></i></a>
                                        </button>
                                    </td>
                                </tr>
                                <?php 
                                  }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ========== table Banks-mobile ======== -->
                    <div class="block sm:hidden rounded-lg overflow-hidden mt-10">
                        <table class="block w-full border-2 sm:border-0" id="table2">
                            <thead class="hidden">
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="block w-full">
                                <?php 
                                  foreach($WikiDatas as $WikiData) {
                                ?>
                                <tr class="block pt-10 sm:pt-0 w-full ">
                                    <td data-label="id"
                                        class="border-b before:content-['id'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block text-right">
                                        <?php echo $WikiData['idWiki'] ?>
                                    </td>
                                    <td data-label="title"
                                        class="border-b before:content-['title'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block sm:before:hidden sm:text-center text-right">
                                        <?php echo $WikiData['title'] ?>
                                    </td>
                                    <td data-label="summarize"
                                        class="border-b before:content-['summarize'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block sm:before:hidden sm:text-center text-right">
                                        <?php echo $WikiData['summarize'] ?>
                                    </td>
                                    <td data-label="content"
                                        class="border-b before:content-['content'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block sm:before:hidden sm:text-center text-right">
                                        <?php echo $WikiData['content'] ?>
                                    </td>
                                    <td data-label="dateCreate"
                                        class="border-b before:content-['dateCreate'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block sm:before:hidden sm:text-center text-right">
                                        <?php echo $WikiData['dateCreated'] ?>
                                    </td>
                                    <td data-label="dateModified"
                                        class="border-b before:content-['dateModified'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block sm:before:hidden sm:text-center text-right">
                                        <?php echo $WikiData['dateModified'] ?>
                                    </td>
                                    <td data-label="picture"
                                        class="border-b before:content-['picture'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 block sm:before:hidden sm:text-center text-right">
                                        <div class="flex items-center justify-center">
                                            <?php
                                                $cheminImage = $WikiData['pictureWiki'] ;
                                                echo "<img class='w-[50px] h-[50px] ' src='$cheminImage' alt='image de categorie'>";
                                            ?>
                                        </div>
                                    </td>
                                    <td data-label="ACtion"
                                        class="border-b before:content-['action'] before:absolute before:left-0 before:w-1/2 before:font-bold before:text-left before:pl-2 sm:before:hidden sm:text-center block text-right">
                                        <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md">
                                            <a href="updateWiki.php?idWiki=<?= $WikiData['idWiki'];?>">
                                                <i class="fa-solid fa-pen"></i></a>
                                        </button>
                                        <button class="bg-slate-900 text-white w-[35px] h-[35px] rounded-md">
                                            <a href="../../../Controllers/WikiController/deleteWikiController.php?idWiki=<?= $WikiData['idWiki'];?>">
                                                <i class="fa-solid fa-trash"></i></a>
                                        </button>
                                    </td>
                                </tr>
                                <?php 
                                  }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- pop up -->
                    <div id="addWikiPopup"
                    class="hidden fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex justify-center items-center">
                     <div class="bg-white w-[500px] p-8 rounded-lg">
                     <h2 class="text-2xl font-bold mb-4">Add Wiki</h2>
        <form action="../../controllers/wikiController/addWiki.php" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-black" for="title">Title</label>
                    <input id="title" type="text" name="title" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-black" for="sammurize">Summarize</label>
                    <textarea id="sammurize" type="text" name="sammurize" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring"></textarea>
                </div>

                <div>
                    <label class="text-black" for="content">Content</label>
                    <textarea id="content" type="text" name="content" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring"></textarea>
                </div>

                <div>
                    <label class="text-black dark:text-gray-200" for="idCategory">Select Category</label>
                    <select name="idCategory" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring">
                        <option value="0">Choose Category</option>
                        <?php
                        foreach ($categoryData as $allcategoryData) {
                            echo "<option value='" . $allcategoryData['idCategory'] . "' >" . $allcategoryData['nameCategory'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-4">
                     <label for="tags" class="block text-sm font-medium text-gray-600">Sélectionner les tags :</label>
                     <div class="flex flex-wrap gap-2">
                         <?php foreach ($TagDatas as $TagData) : ?>
                         <label class="inline-flex items-center">
                             <input type="checkbox" name="selectedTags[]" value="<?= $TagData['idTag'] ?>"
                                 class="form-checkbox h-5 w-5 text-blue-600">
                             <span class="ml-2 text-gray-700"><?= $TagData['nameTag'] ?></span>
                         </label>
                         <?php endforeach; ?>

                     </div>
                 </div>
    

                <div>
    <label class="text-black" for="pictureWiki">Picture</label>
    <input id="file-upload" name="pictureWiki" type="file" class="mt-1 p-2 w-full border rounded-md">
</div>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="bg-purple-700 text-white px-4 py-2 rounded-md">Add</button>
                <button type="button" id="closeAddWikiPopup" class="bg-gray-400 text-gray-800 ml-2 px-4 py-2 rounded-md">Cancel</button>
            </div>
        </form>
    </div>
</div>

            </main>
        

            <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>

            <script>
                $(document).ready(function () {
                    $('#table1').DataTable();
                });
                $(document).ready(function () {
                    $('#table2').DataTable();
                });

                // Popup Handling
                $(document).ready(function () {
                    $('#addWikiBtn').on('click', function () {
                        $('#addWikiPopup').removeClass('hidden');
                    });

                    $('#closeAddWikiPopup').on('click', function () {
                        $('#addWikiPopup').addClass('hidden');
                    });
                });
            </script>

</body>

</html>
