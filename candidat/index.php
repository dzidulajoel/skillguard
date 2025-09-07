<?php
require_once('../config/auth.php');
require_once('../scripts/read_candidat.php');
require_once('../scripts/resultat_test.php');
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

                        <button
                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-[#f77313] font-bold cursor-pointer hover:bg-[#001436]/10">
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
                                        <a href="#" data-section="section1"
                                                class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M20 20a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3zm-8-5a2.5 2.5 0 1 0 0-5a2.5 2.5 0 0 0 0 5" />
                                                </svg>
                                                <span>Accueil</span></a>
                                </li>

                                <li class="w-full">
                                        <a href="#" data-section="section2"
                                                class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M10.514 6.49a4.5 4.5 0 0 1 2.973 0l7.6 2.66c.803.282.803 1.418 0 1.7l-7.6 2.66a4.5 4.5 0 0 1-2.973 0l-5.509-1.93a1.24 1.24 0 0 0-.436.597a1 1 0 0 1 .013 1.635l.004.018l.875 3.939a.6.6 0 0 1-.585.73H3.125a.6.6 0 0 1-.586-.73l.875-3.94l.005-.017a1 1 0 0 1 .132-1.707a2.35 2.35 0 0 1 .413-.889l-1.05-.367c-.804-.282-.804-1.418 0-1.7z" />
                                                        <path fill="#6B7280"
                                                                d="m6.393 12.83l-.332 2.654c-.057.452.127.92.52 1.196c1.157.815 3.043 1.82 5.42 1.82a9 9 0 0 0 5.473-1.834c.365-.28.522-.727.47-1.152l-.336-2.685l-4.121 1.442a4.5 4.5 0 0 1-2.973 0z" />
                                                </svg>
                                                <span>resultats</span>
                                        </a>
                                </li>

                                <li class="w-full">
                                        <a href="#" data-section="section3"
                                                class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#6B7280"
                                                                d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7M9 21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1H9z" />
                                                </svg>
                                                <span>Conseils</span>
                                        </a>
                                </li>

                        </ul>
                        <ul class="flex flex-col justify-start items-start gap-4 text-slate-500 text-sm">
                                <li class="w-full">
                                        <a href="#" data-section="section4"
                                                class="flex items-center justify-start gap-3 bg-[#00134d] px-4 py-2 w-full">
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
                                        <button
                                                class="logout w-full cursor-pointer hover:bg-red-500 hover:text-white px-4 py-2 w-full flex items-center justify-start gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
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
                        <div id="section1"
                                class="section w-full h-full  relative max-full overflow-y-auto scrollbar-hide ">
                                <div class="flex flex-col gap-4 p-4">
                                        <h2 class="text-2xl font-semibold text-slate-700">Bienvenue <span
                                                        class="text-[#f77313]"><?= htmlspecialchars($data['nom'] . ' ' . $data['prenom']) ?></span>
                                        </h2>
                                        <p class="text-xs text-justify text-slate-500 ">
                                                Voici les offres disponibles pour lesquelles vous pouvez passer des
                                                tests. <br>
                                                Sélectionnez une offre pour consulter les détails et commencer le QCM
                                                associé.
                                        </p>
                                </div>

                                <div class="flex justify-start items-center gap-4 flex-wrap mt-4 p-4">
                                        <?php if ($offre_candidats): ?>
                                                <?php foreach ($offre_candidats as $offre_candidat): ?>
                                                        <?php
                                                        $entreprise_nom = strtoupper(substr($offre_candidat['entreprise'], 0, 1));
                                                        $hash = md5($entreprise_nom);
                                                        $color = '#' . substr($hash, 0, 6);
                                                        ?>
                                                        <div
                                                                class="p-4 w-90 h-74 bg-white rounded-md flex flex-col justify-start gap-4 relative">
                                                                <div class="flex justify-between items-center">
                                                                        <span style="background-color: <?= $color ?>;"
                                                                                class="w-10 h-10 flex justify-center items-center rounded-full text-white text-lg font-semibold">
                                                                                <?= $entreprise_nom ?>
                                                                        </span>

                                                                        <a href="offre/?id=<?= $offre_candidat["id"] ?>"
                                                                                class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#00134d]/10">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="2em"
                                                                                        height="2em" viewBox="0 0 24 24">
                                                                                        <path fill="none" stroke="#6B7280"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                                d="m10 7l5 5l-5 5" />
                                                                                </svg>
                                                                        </a>
                                                                </div>

                                                                <div>
                                                                        <h3 class="text-slate-700 font-semibold"> <span
                                                                                        class="text-[#f77313]">
                                                                                        <?= htmlspecialchars($offre_candidat["entreprise"]) ?></span>
                                                                        </h3>
                                                                        <h3 class="text-slate-700 font-semibold">Poste :
                                                                                <?= htmlspecialchars($offre_candidat["titre"]) ?></h3>
                                                                        <ol class="mt-2 flex flex-col gap-1">
                                                                                <li class="text-sm text-start text-slate-500 ">
                                                                                        <span class="text-[#00134d] font-semibold">Statut
                                                                                                :</span>
                                                                                        <span class="<?php
                                                                                        if ($offre_candidat["statut"] == "ouvert") {
                                                                                                echo "text-green-500";
                                                                                        } elseif ($offre_candidat["statut"] == "ferme") {
                                                                                                echo "text-red-500";
                                                                                        }
                                                                                        ?>"><?= htmlspecialchars($offre_candidat["statut"]) ?>
                                                                                        </span>
                                                                                </li>
                                                                                <li class="text-sm text-start text-slate-500 ">
                                                                                        <span class="text-[#00134d] font-semibold">Exigences
                                                                                                : </span>
                                                                                        <?= htmlspecialchars($offre_candidat["competence"]) ?>
                                                                                </li>
                                                                                <li class="text-sm text-start text-slate-500 ">
                                                                                        <span class="text-[#00134d] font-semibold">Date
                                                                                                limite :</span>
                                                                                        <?= htmlspecialchars($offre_candidat["date_limite"]) ?>
                                                                                </li>
                                                                                <li class="text-sm text-start text-slate-500 ">
                                                                                        <span class="text-[#00134d] font-semibold">Expérience
                                                                                                :</span>
                                                                                        <?= htmlspecialchars($offre_candidat["experience"]) ?>
                                                                                </li>
                                                                                <li class="text-sm text-start text-slate-500 ">
                                                                                        <span class="text-[#00134d] font-semibold">Localisation
                                                                                                :</span>
                                                                                        <?= htmlspecialchars($offre_candidat["lieu"]) ?>
                                                                                </li>
                                                                        </ol>
                                                                </div>

                                                                <a href="passer_le_test/?id=<?= htmlspecialchars($offre_candidat["id"]) ?>"
                                                                        class="shadow-md bg-[#00134d] w-full h-10 flex justify-center items-center  text-white cursor-pointer hover:bg-[#00134d]/90 absolute bottom-0 left-0 right-0 rounded-b-lg">
                                                                        Passer le test
                                                                </a>
                                                        </div>
                                                <?php endforeach ?>
                                        <?php else: ?>
                                                <div class="w-full flex justify-center items-center mt-12">
                                                        <h2 class="text-xl font-semibold text-slate-700">Aucune offre disponible
                                                        </h2>
                                                </div>
                                        <?php endif ?>
                                </div>

                        </div>

                        <!-- /*PROFIL*/ -->
                        <div id="section4"
                                class="section h-full rounded-md flex flex-col gap-4 w-[80%] bg-white p-4 hidden">
                                <div id="err_msg"></div>
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <div class="flex justify-between items-center w-full">
                                                <h2 class="text-xl font-semibold text-slate-700">Profil du candidat</h2>
                                                <button id="edition_profil"
                                                        class="shadow-md bg-white w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]/10"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                                height="1.5em" viewBox="0 0 20 20">
                                                                <path fill="#6B7280"
                                                                        d="M12.92 2.873a2.975 2.975 0 0 1 4.207 4.207l-.669.669l-4.207-4.207zM11.544 4.25l-7.999 7.999a2.44 2.44 0 0 0-.655 1.194l-.878 3.95a.5.5 0 0 0 .597.597l3.926-.873a2.5 2.5 0 0 0 1.234-.678l7.982-7.982z" />
                                                        </svg></button>
                                        </div>
                                </div>
                                <form id="mettre_a_jour" class="w-full flex flex-col justify-center items-center"
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
                                                                        <?php echo strtoupper(substr($data['prenom'], 0, 1)) . strtoupper(substr($data['nom'], 0, 1)) ?></span>
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
                                                        <input id="nom" name="nom"
                                                                value="<?= htmlspecialchars($data['nom']) ?>"
                                                                class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-700"
                                                                type="text" placeholder="Nom ... ">
                                                        <input id="prenom" name="prenom"
                                                                value="<?= htmlspecialchars($data['prenom']) ?>"
                                                                class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-700"
                                                                type="text" placeholder="Nom ... ">
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

                                                        <select name="sexe" id="sexe"
                                                                class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-700">
                                                                <option value="">-- Votre sexe --</option>
                                                                <option value="homme" <?php if ($data['sexe'] === 'homme')
                                                                        echo "selected"; ?>> Homme</option>
                                                                <option value="femme" <?php if ($data['sexe'] === 'femme')
                                                                        echo "selected"; ?>> Femme</option>
                                                                <option value="autre" <?php if ($data['sexe'] === 'autre')
                                                                        echo "selected"; ?>> Autre</option>
                                                        </select>
                                                        <input id="date" name="date"
                                                                value="<?= !empty($data['date_de_naissance']) ? date('Y-m-d', strtotime($data['date_de_naissance'])) : '' ?>"
                                                                class="border border-2 p-1 w-146 h-10 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-700"
                                                                type="date">
                                                </ul>
                                        </div>
                                        <div id="button_mettre_a_jour"
                                                class="w-full flex flex-col justify-center items-center mt-6 hidden">
                                                <button type="submit"
                                                        class="shadow-md w-40 h-10 flex justify-center items-center rounded-md text-white cursor-pointer bg-[#00134d] hover:opacity-90">Mettre
                                                        à jour</button>
                                        </div>
                                </form>
                        </div>

                        <!-- /*CONSEIL*/ -->
                        <div id=section3
                                class="section h-full rounded-md flex flex-col justify-start items-start gap-4 w-[80%] bg-white p-4 relative max-full overflow-y-auto scrollbar-hide hidden">
                                <div class="flex flex-col gap-1 justify-start items-start">
                                        <div class="flex justify-between items-center w-full">
                                                <h2 class="text-xl font-semibold text-slate-700">Conseils pour le
                                                        candidat</h2>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Préparation technique
                                                </h2>
                                                <ul class="flex flex-col  gap-1 mt-4">
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Assurez-vous d’avoir une bonne connexion Internet.
                                                        </li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Utilisez un ordinateur avec une caméra et un micro
                                                                fonctionnels (si demandé par le recruteur).</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Vérifiez que votre batterie est chargée ou
                                                                branchez votre appareil.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Fermez toutes les autres applications et onglets
                                                                pour éviter les distractions.</li>

                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Conditions du test</h2>
                                                <ul class="flex flex-col  gap-1 mt-4">
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Vous devez être seul dans la pièce pendant le
                                                                test.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Évitez toute tentative de fraude : les mouvements
                                                                suspects, l’ouverture d’autres onglets ou la présence de
                                                                plusieurs visages peuvent être détectés.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Certaines offres imposent un temps limité pour
                                                                répondre. Surveillez bien le chronomètre.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Vous ne pouvez pas copier/coller les questions ou
                                                                réponses.</li>
                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Stratégie de réponse
                                                </h2>
                                                <ul class="flex flex-col  gap-1 mt-4">
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Lisez attentivement chaque question avant de
                                                                répondre.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Gérez votre temps : ne passez pas trop longtemps
                                                                sur une seule question.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Pour les questions à choix multiples (checkbox),
                                                                sélectionnez toutes les réponses correctes.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Pour les questions à choix unique (radio),
                                                                choisissez la meilleure réponse.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Si vous n’êtes pas sûr, répondez quand même
                                                                (aucune pénalité pour réponse fausse si le recruteur l’a
                                                                défini ainsi).</li>
                                                </ul>
                                        </div>

                                        <div class="flex flex-col items-start justify-start mt-6">
                                                <h2 class="text-xl font-semibold text-slate-700">Attitude et état
                                                        d’esprit</h2>
                                                <ul class="flex flex-col  gap-1 mt-4">
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Installez-vous dans un environnement calme et
                                                                confortable.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Prenez une grande inspiration avant de commencer.
                                                        </li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>Restez concentré, confiant et positif.</li>
                                                        <li
                                                                class="flex justify-start items-center gap-1 text-slate-500 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="1em"
                                                                        height="1em" viewBox="0 0 48 48">
                                                                        <path fill="#6B7280" stroke="#6B7280"
                                                                                stroke-width="4"
                                                                                d="M24 33a9 9 0 1 0 0-18a9 9 0 0 0 0 18Z" />
                                                                </svg>N’oubliez pas : ce test est aussi l’occasion de
                                                                montrer vos compétences et votre sérieux.</li>
                                                </ul>
                                        </div>




                                </div>
                        </div>

                        <!-- /*RESULTAT*/ -->
                        <div id="section2"
                                class="section w-full h-full  relative max-full overflow-y-auto scrollbar-hide ">
                                <div class="w-full flex justify-start items-center gap-4 flex-wrap mt-4 p-4">
                                        <div class="flex flex-col gap-4 w-full">
                                                <h2 class="text-2xl font-semibold text-slate-700">Historiques de vos
                                                        tests
                                                </h2>
                                                <div class="relative max-full overflow-y-auto scrollbar-hide">
                                                        <table class="min-w-full border border-gray-200 rounded-lg">

                                                                <?php if ($data_resultats): ?>
                                                                        <?php include("../components/thead_r.php") ?>
                                                                        <tbody class="">
                                                                                <?php foreach ($data_resultats as $resultat): ?>
                                                                                        <tr class="hover:bg-gray-50">
                                                                                                <td
                                                                                                        class="text-center px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                                        <?= htmlspecialchars($resultat['titre_test']) ?>
                                                                                                </td>
                                                                                                <td
                                                                                                        class="text-center px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                                        <?= htmlspecialchars($resultat['nom_entreprise']) ?>
                                                                                                </td>
                                                                                                <td
                                                                                                        class="text-center px-4 py-2 text-sm font-semibold <?= htmlspecialchars($resultat['statut']) === 'fail' ? 'text-red-500' : 'text-green-500' ?>  border-r border-gray-200 text-center">
                                                                                                        <?= htmlspecialchars($resultat['score']) ?>
                                                                                                        / 20 </td>
                                                                                                <?php if (htmlspecialchars($resultat['statut']) === 'fail'): ?>
                                                                                                        <td
                                                                                                                class="text-center px-4 py-2 text-sm text-red-500 font-semibold border-r border-gray-200">
                                                                                                                Echoué</td>
                                                                                                <?php else: ?>
                                                                                                        <td
                                                                                                                class="text-center px-4 py-2 text-sm text-green-500 font-semibold border-r border-gray-200">
                                                                                                                Admis</td>
                                                                                                <?php endif ?>
                                                                                                <td
                                                                                                        class="text-center px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                                        <?= htmlspecialchars($resultat['date_creation']) ?>
                                                                                                </td>
                                                                                                <?php if (htmlspecialchars($resultat['statut']) === 'fail'): ?>
                                                                                                        <td
                                                                                                                class="text-center px-4 py-2 text-sm text-slate-500 font-semibold border-r border-gray-200">
                                                                                                                -</td>
                                                                                                <?php else: ?>
                                                                                                        <td
                                                                                                                class="flex justify-center items-center px-4 py-2 text-sm text-slate-500 border-r border-gray-200">
                                                                                                                <a href="../"
                                                                                                                        class="bg-[#00134d] rounded-md hover:opacity-90 px-4 py-2 w-40 flex items-center justify-center gap-3 text-white text-sm">
                                                                                                                        <span>Postuler</span>
                                                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                                                width="1.5em"
                                                                                                                                height="1.5em"
                                                                                                                                viewBox="0 0 24 24">
                                                                                                                                <path fill="#fff"
                                                                                                                                        d="M18.844 13.483c1.208-.6 1.208-2.367 0-2.966L6.552 4.416c-1.228-.61-2.458.493-2.285 1.72l.54 3.829a1.64 1.64 0 0 0 1.128 1.342c.16.05.55.133 1.012.227c.636.13 4.39.466 4.39.466s-3.754.337-4.39.466c-.461.094-.851.177-1.012.227a1.64 1.64 0 0 0-1.128 1.342l-.54 3.83c-.173 1.226 1.057 2.329 2.285 1.72z" />
                                                                                                                        </svg>
                                                                                                                </a>
                                                                                                        </td>
                                                                                                <?php endif ?>
                                                                                        </tr>
                                                                                <?php endforeach ?>
                                                                        </tbody>
                                                                <?php else: ?>

                                                                        <div
                                                                                class="w-full flex justify-center items-center mt-12">

                                                                                <h2
                                                                                        class="text-xl font-semibold text-slate-700">
                                                                                        Aucun resultat disponible</h2>
                                                                        </div>
                                                                <?php endif ?>
                                                        </table>
                                                </div>
                                        </div>
                                </div>
                        </div>

                </div>
        </main>

        <script src="../js/switch.js"></script>
        <script src="../js/image.js"></script>
        <script src="../js/deconnexion.js"></script>
        <script src="../js/candidat_profil.js"></script>
</body>

</html>