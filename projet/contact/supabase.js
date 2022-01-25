let hidden = document.querySelector(".hidden");
let envoi = document.querySelector("#envoi");


const { createClient } = supabase;
      supabase = createClient("https://zefpahzcyotbxgfbvqai.supabase.co", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyNTk3NjM2LCJleHAiOjE5NTgxNzM2MzZ9.yJCJFIl2RW3gKr7HHNFR0X6uW088zwBLogYH-6hEnJU");
      
      const form = document.querySelector('#contact-form')
      form.addEventListener('submit', async (event) => {
          event.preventDefault()

          const formInputs = form.querySelectorAll('input, textarea')

          let submision = {}

          formInputs.forEach(element => {
            const { value, name } = element
            if (value) {
                submision[name] = value
            }
          })

          const { error, data } = await supabase.from('formulaire').insert([submision], { returning: 'minimal'})
          console.log({error, data});

          if (error) {
              alert("Une erreur est survenue,le formulaire n'apaspu être envoyé :(" )
          } else {
            hidden.style.display = 'block';
            hidden.style.color = '#C6B700';
            hidden.style.fontWeight = 'bold';
            hidden.style.margin = '10px';
          }

          formInputs.forEach(element => element.value = '')

      })








