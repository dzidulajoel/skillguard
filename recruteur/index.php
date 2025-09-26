<?php
require_once('../scripts/read.php');
require_once('../config/auth.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>candidat - SkillGouard</title>
        <link rel="shortcut icon" href="../SkillGuard Social Media Assets.svg" type="image/x-icon">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body class="bg-[#f5feff] w-full h-screen">

        <header class="text-white flex justify-between items-center px-16 h-[8vh]">

                <div class="w-16 h-16 flex justify-between items-center">
                        <img src="../SkillGuard Logo.svg" alt="SkillGuard logo">
                        <h1 class="text-xl text-[#00134d] font-black">SkillGuard</h1>
                </div>
                
                <div class="flex justify-center items-center gap-4 mt-2">
                        <div id="err_msg_deconnexion"></div>
                        <button
                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-[#f77313] font-bold cursor-pointer hover:bg-[#001436]/10">
                                <?= htmlspecialchars(substr($data['entreprise'], 0, 1)) ?>
                        </button>

                        <button class="logout shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 12 12"><path fill="#6B7280" d="M4 2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h3.5a.5.5 0 0 0 0-1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h3.5a.5.5 0 0 0 0-1zm4.854 1.646a.5.5 0 1 0-.708.708L9.293 5.5H5a.5.5 0 0 0 0 1h4.293L8.146 7.646a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708z"/></svg>
                        </button>
                </div>

        </header>

        <main class="w-full h-[90vh] flex px-[5%] gap-4 pt-8">

                <nav id="menu" class="flex flex-col justify-between w-auto h-full bg-white rounded-md p-4">
                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">
                                <li class="w-full">
                                        <a href="#" data-section="section1"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3 rounded-md"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M20 20a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3zm-8-5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5" />
                                                </svg><span>Accueil</span>
                                        </a>
                                </li>
                                <li class="w-full">
                                        <a href="#" data-section="section2"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3 rounded-md"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M12 3.5a3.75 3.75 0 1 0 0 7.5a3.75 3.75 0 0 0 0-7.5m-5 9a3.75 3.75 0 1 0 0 7.498A3.75 3.75 0 0 0 7 12.5m10 0a3.75 3.75 0 1 0 0 7.499a3.75 3.75 0 0 0 0-7.499" />
                                                </svg><span>Mes Offres</span>
                                        </a>
                                </li>
                                <li class="w-full">
                                        <a href="#" data-section="section4"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3 rounded-md"><svg
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
                                        <a href="#" data-section="section6"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3 rounded-md"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <g fill="none" stroke="#6B7280" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2">
                                                                <path d="M11 5h10m-10 7h10m-10 7h10" />
                                                                <circle cx="5" cy="5" r="2" fill="#6B7280" />
                                                                <circle cx="5" cy="5" r="2" fill="#6B7280" />
                                                                <circle cx="5" cy="12" r="2" fill="#6B7280" />
                                                                <circle cx="5" cy="19" r="2" fill="#6B7280" />
                                                        </g>
                                                </svg>
                                                <span>Historiques</span>
                                        </a>
                                </li>
                        </ul>

                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">
                                <li class="w-full">
                                        <a href="#" data-section="section5"
                                                class="w-full bg-[#00134d] px-4 py-2 w-full flex items-center justify-start gap-3 rounded-md">
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
                                        <button class="logout w-full px-4 py-2 w-full flex items-center justify-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#6B7280" d="M12 14v8H4a8 8 0 0 1 8-8m0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m9 4h1v5h-8v-5h1v-1a3 3 0 1 1 6 0zm-2 0v-1a1 1 0 1 0-2 0v1z"/></svg>
                                                <span><?= htmlspecialchars($data['entreprise'])?></span>
                                        </button>
                                </li>
                        </ul>
                </nav>

                <div id="sections" class="w-full">
                        <!-- /*ACCUEIL*/ -->
                        <div id="section1"
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">
                                <div class="flex flex-col w-full h-full bg-white p-4">
                                        <h2 class="text-xl font-semibold text-slate-700">Tableau de bord - Recruteur </h2>
                                        <p class="text-sm text-justify text-slate-500 ">
                                                Bienvenue, gérez vos
                                                offres, vos candidats et vos tests en un seul endroit.
                                        </p>

                                        <div class="flex w-full h-full">
                                                <div class="w-[50%] h-[90%] flex justify-start items-center flex-wrap gap-5 mt-12">
        
                                                        <div class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#f77313] via-[#f77313]/70 to-[#fff]/70">
                                                                <div class="w-full flex justify-start items-center gap-2 ">
                                                                        <span
                                                                                class="w-10 h-10 bg-[#f77313]  flex justify-center items-center p-1 rounded-lg">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#fff"
                                                                                                d="M21 2H3c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2m0 5H3V4h18z" />
                                                                                </svg>
                                                                        </span>
                                                                        <span
                                                                                class="text-md text-justify text-white font-semibold">Offres</span>
                                                                </div>
                                                                <div class="w-full flex justify-start items-center gap-3">
                                                                        <span class="text-3xl font-semibold text-white"><?= htmlspecialchars(count($data_o)) ?></span>
                                                                </div>
                                                                <span class="text-sm text-justify text-white">Nombre total d'offre proposés</span>
                                                        </div>

                                                        <div  class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#001436] via-[#001436]/70 to-[#fff]/70">
                                                                <div class="w-full flex justify-start items-center gap-2 ">
                                                                        <span
                                                                                class="w-10 h-10 bg-[#001436]  flex justify-center items-center p-1 rounded-lg">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#fff"
                                                                                                d="M21 2H3c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2m0 5H3V4h18z" />
                                                                                </svg>
                                                                        </span>
                                                                        <span
                                                                                class="text-md text-justify text-white font-semibold">Candidats</span>
                                                                </div>
                                                                <div class="w-full flex justify-start items-center gap-3">
                                                                        <span
                                                                                class="text-3xl font-semibold text-white"><?= htmlspecialchars(count($data_candidat)) ?></span>
                                                                </div>
                                                                <span class="text-sm text-justify text-white">Total des participants inscrits</span>
                                                        </div>

                                                        <div class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#f77313] via-[#f77313]/70 to-[#fff]/70">
                                                                <div class="w-full flex justify-start items-center gap-2 ">
                                                                        <span
                                                                                class="w-10 h-10 bg-[#f77313]  flex justify-center items-center p-1 rounded-lg">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#fff"
                                                                                                d="M21 2H3c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2m0 5H3V4h18z" />
                                                                                </svg>
                                                                        </span>
                                                                        <span
                                                                                class="text-md text-justify text-white font-semibold">Échec</span>
                                                                </div>
                                                                <div class="w-full flex justify-start items-center gap-3">
                                                                        <span class="text-3xl font-semibold text-white"><?= htmlspecialchars( $pourcentageEchec) ?>%</span>
                                                                </div>
                                                                <span class="text-sm text-justify text-white">Pourcentage des candidats recalés</span>
                                                        </div>

                                                        <div  class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#001436] via-[#001436]/70 to-[#fff]/70">
                                                                <div class="w-full flex justify-start items-center gap-2 ">
                                                                        <span
                                                                                class="w-10 h-10 bg-[#001436]  flex justify-center items-center p-1 rounded-lg">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#fff"
                                                                                                d="M21 2H3c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2m0 5H3V4h18z" />
                                                                                </svg>
                                                                        </span>
                                                                        <span
                                                                                class="text-md text-justify text-white font-semibold">Réussite</span>
                                                                </div>
                                                                <div class="w-full flex justify-start items-center gap-3">
                                                                        <span
                                                                                class="text-3xl font-semibold text-white"><?= htmlspecialchars($pourcentageReussite) ?>%</span>
                                                                </div>
                                                                <span class="text-sm text-justify text-white">Pourcentage des candidats admis</span>
                                                        </div>

                                                        <div class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#f77313] via-[#f77313]/70 to-[#fff]/70">
                                                                <div class="w-full flex justify-start items-center gap-2 ">
                                                                        <span
                                                                                class="w-10 h-10 bg-[#f77313]  flex justify-center items-center p-1 rounded-lg">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="1.5em" height="1.5em"
                                                                                        viewBox="0 0 24 24">
                                                                                        <path fill="#fff"
                                                                                                d="M21 2H3c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2m0 5H3V4h18z" />
                                                                                </svg>
                                                                        </span>
                                                                        <span
                                                                                class="text-md text-justify text-white font-semibold">Test</span>
                                                                </div>
                                                                <div class="w-full flex justify-start items-center gap-3">
                                                                        <span class="text-3xl font-semibold text-white"><?= htmlspecialchars(count($data_t)) ?></span>
                                                                </div>
                                                                <span class="text-sm text-justify text-white">Résultats des évaluations passées</span>
                                                        </div>

                                                        <div  class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#001436] via-[#001436]/70 to-[#fff]/70">
                                                                
                                                        </div>

                                                </div>
        
                                                <div class="w-[50%] max-h-full flex justify-start items-center flex-wrap gap-5 mt-12">
                                                        <div class="w-full h-full bg-slate-100 rounded-md flex justify-center items-center">
                                                                <canvas id="réussite_échec" class="w-full h-80"></canvas>
                                                        </div>
                                                </div>
                                        </div>

                                </div>
                        </div>

                        <!-- /* FORMULAIRE DE CREATION OFFRE LIEN A L'OFFRE */ -->
                        <div id="form_creation_offre"
                                class="w-auto rounded-md flex flex-col gap-2 bg-white relative hidden px-4 py-2 h-full overflow-y-auto scrollbar-hide transition-all duration-300 ease-in-out opacity-0">
                                <div id="err_msg"></div>
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <h2 class="text-xl font-semibold text-slate-700">Formulaire de création d'offre
                                        </h2>
                                        <p class="text-slate-500 text-sm">Un recruteur devra remplir ces champs :</p>
                                </div>

                                <form id="form_offre"
                                        class="w-full h-full flex justify-start items-start gap-4 flex-wrap">

                                        <div class="w-200 h-full bg-slate-100 rounded-md px-4 py-2">
                                                <h2 class="text-xl font-semibold text-slate-700"> Informations générales
                                                </h2>
                                                <div class="mt-2 flex flex-col gap-2 w-full">

                                                        <div class="flex justify-start items-center gap-2">
                                                                <input id="titre" name="titre"
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500"
                                                                        type="text" placeholder="Titre poste" required>
                                                                <input id="lieu" placeholder="Lieu du travail"
                                                                        name="lieu" required
                                                                        class="border border-2 p-1 h-10 w-146 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                        </div>

                                                        <div class="flex justify-start items-center gap-2">
                                                                <select id="contrat" name="contrat" required
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                        <option value="">Type de contrat</option>
                                                                        <option value="CDI">CDI</option>
                                                                        <option value="CDD">CDD</option>
                                                                        <option value="stage">Stage</option>
                                                                        <option value="freelance">Freelance</option>
                                                                </select>
                                                                <select id="experience" name="experience" required
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                        <option value="">Niveau d’expérience</option>
                                                                        <option value="Junior">Junior</option>
                                                                        <option value="Intermédiaire">Intermédiaire
                                                                        </option>
                                                                        <option value="Confirmé">Confirmé</option>
                                                                </select>
                                                        </div>

                                                        <div class="flex justify-start items-center gap-2">
                                                                <select id="score" name="score" required
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 text-sm text-slate-500">
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

                                                                <select id="credibilite" name="credibilite" required
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                        <option value="">Score de crédibilité</option>
                                                                        <option value="10">10</option>
                                                                        <option value="20">20</option>
                                                                        <option value="30">30</option>
                                                                        <option value="40">40</option>
                                                                        <option value="50">50</option>
                                                                        <option value="60">60</option>
                                                                        <option value="70">70</option>
                                                                        <option value="80">80</option>
                                                                        <option value="90">90</option>
                                                                        <option value="100">100</option>
                                                                </select>

                                                        </div>

                                                        <div class="flex justify-start items-center gap-2">
                                                                <input id="salaire" name="salaire"
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500"
                                                                        type="number" placeholder="Salaire" required>

                                                                <select id="statut" name="statut" required
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 text-sm text-slate-500">
                                                                        <option value="">Statut</option>
                                                                        <option value="ouvert">Ouvert</option>
                                                                        <option value="ferme">Fermé</option>
                                                                </select>

                                                        </div>

                                                        <div class="flex justify-start items-center gap-2">
                                                                <input id="competence" name="competence"
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500"
                                                                        type="text" placeholder="Compétences" required>
                                                                <input type="date" id="date_limite" name="date_limite"
                                                                        required
                                                                        class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500"
                                                                        placeholder="Date de clôture 12-04-2025">
                                                        </div>

                                                        <div class="flex justify-start items-center gap-2">
                                                                <textarea id="description" name="description"
                                                                        class="border border-2 p-1 w-full outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500"
                                                                        rows="3" placeholder="Description du poste..."
                                                                        required></textarea>
                                                        </div>

                                                        <div class="flex flex-col">
                                                                <h2 class="text-xl font-semibold text-slate-700">
                                                                        Missions</h2>
                                                                <textarea id="mission" name="mission"
                                                                        class="mt-2 border border-2 p-1 w-full outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500"
                                                                        rows="3"
                                                                        placeholder="Décrivez brièvement les missions, responsabilités et objectifs..."
                                                                        required></textarea>
                                                        </div>

                                                        <div class="flex flex-col w-full">
                                                                <h2 class="text-xl font-semibold text-slate-700">Profil
                                                                        recherché</h2>
                                                                <textarea id="profil" name="profil"
                                                                        class="mt-2 border border-2 p-1 w-full outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500"
                                                                        rows="3"
                                                                        placeholder="Décrivez brièvement les missions, responsabilités et objectifs..."
                                                                        required></textarea>
                                                        </div>

                                                        <div class="flex justify-start items-center gap-2">
                                                                <button type="submit"
                                                                        class="shadow-md bg-[#f77313] w-full h-10 flex justify-center items-center rounded-md text-white cursor-pointer hover:bg-[#001436]">Créer
                                                                        l'offre</button>
                                                                <button type="button" id="close_offre_creation"
                                                                        class="shadow-md w-full h-10 flex justify-center items-center rounded-md text-white cursor-pointer bg-[#001436] hover:opacity-90">Annuler</button>
                                                        </div>
                                                </div>
                                        </div>

                                </form>
                        </div>

                        <!-- /*OFFRE*/ -->
                        <div id="section2"
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">
                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Mes offres</h2>
                                        <div id="err_msg_suppression_offre"></div>
                                        <div class="flex justify-between items-center gap-6">

                                                <button id="add_offre"
                                                        class="hover:opacity-90 cursor-pointer text-sm flex justify-between items-center text-white bg-[#00134d] p-2 rounded-md">
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
                                        <?php if ($data_o): ?>
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <?php include('../components/thead_o.php') ?>
                                                        <tbody class="">
                                                                <?php foreach ($data_o as $offre): ?>
                                                                        <tr class="hover:bg-gray-50">
                                                                                <td class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-justify"><?= $offre["titre"] ?></td>
                                                                                <td class="px-4 py-2 text-sm border-r border-gray-200 text-justify <?= ($offre["statut"] == "ouvert") ? 'text-green-500' : (($offre["statut"] == "fermé") ? 'text-red-500' : '') ?>"> <?= htmlspecialchars($offre["statut"]) ?> </td>
                                                                                <td class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-justify"><?= $offre["experience"] ?></td>
                                                                                <td class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-justify"><?= $offre["date_creation"] ?></td>
                                                                                <td class="px-4 py-2 text-sm text-slate-500 flex justify-start items-center gap-4">
                                                                                        <a href="offre/?id=<?= $offre["id"] ?>"class="">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#6B7280" fill-rule="evenodd" d="M1 12c2.028-4.152 6.192-7 11-7s8.972 2.848 11 7c-2.028 4.152-6.192 7-11 7s-8.972-2.848-11-7m11 3.5a3.5 3.5 0 1 0 0-7a3.5 3.5 0 0 0 0 7"/></svg>
                                                                                        </a>
                                                                                        <button data-offre="<?= $offre["id"] ?>" class="delete_offre cursor-pointer">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="1.5em" height="1.5em"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path fill="#EF4444"
                                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                                </svg>
                                                                                        </button>
                                                                                        <a href="creer_un_test?offre_id=<?= $offre["id"] ?>" class="hover:opacity-90 w-30 cursor-pointer text-sm rounded-md flex justify-center items-center text-white bg-[#00134d] py-1 px-2">
                                                                                                Crée un test
                                                                                        </a>
                                                                                </td>
                                                                        </tr>
                                                                <?php endforeach ?>
                                                        </tbody>

                                                </table>
                                        <?php else: ?>
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <?php include('../components/thead_o.php') ?>
                                                </table>
                                                <div class="flex justify-center items-center mt-12">
                                                        <h2 class="text-xl font-semibold text-slate-700">Aucune offre disponible
                                                        </h2>
                                                </div>
                                        <?php endif ?>
                                </div>

                                <div class="w-full h-8 flex justify-center items-center gap-4 mt-8 mb-4">
                                        <?php if ($page_offre > 1): ?>
                                                <a href="?page=<?= $page_offre - 1 ?>"  
                                                class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Précédent
                                                </a>
                                        <?php endif; ?>

                                        <?php for ($i = 1; $i <= $totalPages_offre; $i++): ?>
                                                <a href="?page=<?= $i ?>" 
                                                class="<?= $i === $page_offre  
                                                                ? 'w-8 h-8 flex justify-center items-center bg-[#00134d] text-white rounded-md'  
                                                                : 'bg-white text-slate-500 shadow-md w-8 h-8 flex justify-center items-center rounded-md' ?>">
                                                <?= $i ?>
                                                </a>
                                        <?php endfor; ?>

                                        <?php if ($page_offre < $totalPages_offre): ?>
                                                <a href="?page=<?= $page_offre + 1 ?>"  
                                                class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Suivant
                                                </a>
                                        <?php endif; ?>
                                </div>
                        </div>

                        <!-- /*TEST*/ -->
                        <div id="section6"
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">

                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Banque de tests</h2>
                                        <div id="err_msg_test"></div>
                                </div>

                                <div class="relative max-h-full overflow-y-auto scrollbar-hide">
                                        <?php if ($data_t): ?>
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <?php include('../components/thead.php') ?>
                                                        <tbody class="">

                                                                <?php foreach ($data_t as $test): ?>
                                                                        <tr class="hover:bg-gray-50">
                                                                                <td class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                        <?= $test["id"] ?></td>
                                                                                <td class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                        <?= $test["titre"] ?></td>
                                                                                <td class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                        <?= $test["created_at"] ?></td>
                                                                                <td class="px-4 py-2 text-sm text-slate-500 flex justify-around items-center border-r  border-gray-200">

                                                                                        <a href="qcm_test/?id=<?= $test["id"] ?>"
                                                                                                class="cursor-pointer">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="1.7em" height="1.7em"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path fill="#6B7280"
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M20.77 12c0-.359-.194-.594-.582-1.066C18.768 9.21 15.636 6 12 6s-6.768 3.21-8.188 4.934c-.388.472-.582.707-.582 1.066s.194.594.582 1.066C5.232 14.79 8.364 18 12 18s6.768-3.21 8.188-4.934c.388-.472.582-.707.582-1.066M12 15a3 3 0 1 0 0-6a3 3 0 0 0 0 6"
                                                                                                                clip-rule="evenodd" />
                                                                                                </svg>
                                                                                        </a>

                                                                                        <button class="cursor-pointer"
                                                                                                data-link="<?= $test["id"] ?>">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="1.9em" height="1.9em"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path fill="#6B7280"
                                                                                                                d="M17 7h-4v2h4c1.65 0 3 1.35 3 3s-1.35 3-3 3h-4v2h4c2.76 0 5-2.24 5-5s-2.24-5-5-5m-6 8H7c-1.65 0-3-1.35-3-3s1.35-3 3-3h4V7H7c-2.76 0-5 2.24-5 5s2.24 5 5 5h4zm-3-4h8v2H8z" />
                                                                                                </svg>
                                                                                        </button>

                                                                                        <button class="cursor-pointer openModal"
                                                                                                data-mail="<?= $test["id"] ?>">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="1.5em" height="1.5em"
                                                                                                        viewBox="0 0 48 48">
                                                                                                        <g fill="none" stroke="#6B7280"
                                                                                                                stroke-linecap="round"
                                                                                                                stroke-linejoin="round"
                                                                                                                stroke-width="4">
                                                                                                                <path
                                                                                                                        d="M44 24V9H4v30h20" />
                                                                                                                <path fill="#6B7280"
                                                                                                                        d="m35 39l8-7l-4-4l-8 7v4z" />
                                                                                                                <path
                                                                                                                        d="m4 9l20 15L44 9" />
                                                                                                        </g>
                                                                                                </svg>
                                                                                        </button>

                                                                                        <button class="cursor-pointer supprimer_tests" data-test='<?= $test["id"] ?>' >
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="1.5em" height="1.5em"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path fill="#EF4444"
                                                                                                                d="M6 21h12V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z" />
                                                                                                </svg>
                                                                                        </button>

                                                                                </td>
                                                                        </tr>


                                                                <?php endforeach ?>
                                                        </tbody>
                                                </table>
                                        <?php else: ?>
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <?php include('../components/thead.php') ?>
                                                </table>
                                                <div class="flex justify-center items-center mt-12">
                                                        <h2 class="text-xl font-semibold text-slate-700">Aucun test disponible
                                                        </h2>
                                                </div>
                                        <?php endif ?>
                                </div>

                                <div class="w-full h-8 flex justify-center items-center gap-4 mt-8 mb-4">
                                        <?php if ($page_test > 1): ?>
                                                <a href="?page=<?= $page_test - 1 ?>"  
                                                class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Précédent
                                                </a>
                                        <?php endif; ?>

                                        <?php for ($i = 1; $i <= $totalPages_test; $i++): ?>
                                                <a href="?page=<?= $i ?>" 
                                                class="<?= $i === $page_test  
                                                                ? 'w-8 h-8 flex justify-center items-center bg-[#00134d] text-white rounded-md'  
                                                                : 'bg-white text-slate-500 shadow-md w-8 h-8 flex justify-center items-center rounded-md' ?>">
                                                <?= $i ?>
                                                </a>
                                        <?php endfor; ?>

                                        <?php if ($page_test < $totalPages_test): ?>
                                                <a href="?page=<?= $page_test + 1 ?>"  
                                                class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Suivant
                                                </a>
                                        <?php endif; ?>
                                </div>

                        </div>

                        <!-- /*MODAL MAIL*/ -->
                        <div id="emailModal"
                                class="emailModal fixed inset-0 bg-slate-700/20 flex items-center justify-center z-50 hidden">
                                <div
                                        class="bg-white rounded-lg shadow-lg w-full max-w-md p-2 relative flex flex-col gap-8">
                                        <div class="w-full flex justify-between items-center">
                                                <h2 class="text-xl font-semibold text-slate-700">Envoyer le lien au
                                                        candidat</h2>
                                                <button id="closeModalBtn" class="cursor-pointer ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                height="1.5em" viewBox="0 0 24 24">
                                                                <path fill="none" stroke="#6b7280"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2.5" d="m7 7l10 10M7 17L17 7" />
                                                        </svg>
                                                </button>
                                        </div>
                                        <form id="sendLinkForm" class="space-y-4 w-full">
                                                <input id="emailSend" name="emailSend"
                                                        class="w-full border border-2 p-1 w-[80%] h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500"
                                                        type="email" placeholder="Email du candidat" required>
                                                <button type="submit" id="emailbtnsend"
                                                        class="w-[15%] h-10 bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-full flex items-center justify-center gap-3 text-white text-sm cursor-pointer">Envoyer</button>
                                        </form>
                                </div>
                        </div>

                        <!-- /*CANDIDAT*/ -->
                        <div id="section4" class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">

                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Gestion des Candidats</h2>
                                </div>

                                <div class="relative max-full overflow-y-auto scrollbar-hide">
                                        <?php if ($resultats_candidat): ?>
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <?php include('../components/thead_c_r.php') ?>
                                                        <tbody class="">
                                                                <?php foreach ($resultats_candidat as $candidat): ?>
                                                                        <tr class="hover:bg-gray-50">
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['nom_candidat'] . " " . $candidat['prenom_candidat']) ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['titre_offre']) ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['titre_test']) ?>
                                                                                </td>
                                                                                <td class="px-4 py-2 text-sm <?= $candidat['statut'] === 'fail' ? "text-red-500" : "text-green-500" ?> border-r border-gray-200 text-start"> <?= htmlspecialchars($candidat['score']) ?></td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['moyenne']) ?>
                                                                                </td>
                                                                                <td class="px-4 py-2 text-sm <?= $candidat['statut'] === 'fail' ? "text-red-500" : "text-green-500" ?> border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['statut'] === 'fail' ? 'Echoué' : 'Reussi') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['date_creation']) ?>
                                                                                </td>
                                                                                <td class="p-2 text-sm text-slate-500 flex justify-center items-center gap-6">
                                                                                        <a href="credibilite_details/?candidat=<?= $candidat["candidat_id"] ?>&test=<?= $candidat["test_id"] ?>" class="hover:opacity-90 w-36 cursor-pointer text-sm flex justify-center items-center text-white bg-[#00134d] py-1 px-2">
                                                                                                Detail de crédibilité
                                                                                        </a>
                                                                                </td>
                                                                        </tr>
                                                                <?php endforeach ?>
                                                        </tbody>
                                                </table>
                                        <?php else: ?>
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <?php include('../components/thead_c_r.php') ?>
                                                </table>
                                                <div class="flex justify-center items-center mt-12">
                                                        <h2 class="text-xl font-semibold text-slate-700">Aucun candidat
                                                                disponible</h2>
                                                </div>
                                        <?php endif ?>
                                </div>

                                <div class="w-full h-8 flex justify-center items-center gap-4 mt-8 mb-4">
                                        <?php if ($page > 1): ?>
                                                <a href="?page=<?= $page - 1 ?>"  
                                                class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Précédent
                                                </a>
                                        <?php endif; ?>

                                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                                <a href="?page=<?= $i ?>" 
                                                class="<?= $i === $page  
                                                                ? 'w-8 h-8 flex justify-center items-center bg-[#00134d] text-white rounded-md'  
                                                                : 'bg-white text-slate-500 shadow-md w-8 h-8 flex justify-center items-center rounded-md' ?>">
                                                <?= $i ?>
                                                </a>
                                        <?php endfor; ?>

                                        <?php if ($page < $totalPages): ?>
                                                <a href="?page=<?= $page + 1 ?>"  
                                                class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Suivant
                                                </a>
                                        <?php endif; ?>
                                </div>

                        </div>

                        <!-- /*PROFIL*/ -->
                        <div id="section5"
                                class="section h-full rounded-md flex flex-col gap-4 w-[80%] bg-white p-4 hidden">
                                <div id="err_msg_profil"></div>
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <div class="flex justify-between items-center w-full">
                                                <h2 class="text-xl font-semibold text-slate-700">Profil du Recruteur</h2>
                                                <button id="edition_profil"
                                                        class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]/10"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                height="1.5em" viewBox="0 0 20 20">
                                                                <path fill="#6B7280"
                                                                        d="M12.92 2.873a2.975 2.975 0 0 1 4.207 4.207l-.669.669l-4.207-4.207zM11.544 4.25l-7.999 7.999a2.44 2.44 0 0 0-.655 1.194l-.878 3.95a.5.5 0 0 0 .597.597l3.926-.873a2.5 2.5 0 0 0 1.234-.678l7.982-7.982z" />
                                                        </svg></button>
                                        </div>
                                </div>
                                <form id="mettre_a_jour_form" class="w-full flex flex-col justify-center items-center"
                                        action="" method="post">
                                        <div class="w-full flex flex-col justify-center items-center gap-4 flex-wrap">
                                                <div id="previewContainer" class="w-20 h-20 bg-slate-100 rounded-full shadow-sm relative flex justify-center items-center">
                                                        <div  class="z-500 cursor-pointer w-6 h-6 flex items-center justify-center p-1 rounded-full custom_shadow absolute top-14 left-14">
                                                                <label for="imageInput" class="cursor-pointer ">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#00134d" d="m16 2l5 5v14.008a.993.993 0 0 1-.993.992H3.993A1 1 0 0 1 3 21.008V2.992C3 2.444 3.445 2 3.993 2zm-3 10h3l-4-4l-4 4h3v4h2z"/></svg>                                                                
                                                                </label>
                                                                <input type="file" name="image" id="imageInput" accept="image/*" hidden>
                                                        </div>
                                                        <?php if ($image): ?>
                                                                <img src="../scripts/uploads/<?= $image ?>" alt="profil"
                                                                        class="w-full h-full object-cover rounded-full">
                                                        <?php else: ?>
                                                                <span class="text-4xl font-black text-[#FF6F00]">
                                                                        <?php echo strtoupper(substr($data['entreprise'], 0, 1))  ?></span>
                                                        <?php endif ?>
                                                </div>
                                                <div class="flex flex-col items-center">
                                                        <h2 class="text-xl font-semibold text-slate-700">Candidat</h2>
                                                        <h2 class="text-xl font-semibold text-slate-700"><span
                                                                        class="text-[#f77313]"><?= htmlspecialchars($data['nom'] . ' ' . $data['prenom']) ?></span>
                                                        </h2>
                                                </div>
                                        </div>

                                        <div class="w-full flex flex-col justify-center items-center mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Informations sur le
                                                        candidat</h2>
                                                <div class=" flex flex-col justify-start items-center gap-2">
                                                        <input id="entreprise" name="entreprise"
                                                                value="<?= htmlspecialchars($data['entreprise']) ?>"
                                                                class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-700"
                                                                type="text" placeholder="Entreprise ... ">

                                                        <input id="email" name="email"
                                                                value="<?= htmlspecialchars($data['email']) ?>"
                                                                class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-700"
                                                                type="email" placeholder="Email ... ">
                                                </div>
                                        </div>

                                        <div class="w-full flex flex-col justify-center items-center mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Votre addresse</h2>
                                                <ul class="flex flex-col  gap-2">

                                                        <input id="pays" name="pays"
                                                                value="<?= htmlspecialchars(trim($data['pays'] ?? "")) ?>"
                                                                class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-700"
                                                                type="text" placeholder="Pays ...  ">

                                                        <input id="ville" name="ville"
                                                                value="<?= htmlspecialchars(trim($data['ville'] ?? "")) ?>"
                                                                class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-700"
                                                                type="text" placeholder="Ville ... ">

                                                </ul>
                                        </div>
                                        <div id="button_mettre_a_jour_recruteur"
                                                class="w-full flex flex-col justify-center items-center mt-6 hidden">
                                                <button type="submit"
                                                        class="shadow-md w-40 h-10 flex justify-center items-center rounded-md text-white cursor-pointer bg-[#00134d] hover:opacity-90">Mettre
                                                        à jour
                                                </button>
                                        </div>
                                </form>
                        </div>

                </div>

        </main>

        <script src="../js/switch_r.js"></script>
        <script src="../js/creer_offre.js"></script>
        <script src="../js/deconnexion.js"></script>
        <script src="../js/invitation_mail.js"></script>
        <script src="../js/invitation_copie.js"></script>
        <script src="../js/modal_send_email.js"></script>
        <script src="../js/recruteur_profil.js"></script>
        <script src="../js/supprimer_offre.js"></script>
        <script src="../js/supprimer_test.js"></script>
        <script>
                const reussis = <?= json_encode($reussis) ?>;
                const echoues = <?= json_encode($echoues) ?>;

                  // 1️⃣ Définir les données
                const data = {
                labels: ['Echec', 'Reussite'],
                datasets: [{
                label: 'Pourcentage',
                data: [echoues, reussis],
                backgroundColor: [
                        'rgb(247, 115, 19)',
                        'rgb(0, 19, 77)',
                ],
                hoverOffset: 4
                }]
                };

                // 2️⃣ Configurer le graphique
                const config = {
                type: 'doughnut',
                data: data,
                options: {
                responsive: true,
                plugins: {
                        legend: {
                        position: 'top',
                        },
                        title: {
                        display: true,
                        text: 'Répartition réussite / échec'
                        }
                }
                }
                };

                // 3️⃣ Initialiser le graphique
                const ctx = document.getElementById('réussite_échec');
                new Chart(ctx, config);

        </script>

</body>

</html>