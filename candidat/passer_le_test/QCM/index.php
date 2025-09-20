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
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/facemesh"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/speech-commands"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/posenet"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/pose-detection"></script>
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
                        <div id="err_msg"></div>
                        <div class="flex justify-between items-center gap-2 " id="header_qcm">
                                <h2 class="text-xl font-semibold text-slate-700">Titre : <span class="text-[#f77313]"><?= htmlspecialchars($offre['titre'] ?? "Titre indisponible") ?></span></h2>
                                <div id="err_msg"></div>
                                <div class="flex justify-end items-center gap-8">
                                        <div class="text-md font-semibold text-slate-700 bg-slate-100 p-2 rounded-md flex justify-between items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#6B7280" d="M5 15H3v6h6v-2H5zM5 5h4V3H3v6h2zm16-2h-6v2h4v4h2zm-2 16h-4v2h6v-6h-2zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 6c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2"/></svg>                                                
                                                <div >Score de crédibilité <span id="credibilite">100 %</span></div>
                                        </div> 
                                        <div class="text-md font-semibold text-slate-700 bg-slate-100 p-2 rounded-md flex justify-between items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#6B7280" d="M15 1H9v2h6zm-4 13h2V8h-2zm8.03-6.61l1.42-1.42c-.43-.51-.9-.99-1.41-1.41l-1.42 1.42A8.96 8.96 0 0 0 12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9a8.994 8.994 0 0 0 7.03-14.61M12 20c-3.87 0-7-3.13-7-7s3.13-7 7-7s7 3.13 7 7s-3.13 7-7 7"/></svg>                                                
                                                <span id="timer">Durée 00:00</span>
                                        </div>                                                               
                                </div>
                        </div>
                        <form id="form_qcm_candidat_reponse" method="POST" class="flex justify-between items-start gap-4 w-full h-full overflow-y-auto scrollbar-hide ">
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
                                        <button type="submit" id="button_submit_test_qcm" class="bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-40 text-center text-white text-sm cursor-pointer">Terminer le test</button>
                                </div>

                                <div class="flex flex-col gap-2 w-[45%] h-[400px]">
                                        <video id="localVideo" autoplay playsinline muted class="w-full h-full object-cover rounded-lg bg-black"></video>
                                </div>
                        </form>
                        <div class="w-full h-full flex flex-col justify-center items-center hidden" id="end_qcm_info">

                                <div class="rounded-full flex justify-center items-center mb-8 hidden" id="check_circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="4.5em" height="4.5em" viewBox="0 0 24 24"><path fill="#22C55E" d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4zM12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8"/></svg>
                                </div> 
                                <div class="rounded-full flex justify-center items-center mb-8 hidden" id="close_circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="4.5em" height="4.5em" viewBox="0 0 24 24"><g fill="none" stroke="#EF4444" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="64" stroke-dashoffset="64" d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9c0 -4.97 4.03 -9 9 -9Z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="8" stroke-dashoffset="8" d="M12 12l4 4M12 12l-4 -4M12 12l-4 4M12 12l4 -4"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s" dur="0.2s" values="8;0"/></path></g></svg>                                
                                </div> 

                                <h2 class="text-xl font-semibold text-slate-700" >🎉 Félicitations, vous avez terminé votre test !</h2>
                                <p class="block mb-2 text-sm text-justify text-slate-500" >Votre session est désormais enregistrée et transmise à l’équipe de recrutement.</p>

                                <ul class="mt-8">
                                        <li class="block mb-2 text-md font-semibold text-justify text-slate-500">Durée du test : 30 minutes</li>
                                        <li class="block mb-2 text-md font-semibold text-justify text-slate-500 credible_text">Score de crédibilité : <span id="cred_score">00</span>%</li>
                                        <li class="block mb-2 text-md font-semibold text-justify text-slate-500">Statut : Test complété avec succès</li>
                                </ul>
                                <div class="w-[60%] mt-8 flex flex-col justify-center items-center">
                                        <p class="block mb-2 text-sm text-center text-slate-500">Merci d’avoir pris le temps de passer ce test. Vos réponses et vos conditions de passage ont été enregistrées avec soin afin de garantir l’équité et la transparence du processus</p>
                                        <a href="../../" class="bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-auto text-center gap-3 text-white text-sm flex justify-center items-center mt-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="0.75em" height="1.5em" viewBox="0 0 12 24"><path fill="#fff" fill-rule="evenodd" d="m3.343 12l7.071 7.071L9 20.485l-7.778-7.778a1 1 0 0 1 0-1.414L9 3.515l1.414 1.414z"/></svg>
                                                Consulter vos résultats dans votre espace candidat
                                        </a>
                                </div>
                        </div>
                </div>

                <script src="../../../js/lien.js"></script>
                <script src="../../../js/correction_qcm.js"></script>
                <script src="../../../js/proctoring.js"></script>

        </main>
</body>
</html>