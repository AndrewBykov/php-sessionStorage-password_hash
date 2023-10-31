const res = document.querySelector('.error')
document.querySelector('#btn-registr').addEventListener('click', saveInfoUser);

    function saveInfoUser() {
        const login = document.querySelector('#login').value;
        const password = document.querySelector('#password').value;
        const password_repeat = document.querySelector('#password-repeat').value;
    
        sessionStorage.setItem('login', login);
        sessionStorage.setItem('pass', password);
        sessionStorage.setItem('pass_repeat', password_repeat);
    
        
    }

    function seeInfoUser() {
        const login = document.querySelector('#login').value;
        const password = document.querySelector('#password').value;
        const password_repeat = document.querySelector('#password-repeat').value;
        
        const login1 = sessionStorage.getItem('login', login);
        const password1 = sessionStorage.getItem('pass', password);
        const password_repeat1 = sessionStorage.getItem('pass_repeat', password_repeat);
    
        document.querySelector('#login').value = login1;
        document.querySelector('#password').value = password1;
        document.querySelector('#password-repeat').value = password_repeat1;
    }

    seeInfoUser()

    // if(res.textContent === 'Регистрация прошла успешно') {
    //     sessionStorage.removeItem('login')
    //     sessionStorage.removeItem('pass')
    //     sessionStorage.removeItem('pass_repeat')
    // }