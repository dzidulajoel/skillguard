<?php
        require_once('../scripts/read.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>candidat - SkillGouard</title>
        <link rel="shortcut icon" href="../SkillGuard Social Media Assets.svg" type="image/x-icon">

</head>

<body class="bg-[#f5feff] w-full h-screen">

        <header class="text-white flex justify-between items-center px-16 h-[8vh]">

                <div class="w-16 h-16 flex justify-between items-center">
                        <img src="../SkillGuard Logo.svg" alt="SkillGuard logo">
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
                                <?php echo strtoupper(substr($data['prenom'], 0, 1)) . strtoupper(substr($data['nom'], 0, 1)) ?>
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

        <main class="w-full h-[90vh] flex px-[5%] gap-2 pt-8">
                <nav id="menu" class="flex flex-col justify-between w-auto h-full bg-white rounded-md p-4 ">

                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm w-full">
                                <li class="w-full">
                                        <a href="#" data-section="section1" class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg
                                                                xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#6B7280"
                                                                        d="M20 20a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3zm-8-5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5" />
                                                </svg>
                                        <span>Accueil</span></a>
                                </li>

                                <li class="w-full">
                                        <a href="#" data-section="section2" class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M12 3.5a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m-5 9a3.75 3.75 0 1 0 0 7.498A3.75 3.75 0 0 0 7 12.5m10 0a3.75 3.75 0 1 0 0 7.499a3.75 3.75 0 0 0 0-7.499" />
                                                </svg>
                                                <span>Offres</span>
                                        </a>
                                </li>

                                <li class="w-full">
                                        <a href="#" data-section="section3" class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M10.514 6.49a4.5 4.5 0 0 1 2.973 0l7.6 2.66c.803.282.803 1.418 0 1.7l-7.6 2.66a4.5 4.5 0 0 1-2.973 0l-5.509-1.93a1.24 1.24 0 0 0-.436.597a1 1 0 0 1 .013 1.635l.004.018l.875 3.939a.6.6 0 0 1-.585.73H3.125a.6.6 0 0 1-.586-.73l.875-3.94l.005-.017a1 1 0 0 1 .132-1.707a2.35 2.35 0 0 1 .413-.889l-1.05-.367c-.804-.282-.804-1.418 0-1.7z" />
                                                        <path fill="#6B7280"
                                                                d="m6.393 12.83l-.332 2.654c-.057.452.127.92.52 1.196c1.157.815 3.043 1.82 5.42 1.82a9 9 0 0 0 5.473-1.834c.365-.28.522-.727.47-1.152l-.336-2.685l-4.121 1.442a4.5 4.5 0 0 1-2.973 0z" />
                                                </svg>
                                                <span>Tests</span>
                                        </a>
                                </li>

                                <li class="w-full">
                                        <a href="#" data-section="section4" class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7M9 21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1H9z" />
                                                </svg>
                                                <span>Conseils</span>
                                        </a>
                                </li>

                                <li class="w-full">
                                        <a href="#" data-section="section7"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="#6B7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M11 5h10m-10 7h10m-10 7h10"/><circle cx="5" cy="5" r="2" fill="#6B7280"/><circle cx="5" cy="5" r="2" fill="#6B7280"/><circle cx="5" cy="12" r="2" fill="#6B7280"/><circle cx="5" cy="19" r="2" fill="#6B7280"/></g></svg>
                                        <span>Historiques</span>
                                        </a>
                                </li>

                        </ul>
                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">

                                <li class="w-full">
                                        <a href="#" data-section="section5" class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5s-1.57 3.5-3.5 3.5z">
                                                                <animateTransform attributeName="transform"
                                                                        attributeType="XML" dur="10s" from="0 12 12"
                                                                        repeatCount="indefinite" to="360 12 12"
                                                                        type="rotate" />
                                                        </path>
                                                </svg>
                                                <span>Paramètres</span>
                                        </a>
                                </li>

                                <li class="w-full">
                                        <a href="#" data-section="section6" class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 20 20">
                                                        <path fill="#6B7280"
                                                                d="M10 12.5c-5.92 0-9 3.5-9 5.5v1h18v-1c0-2-3.08-5.5-9-5.5" />
                                                        <circle cx="10" cy="6" r="5" fill="#6B7280" />
                                                </svg>
                                                <span>Profil</span>
                                        </a>
                                </li>

                                <li class="w-full">
                                        <button 
                                                class="logout w-full cursor-pointer hover:bg-red-500 hover:text-white px-4 py-2 w-full flex items-center justify-start gap-3">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <g fill="#6B7280" fill-rule="evenodd" clip-rule="evenodd">
                                                                <path
                                                                        d="M19.353 6.5H16.49V9H6.404v6H16.49v2.5h2.864A9.99 9.99 0 0 1 11 22C5.477 22 1 17.523 1 12S5.477 2 11 2a9.99 9.99 0 0 1 8.353 4.5M17.989 16v-1zm0-8v1z" />
                                                                <path d="m18.99 8l4 4l-4 4h-1v-2.5h-10v-3h10V8z" />
                                                        </g>
                                                </svg>
                                                <span>Déconnexion</span>
                                        </button>
                                </li>

                        </ul>

                </nav>

                <div id="sections" class="w-full">
                        <!-- Dashboard -->
                        <div id="section1" class="section w-full h-full  relative max-full overflow-y-auto scrollbar-hide ">
                                <div class="flex flex-col gap-4 p-4">
                                        <h2 class="text-2xl font-semibold text-slate-700">Bienvenue <span class="text-[#f77313]"><?= htmlspecialchars($data['nom'].' '.$data['prenom']) ?></span></h2>
                                        <p class="text-xs text-justify text-slate-500 ">
                                                Voici les offres disponibles pour lesquelles vous pouvez passer des tests. <br>
                                                Sélectionnez une offre pour consulter les détails et commencer le QCM associé.
                                        </p>
                                </div>

                                <div class="flex justify-start items-center gap-4 flex-wrap mt-4 p-4">
                                        <?php if($offre_candidats): ?>
                                                <?php foreach($offre_candidats as $offre_candidat): ?>
                                                        <div class="p-4 w-120 h-74 bg-white rounded-md flex flex-col justify-start gap-4 relative">
                                                                <div class="flex justify-between items-center">
                                                                        <span  class="bg-white w-10 h-10 flex justify-center items-center rounded-full text-white ">
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
                                                                        </span>

                                                                        <a href="offre/?id=<?= $offre_candidat["id"] ?>" class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#00134d]/10">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="none" stroke="#f77313"
                                                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                                                stroke-width="2" d="m10 7l5 5l-5 5" />
                                                                                </svg>
                                                                        </a>
                                                                </div>

                                                                <div>
                                                                        <h3 class="text-slate-700 font-semibold"> <span
                                                                                        class="text-[#f77313]">Microsoft</span></h3>
                                                                        <h3 class="text-slate-700 font-semibold">Poste : <?= htmlspecialchars($offre_candidat["titre"]) ?></h3>
                                                                        <ol class="mt-2 flex flex-col gap-1">
                                                                                <li class="text-sm text-start text-slate-500 "><span class="text-[#00134d] font-semibold">Statut :</span> <span class="text-green-500"><?= htmlspecialchars($offre_candidat["statut"]) ?> </span> </li>
                                                                                <li class="text-sm text-start text-slate-500 "><span class="text-[#00134d] font-semibold">Exigences : </span>  <?= htmlspecialchars($offre_candidat["competence"]) ?></li>
                                                                                <li class="text-sm text-start text-slate-500 "> <span class="text-[#00134d] font-semibold">Date limite :</span> <?= htmlspecialchars($offre_candidat["date_limite"]) ?> </li>
                                                                                <li class="text-sm text-start text-slate-500 "> <span class="text-[#00134d] font-semibold">Expérience :</span> <?= htmlspecialchars($offre_candidat["experience"]) ?> </li>
                                                                                <li class="text-sm text-start text-slate-500 "> <span class="text-[#00134d] font-semibold">Localisation  :</span> <?= htmlspecialchars($offre_candidat["lieu"]) ?> </li>
                                                                        </ol>
                                                                </div>

                                                                <button class="shadow-md bg-[#00134d] w-full h-10 flex justify-center items-center  text-white cursor-pointer hover:bg-[#00134d]/90 absolute bottom-0 left-0 ight-0 rounded-b-lg">Passer
                                                                        le test
                                                                </button>
                                                        </div>
                                                <?php endforeach ?>
                                        <?php else: ?>
                                                <div class="w-full flex justify-center items-center mt-12">
                                                        <h2 class="text-xl font-semibold text-slate-700">Aucune offre disponible</h2>
                                                </div>
                                        <?php endif ?>

                                </div>

                        </div>

                        <!-- OFFRE -->
                        <div id="section2" class="section  max-full overflow-y-auto scrollbar-hide hidden ">
                                <div class="flex flex-col gap-4 p-4">
                                        <h2 class="text-2xl font-semibold text-slate-700">Les offres disponibles</h2>
                                        <p class="text-xs text-justify text-slate-500 ">
                                                Voici les offres disponibles pour lesquelles vous pouvez passer des tests. <br>
                                                Sélectionnez une offre pour consulter les détails et commencer le QCM associé.
                                        </p>
                                </div>

                        </div>

                        <!-- TEST -->
                        <div id="section3" class="section  max-full overflow-y-auto scrollbar-hide bg-white rounded-md hidden">
                                <div class="flex flex-col gap-2 px-4 ">
                                        <h2 class="text-2xl font-semibold text-slate-700">Démarrer les tests facilement et en
                                                toute sécurité
                                        </h2>
                                        <p class="text-xs text-justify text-slate-500 "> Prêt pour vos tests ? Consultez vos offres et préparez-vous à montrer vos compétences</p>

                                        <div class="flex justify-start items-center gap-4 w-full">
                                                <input type="text" class="border border-2 p-1 w-100 outline-none rounded-md border-[#001436] placeholder:text-sm" id="nbQuestions" placeholder="Numero du test : 6FG670KAK37">
                                                <button class="cursor-pointer hover:opacity-90 flex justify-between items-center text-white bg-[#00134d] p-2 rounded-md gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 48 48"><path fill="#fff" fill-rule="evenodd" d="M4.89.867C6.37.666 8.498.5 11.5.5s5.13.166 6.61.367c2.49.34 4.085 2.322 4.235 4.682c.086 1.347.155 3.263.155 5.951s-.069 4.604-.155 5.951c-.15 2.36-1.745 4.342-4.236 4.682c-1.479.201-3.606.367-6.609.367s-5.13-.166-6.61-.367C2.4 21.793.806 19.81.656 17.45C.569 16.104.5 14.188.5 11.5s.069-4.604.155-5.951C.805 3.189 2.4 1.207 4.89.867m0 46.266c1.48.201 3.607.367 6.61.367s5.13-.166 6.61-.367c2.49-.34 4.085-2.322 4.235-4.682c.086-1.347.155-3.263.155-5.951s-.069-4.604-.155-5.951c-.15-2.36-1.745-4.342-4.236-4.682c-1.479-.201-3.606-.367-6.609-.367s-5.13.166-6.61.367C2.4 26.207.806 28.19.656 30.55C.569 31.896.5 33.812.5 36.5s.069 4.604.155 5.951c.15 2.36 1.746 4.342 4.236 4.682M47.5 36.5c0 3.003-.166 5.13-.367 6.61c-.34 2.49-2.322 4.085-4.682 4.235c-1.347.086-3.263.155-5.951.155s-4.604-.069-5.951-.155c-2.36-.15-4.342-1.746-4.682-4.236c-.201-1.479-.367-3.606-.367-6.609s.166-5.13.367-6.61c.34-2.49 2.322-4.085 4.682-4.235c1.347-.086 3.263-.155 5.951-.155s4.604.069 5.951.155c2.36.15 4.342 1.745 4.682 4.236c.201 1.479.367 3.606.367 6.609M34.307 1.884c.948-1.733 3.438-1.733 4.386 0l1.992 3.642a4.5 4.5 0 0 0 1.789 1.789l3.642 1.992c1.733.948 1.733 3.438 0 4.386l-3.642 1.992a4.5 4.5 0 0 0-1.789 1.789l-1.992 3.642c-.948 1.733-3.438 1.733-4.386 0l-1.992-3.642a4.5 4.5 0 0 0-1.789-1.789l-3.642-1.992c-1.733-.948-1.733-3.438 0-4.386l3.642-1.992a4.5 4.5 0 0 0 1.789-1.789z" clip-rule="evenodd"/></svg>                                                
                                                        <span class="text-sm">Rechercher le test</span>
                                                </button>
                                        </div>

                                        <div class="p-4 w-124 h-74 bg-slate-50 mt-4 rounded-md flex flex-col justify-start gap-4 relative">
                                                <div class="flex justify-between items-center">
                                                        <a href=""
                                                                class="bg-white w-10 h-10 flex justify-center items-center rounded-full text-white ">
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

                                                        <a href="informations"
                                                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#00134d]/10">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                                                        viewBox="0 0 24 24">
                                                                        <path fill="none" stroke="#f77313"
                                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                                stroke-width="2" d="m10 7l5 5l-5 5" />
                                                                </svg>
                                                        </a>
                                                </div>

                                                <div>
                                                        <h3 class="text-slate-700 font-semibold"> <span
                                                                        class="text-[#f77313]">Microsoft</span> | Mr Traore
                                                                issouf</h3>
                                                        <h3 class="text-slate-700 font-semibold">Poste : Développeur Frontend
                                                                React.js</h3>
                                                        <ol class="mt-2 flex flex-col gap-1">
                                                                <li class="text-sm text-start text-slate-500 ">
                                                                        <span class="text-[#00134d] font-semibold">Statut
                                                                                :</span> <span class="text-green-500">Ouverte </span>
                                                                </li>
                                                                <li class="text-sm text-start text-slate-500 ">
                                                                        <span class="text-[#00134d] font-semibold">Exigences
                                                                                :</span> React, TailwindCSS, JS avancé ...
                                                                </li>
                                                                <li class="text-sm text-start text-slate-500 ">
                                                                        <span class="text-[#00134d] font-semibold">QCM :</span>
                                                                        20 questions | 30 min | Sécurité
                                                                        stricte
                                                                </li>
                                                                <li class="text-sm text-start text-slate-500 ">
                                                                        <span class="text-[#00134d] font-semibold">Date limite
                                                                                :</span> limite : 25 août 2025
                                                                </li>
                                                        </ol>
                                                </div>
                                                <button
                                                        class="shadow-md bg-[#00134d] w-full h-10 flex justify-center items-center  text-white cursor-pointer hover:bg-[#00134d]/90 absolute bottom-0 left-0 ight-0 rounded-b-lg">Passer
                                                        le test</button>
                                        </div>

                                        <div class="flex justify-start items-center gap-4 flex-wrap mt-4 p-4">
                                                <div class="flex flex-col gap-4">
                                                        <h2 class="text-2xl font-semibold text-slate-700">Tests en cours / historiques
                                                        </h2>
                                                        <div class="relative max-full overflow-y-auto scrollbar-hide">
                                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                                        <thead class="bg-gray-100">
                                                                                <tr>
                                                                                        <th
                                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                                Num</th>
                                                                                        <th
                                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                                Entreprise</th>
                                                                                        <th
                                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                                Poste recherché</th>
                                                                                        <th
                                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                                Statut</th>
                                                                                        <th
                                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                                Score du test</th>
                                                                                        <th
                                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                                Score de crédibilité</th>
                                                                                        <th
                                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                                Date de publication</th>
                                                                                        <th
                                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                                Actions</th>
                                                                                </tr>
                                                                        </thead>

                                                                        <tbody class="">

                                                                                <tr class="hover:bg-gray-50">
                                                                                        <td
                                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                                01</td>
                                                                                        <td
                                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                                Gamatho Joel</td>
                                                                                        <td
                                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                                Développeur fullstack Web & Mobile</td>
                                                                                        <td
                                                                                                class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                                                En cours</td>
                                                                                        <td
                                                                                                class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                                                12</td>
                                                                                        <td
                                                                                                class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                                                55%</td>
                                                                                        <td
                                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                                12-08-2025 12:25</td>
                                                                                        <td
                                                                                                class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                                                <button class=""><svg
                                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                                width="1.7em"
                                                                                                                height="1.7em"
                                                                                                                viewBox="0 0 24 24">
                                                                                                                <path fill="#6B7280"
                                                                                                                        fill-rule="evenodd"
                                                                                                                        d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                                        clip-rule="evenodd" />
                                                                                                        </svg></button>
                                                                                        </td>
                                                                                </tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>

                        <!-- /*PROFIL*/ -->
                        <div id="section6" class="section h-full rounded-md flex flex-col gap-4 w-[80%] bg-white p-4 hidden">
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <div class="flex justify-between items-center w-full">
                                                <h2 class="text-xl font-semibold text-slate-700">Profil du recruteur</h2>
                                                <button><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 20 20"><path fill="#6B7280" d="M12.92 2.873a2.975 2.975 0 0 1 4.207 4.207l-.669.669l-4.207-4.207zM11.544 4.25l-7.999 7.999a2.44 2.44 0 0 0-.655 1.194l-.878 3.95a.5.5 0 0 0 .597.597l3.926-.873a2.5 2.5 0 0 0 1.234-.678l7.982-7.982z"/></svg></button>
                                        </div>
                                        <div class="w-full max-h-full flex flex-col justify-center items-center gap-4 flex-wrap">
                                                <div class="w-20 h-20 bg-slate-100 rounded-full shadow-sm"></div>
                                                <div class="flex flex-col items-center">
                                                        <h2 class="text-xl font-semibold text-slate-700">Microsoft</h2>
                                                        <h2 class="text-xl font-semibold text-slate-700">GAMATHO Koffi</h2>
                                                        <div class="flex flex-col items-center gap-1 mt-4">
                                                                <span class="text-slate-500 text-sm">Joelgamath19@gmail.com</span>
                                                                <span class="text-slate-500 text-sm">+225 01 60 24 29 54 / +228 96 12 68 11</span>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Informations sur l'entreprise</h2>
                                                <ul class="flex flex-col  gap-2 mt-4">
                                                        <li class="text-slate-500 text-sm">Adresse mail  : </li>
                                                        <li class="text-slate-500 text-sm">Numéro de téléphone :</li>
                                                        <li class="text-slate-500 text-sm">Domaine d'activité :</li>
                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Adresse de l'entreprise</h2>
                                                <ul class="flex flex-col  gap-2 mt-4">
                                                        <li class="text-slate-500 text-sm">Pays : </li>
                                                        <li class="text-slate-500 text-sm">Ville :</li>
                                                        <li class="text-slate-500 text-sm">Location de l'entreprise :</li>
                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Réseaux sociaux</h2>
                                                <ul class="flex flex-col  gap-2 mt-4">
                                                        <li class="text-slate-500 text-sm">LinkedIn : </li>
                                                        <li class="text-slate-500 text-sm">Site Web :</li>
                                                </ul>
                                        </div>
                                </div>
                        </div>

                        <!-- /*FORMULAIRE DE MISE A JOUR DU PROFIL */ -->
                        <div id="section5" class="section w-[50%] h-auto rounded-md flex flex-col gap-4 bg-white px-4 py-8 hidden">
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <h2 class="text-xl font-semibold text-slate-700">Formulaire de création d'offre</h2>
                                        <p class="text-slate-500 text-sm">Un recruteur devra remplir ces champs :</p>
                                </div>

                                <form action="/submit-recruteur" method="post" enctype="multipart/form-data" class="w-full max-h-full flex flex-col justify-start items-start gap-4 flex-wrap">
                                        <input type="file" name="logo" accept="image/*" placeholder="Logo de l'entreprise" class="border border-2 bg-[#00134d]  p-2 text-white  outline-none rounded-md border-[#00134d] placeholder:text-sm w-full">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#00134d] placeholder:text-sm w-full" type="text" name="nom_entreprise" placeholder="Nom de l'entreprise">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#00134d] placeholder:text-sm w-full" type="text" name="responsable" placeholder="Nom du responsable">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#00134d] placeholder:text-sm w-full" type="email" name="email" placeholder="Email professionnel">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#00134d] placeholder:text-sm w-full" type="tel" name="telephone" placeholder="Numéro de téléphone">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#00134d] placeholder:text-sm w-full" type="text" name="adresse" placeholder="Adresse de l'entreprise">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#00134d] placeholder:text-sm w-full" type="url" name="site_web" placeholder="Site web (optionnel)">
                                        <textarea name="description" class="border border-2  p-2  outline-none rounded-md border-[#00134d] placeholder:text-sm w-full" placeholder="Courte description de l'entreprise"></textarea>
                                        <button type="submit" class="shadow-md bg-[#f77313] mt-8 w-full h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#00134d]">Enregistrer</button>
                                </form>
                        </div>

                        <!-- /*CONSEIL*/ -->
                        <div id=section4 class="section h-full rounded-md flex flex-col gap-4 w-[80%] bg-white p-4 relative max-full overflow-y-auto scrollbar-hide hidden">
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <div class="flex justify-between items-center w-full">
                                                <h2 class="text-xl font-semibold text-slate-700">Conseils pour le candidat</h2>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Préparation technique</h2>
                                                <ul class="flex flex-col  gap-1 mt-4">
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Assurez-vous d’avoir une bonne connexion Internet.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Utilisez un ordinateur avec une caméra et un micro fonctionnels (si demandé par le recruteur).</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Vérifiez que votre batterie est chargée ou branchez votre appareil.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Fermez toutes les autres applications et onglets pour éviter les distractions.</li>

                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Conditions du test</h2>
                                                <ul class="flex flex-col  gap-1 mt-4">
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Vous devez être seul dans la pièce pendant le test.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Évitez toute tentative de fraude : les mouvements suspects, l’ouverture d’autres onglets ou la présence de plusieurs visages peuvent être détectés.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Certaines offres imposent un temps limité pour répondre. Surveillez bien le chronomètre.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Vous ne pouvez pas copier/coller les questions ou réponses.</li>
                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Stratégie de réponse</h2>
                                                <ul class="flex flex-col  gap-1 mt-4">
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Lisez attentivement chaque question avant de répondre.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Gérez votre temps : ne passez pas trop longtemps sur une seule question.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Pour les questions à choix multiples (checkbox), sélectionnez toutes les réponses correctes.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Pour les questions à choix unique (radio), choisissez la meilleure réponse.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Si vous n’êtes pas sûr, répondez quand même (aucune pénalité pour réponse fausse si le recruteur l’a défini ainsi).</li>
                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Attitude et état d’esprit</h2>
                                                <ul class="flex flex-col  gap-1 mt-4">
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Installez-vous dans un environnement calme et confortable.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Prenez une grande inspiration avant de commencer.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>Restez concentré, confiant et positif.</li>
                                                        <li class="flex justify-start items-center gap-1 text-slate-500 text-sm"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 48 48"><path fill="#6B7280" stroke="#6B7280" stroke-width="4" d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z"/></svg>N’oubliez pas : ce test est aussi l’occasion de montrer vos compétences et votre sérieux.</li>
                                                </ul>
                                        </div>




                                </div>
                        </div>

                        <div id="section1" class="section w-full h-full  relative max-full overflow-y-auto scrollbar-hide ">
                                <div class="w-full flex justify-start items-center gap-4 flex-wrap mt-4 p-4">
                                        <div class="flex flex-col gap-4 w-full">
                                                <h2 class="text-2xl font-semibold text-slate-700">Tests en cours / historiques
                                                </h2>
                                                <div class="relative max-full overflow-y-auto scrollbar-hide">
                                                        <table class="min-w-full border border-gray-200 rounded-lg">
                                                                <thead class="bg-gray-100">
                                                                        <tr>
                                                                                <th
                                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                        Num</th>
                                                                                <th
                                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                        Entreprise</th>
                                                                                <th
                                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                        Statut</th>
                                                                                <th
                                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                        Score de crédibilité</th>
                                                                                <th
                                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                        Date de publication</th>
                                                                                <th
                                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                        Actions</th>
                                                                        </tr>
                                                                </thead>

                                                                <tbody class="">

                                                                        <tr class="hover:bg-gray-50">
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                        01</td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                        Gamatho Joel</td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                                        En cours</td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                                        55%</td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                        12-08-2025 12:25</td>
                                                                                <td
                                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                                        <button class=""><svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="1.7em"
                                                                                                        height="1.7em"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path fill="#6B7280"
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                                clip-rule="evenodd" />
                                                                                                </svg></button>
                                                                                </td>
                                                                        </tr>
                                                                </tbody>
                                                        </table>
                                                </div>
                                        </div>
                                </div>
                        </div>

                </div>
        </main>

        <script src="../js/switch.js"></script>
                <script src="../js/deconnexion.js"></script>
</body>

</html>