<?php
        require_once('../../config/auth.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>candidat - SkillGouard</title>
        <link rel="shortcut icon" href="../../SkillGuard Social Media Assets.svg" type="image/x-icon">

</head>

<body class="bg-[#f5feff] w-full h-screen">

        <header class="text-white flex justify-between items-center px-16 h-[8vh]">

                <div class="w-16 h-16 flex justify-between items-center">
                        <img src="../../SkillGuard Logo.svg" alt="SkillGuard logo">
                        <h1 class="text-xl text-[#00134d] font-black">SkillGuard</h1>
                </div>

                <div class="flex justify-center items-center gap-4 mt-2">
                        <div class="shadow-md bg-white w-80 h-10 flex justify-center items-center rounded-full">
                                <input type="text" placeholder="Faites votre recherche ..."
                                        class="border-none pl-4 outline-none text-sm text-slate-500 w-full text-start pl-4 w-64">
                                <button
                                        class="w-16 h-10 flex justify-center items-center rounded-tr-full rounded-br-full  text-white cursor-pointer bg-[#001436] hover:bg-[#001436]/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                                viewBox="0 0 24 24">
                                                <path fill="#fff"
                                                        d="M9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16m0-2q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14" />
                                        </svg>
                                </button>
                        </div>

                        <button
                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24">
                                        <path fill="#6B7280" d="M20 17h2v2H2v-2h2v-7a8 8 0 1 1 16 0zM9 21h6v2H9z" />
                                </svg>
                        </button>

                        <button class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-[#f77313] font-bold cursor-pointer hover:bg-[#001436]/10">
                                <?php echo strtoupper(substr($data['entreprise'] ?? "", 0, 1))  ?>
                        </button>

                        <button
                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 48 48">
                                        <defs>
                                                <mask id="SVG9e55ocrc">
                                                        <g fill="none" stroke-linejoin="round" stroke-width="4">
                                                                <path fill="#fff" stroke="#fff"
                                                                        d="m34 41l10-17L34 7H14L4 24l10 17z" />
                                                                <path fill="#000" stroke="#000"
                                                                        d="M24 29a5 5 0 1 0 0-10a5 5 0 0 0 0 10Z" />
                                                        </g>
                                                </mask>
                                        </defs>
                                        <path fill="#6B7280" d="M0 0h48v48H0z" mask="url(#SVG9e55ocrc)" />
                                </svg>
                        </button>
                </div>

        </header>

        <main class="w-full h-[90vh] flex px-[5%] gap-4 pt-8">

                <nav id="menu" class="flex flex-col justify-between w-auto h-full p-4">

                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">
                                <li class="w-full">
                                        <a id="offre_back" href="../" class="w-full bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-full flex items-center justify-start gap-3 text-white text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1.5em" viewBox="0 0 12 24"><path fill="#fff" fill-rule="evenodd" d="m3.343 12l7.071 7.071L9 20.485l-7.778-7.778a1 1 0 0 1 0-1.414L9 3.515l1.414 1.414z"/></svg>
                                                <span>Retour</span>
                                        </a>
                                </li>
                        </ul>

                </nav>

                <div id="section3" class="section w-full h-full rounded-md flex flex-col gap-4">
                                <div id="err_msg"></div>
                                <div class=" bg-white p-4">
                                        <div class="flex flex-col gap-1 justify-start items-start">
                                                <div class="flex justify-between items-center w-full">
                                                        <h2 class="text-xl font-semibold text-slate-700">Espace de création des QCM</h2>
                                                </div>
                                                <p class="text-slate-500 text-sm">Permettre au recruteur de créer facilement des
                                                        QCM associés à une offre, avec la possibilité de :</p>
                                                <ul class="text-slate-500 text-xs">
                                                        <li class="flex justify-start items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280" stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Définir le nombre de questions.
                                                        </li>
                                                        <li class="flex justify-start items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280" stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Ajouter dynamiquement plusieurs options par question.
                                                        </li>
                                                        <li class="flex justify-start items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280" stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Définir le type de réponse (unique ou multiple).
                                                        </li>
                                                        <li class="flex justify-start items-center gap-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280" stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Identifier les bonnes réponses.
                                                        </li>
                                                </ul>
                                        </div>
                                        <div class="relative w-full max-full overflow-y-auto scrollbar-hide">
        
                                                <div  class="shadow-md bg-white w-160 h-10 flex justify-center items-center rounded-full mt-4">
                                                        <input  id="nbQuestions" type="number" placeholder="Générer le nombre de questions ..." class="border-none pl-4 outline-none text-sm text-slate-500 w-full text-start pl-4 w-80">
                                                        <button  id="generateQCM" class="w-16 h-10 flex justify-center items-center rounded-tr-full rounded-br-full  text-white cursor-pointer bg-[#001436]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#fff" d="M1 11c5.523 0 10-4.477 10-10h2c0 5.523 4.477 10 10 10v2c-5.523 0-10 4.477-10 10h-2c0-5.523-4.477-10-10-10z"/></svg>                                        
                                                        </button>
                                                </div>
        
                                                <form id="formQCM" method="post" class="flex flex-col gap-4 py-4">
                                                        <div class="flex flex-col justify-start items-start gap-[4px] mb-8">
                                                                <label for="titre" class="text-md font-semibold text-orange-500">Titre du test</label>
                                                                <input type="text" id="titre" placeholder="Le titre de votre test ..."
                                                                        class="titres border border-2 p-1 w-146 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500">
                                                        </div>
                                                        <div id="dynamic_create"></div>
        
                                                        <button id="creer_un_test" type="submit"
                                                                class="shadow-md bg-[#f77313] mt-4 w-60 h-10 flex justify-center items-center rounded-md text-white cursor-pointer hover:bg-[#001436]">
                                                                Créer le test
                                                        </button>
                                                </form>
                                        </div>
                                </div>
                </div>

                </div>
        </main>
                <script src="../../js/lien.js"></script>
                <script src="../../js/qcm_insertion.js"></script>
                <script src="../../js/qcm.js"></script>
        </body>

</html>