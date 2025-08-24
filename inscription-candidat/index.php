<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>Inscription - candidat - SkillGouard</title>
        <link rel="shortcut icon" href="../SkillGuard Social Media Assets.svg" type="image/x-icon">

</head>

<body class="bg-[#f5feff] flex justify-center items-center w-full h-screen px-[20%]">
        <div class="flex flex-col justify-center items-center">
                <div id="err_msg"></div>
                <section class="w-[80%] flex justify-center items-center">
                        <div
                                class="w-[50%] h-[600px] bg-[#001436] p-4 rounded-tl-md rounded-bl-md flex flex-col justify-between">
                                <p class="text-sm text-white text-start">Créez votre compte et accédez aux tests en
                                        ligne.
                                        Montrez vos compétences et obtenez un score fiable validé par notre système de
                                        surveillance intelligente.</p>
                                <img class="w-full" src="../SkillGuard Student Robot Mascot.svg"
                                        alt="SkillGuard Student Robot Mascot">
                                <p class="text-sm text-slate-500 text-center mt-2">Vous avez déjà un compte ?
                                        <a href="../connexion/" class="underline text-white">Se connecter</a>
                                </p>

                        </div>
                        <div class="w-[50%] h-[600px] bg-[#001436] p-4 rounded-tr-md rounded-br-md bg-white">
                                <h2 class="text-2xl font-semibold text-slate-900 text-center mb-4">Inscription Candidat
                                </h2>
                                <form method="POST" class="flex flex-col gap-6" id="inscription_candidat_form">

                                        <input id="nom" type="text" name="nom"
                                                class="border border-2  p-2 text-sm outline-none rounded-md border-[#001436] placeholder:text-sm placeholder:text-slate-500"
                                                placeholder="Nom" autocomplete="name" required>

                                        <input id="prenom" type="text" name="prenom"
                                                class="border border-2  p-2 text-sm outline-none rounded-md border-[#001436] placeholder:text-sm placeholder:text-slate-500"
                                                placeholder="Prénom" autocomplete="name" required>

                                        <input id="email" type="email" name="email"
                                                class="border border-2  p-2 text-sm outline-none rounded-md border-[#001436] placeholder:text-sm placeholder:text-slate-500"
                                                placeholder="Adresse e-mail" autocomplete="email" required>

                                        <input id="password" type="password" name="password"
                                                class="border border-2  p-2  text-sm outline-none rounded-md border-[#001436] placeholder:text-sm placeholder:text-slate-500"
                                                placeholder="Mot de passe (min. 8 caractères)" minlength="8"
                                                autocomplete="new-password" required>

                                        <input id="conf_password" type="password" name="password_confirm"
                                                class="border border-2  p-2 text-sm outline-none rounded-md border-[#001436] placeholder:text-sm placeholder:text-slate-500"
                                                placeholder="Confirmez le mot de passe" minlength="8"
                                                autocomplete="new-password" required>

                                        <select id="genre" name="genre" required
                                                class="text-sm  border border-2  p-2  outline-none rounded-md border-[#001436] placeholder:text-sm ">
                                                <option value="">Choisir votre sexe</option>
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>
                                                <option value="autre">Autre</option>
                                        </select>

                                        <div>
                                                <input class="border border-2  p-2  outline-none rounded-md border-[#001436] accent-[#00B8D9]"
                                                        type="checkbox" name="consent" value="1" required id="consent">
                                                <label for="consent" class="text-sm text-slate-600">J’accepte que mes
                                                        données
                                                        soient utilisées conformément à la <a href=""
                                                                class="text-[#001436] underline">Politique de
                                                                confidentialité</a> et aux
                                                        <a href="" class="text-[#001436] underline">conditions
                                                                d'utilisation</a></label>
                                        </div>

                                        <button type="submit" id="creer_un_compte_candidat" disabled
                                                class="mt-6 bg-[#00B8D9] px-2 py-2 w-full rounded-full text-white 
                                                hover:bg-[#001436] hover:text-white 
                                                cursor-pointer
                                                disabled:bg-gray-400 disabled:text-gray-200 disabled:cursor-not-allowed">
                                                Créer mon compte
                                        </button>
                                </form>
                        </div>
                </section>
        </div>
        <script src="../js/inscription_candidat.js"></script>
</body>

</html>