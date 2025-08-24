<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <title>choix - SkillGouard</title>
        <link rel="shortcut icon" href="../SkillGuard Social Media Assets.svg" type="image/x-icon">

</head>

<body class="bg-[#f5feff] flex justify-center items-center px-[20%]">
        <div class="flex flex-col justify-center items-center">
                
                <section class="w-full flex flex-col justify-center items-center">
                        <div class="w-80"><img src="../SkillGuard Flat Shield Logo.svg" alt="Skillguard mascot choix"></div>
                        <div id="err_msg"></div>
                        <div class="w-full">
                                <h2 class="text-2xl font-semibold text-slate-700 text-center">Connexion</h2>
                                <p class="text-sm text-slate-500 w-full text-center">Connectez-vous pour accéder à votre
                                        espace
                                        personnel</p>
                        </div>

                        <div class="flex gap-4 justify-center items-center  w-full">
                                <form id="connexion_form" method="post"
                                        class="rounded-md flex flex-col gap-6  bg-white p-4 w-full">
                                        <input id="email" type="email" name="email"
                                                class="w-full border border-2  p-2 text-sm outline-none rounded-md border-[#001436] placeholder:text-sm placeholder:text-slate-500"
                                                placeholder="Adresse e-mail" autocomplete="email" required>

                                        <input id="password" type="password" name="password"
                                                class="border border-2  p-2  text-sm outline-none rounded-md border-[#001436] placeholder:text-sm placeholder:text-slate-500"
                                                placeholder="Mot de passe (min. 8 caractères)" minlength="8"
                                                autocomplete="new-password" required>

                                        <div class="flex items-center gap-2">
                                                <input id="seSouvenir" class="border border-2  p-2  outline-none rounded-md border-[#001436] accent-[#00B8D9]"
                                                        type="checkbox" name="seSouvenir" value="1"  id="seSouvenir">
                                                <label for="seSouvenir" class="text-sm text-slate-600">Se souvenir de
                                                        moi</label>
                                        </div>
                                        <button type="submit" id="connexion_button"
                                                class="bg-[#00B8D9] mt-2 px-2 py-2 w-full rounded-full cursor-pointer hover:bg-[#001436] hover:text-white text-white">Se
                                                connecter</button>
                                </form>
                        </div>
                        <div class="flex justify-center items-center gap-4 mt-2">
                                <a href=""
                                        class="bg-[#00B8D9] w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                                viewBox="0 0 24 24">
                                                <path fill="#fff"
                                                        d="M20.855 10.361a.2.2 0 0 0-.194-.161H12.2a.2.2 0 0 0-.2.2v3.2c0 .11.09.2.2.2h4.886A5.398 5.398 0 0 1 6.6 12A5.4 5.4 0 0 1 12 6.6a5.37 5.37 0 0 1 3.44 1.245a.205.205 0 0 0 .276-.01l2.266-2.267a.197.197 0 0 0-.007-.286A8.95 8.95 0 0 0 12 3a9 9 0 1 0 9 9c0-.547-.051-1.113-.145-1.639" />
                                        </svg>
                                </a>
                                <a href=""
                                        class="bg-[#00B8D9] w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                                viewBox="0 0 24 24">
                                                <path fill="#fff"
                                                        d="M4.75 1.875a2.125 2.125 0 1 0 0 4.25a2.125 2.125 0 0 0 0-4.25m-2 6A.125.125 0 0 0 2.625 8v13c0 .069.056.125.125.125h4A.125.125 0 0 0 6.875 21V8a.125.125 0 0 0-.125-.125zm6.5 0A.125.125 0 0 0 9.125 8v13c0 .069.056.125.125.125h4a.125.125 0 0 0 .125-.125v-7a1.875 1.875 0 1 1 3.75 0v7c0 .069.056.125.125.125h4a.125.125 0 0 0 .125-.125v-8.62c0-2.427-2.11-4.325-4.525-4.106a7.2 7.2 0 0 0-2.169.548l-1.306.56V8a.125.125 0 0 0-.125-.125z" />
                                        </svg>
                                </a>
                                <a href=""
                                        class="bg-[#00B8D9] w-10 h-10 flex justify-center items-center rounded-full text-white cursor-pointer hover:bg-[#001436]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em"
                                                viewBox="0 0 24 24">
                                                <path fill="#fff"
                                                        d="M12 0c-.918 0-1.833.12-2.72.355L4.07 1.748a2.64 2.64 0 0 0-1.96 2.547v9.115a7.91 7.91 0 0 0 3.552 6.606l5.697 3.765a1.32 1.32 0 0 0 1.467-.008l5.572-3.752a7.93 7.93 0 0 0 3.493-6.57V4.295a2.64 2.64 0 0 0-1.961-2.547L14.72.355A10.6 10.6 0 0 0 12 0M7.383 5.4h9.228c.726 0 1.32.594 1.32 1.32c0 .734-.587 1.32-1.32 1.32H7.383c-.727 0-1.32-.593-1.32-1.32c0-.726.593-1.32 1.32-1.32M7.38 9.357h3.299c.727 0 1.32.595 1.32 1.32a1.32 1.32 0 0 1-1.318 1.32H7.38c-.726 0-1.32-.592-1.32-1.32c0-.725.594-1.32 1.32-1.32m0 3.96c.727 0 1.32.593 1.32 1.32s-.586 1.318-1.32 1.318c-.726 0-1.32-.592-1.32-1.318s.594-1.32 1.32-1.32" />
                                        </svg>
                                </a>
                        </div>
                        <div class="mt-6">
                                <p class="text-sm text-slate-500 text-center">Vous n'avez pas de compte ? <br>
                                        <a href="../inscription-candidat/" class="underline text-[#00134d]">Inscription
                                                candidat</a>/
                                        <a href="../inscription-recruteur/" class="underline text-[#00134d]">Inscription
                                                recruteur</a>/
                                        <a href="../recuperation/" class="underline text-[#00134d]">Mot de passe oublié
                                                ?</a>
                                </p>
                        </div>
                </section>
        </div>
        <script src="../js/connexion.js"></script>
</body>

</html>