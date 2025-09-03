<?php
        require_once('../../scripts/offre_candidat.php');
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
                <div class="section w-full h-full rounded-md flex flex-col gap-4 p-4 ">
                        <div class="flex justify-between items-center">
                                <h2 class="text-lg font-bold text-slate-700">Offre : <?= $offre['titre']?> </h2>
                        </div>
                        <div class="flex gap-4 flex-wrap">
                                <div class="p-4 w-[45%] h-auto bg-white rounded-md flex flex-col justify-start">
                                        <div class="flex justify-start items-center gap-2 mb-4">
                                                <a href="" class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                                viewBox="0 0 256 256">
                                                                <path fill="#f1511b"
                                                                        d="M121.666 121.666H0V0h121.666z" />
                                                                <path fill="#80cc28" d="M256 121.666H134.335V0H256z" />
                                                                <path fill="#00adef"
                                                                        d="M121.663 256.002H0V134.336h121.663z" />
                                                                <path fill="#fbbc09"
                                                                        d="M256 256.002H134.335V134.336H256z" />
                                                        </svg>
                                                </a>
                                                <h2 class="text-lg font-bold text-slate-700"><?= $data_nom['entreprise'] ?? ""?> </h2>
                                        </div>

                                        <div class="p-4 w-full h-auto bg-white rounded-md  flex flex-col gap-4">
                                                <h3 class="text-[#f77313] font-semibold"> <?= $offre['titre']?></h3>
                                                <ul class=" flex flex-col gap-1 w-full">
                                                        <li class="text-sm text-justify text-slate-500"><span class="text-[#00134d] font-semibold">Lieu de travail : </span>  <?= $offre['lieu']?></li>
                                                        <li class="text-sm text-justify text-slate-500"><span class="text-[#00134d] font-semibold">contrat de travail: </span> <?= $offre['contrat']?></li>
                                                        <li class="text-sm text-justify text-slate-500"><span class="text-[#00134d] font-semibold">Expérience professionnelle: </span> <?= $offre['experience']?></li>
                                                        <li class="text-sm text-justify <?= $colorClass ?>"> Statut de l'offre: <?= htmlspecialchars($offre['statut']) ?> </li>
                                                </ul>
                                                
                                                <ul class=" flex flex-col gap-1 w-full">
                                                        <li class="text-sm text-justify text-slate-500"><span class="text-[#00134d] font-semibold">Score de validation :</span>  <?= $offre['score']?> / 20</li>
                                                        <li class="text-sm text-justify text-slate-500 w-full"><span class="text-[#00134d] font-semibold">Compétences réquises : </span> <?= $offre['competence']?></li>
                                                        <li class="text-sm text-justify text-slate-500"><span class="text-[#00134d] font-semibold">Date limite de l'offre :</span>  <?= $offre['date_limite']?></li>
                                                </ul>
                                        </div>

                                </div>

                                <div class="p-4 w-[45%] h-auto bg-white rounded-md  flex flex-col gap-4">
                                        <div>
                                                <h3 class="text-[#f77313] font-semibold"> Profil :</h3>
                                                <ul  class=" flex flex-col gap-1">
                                                        <li class="text-sm text-justify text-slate-500"><span class="text-[#00134d] font-semibold">Profil :</span>  <?= $offre['profil']?></li>
                                                </ul>
                                        </div>
                                        <div>
                                                <h3 class="text-[#f77313] font-semibold"> Description du travail :</h3>
                                                <ul  class=" flex flex-col gap-1">
                                                        <li class="text-sm text-justify text-slate-500"><span class="text-[#00134d] font-semibold">Description :</span>  <?= $offre['description']?></li>
                                                </ul>
                                        </div>
                                        <div>
                                                <h3 class="text-[#f77313] font-semibold"> Mission :</h3>
                                                <ul  class=" flex flex-col gap-1">
                                                        <li class="text-sm text-justify text-slate-500"><span class="text-[#00134d] font-semibold">Mission :</span>  <?= $offre['mission']?></li>
                                                </ul>
                                        </div>
                                        <button class="shadow-md bg-[#f77313] mt-8 w-50 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">Passer le test</button>
                                        <p class="text-sm text-start text-slate-500 mt-4 flex justify-start gap-2 items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em"
                                                        viewBox="0 0 24 24">
                                                        <g class="lamp-outline">
                                                                <g fill="#f77313" class="Vector">
                                                                        <path fill-rule="evenodd"
                                                                                d="M9 21a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2h-4a1 1 0 0 1-1-1m0-5.575a1 1 0 0 1 1 1v.398c0 .374.303.677.677.677h2.646a.677.677 0 0 0 .677-.677V16.5a1 1 0 1 1 2 0v.323a2.676 2.676 0 0 1-2.677 2.677h-2.646A2.676 2.676 0 0 1 8 16.823v-.398a1 1 0 0 1 1-1"
                                                                                clip-rule="evenodd" />
                                                                        <path
                                                                                d="M14.228 16.846c.137.42.59.654.995.476a8 8 0 1 0-6.367.034c.406.174.857-.064.99-.486l.087-.278c.132-.421-.106-.866-.506-1.052a6.109 6.109 0 1 1 5.206-.028c-.399.19-.632.637-.495 1.058z" />
                                                                </g>
                                                        </g>
                                                </svg>
                                                Conseil de Skilly : Vérifiez votre environnement avant de commencer pour éviter toute fraude.
                                        </p>
                                </div>
                        </div>

                </div>
                </div>
                <script src="../../js/lien.js"></script>
        </main>
        </body>

</html>