const generateQCM = document.querySelector('#generateQCM');
const form = document.getElementById("formQCM");
const dynamic_create = document.querySelector('#dynamic_create');

generateQCM.addEventListener('click', () => {
        const nbQuestions = document.getElementById("nbQuestions").value;

        // reset formulaire avant de regénérer
        dynamic_create.innerHTML = "";

        for (let i = 1; i <= nbQuestions; i++) {
                // conteneur question
                let divQ = document.createElement("div");
                divQ.className = "flex flex-col justify-start items-start gap-3 mb-4 p-3 border border-slate-200 rounded-md shadow-sm bg-white w-160";
                divQ.dataset.questionId = i; // 🔑 identifiant unique question

                // label question
                let labelQ = document.createElement("p");
                labelQ.textContent = "Question " + i + " :";
                labelQ.className = "text-md font-semibold text-slate-700";

                // input texte question
                let inputQ = document.createElement("input");
                inputQ.type = "text";
                inputQ.dataset.role = "question-text"; // 🔑 repérage facile
                inputQ.placeholder = "Texte de la question " + i;
                inputQ.className = "border border-2 p-1 w-150 outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500";
                inputQ.required = true

                // type de réponse (radio ou checkbox)
                let selectType = document.createElement("select");
                selectType.dataset.role = "question-type"; // 🔑 repérage facile
                selectType.className = "border border-2 p-1 w-150 outline-none rounded-md border-slate-500 text-sm text-slate-500";
                let opt1 = new Option("Choix unique (radio)", "radio");
                let opt2 = new Option("Choix multiple (checkbox)", "checkbox");
                selectType.add(opt1);
                selectType.add(opt2);

                // conteneur des réponses
                let divReponses = document.createElement("div");
                divReponses.className = "flex flex-col gap-2 w-150 mt-2";
                divReponses.dataset.role = "answers"; // 🔑 conteneur réponses lié à la question

                // bouton ajouter réponse
                let btnAdd = document.createElement("button");
                btnAdd.type = "button";
                btnAdd.innerText = "Ajouter réponse";
                btnAdd.className = "px-3 py-2 rounded-md text-white bg-[#001436] hover:bg-[#00B8D9] text-sm";

                btnAdd.onclick = function () {
                        let type = selectType.value;

                        // conteneur réponse
                        let divR = document.createElement("div");
                        divR.className = "flex items-center gap-2";
                        divR.dataset.role = "answer"; // 🔑 repérage facile

                        // input bouton (radio/checkbox)
                        let inputR = document.createElement("input");
                        inputR.type = type;
                        inputR.dataset.role = "answer-choice";
                        inputR.name = "reponseVrai"

                        // texte réponse
                        let textR = document.createElement("input");
                        textR.type = "text";
                        textR.dataset.role = "answer-text";
                        textR.placeholder = "Réponse possible";
                        textR.className = "border border-2 p-1 w-full outline-none rounded-md border-slate-500 placeholder:text-sm text-slate-500";
                        textR.required = true
                        divR.appendChild(inputR);
                        divR.appendChild(textR);
                        divReponses.appendChild(divR);
                };

                // append tout au bloc question
                divQ.appendChild(labelQ);
                divQ.appendChild(inputQ);
                divQ.appendChild(selectType);
                divQ.appendChild(btnAdd);
                divQ.appendChild(divReponses);
                dynamic_create.appendChild(divQ)

        }

        // const bouton = document.createElement('button');

        // bouton.id = 'creer_un_test';
        // bouton.textContent = 'Créer le test';
        // bouton.className = 'shadow-md bg-[#f77313] mt-8 w-60 h-10 flex justify-center items-center rounded-md text-white cursor-pointer hover:bg-[#001436]';
        // form.appendChild(bouton);
});
