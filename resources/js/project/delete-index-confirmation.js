const formEls = documuent.queryselectorAll("form.form-destroyer")

formEls.forEach((formEl)=> {
    formEl.addEventListener("submit", function(event){
        event.preventDefault()
        const userChoice = window.confirm("Sei sicuro di voler eliminare il progetto" + this.getAttribute("data-project-name") + "?")
        if (userChoice){
            this.submit();
        }
    })
});
