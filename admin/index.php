<?php
require_once('../config/auth.php');
require_once('../scripts/admin.php');
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
                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                        viewBox="0 0 24 24">
                                        <path fill="#6B7280" d="M20 17h2v2H2v-2h2v-7a8 8 0 1 1 16 0zM9 21h6v2H9z" />
                                </svg>
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
                                                </svg><span>Recruteurs</span>
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
                        </ul>

                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">
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
                                <div class="flex flex-col w-full bg-white p-4">
                                        <h2 class="text-xl font-semibold text-slate-700">Tableau de bord - Admin
                                        </h2>
                                        <p class="text-sm text-justify text-slate-500 ">
                                                Bienvenue, gérez vos offres, vos candidats et vos tests en un seul endroit.
                                        </p>
                                </div>
                                <div class="flex w-full h-full">
                                        <div class="w-[50%] max-h-full  flex justify-start items-center flex-wrap gap-5 mt-6">

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
                                                                        class="text-md text-justify text-white font-semibold">Recruteurs</span>
                                                        </div>
                                                        <div class="w-full flex justify-start items-center gap-3">
                                                                <span class="text-3xl font-semibold text-white"><?= htmlspecialchars($stats['recruteurs']) ?></span>
                                                        </div>
                                                        <span class="text-sm text-justify text-white">Nombre total de recruteurs inscrits</span>
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
                                                                        class="text-3xl font-semibold text-white"><?= htmlspecialchars($stats['candidats']) ?></span>
                                                        </div>
                                                        <span class="text-sm text-justify text-white">Nombre total de
                                                                candidats connectés</span>
                                                </div>

                                                <div  class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#f77313] via-[#f77313]/70 to-[#fff]/70">
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
                                                                <span
                                                                        class="text-3xl font-semibold text-white"><?= htmlspecialchars($offre['total']) ?></span>
                                                        </div>
                                                        <span class="text-sm text-justify text-white">Nombre total
                                                                d'offre publiées</span>
                                                </div>

                                                <div class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#001436] via-[#001436]/70 to-[#fff]/70">
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
                                                                        class="text-md text-justify text-white font-semibold">Tests</span>
                                                        </div>
                                                        <div class="w-full flex justify-start items-center gap-3">
                                                                <span
                                                                        class="text-3xl font-semibold text-white"><?= htmlspecialchars($test['total']) ?></span>
                                                        </div>
                                                        <span class="text-sm text-justify text-white">Nombre total de
                                                                tests proposés</span>
                                                </div>

                                                <div  class="p-4 w-full md:w-[45%] h-48 shadow-lg rounded-md flex flex-col justify-between items-start bg-gradient-to-br from-[#f77313] via-[#f77313]/70 to-[#fff]/70">
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
                                                                        class="text-md text-justify text-white font-semibold">Réussite</span>
                                                        </div>
                                                        <div class="w-full flex justify-start items-center gap-3">
                                                                <span
                                                                        class="text-3xl font-semibold text-white"><?= htmlspecialchars($stats_r['reussite']) ?></span>
                                                        </div>
                                                        <span class="text-sm text-justify text-white">Pourcentage des
                                                                candidats admis</span>
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
                                                                        class="text-md text-justify text-white font-semibold">Échec</span>
                                                        </div>
                                                        <div class="w-full flex justify-start items-center gap-3">
                                                                <span
                                                                        class="text-3xl font-semibold text-white"><?= htmlspecialchars($stats_r['echec']) ?></span>
                                                        </div>
                                                        <span class="text-sm text-justify text-white">Pourcentage des
                                                                candidats recalés</span>
                                                </div>

                                        </div>

                                        <div  class="w-[50%] max-h-full flex justify-start items-center flex-wrap gap-5 mt-6">
                                                <div
                                                        class="w-full h-full bg-slate-100 rounded-md flex justify-center items-center">
                                                        <canvas id="recruteur_offre_test_resussite_echecs"
                                                                class="w-full h-full"></canvas>
                                                </div>
                                        </div>
                                </div>
                        </div>

                        <!-- /*RECRUTEURS*/ -->
                        <div id="section2"
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">

                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Gestion des recruteurs</h2>
                                        <div class="err_msg_suppression_offre"></div>
                                </div>

                                <div class="relative max-full overflow-y-auto scrollbar-hide">
                                        <?php if ($recruteurs_info): ?>
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <?php include('../components/thead_a_rt.php') ?>
                                                        <tbody class="">
                                                                <?php foreach ($recruteurs_info as $recruteur): ?>
                                                                        <tr class="hover:bg-gray-50">
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($recruteur['entreprise'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($recruteur['email'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($recruteur['pays'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($recruteur['ville'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($recruteur['offres_creees'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($recruteur['tests_crees'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start flex justify-center items-center">
                                                                                        <button class="cursor-pointer supprimer_recruteur" data-recruteur="<?= htmlspecialchars($recruteur['id'] ?? '-') ?>">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="1.5em" height="1.5em"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path fill="#dc2626"
                                                                                                                d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z" />
                                                                                                </svg>
                                                                                        </button>
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
                                        <?php if ($page_recruteur > 1): ?>
                                                <a href="?page=<?= $page_recruteur - 1 ?>" class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Précédent
                                                </a>
                                        <?php endif; ?>

                                        <?php for ($i = 1; $i <= $totalPages_recruteur; $i++): ?>
                                                <a href="?page=<?= $i ?>" 
                                                class="<?= $i === $page_recruteur  
                                                                ? 'w-8 h-8 flex justify-center items-center bg-[#00134d] text-white rounded-md'  
                                                                : 'bg-white text-slate-500 shadow-md w-8 h-8 flex justify-center items-center rounded-md' ?>">
                                                <?= $i ?>
                                                </a>
                                        <?php endfor; ?>

                                        <?php if ($page_recruteur < $totalPages_recruteur): ?>
                                                <a href="?page=<?= $page_recruteur + 1 ?>" class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Suivant
                                                </a>
                                        <?php endif; ?>
                                </div>

                        </div>

                        <!-- /*CANDIDAT*/ -->
                        <div id="section4"
                                class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 hidden">

                                <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold text-slate-700">Gestion des candidats</h2>
                                        <div class="err_msg_suppression_c"></div>
                                </div>

                                <div class="relative max-full overflow-y-auto scrollbar-hide">
                                        <?php if ($candidats): ?>
                                                <table class="min-w-full border border-gray-200 rounded-lg">
                                                        <?php include('../components/thead_a_cd.php') ?>
                                                        <tbody class="">
                                                                <?php foreach ($candidats as $candidat): ?>
                                                                        <tr class="hover:bg-gray-50">
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars(($candidat['nom'] ?? '-') . ' ' . ($candidat['prenom'] ?? '-')) ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['email'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['pays'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['ville'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['total_tests'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['reussites'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start">
                                                                                        <?= htmlspecialchars($candidat['echecs'] ?? '-') ?>
                                                                                </td>
                                                                                <td
                                                                                        class="px-4 py-2 text-sm text-slate-500 border-r border-gray-200 text-start flex justify-center items-center">
                                                                                        <button class="cursor-pointer supprimer_candidat" data-candidat="<?= htmlspecialchars($candidat['id'] ?? '-') ?>">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="1.5em" height="1.5em"
                                                                                                        viewBox="0 0 24 24">
                                                                                                        <path fill="#dc2626"
                                                                                                                d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z" />
                                                                                                </svg>
                                                                                        </button>
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
                                                <a href="?page=<?= $page - 1 ?>" class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
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
                                                <a href="?page=<?= $page + 1 ?>" class="shadow-md px-3 h-8 flex justify-center items-center rounded-md text-slate-500 bg-white">
                                                Suivant
                                                </a>
                                        <?php endif; ?>
                                </div>

                        </div>

                </div>
        </main>

        <script src="../js/switch_a.js"></script>
        <script src="../js/deconnexion.js"></script>
        <script src="../js/supprimer_admin.js"></script>

        <script>

                const canvas = document.getElementById('recruteur_offre_test_resussite_echecs');
                const ctx = canvas.getContext('2d');

                const recruteurs = <?= json_encode($recruteurs) ?>;

                const labels = recruteurs.map(r => r.entreprise);
                const reussites = recruteurs.map(r => r.reussites);
                const echecs = recruteurs.map(r => r.echecs);

                const gradientBlue = ctx.createLinearGradient(0, 0, 0, 400);
                gradientBlue.addColorStop(0, "#001436");
                gradientBlue.addColorStop(0.7, "rgba(0, 20, 54, 0.7)");
                gradientBlue.addColorStop(1, "rgba(255, 255, 255, 0.7)");

                const gradientOrange = ctx.createLinearGradient(0, 0, 0, 400);
                gradientOrange.addColorStop(0, "#f77313");
                gradientOrange.addColorStop(0.7, "rgba(247, 115, 19, 0.7)");
                gradientOrange.addColorStop(1, "rgba(255, 255, 255, 0.7)");

                const data = {
                        labels: labels,
                        datasets: [
                                {
                                        label: 'Réussites',
                                        data: reussites,
                                        backgroundColor: gradientBlue
                                },
                                {
                                        label: 'Échecs',
                                        data: echecs,
                                        backgroundColor: gradientOrange
                                }
                        ]
                };
                const config = {
                        type: 'bar',
                        data: data,
                        options: {
                                responsive: true,
                                plugins: {
                                        legend: { position: 'top' }
                                },
                                scales: {
                                        x: { stacked: true },
                                        y: { stacked: true }
                                }
                        }
                };
                new Chart(ctx, config);

        </script>
</body>

</html>