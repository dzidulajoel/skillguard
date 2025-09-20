<?php
        require_once('../../../../config/auth.php');
        require_once __DIR__ . "/../../../../scripts/suspension.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>candidat - SkillGouard</title>
        <link rel="shortcut icon" href="../../../../SkillGuard Social Media Assets.svg" type="image/x-icon">
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
                        <img src="../../../../SkillGuard Logo.svg" alt="SkillGuard logo">
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
                <div class="w-full h-full flex justify-start items-center rounded-md flex flex-col bg-white p-8">
                        <div >
                                <h2 class="text-2xl font-bold text-slate-700 text-center" >Test automatiquement suspendu</h2>
                                <div class="w-full h-full flex justify-center items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="4.5em" height="4.5em" viewBox="0 0 24 24"><mask id="SVGnbV1cdHN"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-dasharray="64" stroke-dashoffset="64" d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9c0 -4.97 4.03 -9 9 -9"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0"/></path><path stroke-dasharray="2" stroke-dashoffset="2" d="M9 9v1"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.2s" values="2;0"/></path><path stroke-dasharray="2" stroke-dashoffset="2" d="M15 9v1"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.9s" dur="0.2s" values="2;0"/></path><path stroke-dasharray="12" stroke-dashoffset="12" d="M8 16c0.5 -1 1.79 -2 4 -2c2.21 0 3.5 1 4 2"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.1s" dur="0.2s" values="12;0"/></path><path fill="#000" fill-opacity="0" stroke="none" d="M9.55 12c1.19 1.88 2.45 4.18 2.45 5.5c0 2.5 -2 4.5 -4.5 4.5c-2.5 0 -4.5 -2 -4.5 -4.5c0 -1.32 1.26 -3.62 2.45 -5.5Z"><animate fill="freeze" attributeName="fill-opacity" begin="0.9s" dur="0.2s" values="0;1"/></path><path fill="#fff" fill-opacity="0" stroke="none" d="M7.5 13c0 0 2.5 3.12 2.5 4.5c0 1.38 -1.12 2.5 -2.5 2.5c-1.38 0 -2.5 -1.12 -2.5 -2.5c0 -1.38 2.5 -4.5 2.5 -4.5Z"><animate fill="freeze" attributeName="fill-opacity" begin="0.9s" dur="0.2s" values="0;1"/></path></g></mask><rect width="24" height="24" fill="#00134d" mask="url(#SVGnbV1cdHN)"/></svg>                                
                                </div>
                                <div class="w-full h-full flex flex-col justify-center items-center mt-2 gap-4">
                                        <p class="text-sm text-center text-slate-500 mt-4 flex justify-center gap-2 items-center w-[70%]">Votre session de test a été interrompue automatiquement en raison d’un faible taux de crédibilité détecté par notre système de sécurité.</p>
                                        <a href="../../../" class="bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-80 h-10 flex items-center justify-center gap-3 text-white text-sm text-center" >Retour à la page d'accueil</a>
                                </div>
                        </div>
                </div>
        </main>

</body>
</html>