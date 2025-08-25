const generateQCM = document.querySelector('#generateQCM');
const form = document.getElementById("formQCM");

generateQCM.addEventListener('click', () => {
        const nbQuestions = document.getElementById("nbQuestions").value;

        // reset formulaire avant de regénérer
        form.innerHTML = "";

        for (let i = 1; i <= nbQuestions; i++) {
                // conteneur question
                let divQ = document.createElement("div");
                divQ.style.marginBottom = "20px";

                // label question
                let labelQ = document.createElement("p");
                labelQ.textContent = "Question " + i + " :";
                labelQ.className = "text-slate-500 text-xs my-2"; // ================================

                // input texte question
                let inputQ = document.createElement("input");
                inputQ.type = "text";
                inputQ.name = "question_" + i;
                inputQ.placeholder = "Texte de la question " + i;
                inputQ.className = "border border-2 p-1 w-100 outline-none rounded-md border-[#001436] placeholder:text-sm"; // ===================

                // type de réponse (radio ou checkbox)
                let selectType = document.createElement("select");
                selectType.name = "type_" + i;
                selectType.className = "border border-2 p-1 w-100 outline-none rounded-md border-[#001436] placeholder:text-sm"; // ============
                let opt1 = new Option("Choix unique (radio)", "radio");
                let opt2 = new Option("Choix multiple (checkbox)", "checkbox");
                selectType.add(opt1);
                selectType.add(opt2);

                // bouton ajouter réponse
                let btnAdd = document.createElement("button");
                btnAdd.type = "button";
                btnAdd.innerText = "Ajouter réponse";
                btnAdd.className = "cursor-pointer text-sm hover:opacity-90 flex justify-between items-center text-white bg-[#00134d] p-2 rounded-md"; // ============

                btnAdd.onclick = function () {
                        let type = selectType.value;

                        let inputR = document.createElement("input");
                        inputR.type = type;
                        inputR.name = "rep_" + i;

                        let textR = document.createElement("input");
                        textR.type = "text";
                        textR.placeholder = "Réponse";
                        textR.className = "border border-2 p-1 w-100 outline-none rounded-md border-[#001436] placeholder:text-xs";

                        divQ.appendChild(document.createElement("br"));
                        divQ.appendChild(inputR);
                        divQ.appendChild(textR);
                };

                let container = document.createElement("div");
                container.className = "flex justify-start items-center gap-1 w-full";
                // ajouter au conteneur question
                divQ.appendChild(labelQ);
                divQ.appendChild(inputQ);
                divQ.appendChild(document.createElement("br"));
                container.appendChild(selectType)
                container.appendChild(btnAdd)
                divQ.appendChild(container)
                // insérer dans le formulaire
                form.appendChild(divQ);
        }
});