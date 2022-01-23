

// import { createClient } from '@supabase/supabase-js'

// const supabaseUrl = 'https://zefpahzcyotbxgfbvqai.supabase.co'
// const supabaseKey = process.env.SUPABASE_KEY
// const supabase = createClient(supabaseUrl, supabaseKey)

const { createClient } = supabase
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

          const { error } = await supabase.from('entries').insert([submision], { returning: 'minimal'})

          if (error) {
              alert('There was an error please try again')
          } else {
              alert('Thanks for contacting us')
          }

          formInputs.forEach(element => element.value = '')

      })

