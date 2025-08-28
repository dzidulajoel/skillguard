<?php
        require_once("../../scripts/qcm_test.php");
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

                <nav id="menu" class="flex flex-col justify-between w-auto h-full bg-white rounded-md p-4">

                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">
                                <li class="w-full">
                                        <a href="../" class="w-full bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-full flex items-center justify-start gap-3 text-white text-xs">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1.5em" viewBox="0 0 12 24"><path fill="#fff" fill-rule="evenodd" d="m3.343 12l7.071 7.071L9 20.485l-7.778-7.778a1 1 0 0 1 0-1.414L9 3.515l1.414 1.414z"/></svg>
                                                <span>Retour</span>
                                        </a>
                                </li>
                        </ul>

                </nav>
                <div id="sections" class="w-full">
                        <div class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-4 ">

                                <div class="flex justify-between items-center">
                                        <h2 class="text-md font-semibold text-slate-700">Test : <?= $data_t['titre']?> </h2>
                                        <div class="flex justify-between items-center gap-6">
                                                <button
                                                        class="text-xs flex justify-between items-center text-white bg-[#00134d] hover:opacity-90 cursor-pointer p-2 rounded-md gap-2">
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
                                        <div class="questions-container space-y-6">
                                                <?php foreach ($datas as $index => $data): ?>
                                                        <div class="question border border-slate-700 p-4 rounded shadow-sm">
                                                        <h3 class="text-sm font-semibold text-slate-700 mb-2">
                                                                Question <?= $index + 1 ?> : <?= htmlspecialchars($data["texte"]) ?>
                                                        </h3>
                                                        <ul class="reponses space-y-2">
                                                        <?php foreach ($data['reponses'] as $reponse): ?>
                                                                <li>
                                                                        <label class="flex items-center gap-2 cursor-pointer  <?= $reponse['est_correct'] == 1 ? 'text-slate-900 font-semibold' : 'text-gray-500' ?>">
                                                                                <input disabled
                                                                                type="<?= $data['type'] === 'checkbox' ? 'checkbox' : 'radio' ?>" 
                                                                                value="<?= htmlspecialchars($reponse['contenu']) ?>" 
                                                                                class="accent-blue-500"
                                                                                <?= $reponse['est_correct'] == 1 ? 'checked' : '' ?>

                                                                                >
                                                                                <span><?= htmlspecialchars($reponse['contenu']) ?></span>
                                                                        </label>
                                                                </li>
                                                        <?php endforeach; ?>
                                                        </ul>

                                                        </div>
                                                <?php endforeach; ?>
                                                </div>
                                </div>
                        </div>
                </div>
        </main>
        </body>

</html>