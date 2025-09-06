<?php
        require_once('../../../config/auth.php');
        require_once __DIR__ . "/../../../scripts/question_qcm.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>candidat - SkillGouard</title>
        <link rel="shortcut icon" href="../../../SkillGuard Social Media Assets.svg" type="image/x-icon">

</head>

<body class="bg-[#f5feff] w-full h-screen">

        <header class="text-white flex justify-between items-center px-16 h-[8vh]">

                <div class="w-16 h-16 flex justify-between items-center">
                        <img src="../../../SkillGuard Logo.svg" alt="SkillGuard logo">
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
                                <?php echo strtoupper(substr($data_utilisateur['prenom'], 0, 1)) . strtoupper(substr($data_utilisateur['nom'], 0, 1)) ?>
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
                                <li class="w-40">
                                        <a id="offre_back" href="../../" class="bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-full flex items-center justify-start gap-3 text-white text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1.5em" viewBox="0 0 12 24"><path fill="#fff" fill-rule="evenodd" d="m3.343 12l7.071 7.071L9 20.485l-7.778-7.778a1 1 0 0 1 0-1.414L9 3.515l1.414 1.414z"/></svg>
                                                <span>Quitter le test</span>
                                        </a>
                                </li>
                        </ul>
                </nav>

                <div class="section w-full h-full rounded-md flex flex-col gap-4 bg-white p-8">
                        <div class="flex justify-between items-center gap-2 ">
                                <h2 class="text-xl font-semibold text-slate-700">Titre : <span class="text-[#f77313]"><?= htmlspecialchars($offre['titre'] ?? "Titre indisponible") ?></span></h2>
                                <div id="err_msg"></div>
                                <div class="text-md font-semibold text-slate-700 bg-slate-100 p-2 rounded-md flex justify-between items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 15 15"><path fill="#6B7280" d="M9 1H6V0h3z"/><path fill="#6B7280" fill-rule="evenodd" d="M7.5 2a6.5 6.5 0 1 0 0 13a6.5 6.5 0 0 0 0-13M8 8V5H7v4h3V8z" clip-rule="evenodd"/></svg>                                        
                                        <span>Durée 00:00</span>
                                </div>                                
                        </div>
                        <form id="form_qcm_candidat_reponse" method="POST" class="flex justify-between items-start gap-4 w-full h-full overflow-y-auto scrollbar-hide">
                                <div class="relative w-[45%] h-full overflow-y-auto scrollbar-hide">
                                        <?php foreach ($datas as $index => $question) : ?>
                                                <div class="question mb-6  rounded-lg">
                                                        <h3 class="font-semibold mb-2 text-md text-slate-700"><?= ($index + 1) . ". " . htmlspecialchars($question['texte']) ?></h3>
                                                        <?php if ($question['type'] === 'radio') : ?>
                                                                <?php foreach ($question['reponses'] as $reponse) : ?>
                                                                        <label class="flex items-center space-x-2 mb-1 text-slate-600 text-sm">
                                                                                <input type="radio" class="p-2 outline-none rounded-md border-[#001436] accent-[#00B8D9]" name="q_<?= $question['id'] ?>" value="<?= $reponse['id'] ?>">
                                                                                <span><?= htmlspecialchars($reponse['contenu']) ?></span>
                                                                        </label>
                                                                <?php endforeach; ?>

                                                        <?php elseif ($question['type'] === 'checkbox') : ?>
                                                                <?php foreach ($question['reponses'] as $reponse) : ?>
                                                                        <label class="flex items-center space-x-2 mb-1 text-slate-600 text-sm">
                                                                                <input type="checkbox" class="p-2 outline-none rounded-md border-[#001436] accent-[#00B8D9]" name="q_<?= $question['id'] ?>[]" value="<?= $reponse['id'] ?>">
                                                                                <span><?= htmlspecialchars($reponse['contenu']) ?></span>
                                                                        </label>
                                                                <?php endforeach; ?>
                                                        <?php endif; ?>
                                                </div>
                                        <?php endforeach; ?>
                                        <button type="submit" id="button_submit_test_qcm" class="bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-40 text-center text-white text-sm cursor-pointer">Envoyer le test</button>
                                </div>

                                <div class="flex flex-col gap-2 w-[45%] h-[400px]">
                                        <video id="localVideo" autoplay playsinline muted class="w-full h-full object-cover rounded-lg bg-black"></video>
                                </div>
                        </form>
                </div>

                <script src="../../../js/lien.js"></script>
                <script src="../../../js/correction_qcm.js"></script>
        </main>
        </body>
</html>