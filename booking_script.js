
const scriptURL = 
    'https://script.google.com/macros/s/AKfycbwAjNqIAiVCSwc4LdPngD_FIjnMseDZTqilFrR8l5EHwe8lK1cEViK0RC-1Zu44KSC_1A/exec'
    const form = document.forms['hello-sheet']
          
    form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => alert("บันทึกข้อมูลเรียบร้อยแล้ว.."))
        .catch(error => console.error('Error!', error.message))
            })