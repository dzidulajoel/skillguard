<?php
        require_once('../scripts/candidat.php');
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

        <!-- <header class="text-white flex justify-between items-center px-16 h-[8vh]">
                <div class="w-16 h-16 flex justify-between items-center">
                        <img src="../SkillGuard Logo.svg" alt="SkillGuard logo">
                        <h1 class="text-xl text-[#00134d] font-black">SkillGuard</h1>
                </div>
                <div class="flex justify-center items-center gap-4 mt-2">
                        <div class="shadow-md bg-white w-80 h-10 flex justify-center items-center rounded-full">
                                <input type="text" placeholder="Faites votre recherche ..."
                                        class="border-none pl-4 outline-none text-sm text-slate-500 w-full text-start pl-4 w-64">
                                <button
                                        class="w-16 h-10 flex justify-center items-center rounded-tr-full rounded-br-full  text-white cursor-pointer bg-[#001436]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                                viewBox="0 0 24 24">
                                                <path fill="#fff"
                                                        d="M9.5 16q-2.725 0-4.612-1.888T3 9.5t1.888-4.612T9.5 3t4.613 1.888T16 9.5q0 1.1-.35 2.075T14.7 13.3l5.6 5.6q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-5.6-5.6q-.75.6-1.725.95T9.5 16m0-2q1.875 0 3.188-1.312T14 9.5t-1.312-3.187T9.5 5T6.313 6.313T5 9.5t1.313 3.188T9.5 14" />
                                        </svg>
                                </button>
                        </div>
                        <button
                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24">
                                        <path fill="#6B7280" d="M20 17h2v2H2v-2h2v-7a8 8 0 1 1 16 0zM9 21h6v2H9z" />
                                </svg>
                        </button>
                        <button
                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 14 14">
                                        <path fill="#6B7280" fill-rule="evenodd"
                                                d="M2 .375C1.103.375.375 1.103.375 2v2.675a9.4 9.4 0 0 0 6.427 8.918a.62.62 0 0 0 .396 0a9.4 9.4 0 0 0 6.427-8.918V2c0-.897-.727-1.625-1.625-1.625zM1.625 2c0-.207.168-.375.375-.375h10c.207 0 .375.168.375.375v2.675a8.14 8.14 0 0 1-1.59 4.835A5.48 5.48 0 0 0 7 8c-1.467 0-2.8.575-3.786 1.51a8.14 8.14 0 0 1-1.589-4.835zM7 3.5a1.375 1.375 0 1 0 0 2.75A1.375 1.375 0 0 0 7 3.5M4.375 4.875a2.625 2.625 0 1 1 5.25 0a2.625 2.625 0 0 1-5.25 0"
                                                clip-rule="evenodd" />
                                </svg>
                        </button>
                        <button
                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">
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
        </header> -->

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
                                <?php echo strtoupper(substr($data['entreprise'], 0, 1))  ?>
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

                <nav id="menu" class="flex flex-col justify-between w-auto h-full bg-white rounded-md p-4">

                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">
                                <li class="w-full">
                                        <a href="#" data-section="section1"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M20 20a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3zm-8-5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5" />
                                                </svg><span>Accueil</span>
                                        </a>
                                </li>
                                <li class="w-full">
                                        <a href="#" data-section="section2"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M12 3.5a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m-5 9a3.75 3.75 0 1 0 0 7.498A3.75 3.75 0 0 0 7 12.5m10 0a3.75 3.75 0 1 0 0 7.499a3.75 3.75 0 0 0 0-7.499" />
                                                </svg><span>Mes Offres</span>
                                        </a>
                                </li>
                                <li class="w-full">
                                        <a href="#" data-section="section3"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280" fill-rule="evenodd"
                                                                d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1zm-6 8a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1m1 3a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2z"
                                                                clip-rule="evenodd" />
                                                </svg><span>QCM</span>
                                        </a>
                                </li>
                                <li class="w-full">
                                        <a href="#" data-section="section4"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <g fill="#6B7280">
                                                                <path
                                                                        d="M12.447 2.106a1 1 0 0 0-.894 0L5.905 4.93l.377.11l.034.011L12 6.946l5.68-1.894l.393-.133zM5 10V6.748l.7.206l1.3.433V10a1 1 0 1 1-2 0m3-1c0-.424.066-.833.188-1.216l3.496 1.165a1 1 0 0 0 .632 0l3.496-1.165A4 4 0 1 1 8 9" />
                                                                <path
                                                                        d="M14.3 13.277a1 1 0 0 1 .884-.27C17.38 13.42 19 15.489 19 17.65v2.15c0 1.23-1.031 2.143-2.2 2.143H7.2c-1.168 0-2.2-.914-2.2-2.143v-2.15c0-2.141 1.59-4.19 3.752-4.629a1 1 0 0 1 .892.26l2.35 2.26z" />
                                                        </g>
                                                </svg><span>Candidats</span>
                                        </a>
                                </li>
                                <li class="w-full">
                                        <a href="#" data-section="section5"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280" d="M12 12V3h-1a10 10 0 1 0 10 10v-1Z" />
                                                        <path fill="#6B7280" d="M14 10V1a9 9 0 0 1 9 9Z" />
                                                </svg><span>Rapports</span>
                                        </a>
                                </li>
                                <li class="w-full">
                                        <a href="#" data-section="section6"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><g fill="none" stroke="#6B7280" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M11 5h10m-10 7h10m-10 7h10"/><circle cx="5" cy="5" r="2" fill="#6B7280"/><circle cx="5" cy="5" r="2" fill="#6B7280"/><circle cx="5" cy="12" r="2" fill="#6B7280"/><circle cx="5" cy="19" r="2" fill="#6B7280"/></g></svg>
                                        <span>Historiques</span>
                                        </a>
                                </li>
                        </ul>

                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">
                                <li class="w-full">
                                        <a href="#" data-section="section7"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
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
                                        <a href="#" data-section="section8"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 20 20">
                                                        <path fill="#6B7280"
                                                                d="M10 12.5c-5.92 0-9 3.5-9 5.5v1h18v-1c0-2-3.08-5.5-9-5.5" />
                                                        <circle cx="10" cy="6" r="5" fill="#6B7280" />
                                                </svg>
                                                <span>Profil</span>
                                        </a>
                                </li>
                                <li class="w-full">
                                        <a href="#" data-section="section9"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3">
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
                                        </a>
                                </li>
                        </ul>

                </nav>

                <div id="sections" class="w-full">
                        <!-- /*ACCUEIL*/ -->
                        <div id="section1" class="section w-full h-full rounded-md flex flex-col gap-2 hidden">
                                <div class="flex flex-col w-full bg-white p-4">
                                        <h2 class="text-xl font-semibold text-slate-700">Tableau de bord - Recruteur</h2>
                                        <p class="text-sm text-justify text-slate-500 ">
                                                Bienvenue GAMATHO Joël, gérez vos
                                                offres, vos candidats et vos tests en un seul endroit.
                                        </p>

                                        <div class="w-full flex justify-start items-center flex-wrap gap-5 mt-4">
                                                <div class="p-2 w-[23%] h-32 shadow-xs rounded-lg flex flex-col justify-center items-center">
                                                        <span class="w-14 h-14 flex justify-center items-center rounded-full">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em"
                                                                        height="2.5em" viewBox="0 0 24 24">
                                                                        <path fill="#f77313"
                                                                                d="M19.248 7.504a2.752 2.752 0 0 0 0-5.504H4.75a2.752 2.752 0 1 0 0 5.504zm-2 7a2.752 2.752 0 1 0 0-5.504H6.75a2.752 2.752 0 0 0 0 5.504zM17 18.752A2.75 2.75 0 0 0 14.248 16H9.75a2.752 2.752 0 0 0 0 5.504h4.498A2.75 2.75 0 0 0 17 18.752" />
                                                                </svg>
                                                        </span>
                                                        <span class="text-3xl font-semibold text-slate-500">12</span>
                                                        <span class="text-sm text-justify text-slate-700 ">Offres actives</span>
                                                </div>

                                                <div class="p-2 w-[23%] h-32 shadow-xs rounded-lg  flex flex-col justify-center items-center">
                                                        <span
                                                                class="w-14 h-14 flex justify-center items-center rounded-full">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em"
                                                                        height="2.5em" viewBox="0 0 24 24">
                                                                        <path fill="#f77313"
                                                                                d="M19.248 7.504a2.752 2.752 0 0 0 0-5.504H4.75a2.752 2.752 0 1 0 0 5.504zm-2 7a2.752 2.752 0 1 0 0-5.504H6.75a2.752 2.752 0 0 0 0 5.504zM17 18.752A2.75 2.75 0 0 0 14.248 16H9.75a2.752 2.752 0 0 0 0 5.504h4.498A2.75 2.75 0 0 0 17 18.752" />
                                                                </svg>
                                                        </span>
                                                        <span class="text-3xl font-semibold text-slate-500">2</span>
                                                        <span class="text-sm text-justify text-slate-700 ">Candidats en cours de test</span>
                                                </div>

                                                <div class="p-2 w-[23%] h-32 shadow-xs rounded-lg flex flex-col justify-center items-center">
                                                        <span
                                                                class="w-14 h-14 flex justify-center items-center rounded-full">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em"
                                                                        height="2.5em" viewBox="0 0 24 24">
                                                                        <path fill="#f77313"
                                                                                d="M19.248 7.504a2.752 2.752 0 0 0 0-5.504H4.75a2.752 2.752 0 1 0 0 5.504zm-2 7a2.752 2.752 0 1 0 0-5.504H6.75a2.752 2.752 0 0 0 0 5.504zM17 18.752A2.75 2.75 0 0 0 14.248 16H9.75a2.752 2.752 0 0 0 0 5.504h4.498A2.75 2.75 0 0 0 17 18.752" />
                                                                </svg>
                                                        </span>
                                                        <span class="text-3xl font-semibold text-slate-500">50%</span>
                                                        <span class="text-sm text-justify text-slate-700 ">Crédibilité
                                                                des candidats</span>
                                                </div>

                                                <div class="p-2 w-[23%] h-32 shadow-xs rounded-lg flex flex-col justify-center items-center">
                                                        <span
                                                                class="w-14 h-14 flex justify-center items-center rounded-full">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="2.5em"
                                                                        height="2.5em" viewBox="0 0 24 24">
                                                                        <path fill="#f77313"
                                                                                d="M19.248 7.504a2.752 2.752 0 0 0 0-5.504H4.75a2.752 2.752 0 1 0 0 5.504zm-2 7a2.752 2.752 0 1 0 0-5.504H6.75a2.752 2.752 0 0 0 0 5.504zM17 18.752A2.75 2.75 0 0 0 14.248 16H9.75a2.752 2.752 0 0 0 0 5.504h4.498A2.75 2.75 0 0 0 17 18.752" />
                                                                </svg>
                                                        </span>
                                                        <span class="text-3xl font-semibold text-slate-500">23</span>
                                                        <span class="text-sm text-justify text-slate-700 ">Dernière
                                                                offre publiée</span>
                                                </div>
                                        </div>

                                </div>

                                <div class="flex flex-col gap-4 w-full bg-white p-4">
                                        <div class="flex justify-between items-center">
                                                <h2 class="text-xl font-semibold text-slate-700">Mes offres</h2>
                                                <div class="flex justify-between items-center gap-6">
                                                        <button class="flex justify-center items-center"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 24 24">
                                                                        <path fill="#6B7280"
                                                                                d="M10 2H3c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h7c.6 0 1-.4 1-1V3c0-.6-.4-1-1-1m0 11H3c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h7c.6 0 1-.4 1-1v-7c0-.6-.4-1-1-1M21 2h-7c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h7c.6 0 1-.4 1-1V3c0-.6-.4-1-1-1m0 11h-7c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h7c.6 0 1-.4 1-1v-7c0-.6-.4-1-1-1" />
                                                                </svg></button>
                                                        <button
                                                                class="flex justify-between text-sm items-center text-white bg-[#00134d] hover:bg-[#00134d]/90 cursor-pointer p-2 rounded-md">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 24 24">
                                                                        <path fill="#fff"
                                                                                d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z" />
                                                                </svg>
                                                                <span>Nouvelle Offre</span>
                                                        </button>
                                                </div>
                                        </div>
                                        <div class="relative max-h-full overflow-y-auto scrollbar-hide">
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <thead class="bg-gray-100">
                                                                <tr>
                                                                        <th
                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                Titre de l’offre</th>
                                                                        <th
                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                Statut</th>
                                                                        <th
                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                Candidats inscrits</th>
                                                                        <th
                                                                                class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                                Date de publication</th>
                                                                        <th
                                                                                class="px-4 py-2 text-sm text-left text-slate-600">
                                                                                Actions</th>
                                                                </tr>
                                                        </thead>
                                                        <tbody class="">

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-green-500 border-r border-gray-200">
                                                                                Active</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200">
                                                                                En attente</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                                Archivée</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-green-500 border-r border-gray-200">
                                                                                Active</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200">
                                                                                En attente</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                                Archivée</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                                Archivée</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200">
                                                                                En attente</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                                Archivée</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                                <tr class="hover:bg-gray-50">
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                Développement Web</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                                Archivée</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                                12</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                21/08/2025 12:25</td>
                                                                        <td
                                                                                class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
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
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 28 28">
                                                                                                <path fill="#22C55E"
                                                                                                        d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                        </svg></button>
                                                                                <button class=""><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="1.5em"
                                                                                                height="1.5em"
                                                                                                viewBox="0 0 24 24">
                                                                                                <path fill="#EF4444"
                                                                                                        d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                        </svg></button>
                                                                        </td>
                                                                </tr>

                                                        </tbody>
                                                </table>
                                        </div>
                                </div>
                        </div>

                        <!-- /*OFFRE*/ -->
                        <div 
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">
                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Mes offres</h2>
                                        <div class="flex justify-between items-center gap-6">
                                                <button class="flex justify-center items-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                height="1.5em" viewBox="0 0 24 24">
                                                                <path fill="#6B7280"
                                                                        d="M10 2H3c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h7c.6 0 1-.4 1-1V3c0-.6-.4-1-1-1m0 11H3c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h7c.6 0 1-.4 1-1v-7c0-.6-.4-1-1-1M21 2h-7c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h7c.6 0 1-.4 1-1V3c0-.6-.4-1-1-1m0 11h-7c-.6 0-1 .4-1 1v7c0 .6.4 1 1 1h7c.6 0 1-.4 1-1v-7c0-.6-.4-1-1-1" />
                                                        </svg></button>
                                                <button
                                                        class="flex justify-between items-center text-white bg-[#00134d] p-2 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                height="1.5em" viewBox="0 0 24 24">
                                                                <path fill="#fff"
                                                                        d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z" />
                                                        </svg>
                                                        <span>Nouvelle Offre</span>
                                                </button>
                                        </div>
                                </div>
                                <div class="relative max-h-full overflow-y-auto scrollbar-hide">
                                        <table class="min-w-full border border-gray-200 rounded-lg">

                                                <thead class="bg-gray-100">
                                                        <tr>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Titre de l’offre</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Statut</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Candidats inscrits</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Date de publication</th>
                                                                <th class="px-4 py-2 text-sm text-left text-slate-600">
                                                                        Actions</th>
                                                        </tr>
                                                </thead>

                                                <tbody class="">

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200">
                                                                        Active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200">
                                                                        En attente</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200">
                                                                        Active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200">
                                                                        En attente</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200">
                                                                        En attente</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200">
                                                                        En attente</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200">
                                                                        En attente</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Développement Web</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        Archivée</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        12</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                </tbody>

                                        </table>
                                </div>
                        </div>

                        <!-- /*QCM*/ -->
                        <div id="section6"
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">
                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Banque de Questions</h2>
                                        <div class="flex justify-between items-center gap-6">

                                                <button
                                                        class="flex justify-between items-center text-white bg-[#00134d] p-2 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                height="1.5em" viewBox="0 0 24 24">
                                                                <path fill="#fff"
                                                                        d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z" />
                                                        </svg>
                                                        <span>Importer questions (CSV/Excel)</span>
                                                </button>

                                                <button
                                                        class="flex justify-between items-center text-white bg-[#00134d] p-2 rounded-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                height="1.5em" viewBox="0 0 24 24">
                                                                <path fill="#fff"
                                                                        d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z" />
                                                        </svg>
                                                        <span>Ajouter une nouvelle question</span>
                                                </button>
                                        </div>
                                </div>
                                <div class="relative max-h-full overflow-y-auto scrollbar-hide">
                                        <table class="min-w-full border border-gray-200 rounded-lg">

                                                <thead class="bg-gray-100">
                                                        <tr>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Numéro</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Titre du test</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Statut</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Date de publication</th>
                                                                <th class="px-4 py-2 text-sm text-left text-slate-600">
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
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Test pour les dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        active</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                </tbody>
                                        </table>
                                </div>
                        </div>

                        <!-- /*CANDIDAT*/ -->
                        <div id="section4"
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">

                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Gestion des Candidats</h2>
                                        <div class="flex justify-between items-center gap-6">
                                                <button
                                                        class="flex justify-between items-center text-white bg-[#00134d] p-2 rounded-md gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                                                height="1.2em" viewBox="0 0 24 24">
                                                                <path fill="#fff" fill-rule="evenodd"
                                                                        d="M1.527 2.535A2.294 2.294 0 0 1 3.822.24h13.442c.59 0 1.171.225 1.607.657l2.908 2.792c.45.434.694 1.033.694 1.642v16.134a2.294 2.294 0 0 1-2.296 2.295H3.823a2.294 2.294 0 0 1-2.296-2.295zm14.563 7.863a.84.84 0 0 1-.776.518h-2.191v6.323a1.12 1.12 0 0 1-2.24 0v-6.323H8.685a.84.84 0 0 1-.593-1.433l3.314-3.314a.84.84 0 0 1 1.187 0l3.314 3.314a.84.84 0 0 1 .181.915Z"
                                                                        clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Exporter (CSV/Excel)</span>
                                                </button>
                                        </div>
                                </div>

                                <div class="relative max-full overflow-y-auto scrollbar-hide">
                                        <table class="min-w-full border border-gray-200 rounded-lg">
                                                <thead class="bg-gray-100">
                                                        <tr>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Num</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Nom du candidat</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Offre associée</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Statut du test</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Score obtenu</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Crédibilité (%)</th>
                                                                <th
                                                                        class="px-4 py-2 text-sm text-left text-slate-600 border-r border-gray-200">
                                                                        Date de publication</th>
                                                                <th class="px-4 py-2 text-sm text-left text-slate-600">
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
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                        En cours</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200 text-center">
                                                                        Expiré</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        13</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        67.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        03</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200 text-center">
                                                                        Terminé</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        09</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        40%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-between items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                        En cours</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200 text-center">
                                                                        Expiré</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        13</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        67.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        03</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200 text-center">
                                                                        Terminé</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        09</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        40%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-between items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                        En cours</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200 text-center">
                                                                        Expiré</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        13</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        67.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        03</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200 text-center">
                                                                        Terminé</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        09</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        40%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-between items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                        En cours</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200 text-center">
                                                                        Expiré</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        13</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        67.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        03</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200 text-center">
                                                                        Terminé</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        09</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        40%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-between items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                        En cours</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200 text-center">
                                                                        Expiré</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        13</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        67.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        03</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200 text-center">
                                                                        Terminé</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        09</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        40%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-between items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        01</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-green-500 border-r border-gray-200 text-center">
                                                                        En cours</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        00.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        02</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200 text-center">
                                                                        Expiré</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        13</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        67.0%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-around items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                        <tr class="hover:bg-gray-50">
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        03</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        Gamatho Joel</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-center">
                                                                        Dévéloppeur fullstack</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-orange-500 border-r border-gray-200 text-center">
                                                                        Terminé</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        09</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-red-500 border-r border-gray-200">
                                                                        40%</td>
                                                                <td
                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                        21/08/2025 12:25</td>
                                                                <td
                                                                        class="p-2 text-sm text-slate-500 flex justify-between items-center">
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.7em" height="1.7em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#6B7280"
                                                                                                fill-rule="evenodd"
                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                clip-rule="evenodd" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 28 28">
                                                                                        <path fill="#22C55E"
                                                                                                d="M19.289 3.15a3.932 3.932 0 1 1 5.56 5.56l-1.54 1.54l-5.56-5.56zm-2.6 2.6L4.502 17.937c-.44.44-.76.986-.928 1.586l-1.547 5.525a.75.75 0 0 0 .924.924l5.524-1.547a3.6 3.6 0 0 0 1.587-.928L22.25 11.311z" />
                                                                                </svg></button>
                                                                        <button class=""><svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#EF4444"
                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                </svg></button>
                                                                </td>
                                                        </tr>

                                                </tbody>
                                        </table>
                                </div>
                        </div>

                        <!-- /*RAPPORTS*/ -->
                        <div id="section5"
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">
                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Statistiques & Rapports</h2>
                                        <div class="flex justify-between items-center gap-6">
                                                <button
                                                        class="flex justify-between items-center text-white bg-[#00134d] p-2 rounded-md gap-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em"
                                                                height="1.2em" viewBox="0 0 24 24">
                                                                <path fill="#fff" fill-rule="evenodd"
                                                                        d="M1.527 2.535A2.294 2.294 0 0 1 3.822.24h13.442c.59 0 1.171.225 1.607.657l2.908 2.792c.45.434.694 1.033.694 1.642v16.134a2.294 2.294 0 0 1-2.296 2.295H3.823a2.294 2.294 0 0 1-2.296-2.295zm14.563 7.863a.84.84 0 0 1-.776.518h-2.191v6.323a1.12 1.12 0 0 1-2.24 0v-6.323H8.685a.84.84 0 0 1-.593-1.433l3.314-3.314a.84.84 0 0 1 1.187 0l3.314 3.314a.84.84 0 0 1 .181.915Z"
                                                                        clip-rule="evenodd" />
                                                        </svg>
                                                        <span>Exporter (CSV/Excel)</span>
                                                </button>
                                        </div>
                                </div>

                                <div
                                        class="relative max-full overflow-y-auto scrollbar-hide flex justify-center items-center gap-4 flex-wrap">
                                        <div class="w-[45%] h-100 bg-slate-100 py-2 px-4 rounded-md">
                                                <span class="text-slate-500 text-sm">Performance moyenne par
                                                        offre</span>
                                        </div>
                                        <div class="w-[45%] h-100 bg-slate-100 py-2 px-4 rounded-md">
                                                <span class="text-slate-500 text-sm">Taux de réussite global</span>
                                        </div>
                                        <div class="w-[45%] h-100 bg-slate-100 py-2 px-4 rounded-md">
                                                <span class="text-slate-500 text-sm">Fiabilité moyenne des candidats
                                                        (score crédibilité)</span>
                                        </div>
                                        <div class="w-[45%] h-100 bg-slate-100 py-2 px-4 rounded-md">
                                                <span class="text-slate-500 text-sm">Nombre de fraudes détectées</span>
                                        </div>
                                </div>
                        </div>

                        <!-- /*FORMULAIRE DE MISE A JOUR DU PROFIL */ -->
                        <div id="section7"
                                class="section w-[50%] h-auto rounded-md flex flex-col gap-4 bg-white px-4 py-8 hidden">
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <h2 class="text-xl font-semibold text-slate-700">Formulaire de création d'offre
                                        </h2>
                                        <p class="text-slate-500 text-sm">Un recruteur devra remplir ces champs :</p>
                                </div>

                                <form action="/submit-recruteur" method="post" enctype="multipart/form-data"
                                        class="w-full max-h-full flex flex-col justify-start items-start gap-4 flex-wrap">
                                        <input type="file" name="logo" accept="image/*"
                                                placeholder="Logo de l'entreprise"
                                                class="border border-2 bg-[#001436]  p-2 text-white  outline-none rounded-md border-[#001436] placeholder:text-sm w-full">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#001436] placeholder:text-sm w-full"
                                                type="text" name="nom_entreprise" placeholder="Nom de l'entreprise">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#001436] placeholder:text-sm w-full"
                                                type="text" name="responsable" placeholder="Nom du responsable">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#001436] placeholder:text-sm w-full"
                                                type="email" name="email" placeholder="Email professionnel">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#001436] placeholder:text-sm w-full"
                                                type="tel" name="telephone" placeholder="Numéro de téléphone">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#001436] placeholder:text-sm w-full"
                                                type="text" name="adresse" placeholder="Adresse de l'entreprise">
                                        <input class="border border-2  p-2  outline-none rounded-md border-[#001436] placeholder:text-sm w-full"
                                                type="url" name="site_web" placeholder="Site web (optionnel)">
                                        <textarea
                                                class="border border-2  p-2  outline-none rounded-md border-[#001436] placeholder:text-sm w-full"
                                                placeholder="Courte description de l'entreprise"></textarea>
                                        <button type="submit"
                                                class="shadow-md bg-[#f77313] mt-8 w-full h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">Enregistrer</button>
                                </form>
                        </div>

                        <!-- /*PROFIL*/ -->
                        <div id="section8"
                                class="section h-full rounded-md flex flex-col gap-4 w-[80%] bg-white p-4 hidden">
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <div class="flex justify-between items-center w-full">
                                                <h2 class="text-xl font-semibold text-slate-700">Profil du recruteur
                                                </h2>
                                                <button><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                height="1.5em" viewBox="0 0 20 20">
                                                                <path fill="#6B7280"
                                                                        d="M12.92 2.873a2.975 2.975 0 0 1 4.207 4.207l-.669.669l-4.207-4.207zM11.544 4.25l-7.999 7.999a2.44 2.44 0 0 0-.655 1.194l-.878 3.95a.5.5 0 0 0 .597.597l3.926-.873a2.5 2.5 0 0 0 1.234-.678l7.982-7.982z" />
                                                        </svg></button>
                                        </div>
                                        <div
                                                class="w-full max-h-full flex flex-col justify-center items-center gap-4 flex-wrap">
                                                <div class="w-20 h-20 bg-slate-100 rounded-full shadow-sm"></div>
                                                <div class="flex flex-col items-center">
                                                        <h2 class="text-xl font-semibold text-slate-700">Microsoft</h2>
                                                        <h2 class="text-xl font-semibold text-slate-700">GAMATHO Koffi
                                                        </h2>
                                                        <div class="flex flex-col items-center gap-1 mt-4">
                                                                <span
                                                                        class="text-slate-500 text-sm">Joelgamath19@gmail.com</span>
                                                                <span class="text-slate-500 text-sm">+225 01 60 24 29 54
                                                                        / +228 96 12 68 11</span>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Informations sur
                                                        l'entreprise</h2>
                                                <ul class="flex flex-col  gap-2 mt-4">
                                                        <li class="text-slate-500 text-sm">Adresse mail : </li>
                                                        <li class="text-slate-500 text-sm">Numéro de téléphone :</li>
                                                        <li class="text-slate-500 text-sm">Domaine d'activité :</li>
                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Adresse de l'entreprise
                                                </h2>
                                                <ul class="flex flex-col  gap-2 mt-4">
                                                        <li class="text-slate-500 text-sm">Pays : </li>
                                                        <li class="text-slate-500 text-sm">Ville :</li>
                                                        <li class="text-slate-500 text-sm">Location de l'entreprise :
                                                        </li>
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

                        <!-- /* FORMULAIRE DE CREATION OFFRE LIEN A L'OFFRE */ -->
                        <div   id="section2" class="section w-full rounded-md flex flex-col gap-4  bg-white p-4 hidden relative  max-h-full overflow-y-auto scrollbar-hide">
                                <div id="err_msg"></div>
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <h2 class="text-xl font-semibold text-slate-700">Formulaire de création d'offre
                                        </h2>
                                        <p class="text-slate-500 text-sm">Un recruteur devra remplir ces champs :</p>
                                </div>

                                <form  id="form_offre" class="w-full  max-h-full flex justify-start items-center gap-4 flex-wrap">

                                        <div class="w-160 h-full bg-slate-100 rounded-md p-6">
                                                <h2 class="text-xl font-semibold text-slate-700"> Informations générales </h2>
                                                <div class="mt-6 flex flex-col gap-4 w-full">
                                                        <input id="titre" name="titre"  class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500" type="text"  placeholder="Titre poste" required>
                                                        <select id="lieu" name="lieu" required class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                <option value="">Lieu de travail</option>
                                                                <option value="ligne">En ligne</option>
                                                                <option value="presentiel">Présentiel</option>
                                                        </select>

                                                        <select id="contrat" name="contrat" required class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                <option value="">Type de contrat</option>
                                                                <option value="CDI">CDI</option>
                                                                <option value="CDD">CDD</option>
                                                                <option value="stage">Stage</option>
                                                                <option value="freelance">Freelance</option>
                                                        </select>

                                                        <select id="experience" name="experience" required class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                <option value="">Niveau d’expérience</option>
                                                                <option value="Débutant">Débutant</option>
                                                                <option value="Intermédiaire">Intermédiaire</option>
                                                                <option value="Confirmé">Confirmé</option>
                                                        </select>

                                                        <select id="statut" name="statut" required class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                <option value="">Statut</option>
                                                                <option value="Prêt">Prêt</option>
                                                                <option value="Suspendu">Suspendu</option>
                                                                <option value="Terminé">Terminé</option>
                                                        </select>

                                                        <div class="flex justify-start items-center gap-4 flex-wrap w-full">
                                                                <select id="score" name="score" required class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                        <option value="">Score de crédibilité</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                        <option value="15">15</option>
                                                                        <option value="16">16</option>
                                                                        <option value="17">17</option>
                                                                        <option value="18">18</option>
                                                                        <option value="19">19</option>
                                                                        <option value="20">20</option>
                                                                </select>
                                                        </div>
                                                        <input id="competence" name="competence" class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500" type="text"  placeholder="Compétences" required>
                                                        <input type="date" id="date_limite" name="date_limite" required class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500" placeholder="Date de clôture 12-04-2025">
                                                        <textarea  id="description" name="description" class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500" rows="4" placeholder="Description du poste..." required></textarea>

                                                </div>
                                        </div>

                                        <div class="w-160 h-full bg-slate-100 rounded-md p-6 ">
                                                <div class="flex flex-col gap-4">
                                                        <h2 class="text-xl font-semibold text-slate-700">Missions</h2>
                                                        <textarea id="mission" name="mission" class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500" rows="4" placeholder="Décrivez brièvement les missions, responsabilités et objectifs..." required></textarea>
                                                </div>

                                                <div class="mt-6 flex flex-col gap-4 w-full">
                                                        <h2 class="text-xl font-semibold text-slate-700">Profil recherché</h2>
                                                        <textarea id="profil" name="profil" class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500" rows="4" placeholder="Décrivez brièvement les missions, responsabilités et objectifs..." required></textarea>

                                                </div>
                                                <button class="shadow-md bg-[#f77313] mt-8 w-full h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">Créer l'offre</button>
                                        </div>

                                </form>
                        </div>

                        <!-- /*FORMULAIRE DE CREATION TEST QCM LIEN A QCM*/ -->
                        <div id="section3" class="section w-full h-full rounded-md flex flex-col gap-4 hidden">
                                <div id="err_msg"></div>
                                <div class=" bg-white p-4">
                                        <div class="flex flex-col gap-1 justify-start items-start">
                                                <div class="flex justify-between items-center w-full">
                                                        <h2 class="text-xl font-semibold text-slate-700">Espace de création des
                                                                QCM</h2>
        
                                                </div>
                                                <p class="text-slate-500 text-sm">Permettre au recruteur de créer facilement des
                                                        QCM associés à une offre, avec la possibilité de :</p>
                                                <ul class="text-slate-500 text-xs">
                                                        <li class="flex justify-start items-center gap-1"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280" stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Définir le nombre de questions.</li>
                                                        <li class="flex justify-start items-center gap-1"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280" stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Ajouter dynamiquement plusieurs options par question.</li>
                                                        <li class="flex justify-start items-center gap-1"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280" stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Définir le type de réponse (unique ou multiple).</li>
                                                        <li class="flex justify-start items-center gap-1"><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                        height="1.5em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280" stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Identifier les bonnes réponses.</li>
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
                                                        <div class="flex flex-col justify-start items-start  gap-[4px] mb-8">
                                                                <label for="titre" class="text-md font-semibold text-orange-500">Titre du test</label>
                                                                <input id="titre" name="titre" required type="text" placeholder="Le titre de votre test ..." class="border border-2 p-1 w-146 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500">
                                                        </div>
                                                        <div id="dynamic_create"></div>
        
                                                        <button id="creer_un_test" class="shadow-md bg-[#f77313] mt-4 w-60 h-10 flex justify-center items-center rounded-md text-white cursor-pointer hover:bg-[#001436]">
                                                                Créer le test
                                                        </button>
                                                </form>
                                        </div>
                                </div>
                        </div>

                </div>
        </main>
        <script src="../js/switch_r.js"></script>  
        <script src="../js/qcm.js"></script>
        <script src="../js/qcm_insertion.js"></script>
        <script src="../js/creer_offre.js"></script>
</body>

</html>