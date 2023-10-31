// GenerationPass
{
    document.querySelector('#generation-pass').addEventListener('click', answearPass)

    function generatePassword() {
        const pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(){}[\];.,\/:<>??])[a-zA-Z\d!@#$%^&*(){}[\];.,\/:<>?]{6,}$/;
        const characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*(){}[];.,/:<>?';
        let password = '';
      
        while (!pattern.test(password)) {
          password = '';
          for (let i = 0; i < 6; i++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            password += characters[randomIndex];
          }
        }
      
        return password;
      }
    

    function answearPass() {
        const passwordInput = document.querySelector('#password')
        const password = generatePassword()

        passwordInput.value = password;
    }



    // wathch password
    {
        const password = document.querySelector('#password')
        const watchPass = document.querySelector('#watch-pass')

        watchPass.addEventListener('click', () => {
            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }
        })
    }
}



